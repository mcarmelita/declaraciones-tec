<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
	protected $fillable = [
        'nombre', 'num_formato', 'id_periodo', 'id_user',
    ];

    public function users(){
    	return $this->belongsTo('App\User', 'id_user');
    }

    public function periodos(){
    	return $this->belongsTo('App\Periodo', 'id_periodo');
    }
}
