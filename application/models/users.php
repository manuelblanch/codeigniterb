<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Model {
 
    function __construct()
    {
        parent::__construct();
    }
 
    function prueba() {
 
        $result = $this->db->query('SELECT * FROM users');
 
        $row = $result->row();
 
        print_r($row->fullname); exit;
 
    }
 
}