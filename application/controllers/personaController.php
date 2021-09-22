<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class PersonaController extends CI_Controller
{
    public function index()
    {
        $listaPersonas = $this->personaModel->personasList();
        $data['personas'] = $listaPersonas;

        $data['msg'] = $this->uri->segment(3);
        $this->load->view('persona/personaView', $data);
    }
    public function crearPersonaView()
    {
        $this->load->view('persona/personaNew');
    }

    public function crearPersonaBD()
    {
        $nombre = $_POST['nombre'];
        $apellidoPaterno = $_POST['apellidoPaterno'];
        $apellidoMaterno = $_POST['apellidoMaterno'];
        $ci = $_POST['ci'];
        $telefonos = $_POST['telefonos'];
        $direccion = $_POST['direccion'];
        $observaciones = $_POST['observaciones'];


        $data['nombre'] = $nombre;
        $data['apellidoPaterno'] = $apellidoPaterno;
        $data['apellidoMaterno'] = $apellidoMaterno;
        $data['ci'] = $ci;
        $data['telefonos'] = $telefonos;
        $data['direccion'] = $direccion;
        $data['observaciones'] = $observaciones;

        $this->personaModel->personaCreate($data);
        redirect('personaController/index', 'refresh');
    }
    public function modificarPersonaView()
    {
        $id = $_POST['idPERSONA'];
        //$id = 1;
        //$data['msg'] = 0;
        $data['infoPersona'] = $this->personaModel->recuperarPersonaModel($id);
        $this->load->view('persona/personaEdit', $data);
    }
    public function guardarPersonaBD()
    {
        $idPERSONA = $_POST['idPERSONA'];
        $nombre = $_POST['nombre'];
        $apellidoPaterno = $_POST['apellidoPaterno'];
        $apellidoMaterno = $_POST['apellidoMaterno'];
        $ci = $_POST['ci'];
        $telefonos = $_POST['telefonos'];
        $direccion = $_POST['direccion'];
        $observaciones = $_POST['observaciones'];
        //$DateAndTime = date('Y-m-d h:i:s');
        //$DateAndTime = 'now()';

        $data['nombre'] = $nombre;
        $data['apellidoPaterno'] = $apellidoPaterno;
        $data['apellidoMaterno'] = $apellidoMaterno;
        $data['ci'] = $ci;
        $data['telefonos'] = $telefonos;
        $data['direccion'] = $direccion;
        $data['observaciones'] = $observaciones;
        //$data['fechaActualizacion'] = $DateAndTime;


        $this->personaModel->modificarPersona($idPERSONA, $data);
        redirect('personaController/index', 'refresh');
    }
    public function eliminarPersona()
    {
        $idPERSONA = $_POST['idPERSONA'];

        $data['estado'] = 0;
        $this->personaModel->eliminadoLogicoPersona($idPERSONA, $data);
        redirect('personaController/index', 'refresh');
    }
}
