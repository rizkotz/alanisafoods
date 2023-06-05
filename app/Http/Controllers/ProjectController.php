<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index1(){

    }
    public function create(){

    }
    public function store(Request $request){
        $Barang = new Barang;
        $Barang->nama = $request->nama;
        $Barang->merek = $request->merek;
        $Barang->jumlah = $request->jumlah;
        $Barang->jenis = $request->jenis;
        $Barang->keterangan = $request->keterangan;

        $Barang->save();
        return response()->json($Barang, 200);


    }
    public function show($id){

    }
    public function edit($id){

    }
    public function update(Request $request, $id){

    }
    public function destroy($id){

    }
//--------------------------------------------------------
    public function index(){
        return view('home');
    }
    public function mens(){
        return view('men');
    }
    public function women(){
        return view('women');
    }
    public function kids(){
        return view('kids');
    }
    public function explore(){
        return view('explore');
    }
    public function aboutUs(){
        return view('about');
    }
    public function contactUs(){
        return view('contact');
    }
    public function products(){
        return view('products');
    }
    public function cart(){
        return view('cart');
    }
    public function checkOut(){
        return view('checkOut');
    }
}
