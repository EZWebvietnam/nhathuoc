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
		
		<script src='<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/zoom/jquery.elevatezoom.js'></script>
	</head>
	<body>
	<script>
		$(document).ready(function(){
			$('a[href="#pro_detail_label"]').trigger('click');
		})
		
	</script>
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
				<script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/js/fancybox/jquery.fancybox-1.3.1.pack.js"></script>
				<link rel="stylesheet" type="textcss" href="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/js/fancybox/jquery.fancybox-1.3.1.css" media="screen" />
				<div id="content">
					<div class="clear"><img src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" alt="" width="1" height="23" /></div>
					<div id="pro_detail_name">
						<div id="nav_link">
							<a href="/">Trang chủ</a><span> &gt; </span><a href="<?php echo base_url();?>san-pham">Sản phẩm</a><span> &gt; </span><a href="<?php echo full_url_($_SERVER);?>" class=""><?php echo $product_detail[0]['title'];?></a>
						</div>
						<!--end #nav_link-->        
					</div>
					<!--end #pro_detail_name-->
					<div class="clear"></div>
					<div id="pro_detail_share">
						<div class="title"><span>Đánh giá tổng quát :&nbsp;</span></div>
						<div class="pro_favi" rel="<?php echo $product_detail[0]['point'];?>" title="<?php echo $product_detail[0]['id_product'];?>">
							<div class="rate" id="proRate_<?php echo $product_detail[0]['id_product'];?>"></div>
							<div class="comment"><span>(<?php echo count($list_comment);?> nhận xét)</span></div>
						</div>
						<a class="add_comment" href="javascript:void(0);" rel="<?php echo base_url();?>comment-product?pro_id=<?php echo $product_detail[0]['id_product'];?>&url=<?php echo full_url_($_SERVER);?>">Thêm nhận xét của bạn</a>
					</div>
					<!--end #pro_detail_share-->
					<div class="clear"></div>
					<div class="pro_detail_name">
						<h1><?php echo $product_detail[0]['title'];?></h1>
					</div>
					<div class="clear"></div>
					<div id="pro_detail">
						<div class="thumb">
							<div class="image">
								<div class="clear"></div>
								<div>
								
								<?php 
								if(file_exists(PATH_FOLDER.ROT_DIR.'file/uploads/product/'.$product_detail[0]['image']) && is_file(PATH_FOLDER.ROT_DIR.'file/uploads/product/'.$product_detail[0]['image']) && $product_detail[0]['image']!='')
								{
								
								?>
								<a class="zoom_in" title="<?php echo $product_detail[0]['title'];?>" href="<?php echo base_url();?>file/uploads/product/<?php echo $product_detail[0]['image'];?>"><img id="zoom_01" alt="<?php echo $product_detail[0]['title'];?>" class="lazy" src="<?php echo base_url();?>file/uploads/product/<?php echo $product_detail[0]['image'];?>" data-zoom-image="<?php echo base_url();?>file/uploads/product/<?php echo $product_detail[0]['image'];?>" /></a>
								<?php } else { ?>
								<a class="zoom_in" title="<?php echo $product_detail[0]['title'];?>" href="<?php echo base_url();?>file/uploads/no_image.gif"><img alt="<?php echo $product_detail[0]['title'];?>" class="lazy" src="<?php echo base_url();?>file/uploads/no_image.gif" /></a>
								<?php } ?>
								<script>
									$("#zoom_01").elevateZoom({ zoomWindowFadeIn: 500, zoomWindowFadeOut: 500, lensFadeIn: 500, lensFadeOut: 500 });
								   
								</script>
								</div>
								<div class="clear"></div>
								<div class="pd_share">
									<div class="addthis_toolbox addthis_default_style ">
										<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
										<a class="addthis_counter addthis_pill_style"></a>
									</div>
									<script type="text/javascript"> var addthis_config = {"data_track_clickback":true};</script>
									
								</div>
								<div class="clear"></div>
								<div class="tool">
									<div><a class="zoom_in" href="<?php echo base_url();?>file/uploads/product/<?php echo $product_detail[0]['image'];?>" title="Xem ảnh lớn">Xem ảnh lớn</a></div>
									<div><a class="label" href="#pro_tabs" title="Nhãn sản phẩm">Nhãn sản phẩm</a></div>
								</div>
								<!--end .tool-->
								<div class="clear"></div>
								<?php 
								$detail_sale = $this->producthomemodel->get_sale_off_product($product_detail[0]['id_product']);
								if(!empty($detail_sale))
								{
								?>
								<div class="pd_price_label"><span>Giá niêm yết:</span></div>
								<div class="pd_price_value">	&nbsp;&nbsp;<span class="black lt b"><?php echo number_format($product_detail[0]['price']) ?> ₫</span>&nbsp;&nbsp;<span class="red i">off <?php echo $detail_sale[0]['percent']?>%</span></div>
								<div class="clear"><img height="7" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
								<div class="pd_price_label"><span>Giá bán:</span></div>
								<?php 
								$price = $product_detail[0]['price'] - ($product_detail[0]['price']*($detail_sale[0]['percent']/100));
								?>
								<div class="pd_price_value"><span class="red b"><?php echo number_format($price);?> ₫</span></div>
								<?php } else { ?>
								<div class="pd_price_label"><span>Giá bán:</span></div>
								
								<div class="pd_price_value"><span class="red b"><?php echo number_format($product_detail[0]['price']);?> ₫</span></div>
								<?php } ?>
								<div class="clear"><img src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" alt="spacer" width="5" height="5" /></div>
								<div class="pd_price_label">Tình trạng:</div>
								<div class="pd_price_value">
									<span class="b">Còn hàng</span>
								</div>
								<div class="clear"><img src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" alt="spacer" width="5" height="5" /></div>
								<div class="pd_num_add2cart">
									<input type="text" value="1" size="3" id="pd_quality_<?php echo $product_detail[0]['id_product'];?>" name="pd_quality_<?php echo $product_detail[0]['id_product'];?>">
								</div>
								<div class="pd_button_add2cart">
									<a href="#add_cart" rel="<?php echo $product_detail[0]['id_product'];?>" class="add2cart" title="Mua hàng"><span>Mua hàng</span></a>
								</div>
							</div>
							<!--end .image-->
							<div class="clear"></div>
						</div>
						<!--end .thumb-->
						<script type="text/javascript">
							$(document).ready(function()
							{
								$("a.zoom_in").fancybox({
									'titleShow'		: false
								});
								$("ul.tabs li a:first").addClass('current');
								$("ul.tabs").tabs("div.panes > div");
							});
						</script>
						<div class="pro_detail_teaser">
							<div>Mã sản phẩm: <span><?php echo $product_detail[0]['code']?></span></div>
							<div>
								Loại sản phẩm: <?php echo $cate_detail[0]['title'];?>
								<h3></h3>
							</div>
							
							<div>Dạng bào chế: <span><?php echo $product_detail[0]['type']?></span></div>
							
							<div class="pro_detail_use" style="position:relative;">
								<?php echo sub_string($product_detail[0]['content'],300);?>
							</div>
							<!--end .hot_product_use-->
						</div>
						<!--end .pro_detail_teaser-->
						<div class="clear"><img height="10px" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
						<div class="pd_tools">
							
							<!-- End .pdt_cart -->
						</div>
						<!-- End .pd_tools -->
						<div class="clear" style="height:20px;">&nbsp;</div>
						<!-- End .clear -->
						<div id="pro_tabs">
							<div class="title">
								<ul class="tabs">
									<li><a href="#pro_detail_label"><span class="left"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></span><span class="main">Thông tin mô tả</span><span class="right"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></span></a></li>
									<li id="pro_indications_label"><a href="#pro_indications" ><span class="left"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></span><span class="main">Nhãn sản phẩm</span><span class="right"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></span></a></li>
									<li><a href="#pro_generate_vote"><span class="left"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></span><span class="main">Đánh giá sản phẩm</span><span class="right"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></span></a></li>
									<li><a href="#comment_fb"><span class="left"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></span><span class="main">Comment Facebook</span><span class="right"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></span></a></li>
								</ul>
								<div class="clear"></div>
							</div>
							<!--end .title-->
							<div class="panes">
								<div class="pro_detail_label" id="pro_detail_label" style="display:none;">
									<?php echo $product_detail[0]['content'];?>
									<!----3 NUT XEM THEM----->
									<div class="pro_goto">
										<div class="pro_go_to">
											<a href="#add_cart1" rel="<?php echo $product_detail[0]['id_product'];?>" class="add2cart1" title="Mua hàng">
											<img src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/btn_mua_hang.png" alt="Mua hang" border="0" />
											</a>
											<a href="#pro_xem_nhan">
											<img src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/btn_xem_nhan.png" alt="Xem nhan hang" border="0" />
											</a>
											<a href="#pd_y_kien">
											<img src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/btn_y_kien.png" alt="Y kien" border="0" />
											</a>
										</div>
										<!-- End .pro_go_to -->
										
										<!-- End .pdt_cart -->
									</div>
									<!-- End .pro_goto -->
									<!---END 3 NUT XEM THEM--------->
								</div>
								
								<!--end .pro_detail_label-->
								<div id="pro_indications" class="pro_detail_label">
									<div>
									</div>
									<div class="clear"><img height="20px" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
									<!----3 NUT XEM THEM----->
									<div class="pro_goto">
										<div class="pro_go_to">
											<a href="#add_cart1" rel="<?php echo $product_detail[0]['id_product'];?>" class="add2cart1" title="Mua hàng">
											<img src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/btn_mua_hang.png" alt="Mua hang" border="0" />
											</a>
											<a href="#pro_thong_tin">
											<img src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/btn_thong_tin.png" alt="Xem thong tin" border="0" />
											</a>
											<a href="#pd_y_kien">
											<img src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/btn_y_kien.png" alt="Y kien" border="0" />
											</a>
										</div>
										<!-- End .pro_go_to -->
										
										<!-- End .pdt_cart -->
									</div>
									<!-- End .pro_goto -->
									<!---END 3 NUT XEM THEM--------->
								</div>
								<div class="pro_generate_vote" id="pro_generate_vote" style="display:none;">
									<div class="pro_vote">
										<div class="title">
											<span>Tóm tắt khách hàng đánh giá và nhận xét</span>
										</div>
										<!--end .title-->
										<div class="clear"><img height="10px" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
										<div class="label">
											<span>Đánh giá tổng quát: </span>
											<div class="pro_favi" rel="<?php echo $product_detail[0]['point'];?>" title="ZGt5BQR">
												<div class="rate" id="proRate_<?php echo $product_detail[0]['id_product'];?>"></div>
											</div>
											<!--end .pro_favi-->
										</div>
										<div class="clear"><img height="10px" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
									</div>
									<!--end .pro_vote-->
									<div class="clear"><img height="10px" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
									<div class="pro_vote">
										<div class="title">
											<span>Ý kiến về sản phẩm</span>
											<a class="add_comment" href="javascript:void(0);" rel="<?php echo base_url();?>comment-product?pro_id=<?php echo $product_detail[0]['id_product'];?>&url=<?php echo full_url_($_SERVER);?>">Thêm đánh giá của bạn</a>
										</div>
										<!--end .title-->
										<?php 
										foreach($list_comment as $vote)
										{
											
										?>
										<div class="pro_vote_use">
											<div class="pro_vote_use_left">
												<div class="use_vote">Người đăng: <span></span><span><?php echo$vote['name']?></span></div>
												<div class="clear"><img height="10px" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
												<div class="label">
													<span>Đánh giá tổng quát: </span>
													<div class="pro_favi" rel="<?php echo $vote['point']?>" title="<?php echo $vote['id_comment']?>">
														<div class="rate" id="proRate_<?php echo $vote['id_comment']?>"></div>
													</div>
													<!--end .pro_favi-->
												</div>
												<div class="clear"><img height="10px" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
											</div>
											<!--end .pro_vote_use_left-->
											<div class="pro_vote_use_right">
												<div class="pro_vote_cap">Đánh giá  <span><?php echo $product_detail[0]['title']?></span></div>
												<div class="title_comment"><?php echo $vote['title_comment']?></div>
												<div class="time_comment"><?php echo date('d/m/Y',$vote['create_date'])?></div>
												<div class="teaser_comment"><?php echo $vote['content_comment']?></div>
											</div>
											<!--end .pro_vote_use_right-->
										</div>
										<!--end .pro_vote_use-->
										<div class="clear"></div>
										<?php } ?>
										<!--end .pro_vote_use-->
										<div class="clear"></div>
									</div>
									<!--end .pro_vote-->
									<div class="clear"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
									<div class="clear"><img height="20px" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
									<!----3 NUT XEM THEM----->
									<div class="pro_goto">
										<div class="pro_go_to">
											<a href="#add_cart1" rel="<?php echo $product_detail[0]['id_product'];?>" class="add2cart1" title="Mua hàng">
											<img src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/btn_mua_hang.png" alt="Mua hang" border="0" />
											</a>
											<a href="#pro_thong_tin">
											<img src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/btn_thong_tin.png" alt="Xem thong tin" border="0" />
											</a>
											<a href="#pro_xem_nhan">
											<img src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/btn_xem_nhan.png" alt="Xem nhan hang" border="0" />
											</a>
										</div>
										<!-- End .pro_go_to -->
										
										<!-- End .pdt_cart -->
									</div>
									<!-- End .pro_goto -->
									<!---END 3 NUT XEM THEM--------->
								</div>
								<div class="pro_detail_label" id="comment_fb" style="display:none;">
									<center>
								
									<div class="fb-like" data-href="<?php echo base_url();?>san-pham/<?php echo $product_detail[0]['id_product'];?>-<?php echo mb_strtolower(url_title(removesign($product_detail[0]['title'])));?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
									<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
<g:plusone></g:plusone>
									<div class="fb-comments" data-href="<?php echo base_url();?>san-pham/<?php echo $product_detail[0]['id_product'];?>-<?php echo mb_strtolower(url_title(removesign($product_detail[0]['title'])));?>" data-numposts="5" data-colorscheme="light"></div></center>
									
									
								</div>
								<!--end .pro_generate_vote-->
							</div>
							<!--end .panes-->
							<div class="clear"></div>
							<div class="clear"></div>
						</div>
						<!--end #pro_tabs-->
						<div id="pro_detail_tool">
							<a id="go_top" href="javascript:goTop()" >Lên đầu trang</a>
							<div class="mail_print">
								<a class="print" href="javascript:print()">Bản in</a>
							</div>
						</div>
						<!--end #pro_detail_tool-->
						<div class="clear"><img height="10px" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
						<div class="pro_other_new">
							<div class="title">Sản phẩm tương đương</div>
							<?php 
							$max = count($list_product_by_cate);
							foreach($list_product_by_cate as $product_b_c)
							{
								$i = 1;
								if($i == $max)
								{
									$no_border = "no_border";	
								}
								else
								{
									$no_border = "";	
								}
							?>
							<div class="pro_other_item <?php echo $no_border;?>">
								<a class="thumb_pro_other" href="<?php echo base_url();?>san-pham/<?php echo $product_b_c['id_product'];?>-<?php echo mb_strtolower(url_title(removesign($product_b_c['title'])));?>" title="<?php echo $product_b_c['title'];?>">
								<?php 
								if(file_exists(PATH_FOLDER.ROT_DIR.'file/uploads/product/'.$product_b_c['image']) && is_file(PATH_FOLDER.ROT_DIR.'file/uploads/product/'.$product_b_c['image']) && $product_b_c['image']!='')
								{
								
								?>
								<img class="lazy" src="<?php echo base_url();?>file/uploads/product/<?php echo $product_b_c['image']?>"  alt="<?php echo $product_b_c['title'];?>" />
								<?php } else { ?>
								<img class="lazy" src="<?php echo base_url();?>file/uploads/no_image.gif"  alt="<?php echo $product_b_c['title'];?>" />
								<?php } ?>
								</a>
								<a class="name bold" href="<?php echo base_url();?>san-pham/<?php echo $product_b_c['id_product'];?>-<?php echo mb_strtolower(url_title(removesign($product_b_c['title'])));?>" title="<?php echo $product_b_c['title'];?>"><?php echo $product_b_c['title'];?></a>
								<!--<div class="pro_favi" rel="0" title="ZGx0Zj">
									<div class="rate" id="proRate_ZGx0Zj"></div>
									<div class="comment"><span>(0 nhận xét)</span></div>
									</div> -->	<!--end .pro_favi-->
								<div class="clear"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
								<!--<div>MT:&nbsp;CBT • </div> -->
								<?php 
								$detail_sale_1 = $this->producthomemodel->get_sale_off_product($product_b_c['id_product']);
								if(!empty($detail_sale_1))
								{
									$price =$product_b_c['price'] - ($product_b_c['price']*($detail_sale_1[0]['percent']/100));
								}
								else 
								{
									$price =$product_b_c['price'];
								}
								?>
								<span class="price"><?php echo number_format($price);?> ₫</span>
								<a class="add_cart" rel="<?php echo $product_b_c['id_product'];?>" title="Mua hàng"><span>Mua hàng</span></a>
								<div class="clear"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
							</div>
							<?php $i++;} ?>
							<!--end .pro_other_item-->

						</div>
					</div>
					<!--end #pro_detail-->
					<div id="pro_other">
						<div id="box_cart_detail">
	<div class="title">GIỎ HÀNG CỦA BẠN</div>
	<div class="cart_info">
		<div id="pro_cart">
			<div class="top_bcart">
				<div class="left"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif"></div>
				<div class="main"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif"></div>
				<div class="right"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif"></div>
			</div>
			<!--end .top_bcart-->		<!-- scroll_cart!-->			
			<div class="m_bcart">
				<input type="hidden" id="cart_update_back" name="cart_update_back" value="<?php echo base_url();?>gio-hang">
				<div class="clear"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif"></div>
				<div class="edit_cart">		<a class="left" href="<?php echo base_url();?>gio-hang">Sửa lại giỏ hàng của bạn</a><a class="right" href="<?php echo base_url();?>gio-hang">Sửa</a>	</div>
				<!--end .edit_cart-->	
				<div class="clear"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif"></div>
				<div class=""><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif"></div>
				<div id="croll_cart" class="croll_cart">
				<?php 
				$total_money = 0;
				foreach($list_cart as $cart)
				{
				?>
					<div class="cart_pro">
						<div class="thumb">      	<a href="<?php echo base_url();?>san-pham/<?php echo $cart['id_product']?>-<?php echo mb_strtolower(url_title(removesign($cart['title'])));?>">
						<?php 
						if(file_exists(PATH_FOLDER.ROT_DIR.'file/uploads/product/'.$cart['image']) && is_file(PATH_FOLDER.ROT_DIR.'file/uploads/product/'.$cart['image']) && $cart['image']!='')
						{
						
						?>
						<img src="<?php echo base_url();?>file/uploads/product/<?php echo $cart['image'] ?>" alt="<?php echo $cart['title'];?>">
						<?php } else { ?>
						<img src="<?php echo base_url();?>file/uploads/no_image.gif" alt="<?php echo $cart['title'];?>">
						<?php } ?>
						</a>    
						</div>
						<!--end .thumb-->    
						<div class="detail" align="right">        <a class="name" href="<?php echo base_url();?>san-pham/<?php echo $cart['id_product']?>-<?php echo mb_strtolower(url_title(removesign($cart['title'])));?>"><?php echo sub_string($cart['title'],20);?></a>	</div>
						<!--end .detail-->	
						<div class="clear" style="height:10px"></div>
						<div class="pro_quantity">
							<input type="text" size="2" value="<?php echo $cart['quantity'];?>" id="quality_<?php echo $cart['id_product'];?>" name="quality_<?php echo $cart['id_product'];?>">    <span class="price">&nbsp; x &nbsp;<?php echo number_format($cart['price']);?> ₫</span>			<input title="<?php echo $cart['id_product'];?>" class="btUpdateItem" type="button" value="">        
						</div>
						<!--end .pro_quantity-->    
					</div>
					<!--end .cart_pro-->    
					<div class="clear"><img height="10px" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif"></div>
					<div class="hr_cart"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif"></div>
					<?php 
					$total_money +=$cart['total_price'];
					?>
					<?php } ?>
				</div>
				<div class="clear"><img height="10px" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif"></div>
				<div class="total">
					
					<div>Tổng tiền: <span><?php echo number_format($total_money);?> ₫</span></div>
				</div>
				<div class="clear"><img height="5px" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif"></div>
				<div class="edit_cart">	<a class="buttom_y" href="javascript:void(0)" onclick="return updateAllItemInCart()">Cập nhật</a>	<a class="right" href="<?php echo base_url();?>gio-hang">Thanh toán</a></div>
				<!--end .edit_cart-->
				<div class="clear"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif"></div>
			</div>
			<!-- end scroll_cart-->
			<div class="bot_bcart">
				<div class="left"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif"></div>
				<div class="main"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif"></div>
				<div class="right"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif"></div>
			</div>
			<!--end .top_bcart-->
		</div>
		<!--end #pro_cart-->
	</div>
	<div class="clear"><img src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" alt="spacer" width="15" height="15"></div>
	<div class="clear"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif"></div>
</div>

						<div class="clear"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
					</div>
					<!--end #pro_other-->
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
