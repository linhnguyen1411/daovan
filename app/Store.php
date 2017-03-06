<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    //
    protected $table = 'store';

    public function nganhhoc(){
        $this->belongsTo('App\Nganhhoc','nganh','id');
    }

}
