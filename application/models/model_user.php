<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_User extends CI_Model {
 
    function __construct()
    {
        parent::__construct();
        $this->load->database('users');
    }


function Getusers(){

        $query=$this->db->get('category');
                
                return $query;

            }

   }         