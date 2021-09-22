<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class MascotaController extends CI_Controller
{
    public function index()
    {
        $listaMascotas = $this->mascotaModel->mascotasList();
        $data['mascotas'] = $listaMascotas;

        $data['msg'] = $this->uri->segment(3);
        $this->load->view('mascota/mascotaView', $data);
    }
    
    function crearMascotaView()
    {
        $this->load->view('mascota/mascotaNew');
    }
    public function crearMascotaBD()
    {
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        $sexo = $_POST['sexo'];
        $color = $_POST['color'];
        $caracteristicas = $_POST['caracteristicas'];
        $tamanio = $_POST['tamanio'];


        $data['nombre'] = $nombre;
        $data['edad'] = $edad;
        $data['sexo'] = $sexo;
        $data['color'] = $color;
        $data['caracteristicas'] = $caracteristicas;
        $data['tamanio'] = $tamanio;
        $data['FUNDACION_idFUNDACION'] = 1; //----------------------NOTA IMPORTANTE CORREGIR DESPUES--------------OJO-------------------------------

        $this->mascotaModel->mascotaCreate($data);
        redirect('mascotaController/index', 'refresh');
    }
    public function modificarMascotaView()
    {
        $id = $_POST['idMASCOTA'];
        //$id = 1;
        //$data['msg'] = 0;
        $data['infoMascota'] = $this->mascotaModel->recuperarMascotaModel($id);
        $this->load->view('mascota/mascotaEdit', $data);
    }
    public function guardarMascotaBD()
    {
        $idMASCOTA = $_POST['idMASCOTA'];
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        $sexo = $_POST['sexo'];
        $color = $_POST['color'];
        $caracteristicas = $_POST['caracteristicas'];
        $tamanio = $_POST['tamanio'];
        //$DateAndTime = date('Y-m-d h:i:s');
        //$DateAndTime = 'now()';

        $data['nombre'] = $nombre;
        $data['edad'] = $edad;
        $data['sexo'] = $sexo;
        $data['color'] = $color;
        $data['caracteristicas'] = $caracteristicas;
        $data['tamanio'] = $tamanio;
        //$data['fechaActualizacion'] = $DateAndTime;


        $this->mascotaModel->modificarMascota($idMASCOTA, $data);
        redirect('mascotaController/index', 'refresh');
    }
    public function eliminarMascota()
    {
        $idMASCOTA = $_POST['idMASCOTA'];

        $data['estado'] = 0;
        $this->mascotaModel->eliminadoLogicoMascota($idMASCOTA, $data);
        redirect('mascotaController/index', 'refresh');
    }
}
