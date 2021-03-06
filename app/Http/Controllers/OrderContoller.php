<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Scalar\String_;

class OrderContoller extends Controller
{
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

        $total = self::calculate($request->input('academic_level'), $request->input('spacing'), $request->input('category'), $request->input('deadline'), $request->input('No_of_pages'), $request->input('no_of_slides'));
        $order->amount = $total;

        $order->save();
    }


    public static  function calculate($acd,$spac,$cate,$dead){

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

        return $total;
    }

}
