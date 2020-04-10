<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class AdminModel extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	public function employee($data = array()){
       
        $insert = $this->db->insert('employee',$data);
        if($insert){
            $q=$this->db->insert_id();
            // print_r($q);
            return $q;
        }else{
            return false;    
        }
    }
    public function view_employee($id=''){
    	if($id==True){
    		$data=array('emp_id'=>$id);
    		$query=$this->db->get_where('employee',$data);
    		$q=$query->result_array();
    		return $q;
    	}
    	else{
    		$query=$this->db->get('employee');
    		return $query->result_array();
    	}
    }
    public function edit_employee($data = array(),$id){

    	$this->db->where('emp_id',$id);
		$q=$this->db->update('employee',$data);
		// print_r($q);
		return $q;
    }
    #	method for delete a employee
    public function delete_employee($id){
			$query=$this->db->where('emp_id',$id); 
			$q=$this->db->delete('employee');
			//print_r($q);
			return $q;
		}
    public function salary($month,$year){
        $data=array(
            'emp_id' => $this->input->post('emp_id'),
            'salary_date' => $this->input->post('salary_date'),
            'salary_month' =>$month,
            'salary_year' =>$year,
            'payment_type' => $this->input->post('payment_type'),
            'payment_mode' => $this->input->post('payment_mode'),
            'salary_amount' => $this->input->post('salary_amount'),
            'dedution' => $this->input->post('dedution'),
            'net_pay' => $this->input->post('net-pay'),
        );
        return $this->db->insert('salary',$data);

    }
    public function view_salary($id=''){
            

            if($id==True){
            $this->db->select('*');
            $this->db->from('employee');
            $this->db->join('salary','employee.emp_id=salary.emp_id','inner');
            $this->db->where('salary_id',$id);
            $query=$this->db->get();
            $q=$query->result_array();
            return $q;
            }
            else{
            $this->db->select('*');
            $this->db->from('employee');
            $this->db->join('salary','employee.emp_id=salary.emp_id','inner');
            $this->db->order_by('salary_id', 'DESC');
            $query=$this->db->get();
            return $query->result_array();
            }

        }
        public function edit_salary($id,$month,$year){
          $data=array(
            'emp_id' => $this->input->post('emp_id'),
            'salary_date' => $this->input->post('salary_date'),
            'salary_month' =>$month,
            'salary_year' =>$year,
            'payment_type' => $this->input->post('payment_type'),
            'payment_mode' => $this->input->post('payment_mode'),
            'salary_amount' => $this->input->post('salary_amount'),
            'dedution' => $this->input->post('dedution'),
            'net_pay' => $this->input->post('net-pay'),
        );
        $this->db->where('salary_id',$id);
        $query=$this->db->update('salary',$data);
        return $query;
        }

       public function fetch_data($query)
     {
      // print_r($query);
      $this->db->select('*');
      $this->db->from('employee');
      $this->db->join('salary','employee.emp_id=salary.emp_id','inner');
      if($query != '')
      {
       $this->db->like('emp_name', $query);
       $this->db->or_like('salary_date', $query);
      }
      $this->db->order_by('salary_id', 'DESC');
      // $this->db->limit(0,2);
      $q=$this->db->get();
      $a=$q->result();
      return $q;
     
     }
}
?>