<?php 
function microtime_float()
{
list($usec, $sec) = explode(" ", microtime());
return ((float)$usec + (float)$sec);
}
$time_start = microtime_float();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html>
    <head>
        <title>Quản lý bán hàng</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <meta name="description" content=""/>
                <meta name="keywords" content=""/>
                    <meta http-equiv='cache-control' content='no-cache'/>
                    <meta http-equiv='expires' content='0'/>
                    <meta http-equiv='pragma' content='no-cache'/>
                    <script type="text/javascript" src="<?php echo base_url(); ?>template/ezwebvietnam/admin_cp/js/jquery.js" charset="UTF-8"></script>
                    <script type="text/javascript" src="<?php echo base_url(); ?>template/ezwebvietnam/admin_cp/js/core/360vnit.alert.js?v=2.0" charset="UTF-8"></script>
                    <script type="text/javascript" src="<?php echo base_url(); ?>template/ezwebvietnam/admin_cp/js/menu.js?v=2.0" charset="UTF-8"></script>
                    <script type="text/javascript" src="<?php echo base_url(); ?>template/ezwebvietnam/admin_cp/js/core/function.admin.app.js?v=2.0" charset="UTF-8"></script>
                    <script type="text/javascript" src="<?php echo base_url(); ?>template/ezwebvietnam/admin_cp/js/app.js?v=2.0" charset="UTF-8"></script>
                    <script type="text/javascript" src="<?php echo base_url(); ?>template/ezwebvietnam/admin_cp/js/tabui.js?v=2.0" charset="UTF-8"></script>
                    <script type="text/javascript" src="<?php echo base_url(); ?>template/ezwebvietnam/admin_cp/js/core/jquery.validate.min.js?v=2.0" charset="UTF-8"></script>
                    <script src="<?php echo base_url() ?>plugin/ckeditor/ckeditor.js"></script>
                    <script type="text/javascript" src="<?php echo base_url(); ?>template/ezwebvietnam/admin_cp/js/upload.js"></script>
                    <script type="text/javascript" src="<?php echo base_url(); ?>template/ezwebvietnam/admin_cp/fancybox/jquery.fancybox-1.3.4.js"></script>
                    <script type="text/javascript" src="<?php echo base_url(); ?>template/ezwebvietnam/admin_cp/fancybox/jquery.easing-1.3.pack.js"></script>
                    <script type="text/javascript" src="<?php echo base_url(); ?>template/ezwebvietnam/admin_cp/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
                    <script type="text/javascript" src="<?php echo base_url(); ?>template/ezwebvietnam/admin_cp/js/core/jquery.watermarkinput.js"></script>
                    <script type="text/javascript" src="<?php echo base_url(); ?>template/ezwebvietnam/admin_cp/js/core/price_format.js"></script>
                    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>template/ezwebvietnam/admin_cp/css/styles.css?v=2.0" media="screen" />
                    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>template/ezwebvietnam/admin_cp/css/button.css?v=2.0" media="screen" />
                    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>template/ezwebvietnam/admin_cp/css/tabui.css?v=2.0" media="screen" />
                    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>template/ezwebvietnam/admin_cp/css/360vnit.alert.css?v=2.0" media="screen" />
                    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>template/ezwebvietnam/admin_cp/css/menu.css?v=2.0" media="screen" />
                    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/ezwebvietnam/admin_cp/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
                    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/ezwebvietnam/admin_cp/css/datepicker.css">
                        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/ezwebvietnam/admin_cp/css/datetheme.css">
                            <script type="text/javascript" src="<?php echo base_url(); ?>template/ezwebvietnam/admin_cp/js/core/jquery.ui.core.js"></script>
                            <script type="text/javascript" src="<?php echo base_url(); ?>template/ezwebvietnam/admin_cp/js/core/jquery.ui.datepicker.js"></script>
                            <script type="text/javascript" src="<?php echo base_url(); ?>template/ezwebvietnam/admin_cp/js/core/jquery.ui.widget.js"></script>
                            <script type="text/javascript">
                            $(document).ready(function() {
                                $.ajaxSetup({ cache: false });

                            });
                         </script>
    
                            </head>
                    
                            <body>
                                <div id="wrapper">
                                    <div id="loading">
                                        <div id="loadimg">Đang tải ...</div>
                                    </div>
                                    <!-- Begin Menu -->
                                    <div id="appmenu">
                                        <div id="menu">
                                            <ul>
                                                <li><a class="select" href="javascript:;" rel="hethong"><span>Hệ thống</span></a></li>
                                                <li><a href="javascript:;" rel="danhmuc"><span>Danh mục</span></a></li>
                                            </ul>
                                        </div>
                                        <div id="submenu">
                                            <div id="div_hethong" class="menucontent" style="display: block;">
                                                <div class="box_menu">
                                                    <div class="box_menu_right">
                                                        <ul>
                                                            <li class="main">
                                                                <a href="<?php echo base_url(); ?>admin/login/logout" class="v_link">
                                                                    <div><img src="http://quanlybanhang.360vnit.com/icon/logout.png" alt=""></div>
                                                                    Thoát                        
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="title_menu">Thoát</div>
                                                    </div>
                                                </div>
                                                <div class="box_menu">
                                                    <div class="box_menu_right">
                                                        <ul>
                                                           
                                                            <li class="main">
                                                                <a href="<?php echo base_url();?>admin/login/change_pass" class="grouped_elements">
                                                                    <div><img src="http://quanlybanhang.360vnit.com/icon/change_pass.png" alt=""></div>
                                                                    Đổi mật khẩu                        
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="title_menu">Tài khoản</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="div_danhmuc" class="menucontent">
                                                <div class="box_menu">
                                                    <?php 
                                                    if($this->session->userdata('role')==1)
                                                    {
                                                    ?>
                                                    <div class="box_menu_right">
                                                        <ul>
                                                            <li class="main">
                                                                <a href="<?php echo base_url(); ?>admin/productadmin/list_product" rel="khachhang" class="v_link">
                                                                    <div><img src="http://quanlybanhang.360vnit.com/icon/customers.png" alt=""></div>
                                                                    Sản phẩm
                                                                </a>
                                                            </li>
															<li class="main">
                                                                <a href="<?php echo base_url(); ?>admin/categoryadmin/list_cate" rel="category" class="v_link">
                                                                    <div><img src="http://quanlybanhang.360vnit.com/icon/customers.png" alt=""></div>
                                                                   Danh mục
                                                                </a>
                                                            </li>
                                                            
                                                            <li class="main">
                                                                <a href="<?php echo base_url(); ?>admin/accountadmin/list_account" rel="account" class="v_link">
                                                                    <div><img src="http://quanlybanhang.360vnit.com/icon/customers.png" alt=""></div>
                                                                    User
                                                                </a>
                                                            </li>
                                                            
                                                        </ul>
                                                        <div class="title_menu">Khách hàng</div>
                                                    </div>
                                                    <?php } ?>
                                                </div>
                                                <div class="box_menu">
                                                    <div class="box_menu_right">
                                                        <ul>
                                                            <?php 
                                                    if($this->session->userdata('role')==1)
                                                    {
                                                    ?>
													<li class="main">
                                                                <a href="<?php echo base_url(); ?>admin/clubadmin/list_club" rel="about" class="v_link">
                                                                    <div><img width="32" height="32" src="<?php echo base_url(); ?>template/ezwebvietnam/admin_cp/icon/sale.png" alt=""></div>
                                                                    Giới thiệu
                                                                </a>
                                                            </li>
                                                            <li class="main">
                                                                <a href="<?php echo base_url(); ?>admin/orderadmin/list_order" rel="khohang" class="v_link">
                                                                    <div><img src="<?php echo base_url(); ?>template/ezwebvietnam/admin_cp/icon/unit-icon.png" alt=""></div>
                                                                    Hóa đơn
                                                                </a>
                                                            </li>
                                                             <li class="main">
                                                                <a href="<?php echo base_url(); ?>admin/orderadmin/list_order_detail" rel="order_detail" class="v_link">
                                                                    <div><img src="<?php echo base_url(); ?>template/ezwebvietnam/admin_cp/icon/order_detail.png" alt=""></div>
                                                                    CT Hóa đơn
                                                                </a>
                                                            </li>
                                                            <li class="main">
                                                                <a href="<?php echo base_url(); ?>admin/paymentadmin/list_payment" rel="payment" class="v_link">
                                                                    <div><img src="<?php echo base_url(); ?>template/ezwebvietnam/admin_cp/icon/bank.png" alt=""></div>
                                                                   Tài khoản NH
                                                                </a>
                                                            </li>
															
                                                            <li class="main">
                                                                <a href="<?php echo base_url(); ?>admin/yahooadmin/list_yahoo" rel="yahoo" class="v_link">
                                                                    <div><img width="32" height="32" src="<?php echo base_url(); ?>template/ezwebvietnam/admin_cp/icon/yahoo.png" alt=""></div>
                                                                  Yahoo
                                                                </a>
                                                            </li>
															<li class="main">
                                                                <a href="<?php echo base_url(); ?>admin/imageadmin/list_image" rel="image" class="v_link">
                                                                    <div><img width="32" height="32" src="<?php echo base_url(); ?>template/ezwebvietnam/admin_cp/icon/pics_2.png" alt=""></div>
                                                                  Hình ảnh
                                                                </a>
                                                            </li>
                                                            <li class="main">
                                                                <a href="<?php echo base_url(); ?>admin/addressadmin/address" rel="address" class="v_link">
                                                                    <div><img width="32" height="32" src="<?php echo base_url(); ?>template/ezwebvietnam/admin_cp/icon/address.png" alt=""></div>
                                                                  Địa chỉ
                                                                </a>
                                                            </li>
															<li class="main">
                                                                <a href="<?php echo base_url(); ?>admin/saleadmin/list_sale" rel="sale" class="v_link">
                                                                    <div><img width="32" height="32" src="<?php echo base_url(); ?>template/ezwebvietnam/admin_cp/icon/sale.png" alt=""></div>
                                                                    Khuyến mại
                                                                </a>
                                                            </li>
                                                            
                                                            <li class="main">
                                                                <a href="<?php echo base_url(); ?>admin/settingadmin/list_setting" rel="setting" class="v_link">
                                                                    <div><img src="<?php echo base_url(); ?>template/ezwebvietnam/admin_cp/icon/setting.png" width="32" height="32" alt=""></div>
                                                                    Cấu hình
                                                                </a>
                                                            </li>
                                                    <?php } ?>
                                                            
                                                        </ul>
                                                        <div class="title_menu">Danh mục</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Menu -->
                                    <!--Begin content-->
                                    <div>
                                        <div id="content">
                                            <div>
                                            </div>
                                            <ul id="tabs">
                                                <!-- Tabs go here -->
                                                <li class="current">
                                                    <a class="tab" id="banlamviec" style="padding: 2px 10px 2px 5px">Bàn làm việc</a>
                                                </li>
                                            </ul>
                                            <div id="contenttab">
                                                <div class="show_overlay">
                                                    <div class="overlay_msg">Đang tải Báo cáo...</div>
                                                </div>
                                                <div id="banlamviec_content" class="sub_tabui">
                                                    <table style="width: 100%;" class="table_full">
                                                        <tr>
                                                            <td valign="top" style="background: #FFF;padding: 5px 5px 5px 5px;">
                                                              Chào mừng bạn đến với Hệ thống quản trị
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <!-- Tab content goes here -->
                                            </div>
                                            <div id="footer">
											<?php
$time_end = microtime_float();
$time = $time_end - $time_start;
?>
                                                <div>Thời gian nạp trang <?php echo number_format($time,5,".",",");?>'s</div>
                                                <div>Copyright &copy; 2009 - <?php echo date('Y');?> Version 2.0. All right reserved</div>
                                            </div>
                                            <div id="msg"></div>
                                            <div id="pop_bg"></div>
                                            <div id="pop"></div>
                                            </body>
                                            </html>