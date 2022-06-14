<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // kategori bisa melihat banyak produk
    public function products(){
        return $this->hasMany('App\Product','category_id','id');
    }
}
