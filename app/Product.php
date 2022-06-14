<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // bisa melihat category sesuai dengan kolom category_id
    
    // tujuannya untuk mengambil 1 kategori
    public function category(){
        return $this->belongsTo('App\Category', 'category_id');
    }
}
