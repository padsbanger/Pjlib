<?php

class Active_ctrl extends CI_Controller {

   function __construct() {
		
        parent::__construct();
 		$this->is_logged_in();

        $this->load->model('Book_model');
       

    }



    function index() {
        $data = $this->Book_model->getBook();
        $input['book'] = $data;
        $this->load->view('ac_book_view.php',$input);
    }

    function add() {
        $this->load->view('ac_book_add_view.php');
    }


	
	function is_logged_in() {
		$is_logged_in = $this->session->userdata('is_logged_in');
		
		if(!isset($is_logged_in) || $is_logged_in != true) {
			redirect('login');
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
		        redirect('');
			
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
        redirect('');
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

        $this->Book_model->delete($id);
        $this->session->set_flashdata("pesan","Książka została usunięta.");
        redirect('');
    }


}

?>
