<?php

namespace App\Models;

use App\Models\Usuario;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
	protected $table = 'ticket';
    protected $primaryKey = 'id';

    protected $casts = [
		'id' => 'int',
        'id_user' => 'int'
    ];

    protected $fillable = [
        'ticket_pedido'
    ];

    public function usuario(){

        return $this::belongsto(Usuario::class, 'id', 'id');
    }
}
