<html>
    <head>
        @include('layout')
        <title>Bienvenido</title>
    </head>
    <body>
        <div class="container">
            <form action="login" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="correo">Su email</label>
                    <input type="email" class="form-control" id="mail" name="mail" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="pass">Contraseña</label>
                    <input type="password" class="form-control" id="pass" name="pass">
                </div>
                <button type="submit" class="btn btn-primary">Ingresar</button>
            </form>
        </div>
    </body>
</html>
