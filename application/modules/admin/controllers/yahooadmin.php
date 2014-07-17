<?php
class Yahooadmin extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('faqmodel');
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
	public function list_yahoo()
	{
		$this->load->helper('url');
        $config['uri_segment'] = 5;
        if ($this->input->post('page_no')) {
            $page = $this->input->post('page_no');
        } else {
            $page = 1;
        }
        $config['per_page'] = 10;
        $config['total_rows'] = $this->faqmodel->count_yahoo();
        if ($page == '') {
            $page = 1;
        }
        $page1 = ($page - 1) * $config['per_page'];
        if (!is_numeric($page)) {
            show_404();
            exit;
        }
        $num_pages = ceil($config['total_rows'] / $config['per_page']);
        $array_sv = $this->faqmodel->list_yahoo($config['per_page'], $page1);
        $this->data['total_page'] = $num_pages;
        $this->data['offset'] = $page1;
        $this->data['page'] = $page;
        $this->data['total'] = $config['total_rows'];
        $this->data['list_yahoo'] = $array_sv;
		$this->load->view('yahoo/ajax_admin_yahoo',$this->data);
	}
	public function edit($id = null)
	{
		if($this->input->post())
		{
			
			$name = $this->input->post('title');
			$nick = $this->input->post('nick');
			$sdt = $this->input->post('sdt');
			$data_save = array('name'=>$name,'nick'=>$nick,'phone'=>$sdt);
			$this->faqmodel->update_yahoo($id,$data_save);
			$data = array('error' => '0', 'msg' => 'Update thanh cong');
            echo json_encode($data);
		}
		else
		{
			$this->data['yahoo_detail'] = $this->faqmodel->yahoo_detail($id);
			$this->load->view('yahoo/ajax_admin_edit_yahoo',$this->data);
		}
	}
	public function add()
	{
		if($this->input->post())
		{
			
			$name = $this->input->post('title');
			$nick = $this->input->post('nick');
			$sdt = $this->input->post('sdt');
			$data_save = array('name'=>$name,'nick'=>$nick,'phone'=>$sdt);
			$id = $this->faqmodel->insert_yahoo($data_save);
			if($id > 0)
			{
				$data = array('error' => '0', 'msg' => 'Them thanh cong');
           		 echo json_encode($data);
			}
			else
			{
				$data = array('error' => '1', 'msg' => 'Them that bai');
           		 echo json_encode($data);
			}
			
		}
		else
		{
			
			$this->load->view('yahoo/ajax_admin_add_yahoo',$this->data);
		}
	}
	public function delete($id) {
        if(!$this->tank_auth->is_login_admin(TRUE))
        {
            redirect('/quan-tri');
        }
        if($this->session->userdata('role')!=1)
        {
            show_404();
            exit;
        }
        $this->faqmodel->delete_yahoo($id);
        $array = array('error' => 0, 'msg' => "Xóa thành công");
        echo json_encode($array);
    }

    public function deletes() {
        if(!$this->tank_auth->is_login_admin(TRUE))
        {
            redirect('/quan-tri');
        }
        if($this->session->userdata('role')!=1)
        {
            show_404();
            exit;
        }
        $array = $this->input->post('ar_id');
        foreach ($array as $k => $v) {
            $this->faqmodel->delete_yahoo($v);
           
        }
        $array = array('error' => 0, 'msg' => "Xóa thành công");
        echo json_encode($array);
    }
}
?>