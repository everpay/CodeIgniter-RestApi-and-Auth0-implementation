<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
        //$this->load->helper(array('url', 'html'));
        $this->load->model('get_hotels');
		
		$this->_init();
	}

    private function _init()
	{
		$this->output->set_template('default');
        // CSS
        $this->load->css('assets/themes/default/css/jquery-ui.css');
		$this->load->css('assets/themes/default/css/bootstrap.css');
        $this->load->css('assets/themes/default/css/bootstrap-social.css');
        $this->load->css('assets/themes/default/css/font-awesome.css');
		$this->load->css('assets/themes/default/css/jquery.typeahead.css');
		    
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
        // if (!$this->tank_auth->is_logged_in()) {
		// 	redirect('/auth/login/');
		// } else {
		// 	$data['user_id']	= $this->tank_auth->get_user_id();
		// 	$data['username']	= $this->tank_auth->get_username();
		// 	$this->load->view('Home', $data);
		// }
		// Get login for counting attempts to login
		$data['result'] = $this->get_hotels->get_locations();

		// echo "<pre>";
		// print_r($data['result']['name']);
		// print_r($data['result']['city_hotel']);
		// exit;
		$this->load->view('Home',$data);
    }
	public function login_form(){
		$this->load->view('auth/login_form');
	}
	public function get_locations()
	{
		$data['result'] = $this->get_hotels->get_locations();

		json_encode($data);
		print_r(json_encode($data));
		
	}
   
}
