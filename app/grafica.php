<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class grafica extends Model
{
    function servicos(){
    	return $this->belongsToMany('App\servico', 'grafica_servicos');
    }
}