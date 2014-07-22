<?php
class Addressadmin extends MY_Controller
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
	public function address()
	{
		$this->data['addressseting']=$this->faqmodel->list_address();
		$this->load->view('address/ajax_admin_address',$this->data);
	}
	public function edit($id = null)
	{
		if($this->input->post())
		{
			$address = $this->input->post('address');
			$phone = $this->input->post('phone');
			$email = $this->input->post('email');
			$data_save = array('address'=>$address,'phone'=>$phone,'email'=>$email);
			$this->faqmodel->edit_address($id,$data_save);
			echo json_encode(array('error'=>'0','msg'=>'Update thành công'));
		}
		else
		{
			$this->data['address_detail']=$this->faqmodel->detail_address($id);	
			$this->load->view('address/ajax_admin_edit_address',$this->data);
		}	
	}
	public function add()
	{
		if($this->input->post())
		{
			$address = $this->input->post('address');
			$phone = $this->input->post('phone');
			$email = $this->input->post('email');
			$data_save = array('address'=>$address,'phone'=>$phone,'email'=>$email);
			$id = $this->faqmodel->insert_address($data_save);
			if($id>0)
			{
				echo json_encode(array('error'=>'0','msg'=>'Thêm thành công'));	
			}
			else
			{
				echo json_encode(array('error'=>'1','msg'=>'Thêm thất bại'));
			}
		}
		else
		{
			$this->load->view('address/ajax_admin_add_address',$this->data);
		}
	}
	public function delete($id)
    {
        if(empty($id))
        {
            show_404();
            exit;
        }
       	$this->faqmodel->delete_address($id);
        $array = array('error' => 0, 'msg' => "Xóa thành công");
        echo json_encode($array);
    }
    public function deletes()
    {
        $array = $this->input->post('ar_id');
        foreach ($array as $k => $v) {
        	$this->faqmodel->delete_address($v);
        }
        $array = array('error' => 0, 'msg' => "Xóa thành công");
        echo json_encode($array);
    }
}
?>