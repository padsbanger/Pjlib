<?php

class Login_Model extends CI_Model {
	
	function validate() {
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password', $this->input->post('password'));
		$query = $this->db->get('user');
		if($query->num_rows == 1) {
			return true;
		}
	
	}
	
	function updatepass($data) {
		$this->db->where('id',3);
		$i = $this->db->update('user', $data); 	  
		return $i;
	}
	
	 function getpassword() {
	 
   		$query = $this->db->get('user');
		$user = array();

		foreach ($query->result() as $row) {
		$user[] = array(
		'password' => $row->password,
		);
	}

	return $user;
	}
 }
	


?>