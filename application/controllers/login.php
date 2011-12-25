<?php


class Login extends CI_Controller {
	function index() {
		
		$this->load->view('login_view');
		
	
	}
	
	function validate_credentials() {
		$this->load->model('login_model');
		$query = $this->login_model->validate();
			
			
			$this->form_validation->set_rules('username','Login', 'trim|required');
			$this->form_validation->set_rules('password','Hasło', 'trim|required');
		
				if($this->form_validation->run() == FALSE) {
					$this->session->set_flashdata("pesan","Podałeś błędny login lub hasło");
					$this->load->view('login_view.php');
					
				} else {
		
		if($query) {
			$data = array(
				'username'=>$this->input->post('username'),
				'password'=>$this->input->post('password'),
				'is_logged_in' => true
				);
			 $this->session->set_flashdata("pesan","Witaj<b> ".$data['username']."</b>");
			$this->session->set_userdata($data);
			
			redirect('active_ctrl');
		}
		else {
			$this->session->set_flashdata("pesan","Podałeś błędny login lub hasło");
			$this->load->view('login_view.php');
		}
	}
}
	function logout()  
    {  
        $this->session->sess_destroy();  
 
        redirect('login');  
    }
	
	
}

?>