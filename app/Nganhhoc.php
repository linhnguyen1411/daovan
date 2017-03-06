<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nganhhoc extends Model
{
    //
    protected $table ='linhvuc';
    public  function keywords(){
        return $this->hasMany('App\Keywords','id','id_nganh');
    }
}
