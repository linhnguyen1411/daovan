<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keywords extends Model
{
    //
    protected $table = 'keywords';
    public  function nganhhoc(){
        return $this->belongsTo('App\Nganhhoc','id_nganh','id');
    }
}
