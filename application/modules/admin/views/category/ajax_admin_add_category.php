<script type="text/javascript">
    $(document).ready(function() {
        $( "#exp_date_" ).datepicker({ dateFormat: 'yy-mm-dd' });
        $("input").each(function() {
            $("input.readonly").css('background-color', '#f2f2f2');
        });
    });
</script>
<script src="<?php echo base_url()?>js_upload/ajaxfileupload.js"></script>
<div class="h-pop">
    <div class="h-icon"></div>
    <h3>Thêm</h3>
</div>
<div class="m-pop">
    <script type="text/javascript" src="<?php echo base_url(); ?>template/ezwebvietnam/admin_cp/js/core/price_format.js"></script>
    <form action="<?php echo base_url(); ?>admin/categoryadmin/add" enctype="multipart/form-data" method="post" accept-charset="utf-8" id="adminform">
        <table class="form" style="width: 1200px;">

            <tr>
                <td class="label">Tên</td>
                <td colspan="3">
                    <input id="title_" type="texbox" name="title"/>
                </td>
            </tr>
            
			 <tr>
                <td class="label">Parent Lable</td>
                <td colspan="3">
                    <select name="parent_lable" id="parent_lable">
	                   <option value="1">Có</option>
	                   <option value="0">Không</option>	
                   </select>
                </td>
            </tr>
            <tr>
                <td class="label">Chạy trực tiếp vào sản phẩm</td>
                <?php 
                $this->load->model('productmodel');
                $list_product = $this->productmodel->list_product_cate();
                ?>
                <td colspan="3">
                    <select name="id_product" id="id_product" disabled="">
	                   <option value="0">Không chạy trực tiếp</option>
	                   <?php 
	                   foreach($list_product as $l_product)
	                   {
					   
	                   ?>
	                   <option value="<?php echo $l_product['id_product']?>"><?php echo $l_product['title']?></option>	
	                   <?php } ?>
                   </select>
                </td>
            </tr>
			<tr>
				<?php 
				$lable = $this->categorymodel->list_lable();
				?>
                <td class="label">Thuộc Lable</td>
                <td colspan="3">
                    <select name="lable" id="lable" disabled="">
					<?php 
					foreach($lable as $l_ble)
					{
					
					?>
	                   <option value="<?php echo $l_ble['id_cate']?>"><?php echo $l_ble['title']?></option>
					<?php } ?>
                   </select>
                </td>
            </tr>
            <tr>
                <td class="label">Hiện trang chủ</td>
                <td colspan="3">
                   <select name="radio" id="radio" disabled="">
	                   <option value="1">Có</option>
	                   <option value="0">Không</option>	
                   </select>
                </td>
            </tr>
            <td><input class="bt100" type="submit" value="Thêm"></td>

            </tr>

        </table>
    </form>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        //$('#cost_').priceFormat();
		$('#parent_lable').change(function(){
			var lable = $(this).val();	
			if(lable == 1)
			{
				$('#lable').attr('disabled','disabled');
				$('#radio').attr('disabled','disabled');
				$('#id_product').attr('disabled','disabled');
			}
			else
			{
				$('#lable').attr('disabled',false);
				$('#radio').attr('disabled',false);
				$('#id_product').attr('disabled',false);
			}
			
		});
        $("#adminform").validate({
            rules: {
                title: "required",
               
                cost: "required",
                description: "required",
                content: "required",
                hoa_hong: "required"
            },
            messages: {
                title: "Vui lòng nhập tên",
                cost: "Vui lòng nhập giá",
               
                description: "Vui lòng nhập giới thiệu",
                content: "Vui lòng nhập nội dung",
                hoa_hong: "Vui lòng nhập hoa hồng"

            }
            , submitHandler: function(form) {
                var page = 1;
                dataString = $("#adminform").serialize();
                $.ajax({
                    type: "POST",
                    url: $("#adminform").attr('action'),
                    data: {title:$('#title_').val(),radio:$('#radio').val(),parent_lable:$('#parent_lable').val(),lable:$('#lable').val(),id_product:$('#id_product').val()},
                    mimeType: "multipart/form-data",
                    dataType: "json",
                    cache: false,
                    success: function(data) {
                        $.fancybox.close();
                        reload_callback("<?php echo base_url(); ?>admin/categoryadmin/list_cate", page, 'category_content');
                        show_msg(data.msg);
                    }
                });
            }
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $("a.grouped_elements").fancybox({
            'padding': 0,
            'titleShow': false,
            'autoScale': false,
            'transitionIn': 'none',
            'transitionOut': 'none',
            'hideOnOverlayClick': false,
            'hideOnContentClick': false,
            'overlayShow': true,
            'type': 'ajax'
        });
    });
</script>