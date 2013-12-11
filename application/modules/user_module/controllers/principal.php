<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class principal extends MX_Controller {
function __construct()
    {
			parent::__construct();
            $this->load->model('Hola_model');
            $this->load->database();
            $this->lang->load('catala', 'catala');
            $this->load->helper('language');
    }

	public function principal1()
	{
		
		$this->load->view('principal.php'); 
			
}

public function listaactor1()
{
		$this->load->view('listaactor.php'); 
		$query = $this->db->get('actor');
		
		if ($query->num_rows() > 0)
		
		{
			
			foreach ($query->result() as $row)
	{
		
			echo $row->fullname;
			echo "<p>";
		}
	
		
	}
	
}



	//public function provainsertar1()
		//{
			
		//$data = array(
			//'actor_id' => 9000 ,
			//'fullname' => 'pepa',
			//);

		//$this->db->insert('actor', $data); 
//}

	//public function provaesborrar()
	//{
		//$id = 9000;
		
		//$this->db->where('actor_id', $id);
		//$this->db->delete('actor');
	//}

	public function probaupdate()
	{
		$data = array(
			'actor_id' => 8000,
			'fullname' => 'pepaete',
			);
		$id = 9000;
		$id1 = 8000; 
		$this->db->where('actor_id', $id);
		$this->db->update('actor', $data);
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

//array, el select en la clase modelo, fer select que demane la taula usuaris, fem un echo per veure si va be, 
