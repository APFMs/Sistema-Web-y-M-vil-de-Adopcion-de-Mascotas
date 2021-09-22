<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class PersonaModel extends CI_Model
{
    public function personasList()
    {
        $query = $this->db->query("SELECT idPERSONA,nombre,concat(apellidoPaterno,' ',apellidoMaterno) as apellido,ci,telefonos,direccion,observaciones,fechaCreacion,fechaActualizacion FROM persona where estado=1;");
        return $query;
    }
    public function personaCreate($data)
    {
        $this->db->insert('persona', $data);
    }
    public function recuperarPersonaModel($id)
    {
        $this->db->select('*');
        $this->db->from('persona');
        $this->db->where('idPERSONA', $id);
        return $this->db->get();
    }
    public function modificarPersona($idPERSONA,$data)
    {
        $this->db->where('idPERSONA', $idPERSONA);
        $this->db->update('persona', $data);
    }
    public function eliminadoLogicoPersona($idPERSONA,$data)
    {
        $this->db->where('idPERSONA', $idPERSONA);
        $this->db->update('persona', $data);
    }

}
