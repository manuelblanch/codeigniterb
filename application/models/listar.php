<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Listar extends CI_Model {
 
    function __construct()
    {
        parent::__construct();
    }


function Getusers(){

        $query=$this->db->get('category');
                
                return $query;

            }

   }         