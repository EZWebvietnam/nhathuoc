<?php
class Paymentadmin extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('paymentmodel');
		 $this->load->helper(array('form','url'));
        $this->load->library('session');
        $this->load->library('tank_auth');
        $this->lang->load('tank_auth');
        $this->load->library('form_validation');
        if(!$this->tank_auth->is_login_admin(TRUE))
        {
            redirect('/quan-tri');
        }
	}
	public function list_payment()
	{
		
		$this->load->helper('url');
        $config['uri_segment'] = 5;
        if ($this->input->post('page_no')) {
            $page = $this->input->post('page_no');
        } else {
            $page = 1;
        }
        $config['per_page'] = 10;
        $config['total_rows'] = $this->paymentmodel->count_payment();
        if ($page == '') {
            $page = 1;
        }
        $page1 = ($page - 1) * $config['per_page'];
        if (!is_numeric($page)) {
            show_404();
            exit;
        }
        $num_pages = ceil($config['total_rows'] / $config['per_page']);
        $array_sv = $this->paymentmodel->load_payment($config['per_page'], $page1);
        $this->data['total_page'] = $num_pages;
        $this->data['offset'] = $page1;
        $this->data['page'] = $page;
        $this->data['total'] = $config['total_rows'];
        $this->data['list_payment'] = $array_sv;
        $this->load->view('payment/ajax_admin_payment',$this->data);
	}
	public function edit($id)
	{
		if($this->input->post())
		{
			
			$name = $this->input->post('title');
			$name_account = $this->input->post('ten_tk');
			$stk = $this->input->post('stk');
			$file = $this->input->post('file');
			$data_save = array();
			if($file!='')
			{
				$data_save = array('name'=>$name,'name_account'=>$name_account,'account_number'=>$stk,'image'=>$file);
			}
			else 
			{
				$data_save = array('name'=>$name,'name_account'=>$name_account,'account_number'=>$stk);
			}
			
			$id = $this->paymentmodel->edit($id,$data_save);
				$array = array('error' => 0, 'msg' => "Update thanh cong");
       			echo json_encode($array);
		}
		else
		{
			$this->data['payment_detail'] = $this->paymentmodel->detail_payment($id);
			$this->load->view('payment/ajax_admin_edit_payment',$this->data);
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
        $this->paymentmodel->delete($id);
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
            $this->paymentmodel->delete($v);
        }
        $array = array('error' => 0, 'msg' => "Xóa thành công");
        echo json_encode($array);
    }
    public function add()
    {
		if($this->input->post())
		{
			$name = $this->input->post('title');
			$name_account = $this->input->post('ten_tk');
			$stk = $this->input->post('stk');
			$file = $this->input->post('file');
			$data_save = array();
			$data_save = array('name'=>$name,'name_account'=>$name_account,'account_number'=>$stk,'image'=>$file);
			$id = $this->paymentmodel->insert($data_save);
			if($id > 0)
			{
				$array = array('error' => 0, 'msg' => "Them thanh cong");
       			echo json_encode($array);
			}
			else
			{
				$array = array('error' => 1, 'msg' => "Them that bai");
       			echo json_encode($array);
			}
				
		}
		else
		{
			$this->load->view('payment/ajax_admin_add_payment',$this->data);
		}
	}
}
?>