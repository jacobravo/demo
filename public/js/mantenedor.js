function editar(id) {
    $("#id_editar").val(id);
}

function guardarEditar() {
    $.post("editarTicket", {
        _token: $('meta[name="csrf-token"]').attr('content'),
        id: $("#id_editar").val(),
        usuario: $("#usuario_edit").val()
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

function guardarNuevo() {
    $.post("nuevoTicket", {
        _token: $('meta[name="csrf-token"]').attr('content'),
        usuario: $("#usuario_nuevo").val()
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

function borrar(id) {
    Swal.fire({
        title: '¿Está seguro de querer borrar este registro?',
        text: "Esta acción es permanente",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí, borrar',
        cancelButtonText: 'No, cancelar'
    }).then((result) => {
        if (result.value) {
            $.post("borrarTicket", {
                _token: $('meta[name="csrf-token"]').attr('content'),
                id: id
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
    });
}