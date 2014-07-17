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
    <form action="<?php echo base_url(); ?>admin/productadmin/add" enctype="multipart/form-data" method="post" accept-charset="utf-8" id="adminform">
        <table class="form" style="width: 1200px;">

            <tr>
                <td class="label">Tên</td>
                <td colspan="3">
                    <input id="title_" type="texbox" name="title"/>
                </td>
            </tr>
            <tr>
                <td class="label">Mã</td>
                <td colspan="3">
                    <input id="code" type="texbox" name="code"/>
                </td>
            </tr>
             <tr>
                <td class="label">Nhà SX</td>
                <td colspan="3">
                    <input id="manu" type="texbox" name="manu"/>
                </td>
            </tr>
            <tr>
                <td class="label">Giá</td>
                <td colspan="3">
                    <input id="cost_" type="texbox" name="cost"/>
                </td>
            </tr>
            
			<tr>
                <td class="label">Loại sản phẩm</td>
                <td colspan="3">
                    <select name="category" id="id_category">
					<?php 
					foreach($list_cate as $cate)
					{
						?>
						<option value="<?php echo $cate['id_cate']?>"><?php echo $cate['title']?></option>
					<?php } ?>
					</select>
                </td>
            </tr>
            <tr>
                <td class="label">Hình ảnh</td>
                <td colspan="3">
                    <input type="file" name="userfile"/>
                    <input id="userfile" name="userfile" type="button" class="bt100" value="Upload" onClick="fileUpload(this.form,'<?php echo base_url();?>upload/do_upload','upload','<?php echo base_url(); ?>admin/productadmin/add'); return false;">
                   <div id="upload"></div>
                    <input type='hidden' name='file' id='file'/>
                </td>
            </tr>
            <tr>
                <td class="label">Lưu ý</td>
                <td colspan="3">
                   <textarea name="luu_y" id="luu_y" style="margin: 2px; width: 1070px; height: 60px;"></textarea>
                </td>
            </tr>
            <tr>
                <td class="label">Nội dung</td>
                <td colspan="3">
                    <textarea id="editor2" name="content"></textarea>
                    <script type="text/javascript">
                        CKEDITOR.replace('editor2');
                    </script>
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
                var content = CKEDITOR.instances['editor2'].getData();
                $.ajax({
                    type: "POST",
                    url: $("#adminform").attr('action'),
                    data: {title:$('#title_').val(),cost:$('#cost_').val(),file:$('#file').val(),content:content,year:$('#year_').val(),category:$('#id_category').val(),code:$('#code').val(),manu:$('#manu').val(),luu_y:$('#luu_y').val()},
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