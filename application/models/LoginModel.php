<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class LoginModel extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function login(){
		$data = array(
			'username'=>$this->input->post('username'),
			'password'=>$this->input->post('password'),
			);
		//$qurey = $this->db->get_where('login',$data);

		$this->db->select('*');
		$this->db->from('login');
		$this->db->where($data);
		$qurey = $this->db->get();	
		return $qurey->result_array();
	}
}

?>