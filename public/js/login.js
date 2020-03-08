$(document).ready(function() {
    $("#ingresar").click(function() {
        login();
    })
});

function login() {
    $.post("login", {
        _token: $('meta[name="csrf-token"]').attr('content'),
        mail: $("#mail").val(),
        pass: $("#pass").val()
    }, function(data) {
        if (/1/.test(data)) {
            location.href = "redirigir";
        } else {
            Swal.fire(data);
        }
    });
}

function guardarUsuario() {

    if ($("#pass1").val() != $("#pass2").val()) {
        Swal.fire("Las contraseñas ingresadas no coinciden");
        return false;
    }

    $.post("creaUsuario", {
        _token: $('meta[name="csrf-token"]').attr('content'),
        nombre: $("#nombre").val(),
        correo: $("#correo").val(),
        pass: $("#pass1").val()
    }, function(data) {
        Swal.fire({
            icon: 'success',
            title: data,
            onClose: () => {
                location.reload();
            }
        })
    });
}