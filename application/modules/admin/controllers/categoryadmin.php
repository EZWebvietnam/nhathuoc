<?php
class Categoryadmin extends MY_Controller
{
	public function __construct() {
        parent::__construct();
        $this->load->model('categorymodel');
        $this->load->helper(array('form','url'));
        $this->load->library('session');
        $this->load->library('tank_auth');
        $this->lang->load('tank_auth');
        $this->load->library('form_validation');
        if(!$this->tank_auth->is_login_admin(TRUE))
        {
            redirect('/quan-tri');
        }
        if($this->session->userdata('role')!=1)
        {
            show_404();
            exit;
        }
    }
	public function list_cate()
    {
        $this->load->helper('url');
        $config['uri_segment'] = 5;
        if ($this->input->post('page_no')) {
            $page = $this->input->post('page_no');
        } else {
            $page = 1;
        }
        $config['per_page'] = 10;
        $config['total_rows'] = $this->categorymodel->count_cate();
        if ($page == '') {
            $page = 1;
        }
        $page1 = ($page - 1) * $config['per_page'];
        if (!is_numeric($page)) {
            show_404();
            exit;
        }
        $num_pages = ceil($config['total_rows'] / $config['per_page']);
        $array_sv = $this->categorymodel->load_cate($config['per_page'], $page1);
        $this->data['total_page'] = $num_pages;
        $this->data['offset'] = $page1;
        $this->data['page'] = $page;
        $this->data['total'] = $config['total_rows'];
        $this->data['list_cate'] = $array_sv;
        $this->load->view('category/ajax_admin_category', $this->data);
    }	
	public function delete($id)
    {
        if(empty($id))
        {
            show_404();
            exit;
        }
       	$this->categorymodel->delete_cate($id);
        $array = array('error' => 0, 'msg' => "Xóa thành công");
        echo json_encode($array);
    }
    public function deletes()
    {
        $this->load->model('productmodel');
        $array = $this->input->post('ar_id');
        foreach ($array as $k => $v) {
        	$this->categorymodel->delete_ctv($v);
        }
        $array = array('error' => 0, 'msg' => "Xóa thành công");
        echo json_encode($array);
    }
    public function add()
    {
    	if($this->input->post())
    	{
			$data_save = array();
			$title = $this->input->post('title');
			$data_save = array('title'=>$title);
			$id = $this->categorymodel->add($data_save);
			if($id>0)
			{
				 $array = array('error' => 0, 'msg' => "Them thanh cong");
       			 echo json_encode($array);
			}
			else
			{
				 $array = array('error' => 0, 'msg' => "Them that bai");
       			 echo json_encode($array);
			}
		}
		else
		{
			 $this->load->view('category/ajax_admin_add_category', $this->data);
		}
		
	}
	public function edit($id = null)
	{
		if($this->input->post())
    	{
			
			$title = $this->input->post('title');
			$data_save = array();
			$data_save = array('title'=>$title);
			$id = $this->categorymodel->update_cate($id,$data_save);
			$array = array('error' => 0, 'msg' => "Update thanh cong");
       		echo json_encode($array);
			
		}
		else
		{
			$this->data['cate_detail'] = $this->categorymodel->cate_detail($id);
			 $this->load->view('category/ajax_admin_edit_category', $this->data);
		}
	}
}
?>