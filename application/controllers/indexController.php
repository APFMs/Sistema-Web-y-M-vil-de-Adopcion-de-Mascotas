<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class IndexController extends CI_Controller
{

    public function index()
    {
        $this->load->view('inc/head.php');
        $this->load->view('index.php');
        $this->load->view('inc/footer.php');
    }
    public function iniciarSession()
    {
        $this->load->view('usuario/inicioSessionView.php');
    }
}
