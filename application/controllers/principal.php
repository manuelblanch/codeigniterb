<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class principal extends CI_Controller {
function __construct()
    {
			parent::__construct();
            $this->load->model('Hola_model');
            $this->load->database();
    }

	public function principal1()
	{
		
		$this->load->view('principal.php'); 
		
	}
	public function listar()
	{
		$data['hola']=$this->hola_model->hola();
		
		$this->load->view('hola',$data); 
		
	        	
		
	}
}
