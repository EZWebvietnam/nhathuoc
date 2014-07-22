<?php
class Faqhomemodel extends CI_Model
{
	private $_name = 'faq';
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function list_faq($number,$offset)
	{
		$number = intval($number);
		$offset = intval($offset);
		$sql="SELECT * FROM {$this->_name} WHERE answer <>'' LIMIT ?,?";
		$query = $this->db->query($sql,array($offset,$number));
		return $query->result_array();
	}
	public function count_list_faq()
	{
		$sql="SELECT * FROM {$this->_name} WHERE answer <>''";
		$query = $this->db->query($sql);
		return count($query->result_array());
	}
	public function random_faq()
	{
		$sql="SELECT * FROM {$this->_name} ORDER BY rand() LIMIT 10 ";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	public function faq_detail($id)
	{
		$id = intval($id);
		$sql="SELECT * FROM {$this->_name} WHERE id = ? ";
		$query = $this->db->query($sql,array($id));
		return $query->result_array();
	}
	public function insert(array $data)
	{
		$this->db->insert("{$this->_name}",$data);		
	}
	public function list_faq_rand()
	{
		
		$sql="SELECT * FROM {$this->_name} ORDER BY rand() LIMIT 8;";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	public function list_support()
	{
		$sql="SELECT * FROM support";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	public function about($type)
	{
		$sql="SELECT * FROM about WHERE type = $type";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	public function description($type)
	{
		$sql="SELECT * FROM description WHERE id_about = $type";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	public function rand_image()
	{
		$sql="SELECT * FROM image ORDER BY id DESC";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	// Cong dung
	public function list_cd($number,$offset)
	{
		$number = intval($number);
		$offset = intval($offset);
		$sql="SELECT * FROM cong_dung  LIMIT $offset,$number";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	public function count_list_cd()
	{
		$sql="SELECT * FROM cong_dung";
		$query = $this->db->query($sql);
		return count($query->result_array());
	}
	public function cd_detail($id)
	{
		
		$sql="SELECT * FROM cong_dung WHERE id_cd = ?";
		$query = $this->db->query($sql,array($id));
		return $query->result_array();
	}
}
?>