<?php   
  class User_model extends CI_Model  
  {     
    function get($category_id)     
    

    {       
      $result = $this->db->get_where('category', array('category_id' => $category_id));
      return $result->row();
    }
  }
?>