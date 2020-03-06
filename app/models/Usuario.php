<?php

namespace App\Models;

use App\Models\TipoUsuario;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
	protected $table = 'usuarios';
    protected $primaryKey = 'id';

    protected $casts = [
		'id' => 'int',
		'id_tipo_user' => 'int'
	];

	protected $fillable = [
        'nombre',
        'mail',
        'pass'
    ];

    public function tipoUsuario(){

        return $this::hasOne(TipoUsuario::class , 'id', 'id_tipo_user');
    }
}
