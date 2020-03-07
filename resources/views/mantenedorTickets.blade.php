@extends('layout')
@section('content')
    <script src="../resources/js/components/react/react16.13.0.js"></script>
    <script src="../resources/js/components/react/react-dom16.13.0.js"></script>
    <script crossorigin src="../resources/js/components/babel.min.js"></script>
    <script type="text/babel" src="../resources/js/components/componentesTest.js"></script>
    <div style="text-align: right;">
        <a href="{{route('logout')}}">Cerrar Sesión</a>
    </div>
    <input type="button" class="btn btn-success" value="Nuevo ticket" />
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
                            <div value="{{$o->id}}" id="ed"></div>
                            
                            <a href="#" onclick="{() => borrar({{$o->id}})};">
                                Borrar Ticket
                            </a>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>

    <div id="editar_modal" style="display: none">
        <input type="hidden" value="" id="id_editar">
        <div class="container">
            <h5>Editar ticket</h5>
            Asignar Usuario:
            <select id="usuario_edit">
                <option value="">Seleccione...</option>
                @if($usuarios->count() > 0)
                    @foreach ($usuarios as $u)
                        <option value="{{$u->id}}">{{$u->nombre}}</option>
                    @endforeach
                @endif
            </select>
            Contenido:
            <textarea id="contenido_ticket_edit" maxlength="255"></textarea>
            <input type="button" value="Crear ticket" onclick="{() => guardarEditar();}">
        </div>
    </div>

    <div id="nuevo_modal" style="display: none">
        <div class="container">
            <h5>Nuevo ticket</h5>
            Asignar usuario:
            <select id="usuario_nuevo">
                <option value="">Seleccione...</option>
                @if($usuarios->count() > 0)
                    @foreach ($usuarios as $u)
                        <option value="{{$u->id}}">{{$u->nombre}}</option>
                    @endforeach
                @endif
            </select>
            Contenido:
            <textarea id="contenido_ticket_nuevo" maxlength="255"></textarea>
            <input type="button" value="Crear ticket" onclick="{() => guardarNuevo();}">
        </div>
    </div>
@endsection
