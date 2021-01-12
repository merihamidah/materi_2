<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use App\Models\Provinsi;
class HomeController extends Controller {
    function showHome(){
        return view('home');
    }
    function showWebtemplate(){
        return view('webtemplate');
    }
     function showProduct(){
        return view('product');
    } 

    function showPromo(){
        return view('promo');
    }

    function showAboutUs(){
        return view('aboutus');
    }
    function showGallery(){
        return view('gallery');
    }
    function showContact(){
        return view('contact');
    }
    function test($produk){
        echo "Nama produk $produk";
    }
    public function testCollection()
    {   //array biasa
        $list_bike = ['Honda', 'Yamaha', 'Kawasaki', 'Suzuki', 'Vespa', 'BPM', 'KTM'];
       // dari suport
        $list_bike = collect($list_bike);
        // dari database
        $list_produk = Produk::all();
        //count->untuk menghitung keseluruhan
        //dd($collection->count());

        //sorting
       // dd($list_bike->sort());
       //sortBy Harga Terendah
       //dd($list_produk->sortBy('harga'));
       //sortBy Harga Tertinggi
       //$data['list'] = $list_produk;
       //return view('test-collection', $data);
       //take->mengambil data  n      
       //skip->melanjutkan data ke-n
       //  @foreach($list->sortByDesc('harga')->skip(3)->take(5) as $item)
       //@endforeach
       //map
       /*$map = $list_produk->map(function($item){
       $item->stock = $item->stock+10;
       });
       dd($map);*/
       $data['list'] = $list_produk;
       return view('test-collection', $data);
       dd($list_bike, $collection, $list_produk);

    }

    function testAjax(){
        $data['list_provinsi'] = Provinsi::all();
        return view('test-ajax', $data);
    }
}