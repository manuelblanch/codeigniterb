<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class usuarios extends CI_Controller{
	

    function __construct()
    {
			parent::__construct();
            $this->load->model('Hola_model');
    }
    
	public function crear()
	
	{
		
		$data['hola']=$this->Hola_model->hola();
		
		$this->load->view('hola',$data); 	
}
	public function modificar()
	{
		
		$this->load->view('modificar'); 
	}

	public function listar()
	{
		
		
		$this->load->view('listar'); 
		

	}
	public function eliminar()
	{
		
		$this->load->view('eliminar'); 
	}

		public function grocery()
	{
		
		$this->load->view('examples'); 
	}

	public function listarusers()
	{
		$persona = array(
			'nombre' => 'juanito',
			'cognoms' => 'valderrama',
			'dni' => '8765434456766'
			);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
