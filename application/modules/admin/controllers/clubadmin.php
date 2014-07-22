<?php
class Clubadmin extends MY_Controller
{
	public function __construct() {
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->library('session');
        $this->load->library('tank_auth');
        $this->lang->load('tank_auth');
        $this->load->library('form_validation');
		$this->load->model('clubmodel');
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
	public function list_club()
	{
		$this->load->helper('url');
        $config['uri_segment'] = 5;
        if ($this->input->post('page_no')) {
            $page = $this->input->post('page_no');
        } else {
            $page = 1;
        }
        $config['per_page'] = 10;
        $config['total_rows'] = $this->clubmodel->count_club();
        if ($page == '') {
            $page = 1;
        }
        $page1 = ($page - 1) * $config['per_page'];
        if (!is_numeric($page)) {
            show_404();
            exit;
        }
        $num_pages = ceil($config['total_rows'] / $config['per_page']);
        $array_sv = $this->clubmodel->load_club($config['per_page'], $page1);
        $this->data['total_page'] = $num_pages;
        $this->data['offset'] = $page1;
        $this->data['page'] = $page;
        $this->data['total'] = $config['total_rows'];
        $this->data['list_new'] = $array_sv;
        $this->load->view('club/ajax_admin_get_club', $this->data);
	}
	public function edit($id)
	{
		if($this->input->post())
		{
			$content_about = array('content_about'=>$this->input->post('content'));
			$this->clubmodel->edit($id,$content_about);
			 $data = array('error' => '0', 'msg' => 'Update thành công');
                    echo json_encode($data);
		}
		else
		{
			$this->data['club_detail']= $this->clubmodel->club_detail($id);
			$this->load->view('club/ajax_admin_edit_club', $this->data);
		}	
	}
}
?>