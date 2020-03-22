<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderContoller extends Controller
{
    /**
     * Display a listing of the resource.
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
        $this->validate( $request,[
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
        $order->save();
        return redirect('landing/landing');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
