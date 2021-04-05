<?php
	
	class home_m extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		function getdata($tablename)
		{
			$result=$this->db->get($tablename);
			return $result->result_array();
		}

		function getonedata($tablename,$where)
		{
			$result=$this->db->get_where($tablename,$where);
			return $result->row_array();
		}

		function insert($tablename,$data)
		{
			$this->db->insert($tablename,$data);
		}
		
		function update($tablename,$data,$where)
		{
			$this->db->where($where);
			$this->db->update($tablename,$data);
		}
	}
?>