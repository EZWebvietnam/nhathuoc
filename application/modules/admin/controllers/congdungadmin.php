<?php
class Congdungadmin extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
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
		$this->load->model('faqmodel');	
	}	
	public function list_congdung()
	{
		$this->load->helper('url');
        $config['uri_segment'] = 5;
        if ($this->input->post('page_no')) {
            $page = $this->input->post('page_no');
        } else {
            $page = 1;
        }
        $config['per_page'] = 10;
        $config['total_rows'] = $this->faqmodel->count_cd();
        if ($page == '') {
            $page = 1;
        }
        $page1 = ($page - 1) * $config['per_page'];
        if (!is_numeric($page)) {
            show_404();
            exit;
        }
        $num_pages = ceil($config['total_rows'] / $config['per_page']);
        $array_sv = $this->faqmodel->list_cd($config['per_page'], $page1);
        $this->data['total_page'] = $num_pages;
        $this->data['offset'] = $page1;
        $this->data['page'] = $page;
        $this->data['total'] = $config['total_rows'];
        $this->data['list_cd'] = $array_sv;
        $this->load->view('congdung/ajax_admin_get_congdung', $this->data);
	}
	public function add()
	{
		if($this->input->post())
		{
			$title = $this->input->post('title');
			$content = $this->input->post('content');
			$file = $this->input->post('file');
			$data_save = array('title_cd'=>$title,'content_cd'=>$content,'file'=>$file);
			
			$id = $this->faqmodel->addcd($data_save);
			if($id>0)
			{
				$data = array('error' => '0', 'msg' => 'Thêm  thành công');
                echo json_encode($data);
			}
			else
			{
				$data = array('error' => '1', 'msg' => 'Thêm không thành công');
                echo json_encode($data);
			}
		}
		else
		{
			$this->load->view('congdung/ajax_admin_add_congdung',$this->data);	
		}
	}
	public function edit($id)
	{
		if($this->input->post())
		{
			$title = $this->input->post('title');
			$content = $this->input->post('content');
			$file = $this->input->post('file');
			if($file!='')
			{
				$data_save = array('title_cd'=>$title,'content_cd'=>$content,'file'=>$file);
			}
			else
			{
				$data_save = array('title_cd'=>$title,'content_cd'=>$content);	
			}
			
			$id = $this->faqmodel->update_cd($id,$data_save);
			$data = array('error' => '0', 'msg' => 'Update thành công');
            echo json_encode($data);
		}
		else
		{
			$this->data['congdung_detail'] = $this->faqmodel->cd_detail($id);	
			$this->load->view('congdung/ajax_admin_edit_congdung',$this->data);	
		}
	}
	public function delete($id)
    {
        if(empty($id))
        {
            show_404();
            exit;
        }
        $detail = $this->faqmodel->cd_detail($id);
        if(empty($detail))
        {
            show_404();
            exit;
        }        
        $this->faqmodel->delete_cd($id);        
        $array = array('error' => 0, 'msg' => "Xóa thành công");
        echo json_encode($array);
    }
    public function deletes()
    {
        $array = $this->input->post('ar_id');
        foreach ($array as $k => $v) {
          $this->faqmodel->delete_cd($v);
        }
        $array = array('error' => 0, 'msg' => "Xóa thành công");
        echo json_encode($array);
    }
}
?>