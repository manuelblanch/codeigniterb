<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class usuarios extends CI_Controller{
	

    function __construct()
    {
			parent::__construct();
			$this->load->database();
        //    $this->load->model('Hola_model');
            $this->load->model('model_user');
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
		
		$users ['query'] = $this->model_user->Getusers();
		$this->load->view('listar', $users); 
		

	}
	public function eliminar()
	{
		
		$this->load->view('eliminar'); 
	}

		public function grocery()
	{
		
		$this->load->view('examples'); 
	}

/*	public function listarusers()
        {        
                        
                $users ['query'] = $this->model_user->Getusers();
                $this->load->view('listar', $users);
        }*/

	/*public function listarusers()
	{
		$this->load->view('listarusers');
		$persona = array(
			'Nom_usuari' => 'juanito',
			'Edat' => 45,
			'Poblacio' => 'Cheste',
			'Provincia' => 'Valencia',
			'DNI' => 8765434456766,
			'Telefon' => 95734679898,
			'Estat_civil' => 'Soltero'
			);
	}*/

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
