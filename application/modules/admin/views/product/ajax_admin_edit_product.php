
<script type="text/javascript">
    $(document).ready(function() {
        $( "#exp_date" ).datepicker({ dateFormat: 'yy-mm-dd' });
        $("input").each(function() {
            $("input.readonly").css('background-color', '#f2f2f2');
        });
    });
</script>
<div class="h-pop">
    <div class="h-icon"></div>
    <h3>Sửa</h3>
</div>
<div class="m-pop">
    <script type="text/javascript" src="<?php echo base_url(); ?>template/ezwebvietnam/admin_cp/js/core/price_format.js"></script>
    <form action="<?php echo base_url(); ?>admin/productadmin/edit/<?php echo $detail_product[0]['id_product'] ?>" method="post" accept-charset="utf-8" id="adminform"><input type="hidden" name="id" value="74">
        <table class="form" style="width: 1200px;">

            <tr>
                <td class="label">Tên</td>
                <td colspan="3">
                    <input id="title" type="text" value="<?php echo $detail_product[0]['title'] ?>" name ="title"/>
                </td>
            </tr>
            <tr>
                <td class="label">Mã</td>
                <td colspan="3">
                    <input id="code" type="text" value="<?php echo $detail_product[0]['code'] ?>" name="code"/>
                </td>
            </tr>
            <tr>
                <td class="label">Nhà SX</td>
                <td colspan="3">
                    <input id="manu" type="text" value="<?php echo $detail_product[0]['manu'] ?>" name="manu"/>
                </td>
            </tr>
			<tr>
                <td class="label">Giá</td>
                <td colspan="3">
                    <input id="cost" type="text" value="<?php echo $detail_product[0]['price'] ?>" name="cost"/>
                </td>
            </tr>
			<tr>
                <td class="label">Loại sản phẩm</td>
                <td colspan="3">
                    <select name="category" id="id_category">
					<?php 
					foreach($list_cate as $cate)
					{
						if($detail_product[0]['id_cate']==$cate['id_cate'])
						{
					?>
						<option selected="" value="<?php echo $cate['id_cate']?>"><?php echo $cate['title']?></option>
						<?php } else { ?>
						<option value="<?php echo $cate['id_cate']?>"><?php echo $cate['title']?></option>
					<?php }} ?>
					</select>
                </td>
            </tr>
            <tr>
                <td class="label">Hình ảnh</td>
                <td colspan="3">
                    <input type="file" name="userfile"/>
                    <input id="userfile" name="userfile" type="button" class="bt100" value="Upload" onClick="fileUpload(this.form,'<?php echo base_url();?>upload/do_upload','upload','<?php echo base_url(); ?>admin/productadmin/edit/<?php echo $detail_product[0]['id_product'] ?>'); return false;">
                   <div id="upload"></div>
                    <input type='hidden' name='file' id='file'/>
                </td>
            </tr>
             
            <tr>
                <td class="label">Nội dung</td>
                <td colspan="3">
                    <textarea id="editor2"><?php echo $detail_product[0]['content'] ?></textarea>
                    <script type="text/javascript">
                                CKEDITOR.replace('editor2');
                            </script>
                </td>
            </tr>
            <tr>
                <td class="label"></td>
                <td colspan="3">
                    <input type="submit" value="Cập nhập" class="bt100"/>
                </td>
            </tr>
            <td></td>
            
           

        </table>
    </form>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        //$('#cost_').priceFormat();
        $("#adminform").validate({
            rules: {
                title: "required",
 
                cost: "required",
    
            },
            messages: {
                title: "Vui lòng nhập tên",
                cost: "Vui lòng nhập giá",
            }
            , submitHandler: function(form) {
                var page = 1;
                dataString = $("#adminform").serialize();
                var content = CKEDITOR.instances['editor2'].getData();
                $.ajax({
                    type: "POST",
                    url: $("#adminform").attr('action'),
                    data: {title:$('#title').val(),category:$('#id_category').val(),cost:$('#cost').val(),file:$('#file').val(),content:content,code:$('#code').val(),manu:$('#manu').val(),luu_y:$('#luu_y').val()},
                    mimeType: "multipart/form-data",
                    dataType: "json",
                    cache: false,
                    success: function(data) {
                        $.fancybox.close();
                        reload_callback("<?php echo base_url(); ?>admin/productadmin/list_product", page, 'khoahoc_content');
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