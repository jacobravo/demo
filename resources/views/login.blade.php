<html>
    <head>
        @include('layout')
        <script src="{{ asset('js/login.js') }}"></script>
    </head>
    <body>
        <div class="container" style="text-align:center;">
            <div class="form-group">
                <label for="correo">Su email</label>
                <input type="email" class="form-control" id="mail" name="mail" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="pass">Contraseña</label>
                <input type="password" class="form-control" id="pass" name="pass">
            </div>
            <input type="button" value="Ingresar" id="ingresar" class="btn btn-primary">
            <br>
            <br>
            <a href="#registro_modal" rel="modal:open" class="btn btn-success">Registrar usuario</a>
        </div>
    </body>

    <div id="registro_modal" class="modal" style="display: none; position: sticky; overflow: initial; height: auto;">
        <div class="container" style="text-align: center">
            <h5>Registrar usuario</h5>
            Ingrese su nombre
            <input type="text" maxlength="255" class="form-control" id="nombre">
            <br>
            Ingrese un correo
            <input type="text" maxlength="255" class="form-control" id="correo">
            <br>
            Ingrese una contraseña
            <input type="password" maxlength="50" class="form-control" id="pass1">
            <br>
            Confirme su contraseña
            <input type="password" maxlength="50" class="form-control" id="pass2">
            <br>
            <input type="button" class="btn btn-success" value="Crear usuario" onclick="guardarUsuario();">
        </div>
    </div>
</html>
