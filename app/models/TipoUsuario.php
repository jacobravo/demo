<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{
	  protected $table = 'tipo_usuario';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $casts = [
		'id' => 'int'
    ];

    protected $fillable = [
        'nombre'
    ];

}
