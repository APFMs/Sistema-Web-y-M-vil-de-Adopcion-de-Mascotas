<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class MascotaModel extends CI_Model
{
    public function mascotasList()
    {
        $query = $this->db->query("SELECT idMASCOTA,nombre,edad,sexo,color,caracteristicas,tamanio,fechaCreacion,fechaActualizacion FROM mascota where estado=1;");
        return $query;
    }
    public function mascotaCreate($data)
    {
        $this->db->insert('mascota', $data);
    }
    
    function recuperarMascotaModel($id)
    {
        $this->db->select('*');
        $this->db->from('mascota');
        $this->db->where('idMASCOTA', $id);
        return $this->db->get();
    }
    public function modificarMascota($idMASCOTA,$data)
    {
        $this->db->where('idMASCOTA', $idMASCOTA);
        $this->db->update('mascota', $data);
    }
    public function eliminadoLogicoMascota($idMASCOTA, $data)
    {
        $this->db->where('idMASCOTA', $idMASCOTA);
        $this->db->update('mascota', $data);
    }
}
