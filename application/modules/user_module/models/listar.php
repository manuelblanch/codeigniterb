<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Listar extends MX_Model {
 
    function __construct()
    {
        parent::__construct();
    }


function Getusers(){

        $query=$this->db->get('category');
                
                return $query;

            }
            
function deleteUser($name)
    {
       $this->db->delete('name', array('name' => $name));
     
    }

   }         
