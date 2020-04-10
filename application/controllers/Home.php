<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	// public function index()
	// {
 //        $this->load->view('header');
 //        $this->load->view('login');
 //        $this->load->view('footer');
	// }
	public function index(){

		$this->load->model('LoginModel');
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		// $this->load->library('session');
		if($this->input->post('login')==True){
			if($this->form_validation->run()===True){
				$result=$this->LoginModel->login();
				if(sizeof($result)>0){
					if ($result[0]['type']=='admin') {
						$this->session->set_userdata("loginId",$result[0]['login_id']);
						redirect(base_url().'admin');
					}
				}
				else{
					echo '<script>alert("Invalid username or password");</script>';
					//echo "not valid user";
				}	
			}
		}	
        $this->load->view('header');
        $this->load->view('login');
        $this->load->view('footer');

	}
	public function logout(){
		$this->session->unset_userdata('loginId');
		redirect(base_url().'Home');
	}
}
?>