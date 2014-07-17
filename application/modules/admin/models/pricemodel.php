<?php
class Pricemodel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function load_price($number, $offset) {
        $sql = "SELECT * FROM request_price  LIMIT $offset,$number";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function count_price() {
        $sql = "SELECT * FROM request_price";
        $query = $this->db->query($sql);
        return count($query->result_array());
    }
	public function delete($id)
	{
		$id = intval($id);
		$this->db->delete('request_price',array('id'=>$id));
	}
	public function detail($id)
	{
		$id = intval($id);
		$sql = "SELECT * FROM request_price WHERE id = $id";
        $query = $this->db->query($sql);
        return $query->result_array();
	}
}
?>