<?php 

namespace App\Http\Controllers;
use App\Models\Produk;

class ProdukController extends Controller {
    function index(){
        $data['list_produk'] = Produk::all();
       return view('produk.index', $data);
    }
    function create(){
        return view('produk.create');
    }
    
    function store(){
        $produk = new Produk;
        $produk->nama = request('nama');
        $produk->harga = request('harga');
        $produk->stok = request('stok');
        $produk->berat = request('berat');
        $produk->deskripsi = request('deskripsi');
        $produk->save();
        
        return redirect('admin/produk')->with('success','Data Berhasil Ditambahkan');
    }
    function show(Produk $produk){
         $data['produk'] = $produk;
        return view('produk.show',$data);
    }
    function edit(Produk $produk){
         $data['produk'] = $produk;
        return view('produk.edit',$data);
    }
    function update(Produk $produk){
        $produk->nama = request('nama');
        $produk->harga = request('harga');
        $produk->stok = request('stok');
        $produk->berat = request('berat');
        $produk->deskripsi = request('deskripsi');
        $produk->save();
        
        return redirect('admin/produk')->with('success','Data Berhasil Diedit');
    }
    function destroy(Produk $produk){
        $produk->delete();
        return redirect('admin/produk')->with('danger', 'Data berhasil dihapus');
    }
    /*
    function filternama(){
            $nama = request('nama');
            $data['list_produk'] = Produk::where('nama','like', "%$nama%")->get();
             $data['nama'] = $nama;

        return view('produk.index', $data);
    }*/
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

        return view('produk.index', $data);
    }
    /*
    function filterstok(){
        $stok = explode(",", request('stok'));      
        $data['list_produk'] = Produk::whereIn('stok', $stok)->get();
        $data['stok'] = request('stok');

        return view('produk.index', $data);
    }
    
    function filterharga(){
        $data['harga_min'] = $harga_min = request('harga_min');  
        $data['harga_max'] = $harga_max = request('harga_max');
        $data['list_produk'] = Produk::whereBetween('harga', [$harga_min, $harga_max])->get();
        return view('produk.index', $data);
    }*/
}

