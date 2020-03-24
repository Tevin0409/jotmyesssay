<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Omnipay\Omnipay;
use App\Payment;
 
class PaymentController extends Controller
{
 
    public $gateway;
 
    public function __construct()
    {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId('AYiL_vbHLBcHFHRYGTNoGMeWFaXxo7xH98KNDNhoBQR6basAEB2o69OZ5CVOco0aoN9m_2tG9wwwe9hj');
        $this->gateway->setSecret('EO6U1T8IU6ciDGHUtkrZkcQzybMzPDZQYvNIwop0O6zMRKTi2FTPeGOXSQtVyQJGWncw9owekNVNOHkb');
        $this->gateway->setTestMode(true); //set it to 'false' when go live
    }
 
    public function index()
    {
        return view('landing/payment');
    }
 
    public function charge(Request $request)
    {
        if($request->input('submit'))
        {
            try {
                $response = $this->gateway->purchase(array(
                    'amount' => $_POST['amount'],
                    'currency' => 'USD',
                    'returnUrl' => url('paymentsuccess'),
                    'cancelUrl' => url('paymenterror'),
                ))->send();
          
                if ($response->isRedirect()) {
                    $response->redirect(); // this will automatically forward the customer
                } else {
                    // not successful
                    return $response->getMessage();
                    error_log('something happened');
                    
                }
            } catch(Exception $e) {
                return $e->getMessage();
            }
        }
    }
 
    public function payment_success(Request $request)
    {
        // Once the transaction has been approved, we need to complete it.
        if ($request->input('paymentId') && $request->input('PayerID'))
        {
            $transaction = $this->gateway->completePurchase(array(
                'payer_id'             => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId'),
            ));
            $response = $transaction->send();
         
            if ($response->isSuccessful())
            {
                // The customer has successfully paid.
                $arr_body = $response->getData();
         
                // Insert transaction data into the database
                $isPaymentExist = Payment::where('payment_id', $arr_body['id'])->first();
         
                if(!$isPaymentExist)
                {
                    $payment = new Payment;
                    $payment->payment_id = $arr_body['id'];
                    $payment->payer_id = $arr_body['payer']['payer_info']['payer_id'];
                    $payment->payer_email = $arr_body['payer']['payer_info']['email'];
                    $payment->amount = $arr_body['transactions'][0]['amount']['total'];
                    $payment->currency = 'USD';
                    $payment->payment_status = $arr_body['state'];
                    $payment->save();
                }
         
                return "Payment is successful. Your transaction id is: ". $arr_body['id'];
            } else {
                return $response->getMessage();
            }
        } else {
            return 'Transaction is declined';
        }
    }
 
    public function payment_error()
    {
        return 'User is canceled the payment.';
    }
 
}