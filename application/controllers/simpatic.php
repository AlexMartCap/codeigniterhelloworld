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
        
        public function grettings_2() {
              $data= array();
           
              //var_export($_POST);
           
              $nom = $this->input->get_post('nom');
            
              $data['nom'] = $nom;
                 
              $this->load->view('grettings',$data);
        }
        	
	public function grettings($name)
		$data= array();
		
		$data['parametre1']=$name;
		$data['parametre2']=$this->config->item('academin_person');
		
		$this->load->view('grettings',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */