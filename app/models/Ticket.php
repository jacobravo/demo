<?php

namespace App\Models;

use App\Models\Usuario;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
	protected $table = 'ticket';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $casts = [
		'id' => 'int',
        'id_user' => 'int',
        'ticket_pedido' => 'int'
    ];

    public function usuario(){

        return $this::belongsto(Usuario::class, 'id_user', 'id');
    }
}
