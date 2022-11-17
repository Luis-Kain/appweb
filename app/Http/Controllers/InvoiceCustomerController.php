<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Invoice;
use App\Http\Controllers\Controller;


class InvoiceCustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoice = Invoice::all();

        return view("ordersCustomer",['invoice'=>$invoice]);
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
        $query = DB::table('invoices')->insert([
            'customer_id'=>$request->input('customer_id'),
            'status_id'=>$request->input('status_id'),
            'total'=>$request->input('total'),
            'delivery_adress'=>$request->input('delivery_adress'),
        ]);

        $invoice = Invoice::all();
        
        return view('ordersCustomer',['invoice'=>$invoice ]);
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
        $customer_id = $request->input('customer_id');
        $status_id = $request->input('status_id');
        $total = $request->input('total');
        $delivery_adress = $request->input('delivery_adress');
        
        DB::update('update invoices set 
        customer_id= ?,
        status_id= ?,
        total= ?,
        delivery_adress= ?
        where id = ?',[$customer_id,$status_id,$total,$delivery_adress,$id]);

        $invoice = Invoice::all();
        
        return view('ordersCustomer',['invoice'=>$invoice]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete('delete from invoices where id = ?',[$id]);
        
        $invoice = Invoice::all();
        
        return view('ordersCustomer',['invoice'=>$invoice ]);
    }

    public function redirect($id){
        $invoices = DB::select('select * from invoices where id = ?', [$id]);

        return view("editOrderCustomer",['invoices'=>$invoices]);
    }
}
