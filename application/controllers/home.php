<?php
	if(!defined('BASEPATH'))exit('No direct script access allowed');
	
	class Home extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->library('parser');
		}
		
		public function index(){
			$this->load->view('frontside/header_view');
			$this->load->view('frontside/left_view');
			$this->load->view('frontside/about_view');
			$this->load->view('frontside/footer_view');
		}
		
		public function about(){
			$this->load->view('frontside/header_view');
			$this->load->view('frontside/left_view');
			$this->load->view('frontside/about_view');
			$this->load->view('frontside/footer_view');
		}
		
		public function portfolio(){
			$this->load->view('frontside/header_view');
			$this->load->view('frontside/left_view');
			$this->load->view('frontside/portfolio_view');
			$this->load->view('frontside/footer_view');
		}
		
		public function resume(){
			$this->load->view('frontside/header_view');
			$this->load->view('frontside/left_view');
			$this->load->view('frontside/resume_view');
			$this->load->view('frontside/footer_view');
		}
		
		public function blog(){
			$this->load->view('frontside/header_view');
			$this->load->view('frontside/left_view');
			$this->load->view('frontside/blog_view');
			$this->load->view('frontside/footer_view');
		}
		
		public function contact(){
			$this->load->view('frontside/header_view');
			$this->load->view('frontside/left_view');
			$this->load->view('frontside/contact_view');
			$this->load->view('frontside/footer_view');
		}
	}

/*End of file home.php*/
/*Location:.application/controllers/home.php*/