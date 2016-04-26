<?php
	if(!defined('BASEPATH'))exit('No direct script access allowed');
	
	class Login_Controller extends CI_Controller{
		public function __construct(){
			parent::__construct();
		}
		
		public function index(){
			$cek = $this->session->userdata('signinsukses');
			if(empty($cek)){
				$this->load->view('backside/login_view');
			}else{
				$this->load->view('backside/dashboard_view');
			}
		}
		
		public function login_action(){
			$this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('password','Password','required');
			if($this->form_validation->run() == false){
				$this->index();
			}else{
				$usr = $this->input->post('username');
				$pass = $this->input->post('password');
				$this->load->model('access_model');
				$access = $this->access_model->authen($usr,$pass);
				if($access->num_rows() == 0){
					$this->session->set_flashdata('signin_result','<div><i class="fa fa-exclamation-circle" style="margin-top:3px;margin-right:5px;color:red"></i>Sorry your access is not available</div>');
					header('Location:'.base_url().'special_admin/');
				}else{
					foreach($access->result() as $acs){
					$sess['signinsukses'] = 'iloveragnarok';
					$sess['username'] = $acs->account_username;
					$sess['name'] = $acs->account_name;
					$sess['email'] = $acs->account_email;
					$sess['pict'] = $acs->profile_pict;
					$this->session->set_userdata($sess);
					}
					header('Location:'.base_url().'dashboard/');
				}
			}
		}
		
		public function logout_action(){
			$logout = $this->session->sess_destroy();
			if($logout){
				Header('Location:'.base_url().'special_admin/');
			}else{
				Header('Location:'.base_url().'special_admin/');
			}
		}
	}
	
/*End of file login_controller.php*/
/*Location:.application/backbone/login_controller.php*/