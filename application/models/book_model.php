<?php 
 
 class Book_model extends CI_Model { 
     
	 function Book_model() {
	   parent::__construct();  
     }   
	 
	 function getBook($limit,$offset, $sort_by, $sort_order) {   
		
		$sort_order = ($sort_order == 'desc') ? 'desc' : 'asc';
		$sort_columns  = array('id','tytul','imie_autor','nazwisko_autor','wydawnictwo','rok_wydania','kategoria');
		
		$sort_by = (in_array($sort_by,$sort_columns)) ? $sort_by: 'tytul';
		
			$q = $this->db->select('id,tytul, imie_autor, nazwisko_autor, wydawnictwo, rok_wydania, kategoria')
				->from('book')
				->limit($limit, $offset)
				->order_by($sort_by, $sort_order);

			$ret['rows'] = $q->get()->result();

			// count query
			$q = $this->db->select('COUNT(*) as count', FALSE)
				->from('book');

			$tmp = $q->get()->result();

			$ret['num_rows'] = $tmp[0]->count;

			return $ret;
		
		
	   // $i = $this->db->get('book',$limit, $offset); 
       // return ($i->num_rows > 0) ? $i->result() : array();
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
	
	function search($query_array, $limit, $offset, $sort_by, $sort_order) {
		
		$sort_order = ($sort_order == 'desc') ? 'desc' : 'asc';
		$sort_columns = array('id', 'tytul', 'imie_autor', 'nazwisko_autor', 'wydawnictwo', 'rok_wydania','kategoria');
		$sort_by = (in_array($sort_by, $sort_columns)) ? $sort_by : 'tytul';
		
		// results query
		$q = $this->db->select('id, tytul, imie_autor, nazwisko_autor, wydawnictwo, rok_wydania,kategoria')
			->from('book')
			->limit($limit, $offset)
			->order_by($sort_by, $sort_order);
		
		if (strlen($query_array['tytul'])) {
			$q->like('tytul', $query_array['tytul']);
		}
		if (strlen($query_array['kategoria'])) {
			$q->where('kategoria', $query_array['kategoria']);
		}
		if (strlen($query_array['rok_wydania'])) {
			$operators = array('gt' => '>', 'gte' => '>=', 'eq' => '=', 'lte' => '<=', 'lt' => '<');
			$operator = $operators[$query_array['rok_wydania_comparison']];
						
			$q->where("rok_wydania $operator", $query_array['rok_wydania']);
		}
		
		$ret['rows'] = $q->get()->result();
		
		// count query
		$q = $this->db->select('COUNT(*) as count', FALSE)
			->from('book');
		
		if (strlen($query_array['tytul'])) {
			$q->like('tytul', $query_array['tytul']);
		}
		if (strlen($query_array['kategoria'])) {
			$q->where('kategoria', $query_array['kategoria']);
		}
		if (strlen($query_array['rok_wydania'])) {
			$operators = array('gt' => '>', 'gte' => '>=', 'eq' => '=', 'lte' => '<=', 'lt' => '<');
			$operator = $operators[$query_array['rok_wydania_comparison']];
						
			$q->where("rok_wydania $operator", $query_array['rok_wydania']);
		}
		
		$tmp = $q->get()->result();
		
		$ret['num_rows'] = $tmp[0]->count;
		
		return $ret;
	}
	
	function category_options() {
		
		$rows = 
			$this->db->distinct()->select('kategoria')
			->from('book')
			->get()->result();
		
		$category_options = array('' => '');
		foreach ($rows as $row) {
			$category_options[$row->kategoria] = $row->kategoria;
		}
		
		return $category_options;
	}
 
 }

