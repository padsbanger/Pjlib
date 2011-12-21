<?php

class Active_ctrl extends CI_Controller {

   function __construct() {
        parent::__construct();
 
        $this->load->model('Book_model');
		$this->load->model('Book_model');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('session');

    }

    function index() {
        $data = $this->Book_model->getBook();
        $input['book'] = $data;
        $this->load->view('ac_book_view.php',$input);
    }

    function add() {
        $this->load->view('ac_book_add_view.php');
    }

    function save_data() {
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
        $this->session->set_flashdata("pesan","Książka została zedytkowana poprawnie.");
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

        $this->Book_model->delete($id);
        $this->session->set_flashdata("pesan","Książka została usunięta.");
        redirect('active_ctrl');
    }


}

?>
