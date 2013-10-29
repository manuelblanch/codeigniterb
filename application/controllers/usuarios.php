<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class usuarios extends CI_Controller{
	

    function __construct()
    {
			parent::__construct();
            $this->load->model('Hola_model');
    }
    
	/*public function crear()
	{
		
		$this->load->view('crear'); 
}
	public function modificar($id)
	{
		
		$this->load->view('modificar'); 
	}*/

	public function listar()
	{
		$data['hola']=$this->Hola_model->hola();
		
		$this->load->view('hola',$data); 	
	}
	public function eliminar($id)
	{
		
		$this->load->view('eliminar'); 
	}

		public function grocery()
	{
		
		$this->load->view('examples'); 
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
