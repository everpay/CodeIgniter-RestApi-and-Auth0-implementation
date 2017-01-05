<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotel extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

    private function _init()
	{
		
		$this->output->set_template('default');
        // CSS
        $this->load->css('assets/themes/default/css/jquery-ui.css');
		$this->load->css('assets/themes/default/css/bootstrap.css');
        $this->load->css('assets/themes/default/css/bootstrap-social.css');
        $this->load->css('assets/themes/default/css/font-awesome.css');
 		
    
        // Javascript
        //$this->load->js('https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js');
		$this->load->js('assets/themes/default/js/jquery.js');
		$this->load->js('assets/themes/default/js/jquery-ui.js');
		$this->load->js('assets/themes/default/js/bootstrap.js');
        $this->load->js('assets/themes/default/js/jquery.bxslider.min.js');
        $this->load->js('assets/themes/default/js/common.js');
        
	}


    function index()
    {
      	//$this->load->view('hotel/index');
    }

    public function add_hotel()
    {
		$this->load->view('hotel/add_hotel');
    }

	public function check_hotel_name()
    {	
		// if(isset($_POST)){
		// 	echo"<pre>";
		// 	print_r($_POST);
		// 	exit;
		// }
	}
}