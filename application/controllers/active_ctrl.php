<?php

class Active_ctrl extends CI_Controller {

   function __construct() {
		
        parent::__construct();
 		$this->is_logged_in();
	
        $this->load->model('Book_model');
       	$this->load->library('pagination');


    }



    function index($sort_by = 'tytul', $sort_order = 'asc', $offset = 0) {
	
		 
		//pagination config
		
		
			$limit = 20;
			$data['fields'] = array(
				'id' => 'ID',
				'tytul' => 'Tytuł',
				'imie_autor' => 'Imie autora',
				'nazwisko_autor' => 'Nazwisko autora',
				'rok_wydania' => 'Rok wydania',
				'wydawnictwo' => 'Wydawnictwo',
				'kategoria' =>'Kategoria'
			);
		
			$results = $this->Book_model->getBook($limit, $offset, $sort_by, $sort_order);

			$data['films'] = $results['rows'];
			$data['num_results'] = $results['num_rows'];
			
			
				$this->load->library('pagination');
				$config = array();
				$config['base_url'] = site_url("active_ctrl/index/$sort_by/$sort_order");
				$config['total_rows'] = $data['num_results'];
				$config['per_page'] = $limit;
				$config['uri_segment'] = 5;
				$this->pagination->initialize($config);
				$data['pagination'] = $this->pagination->create_links();

				$data['sort_by'] = $sort_by;
				$data['sort_order'] = $sort_order;


				$this->load->view('ac_book_view.php', $data);
	 
    }

	function display($query_id = 0, $sort_by = 'tytul', $sort_order = 'asc', $offset = 0) {
		
		$limit = 20;
		$data['fields'] = array(
			'id' => 'ID',
			'tytul' => 'Tytuł',
			'imie_autor' => 'Imię autora',
			'nazwisko_autor' => 'Nazwisko autora',
			'wydawnictwo' => 'Wydawnictwo',
			'rok_wydania' => 'Rok wydania',
			'kategoria' =>'Kategoria'
		);
		
		$this->input->load_query($query_id);
		
		$query_array = array(
			'tytul' => $this->input->get('tytul'),
			'kategoria' => $this->input->get('kategoria'),
			'rok_wydania_comparison' => $this->input->get('rok_wydania_comparison'),
			'rok_wydania' => $this->input->get('rok_wydania'),
		);
		
		$data['query_id'] = $query_id;
		
		$this->load->model('book_model');
		
		$results = $this->book_model->search($query_array, $limit, $offset, $sort_by, $sort_order);
		
		$data['films'] = $results['rows'];
		$data['num_results'] = $results['num_rows'];
		
		// pagination
		$this->load->library('pagination');
		$config = array();
		$config['base_url'] = site_url("active_ctrl/display/$query_id/$sort_by/$sort_order");
		$config['total_rows'] = $data['num_results'];
		$config['per_page'] = $limit;
		$config['uri_segment'] = 6;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		
		$data['sort_by'] = $sort_by;
		$data['sort_order'] = $sort_order;
		
		$data['category_options'] = $this->Book_model->category_options();
		
		$this->load->view('wyszukiwarka_view', $data);
	}
	
	
	function search() {
		
		$query_array = array(
			'tytul' => $this->input->post('tytul'),
			'kategoria' => $this->input->post('kategoria'),
			'rok_wydania_comparison' => $this->input->post('rok_wydania_comparison'),
			'rok_wydania' => $this->input->post('rok_wydania'),
		);
		
		$query_id = $this->input->save_query($query_array);
		
		redirect("active_ctrl/display/$query_id");
		
	}


    function add() {
        $this->load->view('ac_book_add_view.php');
    }

	
	function archives() {
		
	    $config['base_url'] = 'http://localhost:8888/pjlib/index.php/active_ctrl/archives';
		$config['total_rows'] = $this->Book_model->countArchive();
		$config['per_page']=10;
		$config['num_links']=15;
		
		$this->pagination->initialize($config);
		
		$data = $this->Book_model->getArchives($config['per_page'],$this->uri->segment(3));
        $input['book'] = $data;
		$this->load->view('archives_view',$input);
	}
	
	
	function is_logged_in() {
		$is_logged_in = $this->session->userdata('is_logged_in');
		
		if(!isset($is_logged_in) || $is_logged_in != 'true') {
			 $this->load->view('login_view');
		}
	}

    function save_data() {
	
		$this->form_validation->set_rules('tytul','Tytuł', 'trim|required');
		$this->form_validation->set_rules('imie_autor','Imie autora', 'trim|required');
		$this->form_validation->set_rules('nazwisko_autor','Nazwisko autora', 'trim|required');
		$this->form_validation->set_rules('wydawnictwo','Wydawnictwo', 'trim|required');
		$this->form_validation->set_rules('rok_wydania','Rok wydania', 'trim|required|integer');
		$this->form_validation->set_rules('kategoria','Kategorię', 'trim|required');
	
		if($this->form_validation->run() == FALSE) {
			
			$this->load->view('ac_book_add_view.php');
		} else {
			
			  $tytul = trim($this->input->post('tytul'));
		        $imie_autor = trim($this->input->post('imie_autor'));
				$nazwisko_autor = trim($this->input->post('nazwisko_autor'));
		        $wydawnictwo = trim($this->input->post('wydawnictwo'));
				$rok_wydania = trim($this->input->post('rok_wydania'));
				$kategoria = trim($this->input->post('kategoria'));

		        $data = array(
		                  "tytul" => $tytul,
		                  "imie_autor" => $imie_autor,
		                  "nazwisko_autor" => $nazwisko_autor,
						  "wydawnictwo" => $wydawnictwo,
						  "rok_wydania" => $rok_wydania,
						  "kategoria" => $kategoria
		                );
		        $this->Book_model->insert($data);
		        $this->session->set_flashdata("pesan","Książka została dodana poprawnie.");
		        redirect('active_ctrl');
			
		}
	
	
      
    }

    function edit() {
        $id = $this->uri->segment(3);
        $data = $this->Book_model->getBookById($id);
        $input['book'] = $data;
        $this->load->view('ac_book_edit_view.php',$input);
    }

    function update_data() {
        $id = trim($this->input->post('id'));
        $tytul = trim($this->input->post('tytul'));
	    $imie_autor = trim($this->input->post('imie_autor'));
		$nazwisko_autor = trim($this->input->post('nazwisko_autor'));
	    $wydawnictwo = trim($this->input->post('wydawnictwo'));
	    $rok_wydania = trim($this->input->post('rok_wydania'));
		$kategoria = trim($this->input->post('kategoria'));

        $data = array(
                  "tytul" => $tytul,
                  "imie_autor" => $imie_autor,
                  "nazwisko_autor" => $nazwisko_autor,
				  "wydawnictwo" => $wydawnictwo,
				  "rok_wydania" => $rok_wydania,
				  "kategoria" => $kategoria
                 );
        $this->Book_model->update($data,$id);
        $this->session->set_flashdata("pesan","Książka została zedytowana poprawnie.");
        redirect('active_ctrl');
    }

    function delete() {
        $id = $this->uri->segment(3);
        $data = $this->Book_model->getBookById($id);
        $input['book'] = $data;
        $this->load->view('ac_book_delete_view.php',$input);
    }

    function del() {
        $id = trim($this->input->post('id'));
        $tytul = trim($this->input->post('tytul'));
	    $imie_autor = trim($this->input->post('imie_autor'));
		$nazwisko_autor = trim($this->input->post('nazwisko_autor'));
	    $wydawnictwo = trim($this->input->post('wydawnictwo'));
	    $rok_wydania = trim($this->input->post('rok_wydania'));
		$kategoria = trim($this->input->post('kategoria'));
		

	        $data = array(
	                  "tytul" => $tytul,
	                  "imie_autor" => $imie_autor,
	                  "nazwisko_autor" => $nazwisko_autor,
					  "wydawnictwo" => $wydawnictwo,
					  "rok_wydania" => $rok_wydania,
					  "kategoria" => $kategoria
	                );
	        $this->Book_model->insert2($data);
       		$this->Book_model->delete($id);
        $this->session->set_flashdata("pesan","Książka została usunięta.");
        redirect('active_ctrl');
    }

	function change_pass() {
		
			
			 $this->load->view('change_password_view.php');
	
	}
	
	function changepassword() {
			$this->load->model('login_model');
			$this->form_validation->set_rules('password','Stare hasło', 'trim|required');
			$this->form_validation->set_rules('newpassword1','Nowe hasła ', 'trim|required|min_length[4]');
			$this->form_validation->set_rules('newpassword2','Nowe hasła', 'trim|required|matches[newpassword1]');
			
			
			$current_pass = $this->session->userdata('password');
			
			
			if ($current_pass != $this->input->post('password')) {
				 $this->session->set_flashdata("pesan","Podałeś złe aktualne hasło.");
				 
			}  else {
				
			}
		
			

		if($this->form_validation->run() == FALSE) {

					$this->load->view('change_password_view.php');
				} else {
		
		
		$data = array (
			'password' =>$this->input->post('newpassword1')
		
			
			);
			$this->login_model->updatepass($data);
			 $this->session->set_flashdata("pesan","Hasło zostało zmienione.");
			redirect('active_ctrl');
		}
	}

	

}

?>
