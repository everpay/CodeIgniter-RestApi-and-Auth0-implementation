<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('user_model');
       	$this->_init();
    }
    
    private function _init()
	{
		$this->output->set_template('default');
		// Javascript
        $this->load->js('assets/themes/default/js/jquery.js');
		$this->load->js('assets/themes/default/js/jquery-ui.js');
		$this->load->js('assets/themes/default/js/bootstrap.js');
        $this->load->js('assets/themes/default/js/jquery.bxslider.min.js');
        $this->load->js('assets/themes/default/js/common.js');
        // CSS
        $this->load->css('assets/themes/default/css/font-awesome.css');
		$this->load->css('assets/themes/default/css/bootstrap.css');
        $this->load->css('assets/themes/default/css/jquery-ui.css');
        $this->load->css('assets/themes/default/css/bootstrap-social.css');
	}

    function index()
    {
        if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
            $this->load->view('Profile/index', $data);
        }
        
       
    }

    function login(){
        $details = $this->user_model->get_user_by_id($this->session->userdata('uid'));
        $data['uname'] = $details[0]->fname . " " . $details[0]->lname;
        $data['uemail'] = $details[0]->email;
        $this->load->view('profile_view', $data);

    }
}

