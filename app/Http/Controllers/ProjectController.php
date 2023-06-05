<?php

namespace App\Http\Controllers;

use App\Models\Barang;
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

    public function dashboard(){
        return view('dashboard');
    }
    public function keluar(){
        return view('barangKeluar');
    }
    public function masuk(){
        return view('barangMasuk');
    }
    public function transaksi(){
        return view('dataTransaksi');
    }
    public function tambah(){
        return view('tambahBarang');
    }
    public function total(){
        return view('totalBarang');
    }

}
