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

                $usuarios = Usuario::where('id', '!=', Session::get('usuario')->id)->get();

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
            $ticket_pedido = $request->get('usuario');

            $obj = Ticket::findorfail($id);

            $obj->ticket_pedido = $ticket_pedido;
            $obj->save();

            return "Ticket asignado exitosamente";

        }
        catch(Exception $ex){
            return $ex->getMessage();
        }
    }

    public function editar(Request $request){

        try{
            $id = $request->get('id');
            $idUsuario = $request->get('usuario');

            $obj = Ticket::findorfail($id);

            $obj->id_user = $idUsuario;

            $obj->save();

            return "Registro editado exitosamente";

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

            return "Registro eliminado exitosamente";

        }
        catch(Exception $ex){
            return $ex->getMessage();
        }
    }

    public function nuevo(Request $request){

        try{
            $idUsuario = $request->get('usuario');

            $obj = new Ticket();

            $obj->id_user = $idUsuario;

            $obj->save();

            return "Registro creado exitosamente";

        }
        catch(Exception $ex){
            return $ex->getMessage();
        }
    }

}
