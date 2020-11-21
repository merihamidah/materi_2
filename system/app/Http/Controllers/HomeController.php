<?php

namespace App\Http\Controllers;
class HomeController extends Controller {
    function showHome(){
        return view('home');
    }function showWebtemplate(){
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
}