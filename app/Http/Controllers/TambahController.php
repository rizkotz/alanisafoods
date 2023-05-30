<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = DB::table('order')->get();
        $jumlah = DB::table('order')->sum('total');


        return view ('order',[
            'order' => $order,
            'jumlah' => $jumlah,

        ]);
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
    public function store($id)
    {
        $produk =  DB::table('product')->where('id', $id)->first();

        DB::table('order')->insert([
            'id_produk' => $produk->id,
            'nama_produk' => $produk->nama,
            'Qty' => 1,
            'total' => $produk->price,
        ]);


        $updateProduk = DB::table('product')
              ->where('id', $id)
              ->update(['stok' => $produk->stok - 1 ]);


        return redirect('/order');
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

        $order =  DB::table('order')->where('id', $id)->first();
        $produk = DB::table('product')->where('id', $order->id_produk)->first();

        $updateStok = $produk->stok + 1;
        $updateProduk = DB::table('product')
              ->where('id', $order->id_produk)
              ->update(['stok' =>  $updateStok]);

        $deleted = DB::table('order')->where('id', $id)->delete();
        // dd($updateStok);
        return redirect('/order');
    }
}
