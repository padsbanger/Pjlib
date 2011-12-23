<?php


class Login extends CI_Controller {
	function index() {
		
		$this->load->view('login_view');
	}
	
	function validate_credentials() {
		$this->load->model('login_model');
		$query = $this->login_model->validate();
		
		if($query) {
			$data = array(
				'username'=>$this->input->post('username'),
				'is_logged_in' => true
				);
			$this->session->set_userdata($data);
			redirect('active_ctrl');
		}
		else {
			$this->index();
		}
	}
	
	function logout()  
    {  
        $this->session->sess_destroy();  
        redirect('login');  
    }
	
	
}

?>