@extends('layout')
@section('content')
    <script src="{{ asset('js/listar.js') }}"></script>
    <div style="text-align: right;">
        <a href="{{route('logout')}}">Cerrar Sesión</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Usuario</th>
                <th scope="col">Pedido</th>
                <th scope="col">Pedir ticket</th>
            </tr>
        </thead>
        <tbody>
            @if($obj->count() > 0)
                @foreach ($obj as $o)
                    <tr>
                        <th scope="row">{{$o->id}}</th>
                        <td>{{$o->usuario->nombre}}</td>
                        @if($o->ticket_pedido != 0)
                            <td><img style="width: 40px;" src="visto.jfif"></td>
                        @else
                            <td></td>
                        @endif
                        <td>
                            <a href="#" onclick="pedirTicket({{ $o->id}},{{$o->usuario->id}})">
                                Pedir Ticket
                            </a>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endsection
