<?php      
  class user extends CI_Controller      
  {          
    function __construct()
    {
      parent::__construct();
      $this->load->database();
    }
    function index($category)          
    {                 
       $this->load->model('User_model', 'user');
       $data['json'] = $this->user->get($category);
       if (!$data['json']) show_404();
 
       $this->load->view('json_view', $data);
    }
  }
?>