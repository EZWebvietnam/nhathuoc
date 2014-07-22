<?php
class Producthomemodel extends CI_Model
{
	private $_name = 'product';
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function list_random_sale()
	{
		$sql ="SELECT *,{$this->_name}.title as title_product,cate_product.title as title_cate FROM {$this->_name} INNER JOIN cate_product ON {$this->_name}.id_cate = cate_product.id_cate INNER JOIN sale_off ON {$this->_name}.id_product = sale_off.id_product WHERE sale_off.exp_date >=now()ORDER BY rand() LIMIT 4;";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	public function product_new()
	{
		$sql ="SELECT *,{$this->_name}.title as title_product,cate_product.title as title_cate FROM {$this->_name} INNER JOIN cate_product ON {$this->_name}.id_cate = cate_product.id_cate ORDER BY product.id_product DESC LIMIT 3;";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	public function product_bc_1()
	{
		$sql ="SELECT *,{$this->_name}.title as title_product,cate_product.title as title_cate FROM {$this->_name} INNER JOIN cate_product ON {$this->_name}.id_cate = cate_product.id_cate WHERE product.view > 100 ORDER BY product.id_product DESC LIMIT 3;";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	public function product_bc_2($string)
	{
		$string = implode(',',$string);
		$sql ="SELECT *,{$this->_name}.title as title_product,cate_product.title as title_cate FROM {$this->_name} INNER JOIN cate_product ON {$this->_name}.id_cate = cate_product.id_cate WHERE product.view > 100 AND product.id_product NOT IN($string) ORDER BY product.id_product DESC LIMIT 3;";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	public function list_product_by_cate_home($id_cate)
	{
		$id_cate = intval($id_cate);
		$this->db->select();
		$this->db->where('id_cate',$id_cate);
		$this->db->order_by('rand()');
		$this->db->limit('8');
		$query = $this->db->get("{$this->_name}");
		return $query->result_array();
	}
	public function list_product_by_cate_detail($id_cate)
	{
		$id_cate = intval($id_cate);
		$this->db->select();
		$this->db->where('id_cate',$id_cate);
		$this->db->order_by('rand()');
		$this->db->limit('5');
		$query = $this->db->get("{$this->_name}");
		return $query->result_array();
	}
	public function product_detail($id)
	{
		$id = intval($id);
		$this->db->select();
		$this->db->where('id_product',$id);
		$query = $this->db->get("{$this->_name}");
		return $query->result_array();
	}
	public function list_product_list($id_cate,$number,$offset)
	{
		$id_cate = intval($id_cate);
		$number = intval($number);
		$offset = intval($offset);
		$sql="SELECT *,product.title as title_product FROM {$this->_name} INNER JOIN cate_product ON product.id_cate = cate_product.id_cate WHERE product.id_cate = ? OR cate_product.lable = ?  LIMIT ?,?";
		$query = $this->db->query($sql,array($id_cate,$id_cate,$offset,$number));
		return $query->result_array();
	}
	public function count_product_list($id_cate)
	{
		$id_cate = intval($id_cate);
		$sql="SELECT *,product.title as title_product FROM {$this->_name} INNER JOIN cate_product ON product.id_cate = cate_product.id_cate WHERE product.id_cate = ? OR cate_product.lable = ?";
		$query = $this->db->query($sql,array($id_cate,$id_cate));
		return count($query->result_array());
	}
	public function list_product_list_all($number,$offset)
	{
		$number = intval($number);
		$offset = intval($offset);
		$sql="SELECT *,product.title as title_product FROM {$this->_name} LIMIT ?,?";
		$query = $this->db->query($sql,array($offset,$number));
		return $query->result_array();
	}
	public function count_product_list_all()
	{
		$sql="SELECT * FROM {$this->_name}";
		$query = $this->db->query($sql);
		return count($query->result_array());
	}
	public function get_sale_off_product($id)
    {
        $id = intval($id);
        $sql ="SELECT * FROM sale_off WHERE id_product = $id AND exp_date >= now();";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
	public function get_sale_rand()
    {
        $sql ="SELECT * FROM sale_off WHERE exp_date >= now() ORDER BY rand() LIMIT 1;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
	public function get_sale_off_product_()
    {
        $sql="SELECT * FROM {$this->_name} ORDER BY rand() LIMIT 4";
		$query = $this->db->query($sql);
		return $query->result_array();
    }
	public function list_sale()
	{		 
        $sql ="SELECT * FROM sale_off";
        $query = $this->db->query($sql);
        return $query->result_array();
	}
	public function detail_sale($id)
	{		
		$id = intval($id); 
        $sql ="SELECT * FROM sale_off WHERE id = ?";
        $query = $this->db->query($sql,array($id));
        return $query->result_array();
	}
	public function list_sale_list($number,$offset)
	{		 
        $sql ="SELECT * FROM sale_off LIMIT ?,?";
        $query = $this->db->query($sql,array($offset,$number));
        return $query->result_array();
	}
	public function count_sale_list()
	{		 
        $sql ="SELECT * FROM sale_off";
        $query = $this->db->query($sql);
        return count($query->result_array());
	}
	public function list_product_list_search($key,$number,$offset)
	{
		$number = intval($number);
		$offset = intval($offset);
		$sql="SELECT *,product.title as title_product FROM {$this->_name} WHERE title LIKE '%$key%' OR content LIKE '%$key%' LIMIT ?,?";
		$query = $this->db->query($sql,array($offset,$number));
		return $query->result_array();
	}
	public function count_product_list_search($key)
	{
		$sql="SELECT * FROM {$this->_name} WHERE title LIKE'%$key%' OR content LIKE '%$key%'";
		$query = $this->db->query($sql);
		return count($query->result_array());
	}
	public function insert_comment(array $data)
	{
		$this->db->insert('comment_product',$data);
		return $this->db->insert_id();	
	}
	public function update_product($id,array $data)
	{
		$this->db->where('id_product',$id);
		$this->db->update("$this->_name",$data);	
	}
	public function list_comment($id_product)
	{
		$sql="SELECT * FROM comment_product WHERE id_product = $id_product";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
}
?>