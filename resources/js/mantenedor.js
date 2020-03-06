import React from 'React';

class Mantenedor extends React.Component {

    editar(id){

        document.getElementById('id_editar').setAttribute('value', id);

        cont = document.getElementById('editar_modal').innerHTML;
        modal(cont);

        render(modal);
    }


    modal(cont){
        const [show, setShow] = useState(false);

        const handleClose = () => setShow(false);
        const handleShow = () => setShow(true);

        return (
            {cont}
        );
    }


    guardarEditar(token){
        fetch('editarTicket', {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                _token:token,
                id: document.getElementById('id_editar').value,
                usuario: document.getElementById('usuario_edit').value,
                contenido_ticket: document.getElementById('contenido_ticket_edit').value
            },function(data){
               alert.alert(data);
            })
        })
    }
}
