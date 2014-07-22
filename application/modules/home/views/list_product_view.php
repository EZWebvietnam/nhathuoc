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
									<div><span style="float:left;">Nhà sản xuất:&nbsp;</span><span><?php echo $product['manu']?></span></div>
									<div class="clear"></div>
									
									<div class="clear"></div>
									<span>MT:&nbsp;<?php echo $product['code']?></span>
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
									<div class="count_pro"><span></span></div>
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