<?php
class Orderhomemodel extends CI_Model
{
	private $_name = 'order_customer';
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function insert_order(array $data)
	{
	
		$this->db->insert("{$this->_name}",$data);
		return $this->db->insert_id();
	}
	public function insert_order_detail(array $data)
	{
		$this->db->insert("order_detail",$data);
		return $this->db->insert_id();
	}
	public function load_payment()
	{
		$this->db->select();
		$query = $this->db->get('payment');
		return $query->result_array();
	}
}
?>