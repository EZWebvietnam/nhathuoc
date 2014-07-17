<?php
class Paymentmodel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function load_payment($number,$offset)
	{
		$sql = "SELECT * FROM payment LIMIT ?,?";
		$query = $this->db->query($sql,array($offset,$number));
		return $query->result_array();
	}
	public function count_payment()
	{
		$sql = "SELECT * FROM payment";
		$query = $this->db->query($sql);
		return count($query->result_array());
	}
	public function detail_payment($id)
	{
		$sql = "SELECT * FROM payment WHERE id = ?";
		$query = $this->db->query($sql,array($id));
		return $query->result_array();
	}
	public function insert(array $data)
	{
		$this->db->insert('payment',$data);
		return $this->db->insert_id();
	}
	public function edit($id,array $data_save)
	{
		$this->db->where('id',$id);
		$this->db->update('payment',$data_save);
	}
	public function delete($id)
	{
		$this->db->delete('payment',array('id'=>$id));
	}
}
?>