<?php
namespace App\Models\Traits\Relations;
use App\Models\Produk;
trait KategoriRelations{
   
    function produk(){
        return $this->hasMany(Produk::class, 'id_kategori');
    
    }
}