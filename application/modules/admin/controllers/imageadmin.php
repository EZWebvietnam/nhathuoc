<?php
class Imageadmin extends MY_Controller
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
	public function list_image()
	{
		$this->load->helper('url');
        $config['uri_segment'] = 5;
        if ($this->input->post('page_no')) {
            $page = $this->input->post('page_no');
        } else {
            $page = 1;
        }
        $config['per_page'] = 10;
        $config['total_rows'] = $this->faqmodel->count_image();
        if ($page == '') {
            $page = 1;
        }
        $page1 = ($page - 1) * $config['per_page'];
        if (!is_numeric($page)) {
            show_404();
            exit;
        }
        $num_pages = ceil($config['total_rows'] / $config['per_page']);
        $array_sv = $this->faqmodel->list_image($config['per_page'], $page1);
        $this->data['total_page'] = $num_pages;
        $this->data['offset'] = $page1;
        $this->data['page'] = $page;
        $this->data['total'] = $config['total_rows'];
        $this->data['list_image'] = $array_sv;
		$this->load->view('image/ajax_admin_image',$this->data);
	}
	public function add()
	{
		if($this->input->post())
		{
			$file = $this->input->post('file');
			if($file!='')
			{
				$config['image_library'] = 'gd2';
				$config['source_image'] = PATH_FOLDER.ROT_DIR.'file/uploads/product/'.$this->input->post('file');
				$config['new_image'] = PATH_FOLDER.ROT_DIR.'file/uploads/product/'.$this->input->post('file');
				$config['create_thumb'] = TRUE;
				$config['maintain_ratio'] = FALSE;
				$config['width'] = 1140;
				$config['height'] = 400;
				
				// Load the Library
				$this->load->library('image_lib', $config);
				
				// resize image
				$this->image_lib->resize();
				$title = $this->input->post('title');
				$url = $this->input->post('url');
				$data_save = array('image'=>$file,'title'=>$title,'url'=>$url);
				$id = $this->faqmodel->insert_img($data_save);
				if($id> 0)
				{
					$array = array('error'=>0,'msg'=>'Them thanh cong');
          			echo json_encode($array);
				}
				else
				{
					$array = array('error'=>1,'msg'=>'Them that bai');
          			echo json_encode($array);
				}
			}
			else
			{
				$array = array('error'=>1,'msg'=>'Them that bai');
          		echo json_encode($array);
			}
		}
		else
		{
			$this->load->view('image/ajax_admin_add_image',$this->data);
		}
	}
	
	public function delete($id) {
       	$detail =$this->faqmodel->image_detail($id);
		if(!empty($detail))
		{
			unlink(PATH_FOLDER.ROT_DIR.'file/uploads/slide/'.$detail[0]['image']);	
		}
        $this->faqmodel->delete_image($id);
        $array = array('error' => 0, 'msg' => "Xóa thành công");
        echo json_encode($array);
    }

    public function deletes() {
        $array = $this->input->post('ar_id');
        foreach ($array as $k => $v) {
			$detail =$this->faqmodel->image_detail($v);
			if(!empty($detail))
			{
				unlink(PATH_FOLDER.ROT_DIR.'file/uploads/slide/'.$detail[0]['image']);	
			}
           $this->faqmodel->delete_image($v);
        }
        $array = array('error' => 0, 'msg' => "Xóa thành công");
        echo json_encode($array);
    }
}
?>