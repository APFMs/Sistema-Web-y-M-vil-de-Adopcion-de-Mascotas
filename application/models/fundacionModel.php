<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class FundacionModel extends CI_Model
{

    public function fundacionList()
    {
        $query = $this->db->query("SELECT idFUNDACION,nombre,direccion,telefonos,fechaCreacion,fechaActualizacion FROM fundacion where estado=1;");
        return $query;
    }
    public function fundacionCreate($data)
    {
        $this->db->insert('fundacion', $data);
    }
    public function recuperarFundacion($id)
    {
        $this->db->select('*');
        $this->db->from('fundacion');
        $this->db->where('idFUNDACION', $id);
        return $this->db->get();
    }
    public function modificarFundacion($idFUNDACION,$data)
    {
        $this->db->where('idFUNDACION', $idFUNDACION);
        $this->db->update('fundacion', $data);
    }
    public function eliminadoLogicoFundacion($idFUNDACION,$data)
    {
        $this->db->where('idFUNDACION', $idFUNDACION);
        $this->db->update('fundacion', $data);
    }
    
}
