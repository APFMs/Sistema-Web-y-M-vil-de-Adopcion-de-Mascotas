<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class FundacionController extends CI_Controller
{
    public function index()
    {
        $listaFundaciones = $this->fundacionModel->fundacionList();
        $data['fundaciones'] = $listaFundaciones;

        $data['msg'] = $this->uri->segment(3);
        $this->load->view('fundacion/fundacionView', $data);
    }
    public function crearFundacionView()
    {
        $this->load->view('fundacion/fundacionNew');
    }
    public function crearFundacionBD()
    {
        $nombre = $_POST['nombre'];
        $direccion = $_POST['direccion'];
        $telefonos = $_POST['telefonos'];


        $data['nombre'] = $nombre;
        $data['direccion'] = $direccion;
        $data['telefonos'] = $telefonos;
        

        $this->fundacionModel->fundacionCreate($data);
        redirect('fundacionController/index', 'refresh');
    }
    public function modificarFundacionView()
    {
        $id = $_POST['idFUNDACION'];
        //$id = 1;
        //$data['msg'] = 0;
        $data['infoFundacion'] = $this->fundacionModel->recuperarFundacion($id);
        $this->load->view('fundacion/fundacionEdit', $data);
    }
    public function guardarFundacionBD()
    {
        $idFUNDACION = $_POST['idFUNDACION'];
        $nombre = $_POST['nombre'];
        $direccion = $_POST['direccion'];
        $telefonos = $_POST['telefonos'];
        //$DateAndTime = date('Y-m-d h:i:s');
        //$DateAndTime = 'now()';

        $data['nombre'] = $nombre;
        $data['direccion'] = $direccion;
        $data['telefonos'] = $telefonos;
        //$data['fechaActualizacion'] = $DateAndTime;


        $this->fundacionModel->modificarFundacion($idFUNDACION, $data);
        redirect('fundacionController/index', 'refresh');
    }
    public function eliminarFundacion()
    {
        $idFUNDACION = $_POST['idFUNDACION'];

        $data['estado'] = 0;
        $this->fundacionModel->eliminadoLogicoFundacion($idFUNDACION, $data);
        redirect('fundacionController/index', 'refresh');
    }

}