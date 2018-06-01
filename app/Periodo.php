<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    protected $fillable = [
        'periodo',
    ];

    public function documentos(){
    	return $this->hasMany('App\Documento', 'id_periodo');
    }
}
