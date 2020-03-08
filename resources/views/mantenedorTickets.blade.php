@extends('layout')
@section('content')
    <script type="text/javascript" src="{{ asset('js/mantenedor.js') }}"></script>
    <div style="text-align: right;">
        <a href="{{route('logout')}}">Cerrar Sesión</a>
    </div>
    <a href="#nuevo_modal" rel="modal:open" class="btn btn-success">Nuevo Ticket</a>
    <br>
    <br>
    <div id="raiz" ></div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID Ticket</th>
                <th scope="col">Usuario asignado</th>
                <th scope="col">Acción</th>
            </tr>
        </thead>
        <tbody>
            @if($obj->count() > 0)
                @foreach ($obj as $o)
                    <tr>
                        <th scope="row">{{$o->id}}</th>
                        <td>{{$o->usuario->nombre}}</td>
                        <td>
                            <a href="#editar_modal" rel="modal:open" onclick="editar({{$o->id}});">
                                Editar Ticket
                            </a>
                            &nbsp;
                            <a href="#" onclick="borrar({{$o->id}});">
                                Borrar Ticket
                            </a>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>

    <div id="editar_modal" class="modal" style="display: none; position: sticky; overflow: initial; height: auto;">
        <input type="hidden" value="" id="id_editar">
        <div class="container" style="text-align: center">
            <h5>Editar ticket</h5>
            Asignar Usuario:
            <select id="usuario_edit" class="form-control">
                <option value="">Seleccione...</option>
                @if($usuarios->count() > 0)
                    @foreach ($usuarios as $u)
                        <option value="{{$u->id}}">{{$u->nombre}}</option>
                    @endforeach
                @endif
            </select>
            <br>
            <input type="button" class="btn btn-success" value="Guardar ticket" onclick="guardarEditar();">
        </div>
    </div>

    <div id="nuevo_modal" class="modal" style="display: none; position: sticky; overflow: initial; height: auto;">
        <div class="container" style="text-align: center">
            <h5>Nuevo ticket</h5>
            Asignar usuario:
            <select id="usuario_nuevo" class="form-control">
                <option value="">Seleccione...</option>
                @if($usuarios->count() > 0)
                    @foreach ($usuarios as $u)
                        <option value="{{$u->id}}">{{$u->nombre}}</option>
                    @endforeach
                @endif
            </select>
            <br>
            <input type="button" class="btn btn-success" value="Crear ticket" onclick="guardarNuevo();">
        </div>
    </div>
@endsection
