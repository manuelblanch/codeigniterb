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
		$query = $this->db->get('products');
		
		if ($query->num_rows() > 0)
		
		{
			
			foreach ($query->result() as $row)
	{
		
			echo $row->productName;
			echo "<p>";
}
	}
}
	
	public function listar1()
	{
		
		
		$this->load->view('listar.php'); 
		
	}

	
public function crear()
	{
		$data['hola']=$this->hola_model->hola();
		
		$this->load->view('hola',$data);
		
		
}

}
