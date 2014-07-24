<?php
class Catehomemodel extends CI_Model
{
	private $_name ='cate_product';
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function list_cate_nav()
	{
		$this->db->select();
		$this->db->where('lable',0);
		$this->db->order_by('title ASC');
		$query = $this->db->get("$this->_name");
		return $query->result_array();
	}
	public function list_cate_lable($id_lable)
	{
		$id_lable = intval($id_lable);
		$this->db->select();
		$this->db->where('lable',$id_lable);
		$this->db->order_by('title ASC');
		$query = $this->db->get("$this->_name");
		return $query->result_array();
	}
	public function list_cate_home()
	{
		$this->db->select();
		$this->db->where('lable',0);
		$query = $this->db->get("$this->_name");
		return $query->result_array();
	}
	public function cate_detail($id_cate)
	{
		$id_cate = intval($id_cate);
		$this->db->select();
		$this->db->where('id_cate',$id_cate);
		$query = $this->db->get("$this->_name");
		return $query->result_array();
	}
}
?>