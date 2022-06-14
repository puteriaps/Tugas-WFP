<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    // user disini adalah pekerja
    public function user(){
        return $this->belongsTo('App\User','id');
    }
    public function buyer(){
        return $this->belongsTo('App\Buyer','id');
    }
    public function medecines(){
        return $this->belongsToMany('App\Obat','medecine_transaction','transaction_id','product_id')->withPivot('quantity','price');
    }
}
