<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hola_model extends CI_Model{

    function __construct()
    {
        parent::__construct();
    }
    
    function hola(){
			return "mon anem a casa";			
	}
}


