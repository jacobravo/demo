<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Ticket;
use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Http\Middleware\LogControl;
use Illuminate\Support\Facades\Session;

class TicketController extends Controller
{
    public function __construct(){

        $this->middleware(LogControl::class);
    }

    public function index(){

        try{

            if(Session::get('usuario')->tipoUsuario->nombre == 'administrador'){

                $obj = Ticket::all();

                $usuarios = Usuario::all();

                return view('mantenedorTickets', compact('obj', 'usuarios'));
            }
            elseif(Session::get('usuario')->tipoUsuario->nombre == 'usuario'){

                $obj = Ticket::where('id_user', '=', Session::get('usuario')->id)->get();

                return view('listarTickets', compact('obj'));
            }
            else{
                return "Su perfil no existe";
            }
        }
        catch(Exception $ex){

            return $ex->getMessage();
        }
    }

    public function pedirTicket(Request $request){

        try{
            $id = $request->get('id');
            $idUsuario = $request->get('usuario');

            $obj = Ticket::findorfail($id);

            $obj->id_user = $idUsuario;
            $obj->save();

        }
        catch(Exception $ex){
            return $ex->getMessage();
        }
    }

    public function editar(Request $request){

        try{
            $id = $request->get('id');
            $idUsuario = $request->get('usuario');
            $contenido = $request->get('contenido_ticket');

            $obj = Ticket::findorfail($id);

            $obj->id_user = $idUsuario;
            $obj->ticket_pedido = $contenido;

            $obj->save();

        }
        catch(Exception $ex){
            return $ex->getMessage();
        }
    }

    public function borrar(Request $request){

        try{
            $id = $request->get('id');

            $obj = Ticket::findorfail($id);
            $obj->delete();

        }
        catch(Exception $ex){
            return $ex->getMessage();
        }
    }

    public function nuevo(Request $request){

        try{
            $idUsuario = $request->get('usuario');
            $contenido = $request->get('contenido_ticket');

            $obj = new Ticket();

            $obj->id_user = $idUsuario;
            $obj->ticket_pedido = $contenido;

            $obj->save();

        }
        catch(Exception $ex){
            return $ex->getMessage();
        }
    }
}
