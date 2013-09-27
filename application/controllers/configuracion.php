<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class configuracion extends CI_Controller {


	public function changepassword()
	{
		
		$this->load->view('changepassword'); 
}
	public function salir()
	{
		
		$this->load->view('salir'); 
}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
