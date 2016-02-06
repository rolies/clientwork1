<?php
class Perumnas_model extends CI_model{
	public function __construct()
	{
		parent::__construct();
	}

	public function read_perum(){
		$query = "SELECT * FROM perumnas";
		return $this->db->query($query);
	}
	
	public function read_perum_detail($id){
		$query = $this->db->query("SELECT * FROM perumnas WHERE id=$id");
    	return $query->row();
	}
	public function read_perum_stu(){
		$query = $this->db->query("SELECT * FROM perumnas WHERE id=38");
    	return $query->row();
	}
	// -------- Model for admin
	public function read_perum_siap(){
		$query = "SELECT * FROM perumnas WHERE status='siap'";
		return $this->db->query($query);
	}
	public function read_perum_belum(){
		$query = "SELECT * FROM perumnas WHERE status='pengerjaan'";
		return $this->db->query($query);
	}
} 