<style>
	#TB_ajaxContent
	{
		width: 672px !important;
		height: 445px !important;
	}
	
</style>
	<div id="box_sRate">
	<form method="post" name="frmSendRate" id="frmSendRate">
	<div class="box_sRate_top">
    	<div class="left"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
    	<div class="main"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
        <div class="rigth"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
    </div><!--end .box_sRate_top-->
    
    <div class="box_sRate_main">
    	<div class="box_title">
        	<span>Đánh giá sản phẩm</span>
            <div><a href="javascript:void(0);" onclick="self.parent.tb_remove();"><img src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/x.png" /></a></div>
            <div class="clear"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
        </div>
        
        <div class="clear"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
        
        <div class="sRate_main">
        	<div class="ly">Những ô có dấu (<span class="imp">*</span>) là những ô bắt buộc phải nhập</div>
            <div class="clear"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
            <table cellpadding="4" cellspacing="4" width="100%" align="center">
            	<tr>
                	<td class="title_t" width="150px">Sản phẩm:</td>
                    <td width="10px">&nbsp;</td>
                    <td class="blue bold"><input type="hidden" id="pro_id" name="pro_id" value="<?php echo $pro_id;?>" /></td>
                </tr>
                <tr>
                	<td class="title_t" width="150px"><span class="imp">*</span> Đánh giá của bạn:</td>
                    <td width="10px">&nbsp;</td>
                    <td class="blue bold">
                    	<table cellpadding="4" cellspacing="4" border="1" style="border-collapse:collapse; border-color:#e2e2e2;">
                        	<tr height="22px" valign="middle">
                            	<td class="col_r">N/A</td>
                                <td class="col_r">1</td>
                                <td class="col_r">2</td>
                                <td class="col_r">3</td>
                                <td class="col_r">4</td>
                                <td class="col_r">5</td>
                                <td class="col_r">6</td>
                                <td class="col_r">7</td>
                                <td class="col_r">8</td>
                                <td class="col_r">9</td>
                                <td class="col_r">10</td>
                            </tr>
                            <tr height="22px" valign="middle">
                            	<td class="col_r"><input type="radio" value="0" name="rat_general" checked="checked" /></td>
                            	<td class="col_r"><input type="radio" value="1" name="rat_general" onchange="document.getElementById('check_general').value=1" /></td>
                                <td class="col_r"><input type="radio" value="2" name="rat_general" onchange="document.getElementById('check_general').value=1" /></td>
                                <td class="col_r"><input type="radio" value="3" name="rat_general" onchange="document.getElementById('check_general').value=1" /></td>
                                <td class="col_r"><input type="radio" value="4" name="rat_general" onchange="document.getElementById('check_general').value=1" /></td>
                                <td class="col_r"><input type="radio" value="5" name="rat_general" onchange="document.getElementById('check_general').value=1" /></td>
                                <td class="col_r"><input type="radio" value="6" name="rat_general" onchange="document.getElementById('check_general').value=1" /></td>
                                <td class="col_r"><input type="radio" value="7" name="rat_general" onchange="document.getElementById('check_general').value=1" /></td>
                                <td class="col_r"><input type="radio" value="8" name="rat_general" onchange="document.getElementById('check_general').value=1" /></td>
                                <td class="col_r"><input type="radio" value="9" name="rat_general" onchange="document.getElementById('check_general').value=1" /></td>
                                <td class="col_r"><input type="radio" value="10" name="rat_general" onchange="document.getElementById('check_general').value=1" /></td>
                                <input type="hidden" id="check_general" name="check_general" value="0" />
                            </tr>
                        </table>
                    </td>
                </tr>
								<tr>
                	<td class="title_t" width="150px"><span class="imp">*</span> Họ tên:</td>
                    <td width="10px">&nbsp;</td>
                    <td><input class="i_text" id="rat_name" name="rat_name" /></td>
                </tr>
				                <tr>
                	<td class="title_t" width="150px"><span class="imp">*</span> Tiêu đề:</td>
                    <td width="10px">&nbsp;</td>
                    <td><input class="i_text" id="rat_title" name="rat_title" /></td>
                </tr>
                <tr>
                	<td class="title_t" width="150px">Nội dung:</td>
                    <td width="10px">&nbsp;</td>
                    <td><textarea class="i_text" id="rat_comment" name="rat_comment"></textarea></td>
                </tr>
                <tr>
                	<td class="title_t" width="150px">&nbsp;</td>
                    <td width="10px">&nbsp;</td>
                    <td><span class="imp">Nội dung không được quá 1000 ký tự.</span></td>
                </tr>
            </table>
            <div class="left"><img height="10px" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
            <table width="100%" cellspacing="4" cellpadding="4">
            	<tr><td width="30%">&nbsp;</td><td><input type="button" value="Thêm đánh giá của bạn" onclick="rateValidate();">&nbsp;<input type="reset" name="reset" value="Làm lại">&nbsp;<input type="button" value="Hủy bỏ" onclick="self.parent.tb_remove();"></td></tr>
            </table>
        </div><!--end .sRate_main-->
        
    </div><!--end .box_sRate_main-->
    
    <div class="box_sRate_bot">
    	<div class="left"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
    	<div class="main"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
        <div class="rigth"><img class="spacer" src="<?php echo base_url();?>template/ezwebvietnam/nhathuoc_template/images/spacer.gif" /></div>
    </div><!--end .box_sRate_bot-->
    <input type="hidden" id="action" name="action" value="sendRate" />
    <input type="hidden" id="url_result" name="url_result" value="<?php echo $url;?>" />
    </form>
</div><!--end #box_sRate-->
