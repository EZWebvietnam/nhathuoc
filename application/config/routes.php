<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "home/index";
$route['trang-chu'] = "home/home/index";
$route['ajax.html'] = 'home/product/ajax_html';
$route['comment-product?(:any)'] = 'home/product/comment/$1';
$route['huong-dan-thanh-toan'] = "home/home/payment";
$route['cong-dung'] = "home/faq/list_congdung";
$route['cong-dung/page/(:any)'] = "home/faq/list_congdung";
$route['cd/(:any)-(:any)'] = "home/faq/congdung_detail/$1";
$route['gio-hang']="home/product/cart";
$route['tim-kiem']="home/product/list_product_search/$1";
$route['hoi-dap']="home/faq/list_faq";
$route['lien-he']="home/home/contact";
$route['khuyen-mai']="home/faq/list_sale";
$route['khuyen-mai/page/(:any)']="home/faq/list_sale";
$route['khuyen-mai/km(:any)-(:any)']="home/product/sale_detail/$1";
$route['hoi-dap/page/(:any)']="home/faq/list_faq";
$route['gui-cau-hoi']="home/faq/faq_post";
$route['chi-duong']="home/product/direction";
$route['thanh-toan']="home/product/checkout";
$route['san-pham'] = "home/product/list_product_all";
$route['san-pham/page/(:any)'] = "home/product/list_product_all";
$route['san-pham/c/(:any)-(:any)']="home/product/list_product/$1";
$route['san-pham/c/(:any)-(:any)/page/(:any)']="home/product/list_product/$1";
$route['san-pham/(:any)-(:any)'] = "home/product/product_detail/$1";
$route['404_override'] = '';
$route['gioi-thieu']='home/home/about';
$route['hoi-dap-(:any)-(:any)'] = 'home/faq/faq_detail/$1';
$route['active-user/(:any)/(:any)']='home/home/activate';
$route['lien-he'] = 'home/home/contact';
$route['quan-tri'] = "admin/login/index";
$route['quan-tri-vien'] = "admin/productadmin/index";
$route['quen-mat-khau'] = "admin/login/reset_pass";
$route['active-pass/(:any)/(:any)'] = "admin/login/active_pass";
/* End of file routes.php */
/* Location: ./application/config/routes.php */