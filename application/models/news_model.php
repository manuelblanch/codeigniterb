<?php
class News_model extends CI_Model {

   public function __construct()
   {
      $this->load->database();
   }

   public function set_news()
   {

      $this->load->helper('url');
      $slug = url_title($this->input->post('titulo'), 'dash', TRUE);
      
      $data = array(
         'title' => $this->input->post('titulo'),//capturo los datos que me envian desde la vista
         'slug' => $slug,
         'text' => $this->input->post('texto')
      );
      
      return $this->db->insert('news', $data);
   }

}