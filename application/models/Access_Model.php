<?php
	if(!defined('BASEPATH'))exit('No direct script access allowed');
		class Access_Model extends CI_Model{
			public function authen($usr,$pass){
				$query = $this->db->query("select * from abeev_account where account_username='".$usr."' and account_password=md5('".$pass."')");
				return $query;
			}
		}
/*End of file access_model.php*/
/*Location:.application/access_model.php*/