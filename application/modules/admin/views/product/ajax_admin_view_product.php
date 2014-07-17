
<script type="text/javascript">
    $(document).ready(function() {
        $("input").each(function() {
            $("input.readonly").css('background-color', '#f2f2f2');
        });
    });
</script>
<div class="h-pop">
    <div class="h-icon"></div>
    <h3>Thêm khóa học</h3>
</div>
<div class="m-pop">
    <script type="text/javascript" src="<?php echo base_url(); ?>template/ezwebvietnam/admin_cp/js/core/price_format.js"></script>
    <form action="<?php echo base_url(); ?>admin/productadmin/view/<?php echo $detail_product[0]['id'] ?>" method="post" accept-charset="utf-8" id="adminform"><input type="hidden" name="id" value="74">
        <table class="form" style="width: 1200px;">

            <tr>
                <td class="label">Tên sản phẩm</td>
                <td colspan="3">
                    <?php echo $detail_product[0]['title'] ?>
                </td>
            </tr>
            <tr>
                <td class="label">Mã</td>
                <td colspan="3">
                    <?php echo $detail_product[0]['code'] ?>
                </td>
            </tr>
            <tr>
                <td class="label">Nhà SX</td>
                <td colspan="3">
                    <?php echo $detail_product[0]['manu'] ?>
                </td>
            </tr>
            <tr>
                <td class="label">Giá</td>
                <td colspan="3">
                    <?php echo $detail_product[0]['price'] ?>
                </td>
            </tr>
			<tr>
                <td class="label">Năm</td>
                <td colspan="3">
                    <?php echo $detail_product[0]['year'] ?>
                </td>
            </tr>
            <tr>
                <td class="label">Lưu ý</td>
                <td colspan="3">
                   <textarea name="luu_y" id="luu_y" style="margin: 2px; width: 1070px; height: 60px;"><?php echo nl2br($detail_product[0]['luu_y']) ?></textarea>
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
            <td></td>
            
            </tr>

        </table>
    </form>
</div>
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