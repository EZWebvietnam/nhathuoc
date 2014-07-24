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
		<link href="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template//css/thickbox.css" rel="stylesheet" type="text/css" />
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
		<script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template//js/jquery.ui.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template//js/slides.min.jquery.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template//js/jquery.min.slideshow.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template//js/jquery.tools.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template//js/jquery.raty.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template//js/jquery.boxy.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template//js/jquery.lazyload.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template//js/jquery.autocomplete.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template//js/jd.menu.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template//js/tooltip.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template//js/library.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template//js/thickbox.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template//js/swfobject.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template//js/jquery.countdown.js"></script>
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
				<div id="content">
					<div class="clear"><img height="12px" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
					<div id="content_manual">
						<div id="nav_link">
							<a href="/">Trang chủ</a><span> &gt; </span>
							<?php 
							if(isset($ís_about))
							{
								?> 
								<a href="<?php echo full_url_($_SERVER);?>" class=""><?php echo $header['title'];?></a>
								<?php
							}
							else 
							{
							
							?>
							<a href="<?php echo full_url_($_SERVER);?>" class="">Tin khuyến mại</a>
							<?php } ?>
						</div>
						<!--end #nav_link-->        
						<?php echo $this->load->view($main_content);?>
						<!--end .manual_cat-->
						<div class="clear"><img height="10px" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
						<div class="clear"><img height="10px" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
						
						<script src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/js/jquery.carouFredSel.js" type="text/javascript"></script>	
						<div class="clear"><img height="10px" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
					</div>
					<!--end #content_manual-->
					<div id="manual_side">
						<div class="box_manual">
							<div class="box_man_top">
								<div class="box_man_top_l"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
								<div class="box_man_top_m"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
								<div class="box_man_top_r"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
							</div>
							<!--end .box_man_top-->
							<div class="clear"></div>
							<div class="manual_side_">
								<div class="box_man_title">
									Thuộc tính            
								</div>
								<!--end .box_man_title-->
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
								<div><a href="mailto:youremail@example.com?body=<?php echo full_url_($_SERVER);?>"><img src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/icon_mail1.png" /></a></div>
								<div><a href="javascript:print()"><img src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/icon_print1.png" /></a></div>
								<div class="addthis_toolbox addthis_default_style ">
									<a href="http://www.addthis.com/bookmark.php?v=250&amp;pubid=xa-4ec4c59b10e7803a" class="addthis_button_compact"><img src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/icon_share.png" /></a><script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4ec4c59b10e7803a"></script>
								</div>
								<div class="clear"></div>
							</div>
							<!--end .manual_side_-->
							<div class="clear"></div>
							<div class="box_man_bot">
								<div class="box_man_bot_l"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
								<div class="box_man_bot_m"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
								<div class="box_man_bot_r"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
							</div>
							<!--end .box_man_bot-->
						</div>
						<!--end .box_manual-->
						<div class="clear"><img height="10px" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
						
						<!--end #manual_side_adv-->
						<div class="clear"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" width="10" height="10" /></div>
						<div class="box_menu">
							
							<div class="clear"></div>
							
						</div>
						<div class="clear"><img src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" width="10" height="10" alt="spacer" /></div>
						<div class="clear"><img height="10px" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
					</div>
					<!--end #manual_side-->
					<div class="clear"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
				</div>
				<!--end #content-->	
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
								<div class="fb-like-box" data-href="https://www.facebook.com/ezwebvietnam" data-width="368" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
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
						<div id="copy_info" style="margin-left:5px; !important;">
							<div class="info">
								<div>
									<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=AIzaSyAZ7yY9gsPiLaOraj_eOfWd0e9Bidg0dPc&sensor=true" type="text/javascript"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript">
    var map;
    var infowindow;
    var marker = new Array();
    var old_id = 0;
    var infoWindowArray = new Array();
    var infowindow_array = new Array();
    function initialize(a, b, c) {
        var defaultLatLng = new google.maps.LatLng(a, b);
        var myOptions = { zoom: 16, center: defaultLatLng, scrollwheel: false, mapTypeId: google.maps.MapTypeId.ROADMAP };
        map = new google.maps.Map(document.getElementById("map_canvas"), myOptions); map.setCenter(defaultLatLng);
        var arrLatLng = new google.maps.LatLng(a, b);
        infoWindowArray[1161] = c;
        //infoWindowArray[1161] = '<div class="inforCty"><b>HaThanhAuto.com – THẾ GIỚI PHỤ TÙNG Ô TÔ NHẬP KHẨU-DẦU NHỚT PHỤ GIA Ô TÔ.</b></div><div class="infoAdd"><b>Địa chỉ</b>: Số 2 ngõ 77 Xuân la – Tây hồ - Hà Nội</div><div class="infoAdd"><b>Điện thoại: 0942 399 366 </b><br/> <b>  Website: </b><a href="http://www.hathanhauto.com" target="_blank">www.hathanhauto.com</a></div>';
        loadMarker(arrLatLng, infoWindowArray[1161], 1161);
        moveToMaker(1161);
    }

    function loadMarker(myLocation, myInfoWindow, id) {
        marker[id] = new google.maps.Marker({ position: myLocation, map: map, visible: true });
        var popup = myInfoWindow; infowindow_array[id] = new google.maps.InfoWindow({ content: popup });
        google.maps.event.addListener(marker[id], 'mouseover', function () {
            if (id == old_id) return;
            if (old_id > 0) infowindow_array[old_id].close();
            infowindow_array[id].open(map, marker[id]);
            old_id = id;
        });
        google.maps.event.addListener(infowindow_array[id], 'closeclick', function () { old_id = 0; });
    }

    function moveToMaker(id) {
        var location = marker[id].position; map.setCenter(location);
        if (old_id > 0) infowindow_array[old_id].close();
        infowindow_array[id].open(map, marker[id]);
        old_id = id;
    }
</script>
<div id='map_canvas' style='width: 500px; height: 115px'></div><script type='text/javascript'>initialize(<?php echo LAT?>,<?php echo LONG?>,"<div class='inforCty' style='text-align:left;'><b><?php echo TITLE;?></b></div>")</script>
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
				
			</div>
			<!--end #wrapper-->
		</div>
		<!--end #wrapper_main-->    
	</body>
</html>
