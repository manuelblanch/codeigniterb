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
