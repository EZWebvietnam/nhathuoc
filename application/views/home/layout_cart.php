<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title><?php echo $header['title']?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="<?php echo $header['keywords']?>"/>
		<meta name="description" content="<?php echo $header['description']?>"/>
		<meta name="google-site-verification" content="lfytPfSr1IDiT1R8qHpHv7MDRdbrFj4jMAb8m2bFbig" />
		<link rel="shortcut icon" href="/images/favicon.ico"/>
		<meta content="<?php echo $header['author']?>" name="author">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/css/reset.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/css/style.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/css/jquery.autocomplete.css"  />
		<link href="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/css/thickbox.css" rel="stylesheet" type="text/css" />
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
						<a href="" target="_blank" title="banner hotline"><img class="lazy" alt="banner hotline" src="<?php echo base_url();?>file/uploads/ybi1369099847.gif" /></a>
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
								$list_cate_lable = array();
								$list_cate_lable = $this->catehomemodel->list_cate_lable($cate_home['id_cate']);
								
							?>
							<li class="sub_it"><a   href="<?php echo base_url();?>san-pham/c/<?php echo $cate_home['id_cate']?>-<?php echo mb_strtolower(url_title(removesign($cate_home['title'])));?>" target="_self" rel="nofollow"><?php echo $cate_home['title']?></a>
							<?php 
							if(!empty($list_cate_lable))
							{
								?> 
								<ul style="margin-top:1px;">
							<?php 
							foreach($list_cate_lable as $c_lb)
								{
								
							?>
							
								<li class="sub_it"><a   href="<?php echo base_url();?>san-pham/c/<?php echo $c_lb['id_cate']?>-<?php echo mb_strtolower(url_title(removesign($c_lb['title'])));?>" target="_self" rel="nofollow"><?php echo $c_lb['title']?></a>
							
							<?php } ?> 
							</ul>
							<?php }
							?>
							</li>
							<?php } ?>
								
								
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
							<form name="frmSearch" action="<?php echo base_url();?>tim-kiem" method="get">				
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
						<div class="hot_line_label"><span>Tra cứu thông tin đơn hàng?</span></div>
						<div class="pro_code">
						<form method="get" action="<?php echo base_url();?>tinh-trang-don-hang" target="_blank" name="tracuu">
							<div class="d_code"><input type="text" name="code" id="code" value="" placeholder="Mã đơn hàng"></div>
							<div class="s_code"><a href="javascript:void(0)" onclick="document.tracuu.submit()">OK</a></div>
						</form>
						</div>
					</div>
					<!--end #hot_line-->
				</div>
				<!--end #search_hot_line-->		
				<div id="cart_pro">
					<input type="hidden" name="cart_update_back" id="cart_update_back" value="/gio-hang.html?message=success"/>
					<div class="cx_content">
						<div class="title">
							<div class="pro_stt">STT</div>
							<div class="pro_code">Mã hàng</div>
							<div class="pro_pro">Sản phẩm</div>
							<div class="pro_price">Giá bán</div>
							<div class="pro_quantity">Số lượng</div>
							<div class="pro_sum">Thành tiền</div>
						</div>
						<!--end .title-->	
						<?php 
						$total_price = 0;
						foreach($list_cart as $cart_)
						{
						?>
						<div class="cart_pro_item">
							<div class="pro_stt">1</div>
							<div class="pro_code"><?php echo $cart_['code']?></div>
							<div class="pro_pro">
								<div class="thumb">
									<div> <a href="<?php echo base_url();?>san-pham/<?php echo $cart_['id_product']?>-<?php echo mb_strtolower(url_title(removesign($cart_['title'])))?>" target="_blank">
									<?php 
								if(file_exists(PATH_FOLDER.ROT_DIR.'file/uploads/product/'.$cart_['image']) && is_file(PATH_FOLDER.ROT_DIR.'file/uploads/product/'.$cart_['image']) && $cart_['image']!='')
								{
								
								?>
									<img src="<?php echo base_url();?>file/uploads/product/<?php echo $cart_['image']?>" />
									<?php } else {?>
									<img src="<?php echo base_url();?>file/uploads/no_image.gif" />
									<?php } ?>
									</a></div>
								</div>
								<div class="teaser">
									
									<div class="bold"><a class="blue" href="<?php echo base_url();?>san-pham/<?php echo $cart_['id_product']?>-<?php echo mb_strtolower(url_title(removesign($cart_['title'])))?>" target="_blank"><?php echo $cart_['title']?></a></div>
									<div>Còn hàng</div>
								</div>
							</div>
							<?php 
							$sale_detail = $this->producthomemodel->get_sale_off_product($cart_['id_product']);
							
							$price = 0;
							if(!empty($sale_detail))
							{
								$price = $cart_['price'] - $cart_['price']*($sale_detail[0]['percent']/100);
							?>
							<div class="pro_price">Giá bán lẻ : <span class="price_old"><?php echo number_format($cart_['price']);?> ₫</span> <br />Giá bán : <span class="price_new"><?php echo number_format($price);?> ₫</span>		</div>
							<?php } else { ?>
							<div class="pro_price">Giá bán : <span class="price_new"><?php echo number_format($cart_['price']);?> ₫</span>		</div>
							<?php } ?>
							<div class="pro_quantity">
								<div class="save_quant"><input type="text" size="2" name="quality_<?php echo $cart_['id_product']?>" id="quality_<?php echo $cart_['id_product']?>" value="<?php echo $cart_['quantity']?>" /> &nbsp; <input title="<?php echo $cart_['id_product']?>" class="btUpdateItem" type="button" value="Cập nhật" /></div>
											<a href="#" class="cartItemDelete" rel="<?php echo $cart_['id_product']?>">Xóa khỏi giỏ hàng</a>		
							</div>
							<div class="pro_sum"><?php echo number_format($cart_['total_price']);?> ₫</div>
							<div class="clear"></div>
						</div>
						<?php $total_price+= $cart_['total_price'];} ?>
						<!--end .cart_pro_item-->	
					</div>
					<!--end .cx_content-->
					<div id="cart_pro_right">
						<div class="cart_opt">
							<a class="buttom_y" href="javascript:void(0)" onclick="return updateAllItemInCart()">Cập nhật đơn hàng</a>		<br />		<a class="buttom_y" href="/">Tiếp tục mua hàng</a>		
							<div class="clear"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
						</div>
						<!--end .cart_action-->	
						<div class="clear"></div>
					</div>
					<!--end #cart_pro_right-->	
					<div class="clear"></div>
					<div class="foot_cart">
						
						<!--end .savings-->		
						<div class="price_sum">			Tổng tiền:	      <span><?php echo number_format($total_price);?> ₫</span>		</div>
						<!--end .price_sum-->		
						<div class="clear"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
						
						<div class="clear"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
						<div class="charge">Miễn phí vận chuyển		</div>
						<div class="clear"></div>
					</div>
					<!--end #foot_cart-->		
					
					<div class="clear"></div>
					
					<form action="" method="post" id="formUserBookPayment" name="formUserBookPayment">
						<div class="clear"></div>
						<div class="order_message_no_login"><span>Vui lòng điền thông tin dưới đây:</span></div>
						<div class="clear"></div>
						<div class="order_info_recie">
							<div class="order_info_recie_form">
								<div class="label"><span>Thông tin đặt hàng</span></div>
								<table border="0" cellpadding="4" cellspacing="4">
									<tr>
										<td>
											Họ và tên (phân biệt bằng khoảng trắng):<br/>
											<input class="i_text" name="book_user_name" id="book_user_name" value="" type="text" />
										</td>
									</tr>
									<tr>
										<td>
											Điện thoại:<span class="important">*</span><br/>
											<input class="i_text" id="book_user_phone" name="book_user_phone" value="" type="text"/>
										</td>
									</tr>
									<tr>
										<td>
											Địa chỉ Email:<span class="important">*</span><br/>
											<input name="book_user_email" id="book_user_email" value="" class="i_text" type="text"/>
										</td>
									</tr>
									<tr>
										<td>
											Địa chỉ giao hàng:<br/>
											<input class="i_text" name="book_user_address" id="book_user_address" value="" type="text" />
										</td>
									</tr>
									<tr>
										<td>
											Tỉnh/Thành phố:<br>
											<select class="i_text cty" name="book_user_city" id="book_user_city">
												<option value="0">--Chọn Tỉnh/Thành--</option>
												<option value="2302">Địa điểm khác</option>
												<option value="1473">Hà Nội</option>
												<option value="1506">Đà Nẵng</option>
												<option value="1474">TP HCM</option>
												<option value="1475">Hải Phòng</option>
												<option value="1525">Cần Thơ</option>
												<option value="1526">An Giang</option>
												<option value="1527">Bà Rịa - Vũng Tàu</option>
												<option value="1528">Bạc Liêu</option>
												<option value="1483">Bắc Kạn</option>
												<option value="1482">Bắc Giang</option>
												<option value="1484">Bắc Ninh</option>
												<option value="1529">Bến Tre</option>
												<option value="1530">Bình Dương</option>
												<option value="1507">Bình Định</option>
												<option value="1508">Bình Phước</option>
												<option value="1509">Bình Thuận</option>
												<option value="1531">Cà Mau</option>
												<option value="1485">Cao Bằng</option>
												<option value="1510">Đắk Lắk</option>
												<option value="1511">Đắk Nông</option>
												<option value="1533">Đồng Tháp</option>
												<option value="1532">Đồng Nai</option>
												<option value="1486">Điện Biên</option>
												<option value="1512">Gia Lai</option>
												<option value="1487">Hà Giang</option>
												<option value="1488">Hà Nam</option>
												<option value="1513">Hà Tĩnh</option>
												<option value="1489">Hải Dương</option>
												<option value="1490">Hòa Bình</option>
												<option value="1534">Hậu Giang</option>
												<option value="1491">Hưng Yên</option>
												<option value="1514">Khánh Hòa</option>
												<option value="1535">Kiên Giang</option>
												<option value="1515">Kon Tum</option>
												<option value="1492">Lai Châu</option>
												<option value="1494">Lào Cai</option>
												<option value="1493">Lạng Sơn</option>
												<option value="1516">Lâm Đồng</option>
												<option value="1536">Long An</option>
												<option value="1495">Nam Định</option>
												<option value="1517">Nghệ An</option>
												<option value="1496">Ninh Bình</option>
												<option value="1518">Ninh Thuận</option>
												<option value="1497">Phú Thọ</option>
												<option value="1519">Phú Yên</option>
												<option value="1520">Quảng Bình</option>
												<option value="1521">Quảng Nam</option>
												<option value="1522">Quảng Ngãi</option>
												<option value="1498">Quảng Ninh</option>
												<option value="1523">Quảng Trị</option>
												<option value="1537">Sóc Trăng</option>
												<option value="1499">Sơn La</option>
												<option value="1538">Tây Ninh</option>
												<option value="1500">Thái Bình</option>
												<option value="1501">Thái Nguyên</option>
												<option value="1502">Thanh Hóa</option>
												<option value="1524">Thừa Thiên Huế</option>
												<option value="1539">Tiền Giang</option>
												<option value="1540">Trà Vinh</option>
												<option value="1503">Tuyên Quang</option>
												<option value="1541">Vĩnh Long</option>
												<option value="1504">Vĩnh Phúc</option>
												<option value="1505">Yên Bái</option>
												<option value="1542">Nước Ngoài</option>
											</select>
										</td>
									</tr>
									<tr>
										<td>
											Ghi chú:<br/>
											<textarea id="book_note" name="book_note"></textarea>
											<br />
											<br />
											<div class="icon_payment"><span>Thanh toán khi nhận hàng</span></div>
											<div class="clear"></div>
											<div class="icon_return"><span>Trả hàng miễn phí trong 30 ngày</span></div>
											<div class="clear"></div>
											<div class="icon_free_shipping">
												<span>
												Giao hàng miễn phí cho đơn hàng lớn hơn 300.000 ₫									</span>
											</div>
											<div class="clear"></div>
										</td>
									</tr>
								</table>
							</div>
						</div>
						<div class="order_space"></div>
						<div class="order_info_recie">
							<div class="order_info_recie_form border_info">
								<div class="label_1"><span>Thông tin đơn hàng</span></div>
								<table border="0" cellpadding="4" cellspacing="4">
									<tr>
										<td class="text">Tổng tiền:</td>
										<td class="value"><?php echo number_format($total_price);?> ₫</td>
									</tr>
									<tr>
										<td class="text">Phí vận chuyển:</td>
										<td class="value">
											Miễn phí vận chuyển							
										</td>
									</tr>
									
									<tr>
										<td class="text">Thành tiền:</td>
										<td class="value"><?php echo number_format($total_price);?> ₫</td>
									</tr>
								</table>
							</div>
							<div class="clear"></div>
							<div class="payment_2">
								<a href="javascript:void(0)" onclick="paymentValidate(this)">Hoàn tất đơn hàng</a>
								<div id="user_book_wait" style="display:none;"></div>
							</div>
						</div>
						<div class="clear"></div>
						<input type="hidden" name="action" value="payment" />
					</form>
					<a id="go_top" href="javascript:goTop()" >Lên đầu trang</a>
				</div>
				<!--end #cart_pro-->
				<!-- Google Code for Gi&#7887; h&agrave;ng - Nhathuoc365.vn Conversion Page -->
				<script type="text/javascript">
					/* <![CDATA[ */
					var google_conversion_id = 998389176;
					var google_conversion_language = "en";
					var google_conversion_format = "2";
					var google_conversion_color = "ffffff";
					var google_conversion_label = "mpuKCODThAQQuOuI3AM";
					var google_conversion_value = 0;
					/* ]]> */
				</script>
				<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js"></script>
				<noscript>
					<div style="display:inline;">
						<img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/998389176/?value=0&amp;label=mpuKCODThAQQuOuI3AM&amp;guid=ON&amp;script=0"/>
					</div>
				</noscript>
				<div class="clear"><img height="1px" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
				<div id="footer">
					<div id="footer_menu">
						<div id="footer_menu_main">
							<div class="footer_menu_sub border_right">
								<span class="title">Về chúng tôi</span>
								<a class="link" rel="follow" href="<?php echo base_url();?>gioi-thieu" target="_self">Giới thiệu</a>
								<a class="link" rel="nofollow" href="<?php echo base_url();?>huong-dan-thanh-toan" target="_self">Hướng dẫn thanh toán</a>
								<a class="link" rel="nofollow" href="<?php echo base_url();?>lien-he" target="_self">Liên hệ</a>
								
							</div>
							<!--end .footer_menu_sub-->
							<div class="footer_menu_sub border_right">
								<span class="title">Nhóm sản phẩm</span>
								<?php 
								foreach($list_cate_home as $cate_home)
								{
								?>
								<a class="link" rel="" href="<?php echo base_url();?>san-pham/c/<?php echo $cate_home['id_cate']?>-<?php echo mb_strtolower(url_title(removesign($cate_home['title'])));?>" target="_self"><?php echo $cate_home['title']?></a>
								<?php }  ?>
								
							</div>
							<!--end .footer_menu_sub-->
							<div class="footer_menu_sub border_right">
								<span class="title">Thống kê truy cập</span>
								<!-- Histats.com  START  (standard)-->
<script type="text/javascript">document.write(unescape("%3Cscript src=%27http://s10.histats.com/js15.js%27 type=%27text/javascript%27%3E%3C/script%3E"));</script>
<a href="http://www.histats.com" target="_blank" title="hits counter" ><script  type="text/javascript" >
try {Histats.start(1,2736506,4,432,112,75,"00011111");
Histats.track_hits();} catch(err){};
</script></a>
<noscript><a href="http://www.histats.com" target="_blank"><img  src="http://sstatic1.histats.com/0.gif?2736506&101" alt="hits counter" border="0"></a></noscript>
<!-- Histats.com  END  -->
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
					<div><a href="http://nhathuoc365.vn/qc/baby-plex.html?utm_source=Banner" target="_blank"><img class="lazy" alt="Baby plex+ Tràm" src="/data/banner/baby-plex-tram.gif" border="0"></a></div>
				</div>
				<div id="divAdLeft">
					<div><a href="http://www.nhathuoc365.vn/san-pham-giam-can/vien-uong-best-slim-giam-can-hieu-qua.html" target="_self"><img class="lazy" alt="best slim 960k" src="/data/banner/mip1359080300.gif" border="0"></a></div>
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
				
			</div>
			<!--end #wrapper-->
		</div>
		<!--end #wrapper_main-->    
	</body>
</html>