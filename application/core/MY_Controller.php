<?php

class MY_Controller extends CI_Controller
{
    protected $data;
    public function __construct()
    {
        parent::__construct();
        $this->data = array();

    }
    public function list_cate()
    {
        $this->load->model('catehomemodel');
        $this->data['list_cate']=$this->catehomemodel->list_cate_nav();
    }
    public function count_cart($ip)
    {
    	$this->load->model('cartmodel');
		$cart = $this->cartmodel->list_cart_ip($ip);
		$total_money = 0;
		foreach($cart as $c)
		{
			$total_money +=$c['total_price'];	
		}
		$this->data['total_money'] = $total_money;
		$count_cart = count($cart);
		$this->data['count_cart']=$count_cart;
	}
    public function load_header()
    {
        $link = PATH_FOLDER . ROT_DIR . 'setting.xml';
        $doc = new DOMDocument();
        $doc->load($link);

        $employees = $doc->getElementsByTagName("root");
        $data_setting = array();
        foreach ($employees as $employee) {
            $names = $employee->getElementsByTagName("Author");
            $name = $names->item(0)->nodeValue;
            $pub = $employee->getElementsByTagName("Publisher");
            $pubs = $pub->item(0)->nodeValue;
            $copy = $employee->getElementsByTagName("Copyright");
            $cop = $copy->item(0)->nodeValue;
            $robot = $employee->getElementsByTagName("robots");
            $robots = $robot->item(0)->nodeValue;
            $dis = $employee->getElementsByTagName("distribution");
            $distribution = $dis->item(0)->nodeValue;
            $rate = $employee->getElementsByTagName("rating");
            $rating = $rate->item(0)->nodeValue;
            $key = $employee->getElementsByTagName("keywords");
            $keywords = $key->item(0)->nodeValue;
            $logo = $employee->getElementsByTagName("logo");
            $logos = $logo->item(0)->nodeValue;
            $icon = $employee->getElementsByTagName("icon");
            $icons = $icon->item(0)->nodeValue;
            $desc = $employee->getElementsByTagName("description");
                $description = $desc->item(0)->nodeValue;
            $tit = $employee->getElementsByTagName("title");
			$gt = $employee->getElementsByTagName("gioithieu");
            $gioithieu = $gt->item(0)->nodeValue;
                $title = $tit->item(0)->nodeValue;
			$yh = $employee->getElementsByTagName("yahoo");
                $yahoo = $yh->item(0)->nodeValue;
				$pn = $employee->getElementsByTagName("phone");
                $phone = $pn->item(0)->nodeValue;
                $data_setting = array('author'=>$name,'publisher'=>$pubs,'copyright'=>$cop,'robots'=>$robots,
                    'distribution'=>$distribution,'rating'=>$rating,'keywords'=>$keywords,'logo'=>$logos,'icon'=>$icons,'description'=>$description,'title'=>$title,'gioithieu'=>$gioithieu,'yahoo'=>$yahoo,'phone'=>$phone);
        }
        $this->data['header']=$data_setting;
    }
	public function load_faq()
	{
		$this->load->model('faqhomemodel');
		$this->data['list_faq_rand']=$this->faqhomemodel->random_faq();
	}
	public function load_yahoo()
	{
		$this->load->model('faqhomemodel');
		$this->data['list_yahoo']=$this->faqhomemodel->list_support();
	}
	public function about()
	{
		$this->load->model('faqhomemodel');
		$this->data['about'] = $this->faqhomemodel->about(1);	
	}
	public function rand_image()
	{
		$this->load->model('faqhomemodel');
		$this->data['rand_image'] = $this->faqhomemodel->rand_image();	
	}
	public function load_cart()
	{
		$this->load->model('cartmodel');
		if(!empty($_SERVER['HTTP_CLIENT_IP'])){
			$ip = $_SERVER['HTTP_CLIENT_IP'];
		}
		elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
			$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		}
		else
		{
			$ip = $_SERVER['REMOTE_ADDR'];
		}
		if(!isset($_SESSION['code_random']))
		{
			$_SESSION['code_random'] = 	rand_string(6);
		}
		$ip = $_SESSION['code_random'];
		$list_cart = $this->cartmodel->list_cart_ip($ip);
		$this->data['list_cart'] = $list_cart;
	}
}
?>