<?php
class Cartmodel extends CI_Model
{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function add_to_cart(array $data)
    {
        $this->db->insert('cart',$data);
        return $this->db->insert_id();
    }
    public function check_cart($ip,$id_product)
    {
    	$id_product = intval($id_product);
        $sql ='SELECT * FROM cart WHERE ip = ? AND id_product = ?';
        $query = $this->db->query($sql,array($ip,$id_product));
        return $query->result_array();
    }
    public function check_cart_id($id)
    {
    	$id = intval($id);
        $sql ='SELECT * FROM cart WHERE id  = ?';
        $query = $this->db->query($sql,array($id));
        return $query->result_array();
    }
    public function check_cart_ip($ip)
    {
        $sql ='SELECT * FROM cart WHERE ip = ?';
        $query = $this->db->query($sql,array($ip));
        return $query->result_array();
    }
    public function list_cart_ip($ip)
    {
        $sql ='SELECT * FROM cart INNER JOIN product ON product.id_product = cart.id_product WHERE cart.ip = ?';
        $query = $this->db->query($sql,array($ip));
        return $query->result_array();
    }
	public function list_cart_ip_3($ip)
    {
        $sql ='SELECT * FROM cart INNER JOIN product ON product.id_product = cart.id_product WHERE cart.ip = ? ORDER BY cart.id DESC LIMIT 2';
        $query = $this->db->query($sql,array($ip));
        return $query->result_array();
    }
	public function list_cart_ip_2($ip)
    {
        $sql ='SELECT * FROM cart WHERE cart.ip = ?';
        $query = $this->db->query($sql,array($ip));
        return $query->result_array();
    }
    public function update_cart($ip,$id_cart,array $data)
    {
        $id_cart = intval($id_cart);
        $this->db->where('id_product',$id_cart);
         $this->db->where('ip',$ip);
        $this->db->update('cart',$data);
    }
    public function delete_cart($id_cart,$id_product)
    {
    	$id_product = intval($id_product);
        $id_cart = intval($id_cart);
        $this->db->delete('cart',array('ip'=>$id_cart,'id_product'=>$id_product));
    }
	public function delete_cart_ip($id_cart)
    {
        $id_cart = intval($id_cart);
        $this->db->delete('cart',array('ip'=>$id_cart));
    }
}
?>