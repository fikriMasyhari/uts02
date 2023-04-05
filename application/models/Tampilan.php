<?php 
/**
* 
*/
class Tampilan extends CI_Model
{
	public function __construct() {
        parent::__construct();
        $this->load->database(); // load database
    }


	public function get_tampilan()
	{
		
		$query = $this->db->get('pmb');//get data dari table pmb
		return $query->result();
	}

	public function postdata($data) {
        // masukkan data ke tabel 'pmb'
        $this->db->insert('pmb', $data);
    }


} 