<div class="manual_cat">
							<div class="man_top">
								<div class="man_top_l"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
								<div class="man_top_m">Tin khuyến mại</div>
								<div class="man_top_r"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
							</div>
							<!--end .man_top-->
							<div class="clear"></div>
							<div class="manual_cat_">
							<?php 
								foreach($list as $km)
								{

								?>
								<div class="manual_cat_item">
								
									<a class="thumb" href="<?php echo base_url();?>khuyen-mai/km<?php echo $km['id']; ?>-<?php echo mb_strtolower(url_title(removesign($km['title']))); ?>" title="<?php echo $km['title']?>">
									<?php 
									if(file_exists(PATH_FOLDER.ROT_DIR.'file/uploads/sale_off/'.$km['img_thumb']) && is_file(PATH_FOLDER.ROT_DIR.'file/uploads/sale_off/'.$km['img_thumb']) && $km['img_thumb']!='')
									{
									
									?>
									<img class="lazy" src="<?php echo base_url();?>file/uploads/sale_off/<?php echo $km['img_thumb'];?>" alt="<?php echo $km['title']?>" />
									<?php } else { ?>
									<img class="lazy" src="<?php echo base_url();?>file/uploads/no_image.gif" alt="<?php echo $km['title']?>" />
									<?php } ?>
									</a>
									<div class="man_cat_teaser" >
										<a href="<?php echo base_url();?>khuyen-mai/km<?php echo $km['id']; ?>-<?php echo mb_strtolower(url_title(removesign($km['title']))); ?>" title="<?php echo $km['title']?>"><?php echo $km['title']?></a>
										<div class="clear"><img height="3px" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
										<div class="m_date">Ngày hết hạn: <?php 
										$date = strtotime($km['exp_date']);
										echo date('d/m/Y',$date);
										?></div>
										<div class="clear"><img height="3px" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
										<div class="cat_teaser"><?php echo sub_string(loaibohtmltrongvanban($km['content']),300);?></div>
									</div>
									<!--end .man_cat_teaser-->
									<div class="clear"></div>
								</div>
								<!--end .manual_cat_item-->
								<div class="clear"><img height="15px" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
								<?php } ?>
								<div id="manual_pages">
									<div class="break_pages">
										<script type="text/javascript">
												var url = window.location.href;
												var res = url.split("/page/");
									                                $(function() {
									                                    $('div.break_pages').html(LoadPagging(<?php echo $page?>, <?php echo $total?>,res[0],<?php echo $total_page?>));
									                                });
									                            </script>
									</div>
									<div class="title">
										Trang :
									</div>
								</div>
								<!--end #manual_break-->
							</div>
							<!--end .manual_cat_-->
							<div class="clear"></div>
							<div class="man_bot">
								<div class="man_bot_l"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
								<div class="man_bot_m"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
								<div class="man_bot_r"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
							</div>
							<!--end .man_bot-->
						</div>