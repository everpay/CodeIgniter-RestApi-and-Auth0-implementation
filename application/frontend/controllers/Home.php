<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
        //$this->load->helper(array('url', 'html'));
        $this->load->library('session');
		$this->load->helper('security');
      	$this->load->library('tank_auth');
		
		$this->lang->load('tank_auth');
		
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
		
		$url = 'http://partners.api.skyscanner.net/apiservices/pricing/v1.0/7ba59ba5863a454db96229ecb2bafe7c_ecilpojl';
		$data = array('apiKey' => 'lo405220694244784752148639865299', 'country' => 'UAE', 'currency' => 'AED',
		'locale' => 'pt-BR', 'originplace' => 'SDU', 'destinationplace' => 'GRU', 'outbounddate' => '2017-02-23', 'locationschema' => 'Iata', 'adults' => 1);   
		$httpdata = http_build_query($data);
		$ch = curl_init();
		curl_setopt($ch,CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $httpdata);
		curl_setopt($ch, CURLOPT_HEADER, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded', 'Accept: application/json'));
		curl_setopt($ch, CURLOPT_VERBOSE, 1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$response = curl_exec($ch);
		curl_close($ch);
		echo "<pre>";
		print_r($response);
		exit;
		$this->load->view('Home', $data);
    }

	   public function login_form(){

		   $this->load->view('auth/login_form');
	   }
   
}
