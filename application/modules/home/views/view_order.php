<div id="main_content">
						<div id="nav_link">
							<a href="/">Trang chủ</a><span> &gt; </span><a href="/nhom-hang.html">Sản phẩm</a><span> &gt; </span><a href="<?php echo full_url_($_SERVER);?>" class="">Tình trạng đơn hàng</a>
						</div>
						<!--end #nav_link-->		 
						<div class="clear"><img height="7px" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
						<div class="product_list">
							
							
							<!--end #hot_product-->
							<div class="clear"><img height="15px" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
							<div class="main_title">
								<div class="main_title_l"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
								<div class="main_title_m">
									
									
									
								</div>
								<!--end .main_title_m-->
								<div class="main_title_r"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
							</div>
							<!--end #main_title-->
						
							<!--end .product_cat_item-->
							<?php 
							if(!empty($order_detail))
							{
							
							?>
							<p>Họ tên: <b><?php echo $order_detail[0]['full_name'] ?></b></p>
							<p>Địa chỉ: <b><?php echo $order_detail[0]['address'] ?></b></p>
							<p>Điện thoại:<b> <?php echo $order_detail[0]['phone'] ?></b></p>
							<?php 
							$array = array('0'=>'Chưa thanh toán','1'=>'Đã thanh toán')
							?>
							<p>Tình trạng đơn hàng:<b> <font color="red"><?php echo $array[$order_detail[0]['status']] ?></font></b></p>
							<div id="cart_pro">
					<input type="hidden" name="cart_update_back" id="cart_update_back" value="/gio-hang.html?message=success">
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
						$i = 1;
						foreach($order_detail as $o_d)
						{
						
						?>
							<div class="cart_pro_item">
							<div class="pro_stt"><?php echo $i;?></div>
							<div class="pro_code"><?php echo $o_d['code'] ?></div>
							<div class="pro_pro">
								<div class="thumb">
									<div> <a href="<?php echo base_url();?>san-pham/<?php echo $o_d['id_product'] ?>-<?php echo mb_strtolower(url_title(removesign($o_d['title']))) ?>" target="_blank">
																		<?php 
										if(file_exists(PATH_FOLDER.ROT_DIR.'file/uploads/product/'.$o_d['image']) && is_file(PATH_FOLDER.ROT_DIR.'file/uploads/product/'.$o_d['image']) && $o_d['image']!='')
										{
										
										?>
																		<img src="<?php echo base_url();?>file/uploads/product/<?php echo $o_d['image'] ?>">
																		<?php } else {?>
																		<img src="<?php echo base_url();?>file/uploads/no_image.gif">
																		<?php } ?>
																		</a></div>
								</div>
								<div class="teaser">
									
									<div class="bold"><a class="blue" href="http://localhost/nhathuoc/san-pham/3-kem-duong-da-nivea-300ml" target="_blank"><?php echo $o_d['title']?></a></div>
									
								</div>
							</div>
														<div class="pro_price">Giá bán : <span class="price_new"><?php echo number_format($o_d['price_order']) ?> ₫</span>		</div>
														<div class="pro_quantity">
								<div class="save_quant"><input type="text" size="2" name="quality_3" id="quality_3" value="<?php echo $o_d['quantity'] ?>"> &nbsp;</div>
											
							</div>
							<div class="pro_sum"><?php echo number_format($o_d['quantity']*$o_d['price_order']) ?> ₫</div>
							<div class="clear"></div>
						</div>
						<?php $i++;} ?>
												<!--end .cart_pro_item-->	
					</div>
					<!--end .cx_content-->
					
					<!--end #cart_pro_right-->	
					<div class="clear"></div>
					
					<!--end #foot_cart-->		
					
					<div class="clear"></div>
					
					
					
				</div>
							
							<?php } else { ?>
							Đơn hàng không tồn tại
							<?php } ?>
							<!--end .product_cat_item-->
							<div class="main_title">
								<div class="main_title_l"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
								<div class="main_title_m">
									<div class="count_pro"><span></span></div>
									<div class="page_pro">
										<div id="page_break">
											
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