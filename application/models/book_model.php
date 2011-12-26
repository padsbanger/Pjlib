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
	 
	 function getBook($limit,$offset) {   
	    $i = $this->db->get('book',$limit, $offset); 
        return ($i->num_rows > 0) ? $i->result() : array();
    }
	
	function countBook() {
	    $i = $this->db->get('book'); 
        return $count = $i->num_rows();
	}

	function countArchive() {
		$i = $this->db->get('archives'); 
        return $count = $i->num_rows();
	}


	 function getArchives($limit,$offset) {
	 
	    $i = $this->db->get('archives',$limit, $offset); 
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

