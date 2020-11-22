<?php 
namespace App\Models;
use App\Models\User;

class Produk extends Model{
    protected $table = 'produk';

    function seller(){
        return $this->belongsTo(User::class, 'id_user');
    }
    function kategori(){
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }
}
//jika nama table kita dalam bahasa inggris kita tidak perlu menuliskan baris protected