<?php
class Faqmodel extends CI_Model
{
    public  function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function list_faq($number,$offset)
    {
        $sql="SELECT * FROM faq LIMIT $offset,$number";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function count_faq()
    {
        $sql="SELECT * FROM faq";
        $query = $this->db->query($sql);
        return count($query->result_array());
    }
    public function edit($id)
    {
        $this->db->select();
        $this->db->where('id',$id);
        $query = $this->db->get('faq');
        return $query->result_array();
    }
    public function update_faq($id,array $data)
    {
        $this->db->where('id',$id);
        $this->db->update('faq',$data);
    }
    public function delete($id)
    {
        $this->db->delete('faq',array('id'=>$id));
    }
    //Yahoo
    public function list_yahoo($number,$offset)
    {
		$sql = "SELECT * FROM support LIMIT ?,?";
		$query = $this->db->query($sql,array($offset,$number));
		return $query->result_array();
	}
	public function count_yahoo()
	{
		$sql = "SELECT * FROM support";
		$query = $this->db->query($sql);
		return count($query->result_array());
	}
	 public function yahoo_detail($id)
    {
		$sql = "SELECT * FROM support WHERE id = ?";
		$query = $this->db->query($sql,array($id));
		return $query->result_array();
	}
	public function update_yahoo($id,array $data)
	{
		$this->db->where('id',$id);
		$this->db->update('support',$data);
	}
	public function insert_yahoo(array $data)
	{
		$this->db->insert('support',$data);
		return $this->db->insert_id();
	}
	public function delete_yahoo($id)
	{
		$this->db->delete('support',array('id'=>$id));
	}
	//Adress Setting
	public function list_address()
	{
		$this->db->select();
		$query = $this->db->get("about");
		return $query->result_array();
	}
	public function edit_address($id, array $data)
	{
		$this->db->where('id',$id);
		$this->db->update('about',$data);
	}
	public function insert_address(array $data)
	{
		$this->db->insert('about',$data);
		return $this->db->insert_id();
	}
	public function detail_address($id)
	{
		$this->db->select();
		$this->db->where('id',$id);
		$query = $this->db->get("about");
		return $query->result_array();
	}
	public function delete_address($id)
	{
		$this->db->delete('about',array('id'=>$id));	
	}
	//Image Slide
	public function list_image($number,$offset)
    {
		$sql = "SELECT * FROM image LIMIT ?,?";
		$query = $this->db->query($sql,array($offset,$number));
		return $query->result_array();
	}
	public function count_image()
	{
		$sql = "SELECT * FROM image";
		$query = $this->db->query($sql);
		return count($query->result_array());
	}
	public function insert_img(array $data)
	{
		$this->db->insert('image',$data);
		return $this->db->insert_id();
	}
	public function delete_image($id)
	{
		$this->db->delete('image',array('id'=>$id));
	}
	public function image_detail($id)
	{
		$sql = "SELECT * FROM image WHERE id = ?";
		$query = $this->db->query($sql,array($id));
		return $query->result_array();	
	}
	//Cong dung
	public function list_cd($number,$offset)
    {
		$sql = "SELECT * FROM cong_dung LIMIT ?,?";
		$query = $this->db->query($sql,array($offset,$number));
		return $query->result_array();
	}
	public function count_cd()
	{
		$sql = "SELECT * FROM cong_dung";
		$query = $this->db->query($sql);
		return count($query->result_array());
	}
	public function addcd(array $data)
	{
		$this->db->insert('cong_dung',$data);
		return $this->db->insert_id();
	}
	public function cd_detail($id)
	{
		$sql = "SELECT * FROM cong_dung WHERE id_cd = ?";
		$query = $this->db->query($sql,array($id));
		return $query->result_array();	
	}
	public function update_cd($id,array $data)
	{
		$this->db->where('id_cd',$id);
		$this->db->update('cong_dung',$data);
	}
	public function delete_cd($id)
	{
		$this->db->delete('cong_dung',array('id_cd'=>$id));
	}
}
?>