<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Simpatic extends CI_Controller {
	
	function __construct();
		
		parent::__construct();
		$this->config->load('codeigniterhelloworld');
	}
		
	 public function index()
	{
		$this->grettings('mon');
	}
	
	public function grettings($name)
		$data= array();
		
		$data['parametre1']=$name;
		$data['parametre2']=$name;
		
		$this->load->view('grettings',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */