<?php 
	if(!defined('BASEPATH'))exit('No direct script access allowed');
		class Dashboard_Controller extends CI_Controller{
			public function __construct(){
				parent::__construct();
			}
			
			public function index(){
				$this->load->view('backside/dashboard_view');
			}
		}
/*End of file dashboard_controller.php*/
/*Location:.application/backbone/dashboard_controller.php*/
