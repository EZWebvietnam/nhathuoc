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
    <form action="<?php echo base_url(); ?>admin/paymentadmin/edit/<?php echo $payment_detail[0]['id']?>" enctype="multipart/form-data" method="post" accept-charset="utf-8" id="adminform">
        <table class="form" style="width: 1200px;">

            <tr>
                <td class="label">Tên NH</td>
                <td colspan="3">
                    <input id="title_" type="texbox" name="title" value="<?php echo $payment_detail[0]['name']?>"/>
                </td>
            </tr>
            <tr>
                <td class="label">Tên TK</td>
                <td colspan="3">
                    <input id="ten_tk" type="texbox" name="ten_tk" value="<?php echo $payment_detail[0]['name_account']?>"/>
                </td>
            </tr>
            <tr>
                <td class="label">STK</td>
                <td colspan="3">
                    <input id="stk" type="texbox" name="stk" value="<?php echo $payment_detail[0]['account_number']?>"/>
                </td>
            </tr>
            <tr>
                <td class="label">Hình ảnh</td>
                <td colspan="3">
                    <input type="file" name="userfile"/>
                    <input id="userfile" name="userfile" type="button" class="bt100" value="Upload" onClick="fileUpload(this.form,'<?php echo base_url();?>upload/do_upload_bank','upload','<?php echo base_url(); ?>admin/paymentadmin/edit/<?php echo $payment_detail[0]['id']?>'); return false;">
                   <div id="upload"></div>
                    <input type='hidden' name='file' id='file'/>
                </td>
            </tr>
            <td><input class="bt100" type="submit" value="Thêm" id="them"></td>
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
                $.ajax({
                    type: "POST",
                    url: $("#adminform").attr('action'),
                    data: {title:$('#title_').val(),ten_tk:$('#ten_tk').val(),stk:$('#stk').val(),file:$('#file').val()},
                    mimeType: "multipart/form-data",
                    dataType: "json",
                    cache: false,
                    success: function(data) {
                        $.fancybox.close();
                        reload_callback("<?php echo base_url(); ?>admin/paymentadmin/list_payment", page, 'payment_content');
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