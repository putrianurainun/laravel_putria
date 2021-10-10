<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class customerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataCustomer=DB::table('customer')->get();
        return view('customer.index', compact('dataCustomer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('customer')->insert([
            'nama'=>$request->nama2,
            'contact'=>$request->contact2,
            'email'=>$request->email2,
            'alamat'=>$request->alamat2,
            'diskon'=>$request->diskon2,
            'tipe_diskon'=>$request->tipe_diskon2,
            'ktp'=>$request->ktp2
        ]);
        return redirect()->route('customer.index');
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
        $editCustomer=DB::table('customer')->where('id_customer', $id)->first();
        return view('customer.edit', compact('editCustomer'));
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
        DB::table('customer')->where('id_customer',$id)->update([
            'nama'=>$request->nama2,
            'contact'=>$request->contact2,
            'email'=>$request->email2,
            'alamat'=>$request->alamat2,
            'diskon'=>$request->diskon2,
            'tipe_diskon'=>$request->tipe_diskon2,
            'ktp'=>$request->ktp2
        ]);
        return redirect()->route('customer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('customer')->where('id_customer',$id)->delete();
        return redirect()->route('customer.index');
    }
}
