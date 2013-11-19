<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_User extends CI_Model {
 
    function __construct()
    {
        parent::__construct();
        $this->load->database('users');
    }
    
    function insertUser($category_id, $name){
        $data = array('category_id' => $category_id, 'name'=> $name);
        return $this->db->insert('category', $data);
        }


function Getusers(){

        $query=$this->db->get('category');
                
                return $query;

            }

   }         
