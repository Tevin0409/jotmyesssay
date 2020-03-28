<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Scalar\String_;
use Omnipay\Omnipay;
use App\Payment;

class OrderContoller extends Controller
{
    public static $gateway;
 
    public function __construct()
    {
        self::$gateway = Omnipay::create('PayPal_Rest');
        self::$gateway->setClientId('AYiL_vbHLBcHFHRYGTNoGMeWFaXxo7xH98KNDNhoBQR6basAEB2o69OZ5CVOco0aoN9m_2tG9wwwe9hj');
        self::$gateway->setSecret('EO6U1T8IU6ciDGHUtkrZkcQzybMzPDZQYvNIwop0O6zMRKTi2FTPeGOXSQtVyQJGWncw9owekNVNOHkb');
        self::$gateway->setTestMode(true); //set it to 'false' when go live
    }
 
    
    public static function charge($amount)
    {
        
            try {
                $response = self::$gateway->purchase(array(
                    'amount' =>$amount,
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
                    $payment = new Payment();
                    $payment->payment_id = $arr_body['id'];
                    $payment->payer_id = $arr_body['payer']['payer_info']['payer_id'];
                    $payment->payer_email = $arr_body['payer']['payer_info']['email'];
                    $payment->amount = $arr_body['transactions'][0]['amount']['total'];
                    $payment->currency = 'USD';
                    $payment->payment_status = $arr_body['state'];
                    $payment->save();
                }
         
                return $response->redirect('landing/index');
            } else {
                //return $response->getMessage();
                $response->redirect('landing/index');
            }
        } else {
            return 'Transaction is declined';
        }
    }
 
    public function payment_error()
    {
        return 'User is canceled the payment.';
    }
    
    
    
    
    public $order;
    /**
     * Display a listing of the resource.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view ('landing/order');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //creating an order
        $this->validate($request, [
            'topic' => 'required',
            'instructions' => 'required'
        ]);
        $order = new Order();
        $order->topic = $request->input('topic');
        $order->currency = $request->input('currency');
        $order->academic_level = $request->input('academic_level');
        $order->paper_type = $request->input('paper_type');
        $order->subject_area = $request->input('subject_area');
        $order->No_of_pages = $request->input('No_of_pages');
        $order->spacing = $request->input('spacing');
        $order->deadline = $request->input('deadline');
        $order->category = $request->input('category');
        $order->instructions = $request->input('instructions');
        $order->payment_status = $request->input('payment_status');
        $order->writters_id = $request->input('writters_id');
        $order->vip_support = $request->input('vip_support');
        $order->file = $request->input('file');
        $order->no_of_slides = $request->input('no_of_slides');

        Mail::raw($this->order, function ($message) {
            $message->from('jmyessays@gmail.com', 'Order')->to('tevinobai0409@gmail.com')->subject('Order')->setBody("Test body");
        });

        $total = self::calculate($request->input('academic_level'), $request->input('spacing'), $request->input('category'), $request->input('deadline'), $request->input('No_of_pages'), $request->input('no_of_slides'));
        $order->amount = $total;
        
       
        $order->save();

       
    }


    public static  function calculate($acd,$spac,$cate,$dead,$pages,$slides){

        $academic = array("Highschool"=>1.0,"Undergraduate"=>1.3,"Masters"=>1.6,"PhD"=>2.0);
        $spacing =array("Double"=>2.0,"Single"=>2.0);
        $category = array("Standard"=>1,"Premium"=>1.35,"Platinum"=>1.35);
        $deadline = array(
            "3HRS" => 45,
            "6HRS" => 40,
            "9HRS" => 35,
            "12HRS" => 30,
            "15HRS" => 29,
            "18HRS" => 27,
            "24HRS" => 25,
            "48HRS" => 24,
            "3days" => 23,
            "6days" => 21,
            "9days" => 18,
            "12days" => 15

        );
        $total = $academic[$acd] + $spacing[$spac]+$category[$cate]+$deadline[$dead];
        $total2 = $total*$pages*$slides;
        self::charge($total2);
        return $total2;
    }

}





