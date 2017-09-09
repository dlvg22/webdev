<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Boots extends CI_Controller {
	
	
	public function __construct(){
		
		parent::__construct();
		
		$this->load->model('student_model','Student');
	}

	public function index()
	{
		$header['title']='MAGICAL CITY';
		// $data['name']='reeevlonn';
		// $data['years']='223';
		
		$rs=$this->Student->read();
		
		foreach($rs as $s)
		{
			$info=array(
			'idno'=>$s['idno'],
			'firstname'=>$s['fname'],
			'middlename'=>$s['mname'],
			'lastname'=>$s['lname'],
			'course'=>$s['course'],
			'sex'=>$s['sex']
			);
			$student[]=$info;
			
		}
		$data['student']=$student;
		
	$this->load->view('include/header',$header);
	$this->load->view('students/contents',$data);
	$this->load->view('include/footer');
		
	}
	public function add_student(){
		$header['title']="ADD student";
		if($_SERVER['REQUEST_METHOD']=='POST'){
			
		$validate=array(
		array('field'=>'idno','label'=>'ID no','rules'=>'required|min_length[5]'),
		array('field'=>'fname','label'=>'first name','rules'=>'required'),
		array('field'=>'mname','label'=>'Middle','rules'=>'required'),
		array('field'=>'lname','label'=>'Last Name','rules'=>'required'),
		array('field'=>'course','label'=>'course','rules'=>'required'),
		array('field'=>'sex','label'=>'sex','rules'=>'required'),
		);
		$this->form_validation->set_rules($validate);
		if($this->form_validation->run()===FALSE)
		{
			$data['errors']=validation_errors();
			$header['title']="Christine";
			$this->load->view('include/header',$header);
			$this->load->view('students/new_student',$data);
			$this->load->view('include/footer');
			
		}
		else {
		$data=array(
		'idno'=>$_POST['idno'],
		'fname'=>$_POST['fname'],
		'mname'=>$_POST['mname'],
		'lname'=>$_POST['lname'],
		'course'=>$_POST['course'],
		'sex'=>$_POST['sex']
		
		);
		$this->Student->create($data);		
		redirect('boots','refresh');
		}
		// $validate=array(
		// array('field'=>'idno')
		
		// )
			
		}
		else {
			
			$header['title']="Christine";
			$this->load->view('include/header',$header);
			$this->load->view('students/new_student');
			$this->load->view('include/footer');
			
		}
		
		
	}
	public function del($id)
	{
	$this->Student->delete_student(array('idno'=>$id));
		redirect('boots','refresh');
	}
	
		public function modal(){
		$header_data['title'] = "Add New Student";	
		$this->load->view('include/header',$header_data);	
		$this->load->view('students/addForm');
		$this->load->view('include/footer');		
	}
	public function add_course(){
		$header_data['title']="Add new course";
		if($_SERVER['REQUEST_METHOD']=='POST'){
		$data=array('name'=>$_POST['course']);
		$this->Student->add_crs($data);
		$this->load->view('include/header',$header_data);	
		$this->load->view('students/course');
		$this->load->view('include/footer');
		
		}
		else{	
		$this->load->view('include/header',$header_data);	
		$this->load->view('students/addCourse');
		$this->load->view('include/footer');
		}
		
	}
	
}
?>