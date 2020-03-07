class ComponentesTest extends React.Component {
    editar(){
        document.getElementById('id_editar').value = document.getElementById('ed').value;
        let cont = document.getElementById('editar_modal').innerHTML;

        const [show, setShow] = React.useState(false);
        const handleClose = () => React.setShow(false);
        //const handleShow = () => setShow(true);

        return (
            <Modal show={show} onHide={handleClose} animation={true}>
            <Modal.Body>{cont}</Modal.Body>
            <Modal.Footer>
                <Button variant="secondary" onClick={handleClose}>
                Close
                </Button>
                <Button variant="primary" onClick={handleClose}>
                Save Changes
                </Button>
            </Modal.Footer>
            </Modal>
        );
    };
    render(){
        return (
            <a href="#" onClick={this.editar}>
                Editar Ticket
            </a>
        );
    };        
}

ReactDOM.render(<ComponentesTest />, document.getElementById('ed'));

/*
function editar(props) {
    return <h1>Hello, {props.name}</h1>;

    /*function handleClick(e) {
        e.preventDefault();
        document.getElementById('id_editar').setAttribute('value', id);
        cont = document.getElementById('editar_modal').innerHTML;

    }
    return console.log("asdfdsf");
}
const element = <Welcome name="Sara" />;
ReactDOM.render(
  element,
  document.getElementById('raiz')
);*/


//ReactDOM.render( < ComponentesTest / > );
//export default editar;

/*editar(id) {

        document.getElementById('id_editar').setAttribute('value', id);

        cont = document.getElementById('editar_modal').innerHTML;
        modal(cont);

        render(modal);
    }

    modal(cont) {
        const [show, setShow] = useState(false);

        const handleClose = () => setShow(false);
        const handleShow = () => setShow(true);

        return (cont);
    }

    guardarEditar(token) {
        fetch('editarTicket', {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                _token: token,
                id: document.getElementById('id_editar').value,
                usuario: document.getElementById('usuario_edit').value,
                contenido_ticket: document.getElementById('contenido_ticket_edit').value
            }, function(data) {
                alert.alert(data);
            })
        })
    }
}
export default ComponentesTest*/