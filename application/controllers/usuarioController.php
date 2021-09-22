<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class UsuarioController extends CI_Controller
{
    public function index()
    {
        /*$data['msg'] = $this->uri->segment(3);

        if ($this->session->userdata('nombreUsuario')) {
            redirect('panelController/index', 'refresh');
        } else {
            $this->load->view('usuario/inicioSesionView', $data);
        }*/
        $data['msg'] = $this->uri->segment(3);
        $this->load->view('usuario/inicioSessionView', $data);
    }
    public function validarUsuario()
    {
        $login = $_POST['usuario'];
        $password = md5($_POST['password']);
        $consulta = $this->usuariosModel->Validar($login, $password);

        /*1 Administrador*/
        /*2 Invitado*/

        if ($consulta->num_rows() > 0) {
            foreach ($consulta->result() as $row) {
                $this->session->set_userdata('idUsuario', $row->idUsuario);
                $this->session->set_userdata('nombreUsuario', $row->nombreUsuario);
                $this->session->set_userdata('tipo', $row->rol);

                if ($this->session->userdata('tipo') == 'Administrador') {
                    redirect('panelController/indexAdmin', 'refresh');
                } else {
                    redirect('panelController/indexInvi', 'refresh');
                }
            }
            
        } else {
            redirect('usuarioController/index/1', 'refresh');
            //echo "datos incorrectos";
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('usuarioController/index/3', 'refresh');
    }
    public function crearUsuarioView()
    {
        $this->load->view('usuario/usuarioNew');
    }
    public function crearUsuarioBD()
    {
        $nombreUsuario = $_POST['nombreUsuario'];
        $contrasenia = $_POST['contrasenia'];
        $rol = $_POST['rol'];


        $data['nombreUsuario'] = $nombreUsuario;
        $data['contrasenia'] = $contrasenia;
        $data['rol'] = $rol;
        $data['idFundacion']=1;//----------------------NOTA IMPORTANTE CORREGIR DESPUES--------------OJO-------------------------------

        $this->usuariosModel->usuarioCreate($data);
        redirect('usuarioController/viewUsuario', 'refresh');

    }
    public function viewUsuario()
    {
        $listaUsuarios = $this->usuariosModel->usuarioList();
        $data['usuarios'] = $listaUsuarios;
        $this->load->view('usuario/usuarioView',$data);
    }
    public function modificarUsuarioView()
    {
        $id = $_POST['IdUSUARIO'];
        //$id = 1;
        //$data['msg'] = 0;
        $data['infoUsuario'] = $this->usuariosModel->recuperarUsuario($id);
        $this->load->view('usuario/usuarioEdit',$data);
    }
    public function guardarUsuarioBD()
    {
        $idUSUARIO = $_POST['IdUSUARIO'];
        $nombreUsuario = $_POST['nombreUsuario'];
        $contrasenia = $_POST['contrasenia'];
        //$DateAndTime = date('Y-m-d h:i:s');
        //$DateAndTime = 'now()';

        $data['nombreUsuario'] = $nombreUsuario;
        $data['contrasenia'] = $contrasenia;
        //$data['fechaActualizacion'] = $DateAndTime;


        $this->usuariosModel->modificarUsuario($idUSUARIO, $data);
        redirect('usuarioController/viewUsuario', 'refresh');
            
        
    }
    public function eliminarUsuario()
    {
        $idUSUARIO = $_POST['idUSUARIO'];

        $data['Estado'] = 0;
        $this->usuariosModel->eliminadoLogicoUsuario($idUSUARIO, $data);
        redirect('usuarioController/viewUsuario', 'refresh');
    }

}
