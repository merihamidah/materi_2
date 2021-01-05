<?php 
namespace App\Models;
use App\Models\Traits\Relations\KategoriRelations;

class Kategori extends Model{
    use KategoriRelations;
    protected $table = 'kategori';

    
}
