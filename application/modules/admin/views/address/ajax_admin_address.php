<meta charset="utf-8" />
<script type="text/javascript">
   $(document).ready(function() {
       $.ajaxSetup({ cache: false });
       $("a.grouped_elements").fancybox({
           'padding'            : 0,
           'autoScale'            : false,
           'transitionIn'        : 'none',
           'transitionOut'        : 'none'
       });
   });
</script>
<div id="address_content">
   <table class="table_full" style="width: 100%;">
      <tr>
         <td style="background: #FFF;padding: 5px 5px 5px 5px;" valign="top">
            <table style="width: 100%;">
               <tr>
                  <td>
                     <div class="h-title">Địa chỉ</div>
                  </td>
                  <td style="float: right;">
                     <div class="addlink"><a href="<?php echo base_url(); ?>admin/addressadmin/add" class="add grouped_elements"><span>Thêm mới</span></a></div>
                  </td>
               </tr>
            </table>
            <div class="box-content">
               <div class="box_find">
               </div>
               <form  method="post" action="<?php echo base_url();?>admin/addressadmin/deletes" accept-charset="utf-8" id="admindata_kh">
                  <input type="hidden" id="page" value="0"/>
                  <input type="hidden" id="callback" value="<?php echo base_url();?>admin/addressadmin/list_setting"/>
                  <table class="admindata">
                     <thead>
                        <tr>
                           <th class="head" colspan="7">
                            <a class="del" onclick="return action_del('admindata_kh','address');"><span>Xóa</span></a>                              
                           </th>
                        </tr>
                        <tr>
                           <th class="checkbox"><input type="checkbox" name="sa" id="sa" onclick="check_chose('sa', 'ar_id[]', 'admindata_kh')"></th>
                           <th class="id">Phía</th>
                           <th>Địa chỉ</th>
                           <th>Điện thoại</th>
                           
                           <th class="publish">Chức năng</th>
                        </tr>
                     </thead>
                    <?php 
                    $array = array('2'=>'Phía Bắc','1'=>'Phía Nam');
                    foreach($addressseting as $addr)
                    {
					
                    ?>
                     <tr class="row1 ">
                     <td align="center"><input  type="checkbox" name="ar_id[]" value="<?php echo $addr['id']?>"></td>
                        <td><?php echo $array[$addr['type']]?></td>
                        <td><?php echo $addr['address'];?></td>
                        <td><?php echo $addr['phone'];?></td>
                        <td align="center">
                            <a class="grouped_elements" href="<?php echo base_url();?>admin/addressadmin/edit/<?php echo $addr['id']?>" title="Sửa"><img width="16" height="16" src="<?php echo base_url();?>template/ezwebvietnam/admin_cp/icon/edit.png"></a>
                             <a class="delete_record" href="<?php echo base_url();?>admin/addressadmin/delete/<?php echo $addr['id']?>" title="Xóa"><img src="<?php echo base_url();?>template/ezwebvietnam/admin_cp/icon/del.png"></a>  
                        </td>
                     </tr>
                    <?php } ?>  
                     <tfoot>
                        <td colspan="7">
                                                   
                           
                           
                        </td>
                     </tfoot>
                  </table>
               </form>
                
               
            </div>
         </td>
      </tr>
   </table>
</div>
