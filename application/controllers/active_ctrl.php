<?php
/*
 * SIMPLE ACTIVE RECORD APPLICATION 
 * used for connect database using Active record
 *
 * controller : Active_ctrl
 * www.palgenep-center.com
 *
 */

class Active_ctrl extends CI_Controller {

   function __construct() {
        parent::__construct();
 
        $this->load->model('Book_model');
	//	$this->load->model('Book_model');
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
        $book_name = trim($this->input->post('book_name'));
        $author = trim($this->input->post('author'));
        $publisher = trim($this->input->post('publisher'));

        $data = array(
                  "book_name" => $book_name,
                  "author" => $author,
                  "publisher" => $publisher,
                );
        $this->Book_model->insert($data);
        $this->session->set_flashdata("pesan","INSERT SUCCES");
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
        $book_name = trim($this->input->post('book_name'));
        $author = trim($this->input->post('author'));
        $publisher = trim($this->input->post('publisher'));

        $data = array(
                  "book_name" => $book_name,
                  "author" => $author,
                  "publisher" => $publisher,
                 );
        $this->Book_model->update($data,$id);
        $this->session->set_flashdata("pesan","UPDATE SUCCES");
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
        $book_name = trim($this->input->post('book_name'));
        $author = trim($this->input->post('author'));
        $publisher = trim($this->input->post('publisher'));

        $this->Book_model->delete($id);
        $this->session->set_flashdata("pesan","DELETE SUCCES");
        redirect('active_ctrl');
    }


}

?>
