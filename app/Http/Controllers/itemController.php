<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class itemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataItem=DB::table('item')->get();
        return view('item.index', compact('dataItem'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('item.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->file('barang2')){
            $gambar=$request->file('barang2')->store('gambar' , 'public');
        }else{
            $gambar=null;
        }
        DB::table('item')->insert([
            'nama_item'=>$request->nama_item2,
            'unit'=>$request->unit2,
            'stok'=>$request->stok2,
            'harga_satuan'=>$request->harga_satuan2,
            'barang'=>$gambar
        ]);
        return redirect()->route('item.index');
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
        $editItem=DB::table('item')->where('id', $id)->first();
        return view('item.edit', compact('editItem'));
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
        DB::table('item')->where('id',$id)->update([
            'nama_item'=>$request->nama_item2,
            'unit'=>$request->unit2,
            'stok'=>$request->stok2,
            'harga_satuan'=>$request->harga_satuan2,
            'barang'=>$request->barang2
        ]);
        return redirect()->route('item.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('item')->where('id',$id)->delete();
        return redirect()->route('item.index');
    }
}
