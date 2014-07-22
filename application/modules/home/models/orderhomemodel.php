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
	public function get_order_code($code)
	{
		$sql="SELECT *,order_detail.price as price_order FROM order_customer INNER JOIN order_detail ON order_customer.id = order_detail.order_id INNER JOIN product ON product.id_product = order_detail.id_product WHERE order_customer.code = ?";
		$query = $this->db->query($sql,array($code));
		return $query->result_array();
	}
}
?>