<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class PanelController extends CI_Controller
{
    public function indexAdmin()
    {
        $this->load->view('panel/adminPanel');
    }
    public function indexInvi()
    {
        $this->load->view('panel/invitadoPanel');
    }
   
}
