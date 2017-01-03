<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	//public function index()
	//{
		//$this->load->view('Accounts/Login');
	//}
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('user_model');
  	    $this->_init();
	}

    private function _init()
	{
        // CSS
        $this->load->css('assets/themes/default/css/jquery-ui.css');
		$this->load->css('assets/themes/default/css/bootstrap.css');
        $this->load->css('assets/themes/default/css/bootstrap-social.css');
        $this->load->css('assets/themes/default/css/font-awesome.css');
    
        // Javascript
        $this->load->js('assets/themes/default/js/jquery.js');
		$this->load->js('assets/themes/default/js/jquery-ui.js');
		$this->load->js('assets/themes/default/js/bootstrap.js');
        $this->load->js('assets/themes/default/js/jquery.bxslider.min.js');
        $this->load->js('assets/themes/default/js/common.js');
        
	}


    function index()
    {
        $this->load->view('Accounts/login');
    }
    
}
