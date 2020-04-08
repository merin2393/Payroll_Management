<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('loginId')==False){
			$this->session->set_userdata('message','Login to Continue !');
			redirect(base_url().'Home/login');
		}		
	}
	public function index()
	{
        $this->load->view('admin_header');
		$this->load->view('admin_home');
	}
	# Add Employee
	public function employee(){
		if($this->input->post('register')==True){
    		 $config['upload_path'] = './images/';
             $config['allowed_types'] = '*';
             $config['max_size'] = 10000;
             $config['max_width'] = 16024;
             $config['max_height'] = 16768;
             $config['file_name'] = $_FILES['photo']['name'];
             if ( ! is_dir($config['upload_path']) ) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
             $this->load->library('upload',$config);
             $this->upload->initialize($config);
             
    		$this->load->library('upload', $config);
		    if ( ! $this->upload->do_upload('photo')) {
		        echo 'error';
		    } else {

	        // return array('upload_data' => $this->upload->data());
	        $up_file_name = $this->upload->data();
				$fname=$up_file_name['file_name'];
	             	// $this->load->helper('file');
	             	$fpath=$up_file_name['file_path'].$fname;
	             	//echo $fpath;
	   		 }

             $userData = array(
                'emp_name' => $this->input->post('emp_name'),
                'email' => $this->input->post('email'),
                'phone' => $this->input->post('phone'),
                'job_title' => $this->input->post('job_title'),
                'date_of_join' => $this->input->post('date_of_join'),
                'address' => $this->input->post('address'),
                'photo' => $fname,
                'department' => $this->input->post('department')               
            );
               //print_r($userData);
             $insertUserData = $this->AdminModel->employee($userData);
        		//print_r($insertUserData);
             redirect(base_url().'admin/employee');

		}
		$data['user'] = $this->AdminModel->view_employee();
		$this->load->view('admin_header');
		$this->load->view('admin_employee',$data);
	}
	# Edit Employee
	public function editEmployee($id){		
		if($this->input->post('edit')==True){
			
			if($_FILES['photo']['name']!=""){
			$config['upload_path'] = './images/';
             $config['allowed_types'] = '*';
             $config['max_size'] = 10000;
             $config['max_width'] = 16024;
             $config['max_height'] = 16768;
             // $config['file_name'] = $_FILES['photo']['name'];
             if ( ! is_dir($config['upload_path']) ) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
             $this->load->library('upload',$config);
             $this->upload->initialize($config);
             
    		$this->load->library('upload', $config);
		    if ( ! $this->upload->do_upload('photo')) {
		        echo 'error';
		    } else {

	        // return array('upload_data' => $this->upload->data());
	        $up_file_name = $this->upload->data();
				$fname=$up_file_name['file_name'];
	             	// $this->load->helper('file');
	             	$fpath=$up_file_name['file_path'].$fname;
	             	//echo $fpath;
	   		 }
			}
			else{
				// echo "else";
				$fname=$this->input->post('old');

			}
			
             $userData = array(
                'emp_name' => $this->input->post('emp_name'),
                'email' => $this->input->post('email'),
                'phone' => $this->input->post('phone'),
                'job_title' => $this->input->post('job_title'),
                'date_of_join' => $this->input->post('date_of_join'),
                'address' => $this->input->post('address'),
                'photo' => $fname,
                'department' => $this->input->post('department')               
            );
              // print_r($userData);
             $updateUserData = $this->AdminModel->edit_employee($userData,$id);
        	
			 redirect(base_url().'admin/employee');
		}
		$data['user'] = $this->AdminModel->view_employee($id);
		$this->load->view('admin_header');
		$this->load->view('edit_employee',$data);
	}
	# delete an item from employee
	public function deleteEmployee($id){
		$this->AdminModel->delete_employee($id);
		redirect('admin/employee');
	}
	# Add monthly salary
	public function salary(){
		$this->form_validation->set_rules('emp_id','employee_name','required');
		$this->form_validation->set_rules('salary_date','salary_date','required');
		$this->form_validation->set_rules('payment_type','payment_type','required');
		$this->form_validation->set_rules('payment_mode','payment_mode','required');
		$this->form_validation->set_rules('salary_amount','salary_amount','required');
		$this->form_validation->set_rules('dedution','dedution','required');
		$this->form_validation->set_rules('net-pay','net-pay','required');

		if($this->input->post('salary')==True){
			if($this->form_validation->run()===True){
				$this->AdminModel->salary();
				echo "successfull";
				redirect(base_url().'admin/salary');
			}
		}
		$data['employee'] = $this->AdminModel->view_employee();
		$this->load->view('admin_header');
		$this->load->view('employee_salary',$data);
		$this->load->view('admin_footer');
	}
	# View salary
	public function viewsalary(){
		$data['salary'] = $this->AdminModel->view_salary();
		$this->load->view('admin_header');
		$this->load->view('view_salary',$data);
		$this->load->view('admin_footer');
	}
	# Search Employee
	public function display(){
		$this->load->view('admin_header');
		$this->load->view('employee_search');
	}

	public function search()
 	{
 		$output = '';
		$query = '';
		if($this->input->post('query'))
		{
		$query = $this->input->post('query');
		}
		$data = $this->AdminModel->fetch_data($query);
		// print_r($data);
		$output .= '
		<div class="table-responsive">
		 <table class="table table-bordered table-striped">
		  <tr>
		    <th>Employee name</th>
			<th>Salary Date</th>
			<th>Payment Type</th>
			<th>Payment Mode</th>
		    <th>Salary Amount</th>
			<th>Dedution</th>
			<th>Net-pay</th>
		  </tr>
		';
			if($data->num_rows() > 0)
			{
				foreach($data->result() as $row)
					{
						$output .= '
									<tr>
									<td>'.$row->emp_name.'</td>
									<td>'.$row->salary_date.'</td>
									<td>'.$row->payment_type.'</td>
									<td>'.$row->payment_mode.'</td>
									<td>'.$row->salary_amount.'</td>
									<td>'.$row->dedution.'</td>
									<td>'.$row->net_pay.'</td>
									</tr>
									';
					}
			}
			else
			{
				$output .= '<tr>
   				<td colspan="5">No Data Found</td>
  				</tr>';
			}
			$output .= '</table>';
			echo $output;
	 	// 	// $this->load->view('admin_header');
			// $this->load->view('employee_search');
			// // $this->load->view('admin_footer');
	 	}
	 
}
?>
