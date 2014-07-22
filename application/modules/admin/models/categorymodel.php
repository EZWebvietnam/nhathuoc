<?php
class Categorymodel extends CI_Model
{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function list_category()
    {
        $sql="SELECT * FROM cate_product";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
	public function load_cate($number, $offset) {
        $sql = "SELECT * FROM cate_product LIMIT $offset,$number";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function count_cate() {
        $sql = "SELECT * FROM cate_product";
        $query = $this->db->query($sql);
        return count($query->result_array());
    }
     public function cate_detail($id) {
        $sql = "SELECT * FROM cate_product WHERE id_cate = ?";
        $query = $this->db->query($sql,array($id));
        return $query->result_array();
    }
	public function delete_cate($id) {
        $this->db->delete('cate_product', array('id_cate' => $id));
    }
	public function add(array $data)
	{
		$this->db->insert('cate_product',$data);
		return $this->db->insert_id();
	}
	public function update_cate($id,array $data)
	{
		$this->db->where('id_cate',$id);
		$this->db->update('cate_product',$data);
	}
	public function list_lable()
	{
		$sql="SELECT * FROM cate_product WHERE lable = 0";
        $query = $this->db->query($sql);
        return $query->result_array();
	}
}
?>