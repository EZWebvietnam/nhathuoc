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
