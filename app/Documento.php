<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
	protected $fillable = [
        'nombre', 'num_formato', 'id_periodo', 'id_user',
    ];

    public function users(){
    	return $this->belongsTo('App\User', 'user_documento', 'id_user');
    }
}
