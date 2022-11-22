<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Material;
use App\Http\Controllers\Controller;

class MaterialCustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $material = Material::all();
        
        return view('materialCustomer',['material'=>$material ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $name = $request->input('name');
        $cost = $request->input('cost');
        $price = $request->input('price');
        $amount = $request->input('amount');

        DB::update('update materials set 
        name= ?,
        cost= ?,
        price= ?,
        amount= ? 
        where id = ?',[$name,$cost,$price,$amount,$id]);

        $material = Material::all();
        
        return view('materialCustomer',['material'=>$material]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete('delete from materials where id = ?',[$id]);
        
        $material = Material::all();
        
        return view('materialCustomer',['material'=>$material]);
    }

    public function redirect($id){

        $material = DB::select('select * from materials where id = ?', [$id]);

        return view("editMaterialCustomer",['material'=>$material]);
    }
}
