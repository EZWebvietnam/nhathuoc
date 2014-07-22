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
						
						<!-- End .left_letter -->
						<div class="box_menu">
							<div class="title">Danh mục</div>
							
							<a rel="" href="<?php echo base_url();?>" target="_self">Trang chủ</a>
							<a rel="" href="<?php echo base_url();?>gioi-thieu" target="_self">Giới thiệu</a>
							<a rel="" href="<?php echo base_url();?>san-pham" target="_self">Sản phẩm</a>
							<a rel="" href="<?php echo base_url();?>khuyen-mai" target="_self">Khuyến mại</a>
							<a rel="" href="<?php echo base_url();?>lien-he" target="_self">Liên hệ</a>
							<div class="clear"></div>
							
						</div>
						<div class="clear"><img src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" width="10" height="10" alt="spacer" /></div>
						<div class="box_menu">
							<div class="title">Nhóm sản phẩm</div>
							<?php 
							foreach($list_cate_home as $cate_home)
							{
							?>
							<a rel="" href="<?php echo base_url();?>san-pham/c/<?php echo $cate_home['id_cate']?>-<?php echo mb_strtolower(url_title(removesign($cate_home['title'])));?>" target="_self"><?php echo $cate_home['title']?></a>
							<?php }  ?>
							<div class="clear"></div>
							<div class="box_menu_more">
								<a href="<?php echo base_url();?>san-pham" title="Xem tất cả">Xem tất cả</a>
							</div>
						</div>
						<!--end .box_menu-->
						<div class="clear"><img src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" width="10" height="10" alt="spacer" /></div>
						<div class="adv_left">
							<div></div>
						</div>
						<div class="clear"><img src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" width="10" height="10" alt="spacer" /></div>
						
						<!--end .box_menu-->
						<div class="clear"><img src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" width="10" height="10" alt="spacer" /></div>
						<div class="box_menu">
							
							
						</div>
						<div class="clear"><img src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" width="10" height="10" alt="spacer" /></div>
						<div class="adv_left">
							<div></div>
						</div>
						<div class="clear"><img src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" width="10" height="10" alt="spacer" /></div>
						<div id="box_menu_last">
							<img height="10px" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" />
						</div>
						<!--end #box_menu_last-->
					</div>
					<!--end #side_content-->
					<div id="main_content">
						<div id="sile_home">
							<div id="slide_featured" class="slideShow">
								<ul class="slides">
									<?php 
									foreach($rand_image as $image)
									{
									?>
									<li class="slide"><a href="<?php echo $image['url']?>" target="_blank" title="<?php echo $image['title']?>">
									<?php 
										if(file_exists(PATH_FOLDER.ROT_DIR.'file/uploads/slide/'.$image['image']) && is_file(PATH_FOLDER.ROT_DIR.'file/uploads/slide/'.$image['image']) && $image['image']!='')
										{
										?>
									<img alt="<?php echo $image['title']?>" src="<?php echo base_url();?>file/uploads/slide/<?php echo $image['image']?>" />
									<?php } else { ?>
									<img alt="<?php echo $image['title']?>" src="<?php echo base_url();?>file/uploads/no_image.gif" />
									<?php } ?>
									</a></li>
									<?php } ?>
								</ul>
								<ul class="navigation">
								<?php 
								$i = 1;
									foreach($rand_image as $image)
									{
									?>
									<li><a href="javascript:void(0);" class="page"><?php echo $i;?></a></li>
									<?php $i++;} ?>
								</ul>
							</div>
							<!--end #slide_featured-->
							<script type="text/javascript">
								$(document).ready(function() {
									$('.slideShow').slideShow({
										interval: 5,
										transition:{mode: 'fade', speed: 2000}
									});
								});
							</script>			
							<div class="deal_letter">
								<div id="slide_product">
									<div class="title_slide">		
										<span>Giảm giá ngẫu nhiên</span>
									</div>
									<!--end #title_slide-->
									<div id="slide_product_main">
										<div class="slides_container">
											<div class="slide_product_item">
												<div class="item_content">
												<?php 
												if(!empty($list_product_sale))
												{
													$product = $list_product_sale[mt_rand(0, count($list_product_sale) - 1)];
												?>
													<a class="slide_product_item_thumb" href="<?php echo base_url();?>san-pham/<?php echo $product['id_product'];?>-<?php echo mb_strtolower(url_title(removesign($product['title_product'])));?>" title="<?php echo $product['title_product']?>">
													<?php 
													if(file_exists(PATH_FOLDER.ROT_DIR.'file/uploads/product/'.$product['image']) && is_file(PATH_FOLDER.ROT_DIR.'file/uploads/product/'.$product['image']) && $product['image']!='')
													{
													
													?>
													<img title="<?php echo $product['title_product']?>" alt="<?php echo $product['title_product']?>" src="<?php echo base_url();?>file/uploads/product/<?php echo $product['image']?>" />
													<?php } else { ?>
													<img title="<?php echo $product['title_product']?>" alt="<?php echo $product['title_product']?>" src="<?php echo base_url();?>file/uploads/no_image.gif" />
													<?php } ?>
													</a>
													<a class="slide_product_item_info blue bold" href="<?php echo base_url();?>san-pham/<?php echo $product['id_product'];?>-<?php echo mb_strtolower(url_title(removesign($product['title_product'])));?>" title="<?php echo $product['title_product'];?>">
													<?php echo $product['title_product']?>				</a>
													<?php 
													if($product['percent'] != 0)
													{
													$price = $product['price'] - ($product['price']*($product['percent']/100));
													}
													else 
													{
														$price = $product['price'];
													}
													?>	
													<span>&nbsp;&nbsp;<?php echo number_format($price);?> ₫</span>
													<!--<a class="slide_product_item_info blue" href="/thuong-hieu/cong-ty-tnhh-cong-duc.html">Công ty TNHH Công Đức</a>-->
													<!--<span>MT:&nbsp;1109328 • Hộp x 20 gói</span>-->
													<?php } ?>
												</div>
												<div class="clear"></div>
											</div>
											<!--end #slide_product_item-->
										</div>
										<!--end .slides_container-->
										<a href="#" class="prev"><img src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/arrow-prev.png" width="24" height="43" alt="Arrow Prev"></a>
										<a href="#" class="next"><img src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/arrow-next.png" width="24" height="43" alt="Arrow Next"></a>
									</div>
									<!--end #slide_product_main-->
									<script type="text/javascript">
										$(function(){
											$('#slide_product_main').slides({
												preload: true,
												preloadImage: 'images/loading.gif',
												play: 5000,
												pause: 2500,
												hoverPause: true
											});
										});
									</script>	
								</div>
								<!--end #slide_product-->				
								<div class="clear" style="height:9px;">&nbsp;</div>
								<div class="home_letter" style="background:url(<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/newletter_bg.png) #bde546 center center no-repeat; ">
									<div class="hl_form">
										<form action="/ajax.html" name="frmNewletter" method="post" onsubmit="return validateNewsletter(this)" autocomplete="off">			<input type="text" name="email" value="" placeholder="Địa chỉ Email của bạn" />			<input type="submit" value="Đăng ký - Nhận tiện ích" />			<input type="hidden" name="new_tips" value="1" />			<input type="hidden" name="action" value="reg_newsletter" />		</form>
									</div>
									<!-- End .hl_form -->
								</div>
								<!-- End .home_letter -->			
							</div>
							<!-- End .deal_letter -->			
						</div>
						<!--end #sile_home-->
						<div class="clear"><img height="10px" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
						<div id="home_teaser">
						</div>
						<!--end #home_teaser-->		
						<div class="clear"><img height="10px" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
						<div id="box_sale">
						<?php 
						$i = 1;
						$max = count($list_product_sale);
						foreach($list_product_sale as $product_sale)
						{
							if($i == $max)
							{
								$class ='class="sub_box_sale" style="width:196px;"';	
							}
							else
							{
								$class ='"sub_box_sale border_rigth"';
							}
						?>
							<div <?php echo $class;?>>
								<div class="title">
									<h2><span><?php echo $product_sale['title_cate'];?></span></h2>
								</div>
								<!--end .title-->	
								<?php 
								if($product_sale['percent'] != 0)
								{
								
								?>	
								<div class="sales_name yellow bold">
									<span>-<?php echo $product_sale['percent'];?>%</span>
								</div>
								<?php } ?>
								<!--end .sales_name-->
								<div class="product_item_home ">
									<div class="product_item_thumb">
										<a href="<?php echo base_url();?>san-pham/<?php echo $product_sale['id_product'];?>-<?php echo mb_strtolower(url_title(removesign($product_sale['title_product'])));?>" title="<?php echo $product_sale['title_product'];?>">
										<?php 
										if(file_exists(PATH_FOLDER.ROT_DIR.'file/uploads/product/'.$product_sale['image']) && is_file(PATH_FOLDER.ROT_DIR.'file/uploads/product/'.$product_sale['image']) && $product_sale['image']!='')
										{
										
										?>
										<img title="<?php echo $product_sale['title_product'];?>" alt="<?php echo $product_sale['title_product'];?>" class="lazy" src="<?php echo base_url();?>file/uploads/product/<?php echo $product_sale['image'] ?>" />
										<?php } else { ?>
										<img title="<?php echo $product_sale['title_product'];?>" alt="<?php echo $product_sale['title_product'];?>" class="lazy" src="<?php echo base_url();?>file/uploads/no_image.gif" />
										<?php } ?>
										</a>                
									</div>
									<div class="clear"></div>
									<div class="product_item_teaser">
										<div class="home_title">
											<h3><a class="blue bold" href="<?php echo base_url();?>san-pham/<?php echo $product_sale['id_product'];?>-<?php echo mb_strtolower(url_title(removesign($product_sale['title_product'])));?>" title="<?php echo $product_sale['title_product'];?>"><?php echo $product_sale['title_product'];?></a></h3>
										</div>
										<div class="clear"></div>
										<?php 
										$price = 0;
										if($product_sale['percent'] != 0)
										{
											$price = 	$product_sale['price'] - ($product_sale['price'] * ($product_sale['percent']/100));
										}
										?>
										<div class="pit_price"><span class="price bold"><?php echo number_format($price);?> ₫</span></div>
										<div class="clear"></div>
										<div class="pit_cart"><a class="add_cart" href="#" rel="ZGxlBN" title="Mua hàng"><span>Mua hàng</span></a></div>
										<div class="clear"></div>
									</div>
									<!--end .product_item_teaser-->
								</div>
								<!--end .product_item-->
								<div class="clear"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
							</div>
							<!--end .sub_box_sale-->
							<?php $i++;} ?>
							<!--end .sub_box_sale-->
							
							<!--end .sub_box_sale-->
							<div class="clear"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
						</div>
						<!--end #box_sale-->		
						<div class="clear"><img height="10px" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
						<div class="home_ads">
							<div class="ads_img">
								<div>
								<?php 
								if(isset($sale_random[0]))
								{
								?>
								<a href="<?php echo base_url();?>khuyen-mai/km<?php echo $sale_random[0]['id']?>-<?php echo mb_strtolower(url_title(removesign($sale_random[0]['title'])))?>" target="_blank">
								<?php 
										if(file_exists(PATH_FOLDER.ROT_DIR.'file/uploads/sale_off/'.$sale_random[0]['img']) && is_file(PATH_FOLDER.ROT_DIR.'file/uploads/sale_off/'.$sale_random[0]['img']) && $sale_random[0]['img']!='')
										{
										
										?>
								<img class="lazy" alt="<?php echo $sale_random[0]['title'];?>" src="<?php echo base_url();?>file/uploads/sale_off/<?php echo $sale_random[0]['img']?>" border="0">
									<?php } else { ?>
									<img class="lazy" alt="<?php echo $sale_random[0]['title'];?>" src="<?php echo base_url();?>file/uploads/no_image.gif" border="0">
									<?php } ?>
								</a>
								<?php } ?>
								</div>
							</div>
						</div>
						<!--end .home_ads-->	
						<div class="clear"><img height="7px" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
						<div id="group_pro">
							<div class="title">
								<span>Sản phẩm bán chạy</span>
							</div>
							<!--end .title-->	
							<div class="clear"><img height="10px" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
							<?php 
							foreach($list_ban_chay_1 as $ban_chay_1)
							{
							
							?>
							<div class="product_item">
								<div class="product_item_thumb">
									<a href="<?php echo base_url();?>san-pham/<?php echo $ban_chay_1['id_product'];?>-<?php echo mb_strtolower(url_title(removesign($ban_chay_1['title_product'])));?>" title="<?php echo $ban_chay_1['title_product']?>">
									<?php 
										if(file_exists(PATH_FOLDER.ROT_DIR.'file/uploads/product/'.$product_sale['image']) && is_file(PATH_FOLDER.ROT_DIR.'file/uploads/product/'.$product_sale['image']) && $product_sale['image']!='')
										{
										
										?>
									<img title="<?php echo $ban_chay_1['title_product']?>" alt="<?php echo $ban_chay_1['title_product']?>" class="lazy" src="<?php echo base_url();?>file/uploads/product/<?php echo $ban_chay_1['image']?>" />
									<?php } else { ?>
									<img title="<?php echo $ban_chay_1['title_product']?>" alt="<?php echo $ban_chay_1['title_product']?>" class="lazy" src="<?php echo base_url();?>file/uploads/no_image.gif" />
									<?php } ?>
									</a>
								</div>
								<!--end .product_item_thumb-->
								<div class="product_item_teaser">
									<h3><a title="<?php echo $ban_chay_1['title_product']?>" class="blue bold" href="<?php echo base_url();?>san-pham/<?php echo $ban_chay_1['id_product'];?>-<?php echo mb_strtolower(url_title(removesign($ban_chay_1['title_product'])));?>"><?php echo $ban_chay_1['title_product']?></a></h3>
									<?php 
									$sale_detail = $this->producthomemodel->get_sale_off_product($ban_chay_1['id_product']);
									if(empty($sale_detail))
									{
										$price = 	$ban_chay_1['price'];
									}
									else
									{
										$price = 	$ban_chay_1['price'] - ($ban_chay_1['price']*($sale_detail[0]['percent']/100));
									}
									if(!empty($sale_detail))
									{
									?>
									<span class="b fl">Giá niêm yết:&nbsp;</span> <span class="black lt fl"><?php echo number_format($ban_chay_1['price']);?> ₫</span>
									<div class="clear"><img src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" alt="spacer" width="5" height="5"></div>
									<span class="b fl">Giá bán:&nbsp;</span> <span class="red fl"><?php echo number_format($price);?> ₫</span>                    <!--<span class="price bold"> </span>-->
									<?php } else { ?>
									<span class="b fl">Giá bán:&nbsp;</span> <span class="red fl"><?php echo number_format($price);?> ₫</span>
									<?php } ?>
									<a class="add_cart" href="#" rel="ZGxkZt" title="Mua hàng"><span>Mua hàng</span></a>
								</div>
								<!--end .product_item_teaser-->
							</div>
							<?php } ?>
							<!--end .product_item-->
							
							<!--end .product_item-->
							
							<!--end .product_item-->
							<div class="clear"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif"  alt="spacer"  /></div>
						</div>
						<!--end #group_pro-->
						<div class="clear"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" height="10" width="10" alt="spacer" /></div>
						<div class="clear"><img height="10px" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
						<?php 
						$i = 0;
						$max = count($list_ban_chay_2);
						foreach($list_ban_chay_2 as $ban_chay_2)
						{
						?>
						<div class="home_product_cat">	<a href="<?php echo base_url();?>san-pham/<?php echo $ban_chay_2['id_product'];?>-<?php echo mb_strtolower(url_title(removesign($ban_chay_2['title_product'])));?>" title="<?php echo $ban_chay_2['title_product']?>">
						<?php 
										if(file_exists(PATH_FOLDER.ROT_DIR.'file/uploads/product/'.$ban_chay_2['image']) && is_file(PATH_FOLDER.ROT_DIR.'file/uploads/product/'.$ban_chay_2['image']) && $ban_chay_2['image']!='')
										{
										
										?>
						<img alt="<?php echo $ban_chay_2['title_product']?>" src="<?php echo base_url();?>file/uploads/product/<?php echo $ban_chay_2['image'];?>">
							<?php } else { ?>
							<img alt="<?php echo $ban_chay_2['title_product']?>" src="<?php echo base_url();?>file/uploads/no_image.gif">
							<?php } ?>
						</a></div>
						<?php 
						if($i != $max)
						{
						
						?>
						<div class="home_product_spacer"><img src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" alt="spacer" width="1" height="1" /></div>
						<?php } $i++;} ?>
						<div class="clear"></div>
						<div class="clear"><img height="10px" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
						<div id="group_pro">
							<div class="title">
								<span>Sản phẩm mới</span>
							</div>
							<!--end .title-->	
							<div class="clear"><img height="10px" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
							<?php 
							foreach($list_product_new as $product_new)
							{
							
							?>
							<div class="product_item">
								<div class="product_item_thumb">
									<a href="<?php echo base_url();?>san-pham/<?php echo $product_new['id_product'];?>-<?php echo mb_strtolower(url_title(removesign($product_new['title_product'])));?>" title="<?php echo $product_new['title_product'];?>">
									<?php 
										if(file_exists(PATH_FOLDER.ROT_DIR.'file/uploads/product/'.$product_new['image']) && is_file(PATH_FOLDER.ROT_DIR.'file/uploads/product/'.$product_new['image']) && $product_new['image']!='')
										{
										
										?>
									<img title="<?php echo $product_new['title_product'];?>" alt="<?php echo $product_new['title_product'];?>" class="lazy" src="<?php echo base_url();?>file/uploads/product/<?php echo $product_new['image'] ?>" />
									<?php } else { ?>
									<img title="<?php echo $product_new['title_product'];?>" alt="<?php echo $product_new['title_product'];?>" class="lazy" src="<?php echo base_url();?>file/uploads/no_image.gif" />
									<?php } ?>
									</a>
								</div>
								<!--end .product_item_thumb-->                
								<div class="product_item_teaser">
									<h3><a title="<?php echo $product_new['title_product'];?>" class="blue bold" href="<?php echo base_url();?>san-pham/<?php echo $product_new['id_product'];?>-<?php echo mb_strtolower(url_title(removesign($product_new['title_product'])));?>"><?php echo $product_new['title_product'];?></a></h3>
									<?php 
									$sale_detail = $this->producthomemodel->get_sale_off_product($product_new['id_product']);
									if(empty($sale_detail))
									{
										$price = 	$product_new['price'];
									}
									else
									{
										$price = 	$product_new['price'] - ($product_new['price']*($sale_detail[0]['percent']/100));
									}
									?>
									<span class="b fl">Giá bán:&nbsp;</span> <span class="red fl"><?php echo number_format($price);?> ₫</span>                    <!--<span class="price bold"> </span>-->
									<a class="add_cart" href="#" rel="ZGx0Zj" title="Mua hàng"><span>Mua hàng</span></a>
								</div>
								<!--end .product_item_teaser-->
							</div>
							<?php }  ?>
							<!--end .product_item-->
							
							<!--end .product_item-->
							
							<!--end .product_item-->
							<div class="clear"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
						</div>
						<!--end #group_pro-->		
						<div class="clear"><img height="10px" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
						<div class="home_product_hot_main">
							<div class="clear"><img height="15px" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
							<div class="home_product_hot_sub">
								<div></div>
							</div>
							<!--end #home_product_hot_sub-->
							<div class="home_product_hot_spacer"><img height="1px" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
							<!--end #home_product_hot_spacer-->
							<div class="home_product_hot_sub">
								<div></div>
							</div>
							<!--end #home_product_hot_sub-->
							<div class="clear"><img height="15px" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
						</div>
						<!--end #home_product_hot_main-->	
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