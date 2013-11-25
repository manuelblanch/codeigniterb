<?php 
class Eliminar_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    //obtenemos comentarios para poder eliminar
    function getComentarios()
    {
        $query = $this->db->get('mensajes');
        if($query->num_rows()>0)
        {
            foreach ($query->result() as $fila)
            {
                $data[] = $fila;
            }
                return $data;
        }
    }
    
    //function para eliminar el comentario
    function eliminar_comentario($id)
    {
        $this->db->where('id',$id);
        return $this->db->delete('mensajes');
    }
}
