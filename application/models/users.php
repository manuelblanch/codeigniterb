<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Model {
 
    function __construct()
    {
        parent::__construct();
    }

    function listausers()
    {
       
        $this->db->select('Nom_usuari,Edat,Població,Provincia,DNI,Telefon,Estat_civil');
        $query = $this->db->get('users');

            

        //echo '<pre>'; print_r($data); die();

            return $query->result_array();

        }

        function listarusers(){

        $query=$this->db->get('categoria');
                
                return $query;
 
    function prueba() {
 
        $result = $this->db->query('SELECT * FROM users');
 
        $row = $result->row();
 
        print_r($row->fullname); exit;
 
    }
 
}