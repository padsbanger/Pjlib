<?php 
/*
 * SIMPLE ACTIVE RECORD APPLICATION 
 * used for connect database using Active record
 *
 * model : active_record_book_model
 * www.palgenep-center.com
 *
 */
 
 class Book_model extends CI_Model { 
     
	 function Book_model() {
	   parent::__construct();  
     }   
	 
	 function getBook() {
	 
        $this->db->from('book');	
	    $this->db->order_by("id", "desc");
	    $i = $this->db->get(); 
        return ($i->num_rows > 0) ? $i->result() : array();
    }


	 function getArchives() {
	 
        $this->db->from('archives');	
	    $this->db->order_by("id", "desc");
	    $i = $this->db->get(); 
        return ($i->num_rows > 0) ? $i->result() : array();
    }

    function getBookById($id) {
        $this->db->from('book');	
	    $this->db->where("id", $id);
	    $i = $this->db->get(); 
        return ($i->num_rows > 0) ? $i->row() : array();
    }

    function insert($data) {
        return $this->db->insert('book', $data); 
    }

	function insert2($data) {
        return $this->db->insert('archives', $data); 
    }


    function update($data,$id) {
        $this->db->where('id', $id);
		$i = $this->db->update('book', $data); 	  
		return $i;
	}

    function delete($id) {
        $this->db->where('id', $id);
		$i = $this->db->delete('book'); 	 
		return $i;
	}
 
 }

