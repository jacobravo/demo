function pedirTicket(id, usuario) {
    $.post("pedirTicket", {
        _token: $('meta[name="csrf-token"]').attr('content'),
        id: id,
        usuario: usuario
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