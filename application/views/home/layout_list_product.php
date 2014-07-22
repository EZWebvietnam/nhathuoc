<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title><?php echo $header['title']?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="<?php echo $header['keywords']?>"/>
		<meta name="description" content="<?php echo $header['description']?>"/>
		<meta name="google-site-verification" content="lfytPfSr1IDiT1R8qHpHv7MDRdbrFj4jMAb8m2bFbig" />
		<link rel="shortcut icon" href="images/favicon.ico"/>
		<meta content="<?php echo $header['author']?>" name="author">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/css/reset.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/css/style.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/css/jquery.autocomplete.css"  />
		<link href="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/css/thickbox.css" rel="stylesheet" type="textcss" />
		<script>
			<?php
			if($_SERVER['SERVER_NAME'] == 'localhost')
			 {
			     ?> 
					var base_url = 'http://localhost/nhathuoc/';
				 <?php 
			 }
			 else
			 {
			    ?> 
				var base_url = 'http://nhathuoc/';
				<?php
			 }
			 ?>
		</script>
		<script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/js/jquery.ui.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/js/slides.min.jquery.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/js/jquery.min.slideshow.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/js/jquery.tools.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/js/jquery.raty.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/js/jquery.boxy.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/js/jquery.lazyload.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/js/jquery.autocomplete.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/js/jd.menu.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/js/tooltip.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/js/library.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/js/thickbox.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/js/swfobject.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/js/jquery.countdown.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/js/paging.js"></script>
	</head>
	<body>
		<div id="wrapper_top">
			<div class="wrapper_top">
				<div class="wt_menu">
					
				</div>
				<div id="user_tool">
					
				</div>
				<!--end #user_tool-->	
			</div>
		</div>
		<div class="clear"></div>
		<div id="wrapper_main">
			<div id="wrapper">
				<div id="header">
					<div id="logo">
						<a href="/" target="_self" title="Logo"><img class="lazy" alt="Logo" src="<?php echo base_url();?>file/uploads/logo/<?php echo $header['logo'];?>" /></a>
					</div>
					<div id="top_info">
						<a href="" target="_blank" title="banner hotline"><img class="lazy" alt="banner hotline" src="/data/banner/ybi1369099847.gif" /></a>
					</div>
					<!--end #top_info-->	
					<div id="cart_user">
						<div id="cart_tool">
							<div class="clear"><img src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" alt="spacer" width="10" height="10"/></div>
								<div class="cart_info">
								<div id="cartTotal" class="cartTotal"><span>Tổng tiền: <?php echo number_format($total_money);?> ₫</span></div>
								<div id="right-box-2" style="position:relative;" class="CartInfo" >
									<a href="<?php echo base_url();?>gio-hang" title="Giỏ hàng" rel="nofllow"><span id="numCart">Giỏ hàng (<?php echo $count_cart;?>)</span></a>
									<div class="clear"></div>
									
								</div>
									<div class="clear"></div>
									
								</div>
							<div class="clear"><img src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" alt="spacer" width="5" height="5"/></div>
							<a class="tranport_free" href="/thong-bao/cuoc-van-chuyen.html">Cước vận chuyển</a>
							<div class="clear"><img src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" alt="spacer" width="5" height="5"/></div>
							<div class="head_support">
							<?php 
							foreach($list_yahoo as $yahoo)
							{
							
							?>
								<a href="ymsgr:sendIM?<?php echo $yahoo['nick'];?>"><span><?php echo $yahoo['name'];?></span></a>
								&nbsp;
							<?php } ?>
								
							</div>
						</div>
						<!--end #cart_tool-->	
					</div>
					<!--end #cart_user-->
					<div class="clear"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
				</div>
				<!--end #header-->
				<div id="menu_top">
					<ul  class="menu" id="menu">
						
						<li ><a  class="select" href="<?php echo base_url();?>" target="_self" rel="">Trang chủ</a><span><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></span></li>
						<li ><a  class="mt_it" href="<?php echo base_url();?>gioi-thieu" target="_self" rel="">Giới thiệu</a><span><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></span></li>
						<li >
							<a  class="mt_it" href="<?php echo base_url();?>san-pham" target="_self" rel="">Sản phẩm	</a><span><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></span>
							<ul>
							<?php 
							foreach($list_cate_home as $cate_home)
							{
							?>
							<li class="sub_it"><a   href="<?php echo base_url();?>san-pham/c/<?php echo $cate_home['id_cate']?>-<?php echo mb_strtolower(url_title(removesign($cate_home['title'])));?>" target="_self" rel="nofollow"><?php echo $cate_home['title']?></a></li>
							<?php }  ?>
								
								
							</ul>
						</li>
						
						<li ><a  class="mt_it" href="<?php echo base_url();?>khuyen-mai" target="_self" rel="">Khuyến mại</a><span><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></span></li>
						
						<li ><a  class="mt_it" href="<?php echo base_url();?>lien-he" target="_self" rel="">Liên hệ</a></li>
					</ul>
					<script type="text/javascript">
						var menu=new menu.dd('menu');
						menu.init('menu','menuhover');
					</script>
				</div>
				<!--end #menu_top-->
				<div id="search_hot_line">
					<div id="box_search">
						<div>
							<form name="frmSearch" action="/tim-kiem.html" method="get">				
								<input type="text" id="txtSearch" name="txtSearch" onfocus="if(this.value=='Từ khóa tìm kiếm') this.value=''" onblur="if(this.value=='') this.value='Từ khóa tìm kiếm'" value="Từ khóa tìm kiếm" /> 
							</form>
						</div>
						<a href="javascript:void(0)" onclick="document.frmSearch.submit()">Search</a>
					</div>
					<!--end #box_search-->
					<script language="javascript">
						$(document).ready(function(){
							$("#txtSearch").autocomplete("/vn/auto_search.php", {
								width: 332,
								selectFirst: false
							});
							$("#txtSearch").result(function(event, data, formatted) {
								if (data)
									$("#txtSearchID").val(data[1]);
									else $("#txtSearchID").val('0');
							});
						})
					</script>
					<div id="search_hot_line_spacer">
						<img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" />
					</div>
					<!--end #search_hot_line_spacer-->
					<div id="hot_line">
						<div class="hot_line_label"><span>Bạn đã có mã giảm giá?</a></span></div>
						<div class="pro_code">
							<div class="d_code"><input type="text" name="promotionCode" id="promotionCode" value=""></div>
							<div class="s_code"><a id="addPromotionCode" href="#">OK</a></div>
						</div>
					</div>
					<!--end #hot_line-->
				</div>
				<!--end #search_hot_line-->		
				<div id="content">
					<div id="side_content">
						<div id="font_size">Thay đổi cỡ chữ website: <a id="switcher-small" class="active" href="javascript:void(0)">A</a>&nbsp;<a class="active"  id="switcher-large" href="javascript:void(0)">A</a></div>
						<script language="javascript">
							$(document).ready(function() 
							{
								$('#switcher-small').css('font-size','10px');
								$('#switcher-large').css('font-size','14px');
								var $body = $('#content');
								defaultSize = 13;
								$('#font_size a').click(function() 
								{
									var num = parseFloat( $body.css('font-size'), 10 );
									switch (this.id) 
									{
										case 'switcher-large':
											num *= 1.05;
											break;
										case 'switcher-small':
											num /= 1.05;
											break;
									}
									$body.css('font-size', num + 'px');
									$('#font_size').css('font-size','13px');
									$('#switcher-small').css('font-size','10px');
									$('#switcher-large').css('font-size','14px');
								});
							});
						</script>
						
						<div class="clear"><img src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" alt="spacer" width="10" height="10" /></div>
						<div class="box_menu">
						<div class="title">Nhóm sản phẩm</div>
							<?php 
							foreach($list_cate_home as $cate_home)
							{
							?>
							<div class="li_link"><a rel="" href="<?php echo base_url();?>san-pham/c/<?php echo $cate_home['id_cate']?>-<?php echo mb_strtolower(url_title(removesign($cate_home['title'])));?>" target="_self"><?php echo $cate_home['title']?></a></div>
							<?php }  ?>
							<div class="clear"></div>
							<div class="li_link">
								<a href="/nhom-hang.html" title="Xem tất cả">Xem tất cả</a>
							</div>
							
						</div>
						<div class="clear"><img src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" alt="spacer" width="10" height="10" /></div>
						<!--end .box_menu-->
						<div class="clear"><img src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" alt="spacer" width="10" height="10" /></div>
						<div class="clear"><img src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" alt="spacer" width="10" height="10" /></div>
						
						<!--end .box_menu-->
						<div class="clear"><img src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" width="10" height="10" alt="spacer" /></div>
						<div class="box_menu">
							
						</div>
						<div class="clear"><img src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" width="10" height="10" alt="spacer" /></div>
						<div id="box_menu_last">
							<img height="10px" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" />
						</div>
						<!--end #box_menu_last-->
					</div>
					<!--end #side_content-->
					<div id="main_content">
						<div id="nav_link">
							<a href="/">Trang chủ</a><span> &gt; </span><a href="/nhom-hang.html">Sản phẩm</a><span> &gt; </span><a href="<?php echo full_url_($_SERVER);?>" class=""><?php echo $cate_detail_[0]['title']?></a>
						</div>
						<!--end #nav_link-->		 
						<div class="clear"><img height="7px" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
						<div class="product_list">
							
							
							<!--end #hot_product-->
							<div class="clear"><img height="15px" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
							<div class="main_title">
								<div class="main_title_l"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
								<div class="main_title_m">
									<div class="count_pro"><span>Tổng số 38</span></div>
									
									<!--end .quantity_display-->
									
									<!--end .display_order-->
								</div>
								<!--end .main_title_m-->
								<div class="main_title_r"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
							</div>
							<!--end #main_title-->
						
							<!--end .product_cat_item-->
							<?php 
							foreach($list as $product)
							{
							?>
							<div class="product_cat_item">
								<a class="thumb" href="<?php echo base_url();?>san-pham/<?php echo $product['id_product']?>-<?php echo mb_strtolower(url_title(removesign($product['title_product'])))?>" title="<?php echo $product['title_product']?>">
								<?php 
								if(file_exists(PATH_FOLDER.ROT_DIR.'file/uploads/product/'.$product['image']) && is_file(PATH_FOLDER.ROT_DIR.'file/uploads/product/'.$product['image']) && $product['image']!='')
								{
								
								?>
								<img class="lazy" src="<?php echo base_url();?>file/uploads/product/<?php echo $product['image']?>" alt="<?php echo $product['title_product']?>" />
								<?php } else { ?>
								<img class="lazy" src="<?php echo base_url();?>file/uploads/no_image.gif" alt="<?php echo $product['title_product']?>" />
								<?php } ?>
								</a>
								<div class="product_cat_item_teaser">
									<a class="blue_product" href="<?php echo base_url();?>san-pham/<?php echo $product['id_product']?>-<?php echo mb_strtolower(url_title(removesign($product['title_product'])))?>"><?php echo $product['title_product']?></a>
									<div class="clear"></div>
									<div class="clear"></div>
									<div><span style="float:left;">Nhà sản xuất:&nbsp;</span><span><a class="blue_supplier" style="float:left;" href="/thuong-hieu/cong-ty-vossen-bi.html">Công ty Vossen - Bỉ</a></span></div>
									<div class="clear"></div>
									<div><span>Nhà phân phối:&nbsp;</span><span>An Organics</span></div>
									<div class="clear"></div>
									<span>MT:&nbsp;CB02 • Gồm 2 lọ</span>
									<div class="clear"></div>
									<div class="pro_favi" rel="<?php echo $product['point']?>" title="<?php echo $product['id_product']?>">
										<div class="rate" id="proRate_<?php echo $product['id_product']?>"></div>
										<div class="comment"><span>(2 nhận xét)</span></div>
									</div>
									<!--end .pro_favi-->
									<div class="clear"></div>
									<div class="item_info"><span>Còn hàng</span><a class="quickview" href="#" rel="<?php echo $product['id_product']?>">Xem thông tin nhanh</a></div>
								</div>
								<!--end .product_cat_item_info-->
								<div class="product_cat_item_sale_off">
								<?php 
								$sale_detail = $this->producthomemodel->get_sale_off_product($product['id_product']);
								if(!empty($sale_detail))
								{
								?>
								
									<span>Sale - <?php echo $sale_detail[0]['percent']?>% Off</span>				
							
								<?php } ?>
									</div>
								<div class="product_cat_item_tool">
									<div class="price">
										<?php 
										if(!empty($sale_detail))
										{
											$price = $product['price'] - ($product['price']*($sale_detail[0]['percent']/100));
										?>
										<span class="b">Giá niêm yết:&nbsp;</span> <span class="black lt"><?php echo number_format($product['price']);?> ₫</span>
										<div class="clear"><img height="7" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
										<span class="b">Giá bán:&nbsp;</span> <span class="red"><?php echo number_format($price);?> ₫</span>												<?php } else { ?>
										<span class="b">Giá bán:&nbsp;</span> <span class="red"><?php echo number_format($product['price']);?> ₫</span>
										<?php } ?>
									</div>
									<a class="add_cart" href="#" rel="<?php echo $product['id_product']?>" title="Mua hàng"><span>Mua hàng</span></a>
									<a class="add_fav" href="#" rel="<?php echo $product['id_product']?>"><span>Sản phẩm yêu thích</span></a>
									<div class="clear"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
									
									<div class="clear"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
								</div>
								<!--end .product_cat_item_tool-->
								<!-- product tip -->
								<div id="tip_<?php echo $product['id_product']?>" class="hide">
									<div class="product_tip">
										<div class="thumb">
										<?php 
										if(file_exists(PATH_FOLDER.ROT_DIR.'file/uploads/product/'.$product['image']) && is_file(PATH_FOLDER.ROT_DIR.'file/uploads/product/'.$product['image']) && $product['image']!='')
										{
										
										?>
										<img  src="<?php echo base_url();?>file/uploads/product/<?php echo $product['image']?>" alt="<?php echo $product['title_product']?>" />
										<?php } else { ?>
										<img  src="<?php echo base_url();?>file/uploads/no_image.gif" alt="<?php echo $product['title_product']?>" />
										<?php } ?>
										</div>
										<div class="info">
											<p><?php echo sub_string(loaibohtmltrongvanban($product['content']),100);?></p>
										</div>
										<div class="clear"></div>
									</div>
									<!--end .product_tip-->
								</div>
								<!-- end .#tip_ -->
								<div class="clear"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
							</div>
							<?php } ?>
							<!--end .product_cat_item-->
							<div class="main_title">
								<div class="main_title_l"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
								<div class="main_title_m">
									<div class="count_pro"><span>Sản phẩm 1-25 trong tổng số 38</span></div>
									<div class="page_pro">
										<div id="page_break">
											<script type="text/javascript">
												var url = window.location.href;
												var res = url.split("/page/");
									                                $(function() {
									                                    $('div#page_break').html(LoadPagging(<?php echo $page?>, <?php echo $total?>,res[0],<?php echo $total_page?>));
									                                });
									                            </script>
										</div>
									</div>
								</div>
								<!--end .main_title_m-->
								<div class="main_title_r"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
							</div>
							<!--end #main_title-->
							<div class="clear"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
							<a id="go_top" href="#" >Lên đầu trang</a>
							<div class="clear"></div>
						</div>
						<div class="clear"><img height="10px" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
					</div>
					<!--end #main_content-->
					<div class="clear"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
				</div>
				<!--end #content-->	
				<div class="clear"><img height="1px" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
				<div id="footer">
					<div id="footer_menu">
						<div id="footer_menu_main">
							<div class="footer_menu_sub border_right">
								<span class="title">Về chúng tôi</span>
								<a class="link" rel="follow" href="/gioi-thieu/gioi-thieu.html" target="_self">Giới thiệu</a>
								<a class="link" rel="nofollow" href="/gioi-thieu/huong-dan-mua-hang.html" target="_self">Hướng dẫn mua hàng</a>
								<a class="link" rel="nofollow" href="/gioi-thieu/hinh-thuc-thanh-toan.html" target="_self">Hình thức thanh toán</a>
								<a class="link" rel="" href="/gioi-thieu/chinh-sach-van-chuyen.html" target="_self">Chính sách vận chuyển</a>
								<a class="link" rel="nofollow" href="/gioi-thieu/quy-dinh-su-dung.html" target="_self">Quy định sử dụng</a>
								<a class="link" rel="nofollow" href="/gioi-thieu/chinh-sach-doi-hang.html" target="_self">Chính sách đổi hàng</a>
								<a class="link" rel="nofollow" href="/gioi-thieu/cau-hoi-thuong-gap.html" target="_self">Câu hỏi thường gặp</a>
								<a class="link" rel="" href="/gioi-thieu/quye-loi-thanh-vien.html" target="_self">Quyền lợi khách hàng</a>
								<a class="link" rel="follow" href="/gioi-thieu/chinh-sach-bao-mat.html" target="_self">Chính sách bảo mật</a>
							</div>
							<!--end .footer_menu_sub-->
							<div class="footer_menu_sub border_right">
								<span class="title">Nhóm sản phẩm tiêu biểu</span>
								<a class="link" rel="" href="/vitamins-acid-amin-va-khoang-chat.html" target="_self">Vitamins và Khoáng chất</a>
								<a class="link" rel="" href="/xuong-khop.html" target="_self">Điều trị xương khớp</a>
								<a class="link" rel="" href="/thuc-pham-giam-can-an-kieng.html" target="_self">Thực phẩm giảm cân</a>
								<a class="link" rel="" href="/lam-dep-chong-lao-hoa.html" target="_self">Làm đẹp - Chống lão hóa</a>
								<a class="link" rel="" href="/suc-khoe-sinh-ly-nam.html" target="_self">Sức khỏe - sinh lý nam</a>
								<a class="link" rel="" href="/suc-khoe-sinh-ly-nu.html" target="_self">SK - Sinh lý nữ</a>
								<a class="link" rel="" href="/ho-tro-tuan-hoan-nao.html" target="_self">Hỗ trợ tuần hoàn não</a>
							</div>
							<!--end .footer_menu_sub-->
							<div class="footer_menu_sub border_right">
								<span class="title">Thương hiệu phổ biến</span>
								<a class="link" rel="" href="/thuong-hieu/nature-plus-my.html" target="_self">Nature 's Plus</a>
								<a class="link" rel="" href="/thuong-hieu/vitamins-for-life-my.html" target="_self">Vitamins For Life</a>
								<a class="link" rel="" href="/thuong-hieu/swanson-my.html" target="_self">Swanson</a>
								<a class="link" rel="" href="nowfoods-my.html" target="_self">Now Foods</a>
								<a class="link" rel="" href="/thuong-hieu//nhat-nhat.html" target="_self">Nhất Nhất</a>
								<a class="link" rel="" href="/thuong-hieu/traphaco.html" target="_self">Traphaco</a>
								<a class="link" rel="" href="/thuong-hieu/sao-thai-duong-212.html" target="_self">Sao Thái Dương</a>
							</div>
							<!--end .footer_menu_sub-->
							<div class="footer_menu_facebook">
								<div id="fb-root"></div>
								<script type="text/javascript">(function(d, s, id) {
									var js, fjs = d.getElementsByTagName(s)[0];
									if (d.getElementById(id)) return;
									js = d.createElement(s); js.id = id;
									js.src = "//connect.facebook.net/vi_VN/all.js#xfbml=1&appId=600896199960689";
									fjs.parentNode.insertBefore(js, fjs);
									}(document, 'script', 'facebook-jssdk'));
								</script>
								<div class="fb-like-box" data-href="https://www.facebook.com/Nhathuoc365" data-width="368" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
								<div class="clear"></div>
							</div>
							<!--end .footer_menu_facebook-->
							<div class="clear"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
						</div>
						<!--end #footer_menu_main-->
						<script language="javascript">
							$(document).ready(function(){
								maxH = 0;
								$('.footer_menu_sub').each(function(){ if($(this).height() > maxH) maxH = $(this).height(); });
								$('.footer_menu_sub').each(function(){ $(this).css('height',maxH); });
							})
						</script>
					</div>
					<!--end #footer_menu-->	
					<div class="clear"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
					<div id="footer_ext">
						<!--end #news_letter-->		
						<div id="copy_info">
							<div class="info">
								<div>
									
									<p style="text-align: justify;"><strong>Địa chỉ:</strong> <?php echo $about[0]['address'];?></p>
									<p><span style="font-size: small;"><span style="font-family: Arial;"> </span></span></p>
									<p style="text-align: justify;"><strong>Điện thoại</strong>: <?php echo $about[0]['phone'];?></p>
									<p style="text-align: justify;"><span style="font-size: small;"><span style="font-family: Arial;"><strong>Email:</strong> <?php echo $about[0]['email'];?></span></span></p>
									<p style="text-align: justify;"><em><strong><span style="font-size: small;"><span style="font-family: Arial;">Mọi th&ocirc;ng tin tr&ecirc;n website chỉ mang t&iacute;nh chất tham khảo.</span></span></strong></em></p>
									<p style="text-align: justify;"><em><strong><span style="font-size: small;"><span style="font-family: Arial;">Việc sử dụng TPCN n&ecirc;n theo hướng dẫn của b&aacute;c sĩ, dược sĩ hoặc người c&oacute; chuy&ecirc;n m&ocirc;n.</span></span></strong></em></p>
								</div>
							</div>
							
							<div class="clear"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
						</div>
					</div>
					<!--end #footer_ext-->
					<div class="clear"></div>
				</div>
				<!--end #footer-->
				<div id="divAdRight">
					<div>
					<?php 
					if(isset($sale_random[0]))
					{
					
					?>
					<a href="<?php echo base_url();?>khuyen-mai/km<?php echo $sale_random[0]['id']?>-<?php echo mb_strtolower(url_title(removesign($sale_random[0]['title'])))?>" target="_blank">
					<?php 
										if(file_exists(PATH_FOLDER.ROT_DIR.'file/uploads/sale_off/'.$sale_random[0]['img_scroll']) && is_file(PATH_FOLDER.ROT_DIR.'file/uploads/sale_off/'.$sale_random[0]['img_scroll']) && $sale_random[0]['img_scroll']!='')
										{
										
										?>
					<img class="lazy" alt="<?php echo $sale_random[0]['title'];?>" src="<?php echo base_url();?>file/uploads/sale_off/<?php echo $sale_random[0]['img_scroll'];?>" border="0">
						<?php } else { ?>
						<img class="lazy" alt="<?php echo $sale_random[0]['title'];?>" src="<?php echo base_url();?>file/uploads/no_image.gif" border="0">
						<?php } ?>
						
					</a>
					<?php } ?>
					</div>
				</div>
				<div id="divAdLeft">
					<div>
					<?php 
					if(isset($sale_random[0]))
					{
					
					?>
					<a href="<?php echo base_url();?>khuyen-mai/km<?php echo $sale_random[0]['id']?>-<?php echo mb_strtolower(url_title(removesign($sale_random[0]['title'])))?>" target="_blank">
					<?php 
										if(file_exists(PATH_FOLDER.ROT_DIR.'file/uploads/sale_off/'.$sale_random[0]['img_scroll']) && is_file(PATH_FOLDER.ROT_DIR.'file/uploads/sale_off/'.$sale_random[0]['img_scroll']) && $sale_random[0]['img_scroll']!='')
										{
										
										?>
					<img class="lazy" alt="<?php echo $sale_random[0]['title'];?>" src="<?php echo base_url();?>file/uploads/sale_off/<?php echo $sale_random[0]['img_scroll'];?>" border="0">
						<?php } else { ?>
						<img class="lazy" alt="<?php echo $sale_random[0]['title'];?>" src="<?php echo base_url();?>file/uploads/no_image.gif" border="0">
						<?php } ?>
					</a>
					<?php } ?>
					</div>
				</div>
				<script type="text/javascript">
					document.write("<script type='text/javascript' language='javascript'>MainContentW = 1015;LeftBannerW = 150;RightBannerW = 150;LeftAdjust = 0;RightAdjust = 2;TopAdjust = 31;ShowAdDiv();window.onresize=ShowAdDiv;;<\/script>");
				</script>
				<div style="height:98px;" id="fl813691">
					<div id="eb951855">
						<div id="cob263512">
							<div id="coh963846">
								<ul id="coc67178">
									<li id="pf204652hide"><a class="min" href="javascript:pf204652clickhide();" title="Ẩn quảng cáo">Ẩn quảng cáo</a></li>
									<li id="pf204652show" style="display: none;"><a class="max" href="javascript:pf204652clickshow();" title="Xem quảng cáo">Xem quảng cáo</a></li>
									<li id="pf204652close"><a class="close" href="javascript:pf204652clickclose();" title="Đóng quảng cáo">Đóng quảng cáo</a></li>
								</ul>
								&nbsp;<span id="eb951855_label">Hỗ trợ trực tuyến</span>
							</div>
							<div id="co453569">
								<div class="box_popup">
									<div class="popup_hotline">
										<div class="popup_ym">
											<div class="popup_ym_label"><span>ĐT tư vấn và đặt hàng</span></div>
											<div class="popup_ym_online"><a href="ymsgr:sendIM?<?php echo $header['yahoo']?>"><img src="http://opi.yahoo.com/online?u=<?php echo $header['yahoo']?>&m=g&t=1" alt="ĐT tư vấn và đặt hàng" /></a></div>
										</div>
										<div class="clear"></div>
										<span class="hotline"><?php echo $header['phone']?></span>
									</div>
									<div class="clear"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/js/jquery.cookie.js"></script>
				<script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/js/popup.js"></script>
				<script type="text/javascript">
					var _gaq = _gaq || [];
					_gaq.push(['_setAccount', 'UA-34754356-1']);
					_gaq.push(['_trackPageview']);
					
					(function() {
					  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
					  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
					  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
					})();
				</script>
				<!-- Google Code for Th&#7867; ti&#7871;p th&#7883; l&#7841;i -->
				<!-- Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. For instructions on adding this tag and more information on the above requirements, read the setup guide: google.com/ads/remarketingsetup -->
				<script type="text/javascript">
					/* <![CDATA[ */
					var google_conversion_id = 998389176;
					var google_conversion_label = "DjbkCOj1-gMQuOuI3AM";
					var google_custom_params = window.google_tag_params;
					var google_remarketing_only = true;
					/* ]]> */
				</script>
				<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
				<noscript>
					<div style="display:inline;">
						<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/998389176/?value=0&amp;label=DjbkCOj1-gMQuOuI3AM&amp;guid=ON&amp;script=0"/>
					</div>
				</noscript>
				<script type="text/javascript">
					/* <![CDATA[ */
					var google_conversion_id = 996270588;
					var google_custom_params = window.google_tag_params;
					var google_remarketing_only = true;
					/* ]]> */
				</script>
				<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
				<noscript>
					<div style="display:inline;">
						<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/996270588/?value=0&amp;guid=ON&amp;script=0"/>
					</div>
				</noscript>
			</div>
			<!--end #wrapper-->
		</div>
		<!--end #wrapper_main-->    
	</body>
</html>
