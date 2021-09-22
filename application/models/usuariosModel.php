<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class UsuariosModel extends CI_Model
{
    public function Validar($login, $password)
    {
        $this->db->select('*');
        $this->db->from('usuario');
        $this->db->where('nombreUsuario', $login);
        $this->db->where('contrasenia', $password);
        $this->db->where('estado', 1);
        return $this->db->get();
    }
    
    public function usuarioList()
    {
        $query = $this->db->query("SELECT idUSUARIO,nombreUsuario,rol,fechaCreacion,fechaActualizacion FROM usuario where estado=1;");
        return $query;
    }
    public function recuperarUsuario($id)
    {
        $this->db->select('*');
        $this->db->from('usuario');
        $this->db->where('idUSUARIO', $id);
        return $this->db->get();
    }
    public function modificarUsuario($idUSUARIO,$data)
    {
        $this->db->where('idUSUARIO', $idUSUARIO);
        $this->db->update('usuario', $data);
    }
    public function usuarioCreate($data)
    {
        $this->db->insert('usuario', $data);
    }
    public function eliminadoLogicoUsuario($idUSUARIO,$data)
    {
        $this->db->where('idUSUARIO', $idUSUARIO);
        $this->db->update('usuario', $data);
    }
}
