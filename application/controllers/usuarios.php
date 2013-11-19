<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class usuarios extends CI_Controller{
	

    function __construct()
    {
			parent::__construct();
			$this->load->database();
        //    $this->load->model('Hola_model');
            $this->load->model('model_user');
            $this->load->helper('url');
    }
    
	public function crear()
	
	{
		
		$this->load->view('crear'); 	
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
	
	public function inserta()
        {
                
               	$this->load->view('inserta');
                $category_id = $this->input->post('category_id');
                $name = $this->input->post('name');
                if ($name!=null);
                $this->model_user->insertUser($category_id, $name);

                
}
	public function eliminar()
	{
		
		$this->load->view('eliminar'); 
	}

		public function grocery()
	{
		
		$this->load->view('examples'); 
	}

	/*public function crear_element()

	{

		$this->load->view('insertat');
		


	}
*/
	public function insertat()

	{
		$this->load->view('insertat');
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
