<?php

namespace App\Http\Controllers;
use App\Models\Produk;
class ClientProdukController extends Controller{
     function index(){
        $data['list_produk'] = Produk::all();
        return view('client.index', $data);  
    }
    function show(Produk $produk){
         $data['produk'] = $produk;
        return view('client.show', $data);
    }
  
    function filter(){
        $nama = request('nama');
        $stok = explode(",", request('stok'));              
        $data['harga_min'] = $harga_min = request('harga_min');  
        $data['harga_max'] = $harga_max = request('harga_max');
        //filter dengan nama yang harus sama persis
        //$data['list_produk'] = Produk::where('nama', $nama)->get();
        //filter nama dengan salah satu kata yang ada di produk
         //$data['list_produk'] = Produk::where('nama','like', "%$nama%")->get();
        //produk-produk dalam range tertentu       
        //$data['list_produk'] = Produk::whereIn('stok', $stok)->get();
        //filter untuk group where
        $data['list_produk'] = Produk::where('nama','like', "%$nama%")->whereBetween('harga', [$harga_min, $harga_max])->whereIn('stok', $stok)->get();
        $data['nama'] = $nama;
        $data['stok'] = request('stok');

        return view('client.index', $data);
    }


}