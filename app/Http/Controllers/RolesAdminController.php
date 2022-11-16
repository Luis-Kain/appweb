<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Http\Controllers\Controller;

class RolesAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("rolesAdmin");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $client = Client::all();
        
        return view('rolesAdmin',['client'=>$client ]);
        //return view('rolesAdmin', compact('client'));
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
        $nombre = $request->input('nombre');
        $RFC = $request->input('RFC');
        $description = $request->input('description');
        
        DB::update('update clients set 
        nombre= ?,
        RFC= ?,
        description= ? 
        where id = ?',[$nombre,$RFC,$description,$id]);

        $client = Client::all();
        
        return view('rolesAdmin',['client'=>$client ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete('delete from clients where id = ?',[$id]);
        
        $client = Client::all();
        
        return view('rolesAdmin',['client'=>$client ]);
    }

    public function redirect($id){

        $users = DB::select('select * from clients where id = ?', [$id]);

        return view("editClientCustomer",['users'=>$users]);
    }
}
