<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotel extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
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
		
		$this->load->view('hotel_list');
    }
	public function get_hotel_list(){
		
		isset($_POST['country_v2']['query'])? $data['place'] = $_POST['country_v2']['query']:$data['place']='';
		isset($_POST['Check-in'])? $data['check_in'] = $_POST['Check-in']:$data['check_in']='';
		isset($_POST['Check-out'])? $data['check_out'] = $_POST['Check-out']:$data['check_out']='';
		isset($_POST['no_rooms'])? $data['no_rooms'] = $_POST['no_rooms']:$data['no_rooms']='';
		isset($_POST['no_adults'])? $data['no_adults'] = $_POST['no_adults']:$data['no_adults']='';
		isset($_POST['no_children'])? $data['no_children'] = $_POST['no_children']:$data['no_children']='';
		// echo '<pre>';
		// print_r($data);
		// exit;
		$this->load->view('hotels/hotel_list',$data);
	}
   
}
