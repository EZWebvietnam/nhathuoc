function ShowFlash_swf(FlashIDName, FlashFileName, FlashWidth, FlashHeight, DNSSetting, WMODESetting, QSetting, FlashAlign){
	document.write('<OBJECT CLASSID="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"');
	document.write('CODEBASE="http://fpdownload.macromedia.com/get/flashplayer/current/swflash.cab#version=8,0,0,0" ');
	document.write(' ID="'+FlashIDName+'" WIDTH="' + FlashWidth + '" HEIGHT="' + FlashHeight + '" ALIGN="'+FlashAlign+'">');
	document.write('<PARAM NAME="movie" VALUE="'+ FlashFileName +'">');
	document.write('<PARAM NAME="quality" VALUE="'+QSetting+'">');
	document.write('<PARAM NAME="wmode" VALUE="'+WMODESetting+'">');
	document.write('<PARAM NAME="allowScriptAccess" VALUE="'+DNSSetting+'">');
	document.write('<EMBED SRC="'+ FlashFileName +'"  NAME="'+FlashIDName+'"');
	document.write(' WIDTH="' + FlashWidth + '" HEIGHT="' + FlashHeight + '" QUALITY="'+QSetting+'" ');
	document.write(' ALLOWSCRIPTACCESS="'+DNSSetting+'" ALIGN="'+FlashAlign+'" WMODE="'+WMODESetting+'" TYPE="application/x-shockwave-flash" ');
	document.write(' PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer" >');
	document.write('</EMBED>');
	document.write('</OBJECT>');
}
function jTrim(sString) {
    while (sString.substring(0, 1) == ' ') {
        sString = sString.substring(1, sString.length);
    }
    while (sString.substring(sString.length - 1, sString.length) == ' ') {
        sString = sString.substring(0, sString.length - 1);
    }
    return sString;
}
function jCheckblank(str) {
    if (jTrim(str) == '') return true;
    else return false;
}
function jIsemail(email) {
    var re = /^(\w|[^_]\.[^_]|[\-])+(([^_])(\@){1}([^_]))(([a-z]|[\d]|[_]|[\-])+|([^_]\.[^_])*)+\.[a-z]{2,3}$/i;
    return re.test(email);
}
function isInteger(value) {
    for (i = 0; i < value.length; i++) {
        if ((value.charAt(i) < '0') || (value.charAt(i) > '9')) return false
    }
    return true;
}	
function decode(str) {
     return unescape(str.replace(/\+/g, " "));
}
function validateContact(){	
	if($('#name_contact').val()==''){
		Boxy.alert('Hãy nhập họ và tên.',function(){$('#name_contact').focus();},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
		return false;
	}
	if($('#title_contact').val()==''){
		Boxy.alert('Hãy nhập tiêu đề liên hệ.',function(){$('#title_contact').focus();},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
		return false;
	}
	if(!isemail($('#email_contact').val())){
		Boxy.alert('Hãy nhập Email liên hệ.',function(){$('#email_contact').focus();},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
		return false;
	}
	if($('#address_contact').val()==''){
		Boxy.alert('Hãy nhập họ và tên.',function(){$('#address_contact').focus();},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
		return false;
	}
	if($('#phone_contact').val()==''){
		Boxy.alert('Hãy nhập điện thoại liên hệ.',function(){$('#phone_contact').focus();},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
		return false;
	}
	if($('#content_contact').val()=='' || $('#content_contact').val()=='Nội dung phản hồi...'){
		Boxy.alert('Hãy nhập nội dung liên hệ.',function(){$('#content_contact').focus();},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
		return false;
	}
	$('#contact_waitting').show(200);
	$('#frm_submit_contact').attr('disabled');
	$('#frm_reset_contact').attr('disabled');
	$('#frm_submit_contact').removeClass();
	$('#frm_submit_contact').addClass('faq_submit_disable');
	$('#frm_reset_contact').removeClass();
	$('#frm_reset_contact').addClass('faq_reset_disable');
	var regData = $('form#frm_contact').serialize();
	//alert(regData);
	$.ajax({
			type : 'POST',
			url : '/ajax.html',
			dataType : 'json',
			data: regData,
			success : function(data){Boxy.alert(data.message,function(){if(data.error==false){$(window.location).attr('href', '/vn/'); }},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });},
			error : function(XMLHttpRequest, textStatus, errorThrown) {Boxy.alert('Có lỗi trong quá trình đưa lên máy chủ. Xin bạn vui lòng kiểm tra lại kết nối.',function(){$('#faq_waiting').hide(200);$('#faq_submit').removeAttr('disabled');$('#faq_reset').removeAttr('disabled');$('#faq_submit').removeClass();$('#faq_submit').addClass('faq_submit');$('#faq_reset').removeClass();$('#faq_reset').addClass('faq_reset');},{title:'Thông báo.',afterShow: function() {$('#boxy_button_OK').focus();}});}
		});
	return false;
}
function isemail(email) {
	var re = /^(\w|[^_]\.[^_]|[\-])+(([^_])(\@){1}([^_]))(([a-z]|[\d]|[_]|[\-])+|([^_]\.[^_])*)+\.[a-z]{2,3}$/i
	return re.test(email);
}
function submitForm(myform)
{
	document.forms[myform].submit();
}
function goTop(){
	$('html, body').animate({scrollTop:0},'slow');
}
function showRate(iTemp,iReturn){
	if(iTemp=='') $iTemp ='.pro_favi';
	if(iReturn=='') $iTemp ='#proRate_';
	$(iTemp).each(function(index) {
		var pID = $(this).attr('title'); 
		var pRate = $(this).attr('rel'); 
			pRate = parseFloat(pRate)/2;			
		$(iReturn+pID).raty({readOnly:true,half:true,start: pRate.toFixed(1)});;
	});
}
function add2cart(obj){
	var pID = $(obj).attr('rel');
	var pQuality = $('#quality_'+pID);
	if(pQuality.length) pQty = pQuality.val();
	else pQty = 1;
	if(pQty<1) {
		Boxy.alert('Số lượng sản phẩm phải >0',function(){pQuality.focus();},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
		return false;
	}
	$.ajax({
			type : 'POST',
			url : '/ajax.html',
			dataType : 'json',
			data: {action:'add2cart',pID:pID,pQty:pQty},
			success : function(data){
						if(data.code==0) {
							//$('#numCart').html('Giỏ hàng \('+data.numItem+'\)'); 
							//$('#popCart').html(data.short); 
							//$('#cartTotal span').html('Tổng tiền: '+data.Total+' ₫'); 
							if(pQuality.length && data.limit>0) pQuality.val(data.limit); 
							if(data.url!='') $(window.location).attr('href',data.url);
						}else{	
							Boxy.alert(data.message,function(){},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
						}
					},
			error : function(XMLHttpRequest, textStatus, errorThrown) {Boxy.alert('Có lỗi trong quá trình đưa lên máy chủ. Xin bạn vui lòng kiểm tra lại kết nối.',function(){},{title:'Thông báo.',afterShow: function() {$('#boxy_button_OK').focus();}});}
		});
	return false;
}
function add_cart(obj){
	var pID = $(obj).attr('rel');
	var pQuality = $('#pd_quality_'+pID);
	if(pQuality.length) pQty = pQuality.val();
	else pQty = 1;
	if(pQty<1) {
		Boxy.alert('Số lượng sản phẩm phải >0',function(){pQuality.focus();},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
		return false;
	}
	$.ajax({
		type : 'POST',
		url : '/ajax.html',
		dataType : 'json',
		data: {action:'add2cart',pID:pID,pQty:pQty},
		success : function(data){
					if(data.code==0) {							
						if(pQuality.length && data.limit>0) pQuality.val(data.limit); 
						if(data.url!='') $(window.location).attr('href',data.url);
					}else{	
						Boxy.alert(data.message,function(){},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
					}
				},
		error : function(XMLHttpRequest, textStatus, errorThrown) {Boxy.alert('Có lỗi trong quá trình đưa lên máy chủ. Xin bạn vui lòng kiểm tra lại kết nối.',function(){},{title:'Thông báo.',afterShow: function() {$('#boxy_button_OK').focus();}});}
	});
	return false;
}
function add_cart1(obj){
	var pID = $(obj).attr('rel');
	var pQuality = $('#pd_quality_'+pID);
	if(pQuality.length) pQty = pQuality.val();
	else pQty = 1;
	if(pQty<1) {
		Boxy.alert('Số lượng sản phẩm phải >0',function(){pQuality.focus();},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
		return false;
	}
	$.ajax({
		type : 'POST',
		url : '/ajax.html',
		dataType : 'json',
		data: {action:'add2cart',pID:pID,pQty:pQty},
		success : function(data){
					if(data.code==0) {							
						if(pQuality.length && data.limit>0) pQuality.val(data.limit); 
						if(data.url!='') $(window.location).attr('href',data.url);
					}else{	
						Boxy.alert(data.message,function(){},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
					}
				},
		error : function(XMLHttpRequest, textStatus, errorThrown) {Boxy.alert('Có lỗi trong quá trình đưa lên máy chủ. Xin bạn vui lòng kiểm tra lại kết nối.',function(){},{title:'Thông báo.',afterShow: function() {$('#boxy_button_OK').focus();}});}
	});
	return false;
}
function addCommnet(obj)
{
	var url = $(obj).attr('rel');
	$.ajax({
			type : 'POST',
			url : '/ajax.html',
			dataType : 'json',
			data: {action:'checkComment'},
			success : function(data)
				{
					if(data.error==false){tb_show('Gửi comment',url);}
					else
					Boxy.alert(data.message,function(){},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
				},
			error : function(XMLHttpRequest, textStatus, errorThrown) {Boxy.alert('Có lỗi trong quá trình đưa lên máy chủ. Xin bạn vui lòng kiểm tra lại kết nối.',function(){},{title:'Thông báo.',afterShow: function() {$('#boxy_button_OK').focus();}});}
		});
	return false;
}
function add2favorist(obj){
	var pID = $(obj).attr('rel');
	$.ajax({
			type : 'POST',
			url : '/ajax.html',
			dataType : 'json',
			data: {action:'add2favorites',pID:pID},
			success : function(data){Boxy.alert(data.message,function(){if(data.error==false){/*$(window.location).attr('href', '/vn/');*/}},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });},
			error : function(XMLHttpRequest, textStatus, errorThrown) {Boxy.alert('Có lỗi trong quá trình đưa lên máy chủ. Xin bạn vui lòng kiểm tra lại kết nối.',function(){},{title:'Thông báo.',afterShow: function() {$('#boxy_button_OK').focus();}});}
		});
	return false;
}
function checkCompare(obj){
	var Item = $('.comparison input[type="checkbox"]:checked');
	if(Item.length>3){
		Boxy.alert('Bạn được chọn tối đa 3 sản phẩm để so sánh.',function(){},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
		$(obj).attr('checked','');
	}
}
function proCompare(){
	var Item = $('.comparison input[type="checkbox"]:checked');
	var numItem = Item.length;
	if(numItem<2){
		Boxy.alert('Bạn vui lòng chọn ít nhất 2 sản phẩm để so sánh.',function(){},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
		return false;
	}
	if(numItem>3){
		Boxy.alert('Bạn được chọn tối đa 3 sản phẩm để so sánh.',function(){},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
		return false;
	}
	var d = 0;
	var str='';
	Item.each(function(){ d++; str+=$(this).val(); if(d<numItem) str+=',';});
	window.open('/so-sanh.html?Item='+str);
	return false;
}
function showQuickView(obj){
	var id = $(obj).attr('rel');
	showTip(getTip(id),370);
}
function hideQuickView(obj){
	//var id = $(obj).attr('rel');
	//alert('hide_'+id);
	hideTip();
}
function sendVote(){
	alert('sendVote');
}

function pageOption(obj){
	var urlRec = $(obj).val();
	if(urlRec!=''){
		$(window.location).attr('href',decode(urlRec));
	}
}
function getTip(eID){
	var eHTMl = $('#tip_'+eID).html();
		if(eHTMl==null){eHTMl='';}
	var strHTML ='';
		strHTML+='<div class="box_white">';
		strHTML+='	<div class="w_top">';
		strHTML+='		<div class="wt_left"><img src="/images/spacer.gif" border="0" height="1" width="1" alt="" /></div>';
		strHTML+='		<div class="wt_center"><img src="/images/spacer.gif" border="0" height="1" width="1" alt="" /></div>';
		strHTML+='		<div class="wt_right"><img src="/images/spacer.gif" border="0" height="1" width="1" alt="" /></div>	';
		strHTML+='	</div>';
		strHTML+='	<div class="clear"></div>';
		strHTML+='	<div class="w_main">';
		strHTML+= 	eHTMl;
		strHTML+='	</div>';
		strHTML+='	<div class="clear"></div>';
		strHTML+='	<div class="w_bottom">';
		strHTML+='		<div class="wb_left"><img src="/images/spacer.gif" border="0" height="1" width="1" alt="" /></div>';
		strHTML+='		<div class="wb_center"><img src="/images/spacer.gif" border="0" height="1" width="1" alt="" /></div>';
		strHTML+='		<div class="wb_right"><img src="/images/spacer.gif" border="0" height="1" width="1" alt="" /></div>';
		strHTML+='	</div>';
		strHTML+='</div>';
	return strHTML;
}
function registerValidate(){
	$('#register_wait').show(20);
	if (jCheckblank($('#frm_username').val())) {Boxy.alert('Bạn vui lòng chọn tên đăng nhập.',function(){ $('#frm_username').focus();$('#register_wait').hide(20);},{title:'Thông báo',afterShow: function() {$('#boxy_button_OK').focus();}});
      	return false;
   	}
	if (jCheckblank($('#frm_email').val())) {
     	 Boxy.alert('Bạn vui lòng nhập địa chỉ Email.',function(){ $('#frm_email').focus();$('#register_wait').hide(20);},{title:'Thông báo',afterShow: function() { $('#boxy_button_OK').focus();} });
      	return false;
   	}
	if ( !jIsemail($('#frm_email').val())) {
      Boxy.alert('Email của bạn không hợp lệ !',function(){ $('#frm_email').focus();$('#register_wait').hide(20);},{title:'Thông báo',afterShow: function() { $('#boxy_button_OK').focus();} });
      return false;
   	}
	if ($('#frm_email_confirm').val()!=$('#frm_email').val()) {
     	 Boxy.alert('Bạn vui lòng xác nhận địa chỉ Email.',function(){ $('#frm_email_confirm').focus();$('#register_wait').hide(20);},{title:'Thông báo',afterShow: function() { $('#boxy_button_OK').focus();} });
      	return false;
   	}
	if (jCheckblank($('#frm_address').val())) {
     	 Boxy.alert('Bạn vui lòng nhập địa chỉ của bạn.',function(){$('#frm_address').focus();$('#register_wait').hide(20);},{title:'Thông báo',afterShow: function() { $('#boxy_button_OK').focus();} });
      	return false;
   	}
	var password = $('#frm_password').val();
	/*if (password.length<6 || !(password.match(/[A-Za-z]/)) || !(password.match(/\d+/))) {
     	 Boxy.alert('Bạn vui lòng chọn mật khẩu ít nhất có 6 kí tự bao gồm cả ký tự và số.',function(){ $('#frm_password').focus();$('#register_wait').hide(20);},{title:'Thông báo',afterShow: function() { $('#boxy_button_OK').focus();}});
      	return false;
   	}*/
	if (password.length<1) {
     	 Boxy.alert('Bạn vui lòng chọn mật khẩu.',function(){ $('#frm_password').focus();$('#register_wait').hide(20);},{title:'Thông báo',afterShow: function() { $('#boxy_button_OK').focus();}});
      	return false;
   	}
	if($('#frm_password').val()!=$('#frm_password_confirm').val()){Boxy.alert('Mật khẩu không trùng khớp.',function(){ $('#frm_password_confirm').focus();$('#register_wait').hide(20);},{title:'Thông báo',afterShow: function() { $('#boxy_button_OK').focus();} });
      	return false;
	}
	if ($('#frm_city').val()<1) {
     	 Boxy.alert('Bạn vui lòng chọn Tỉnh/Thành.',function(){ $('#frm_city').focus();$('#register_wait').hide(20);},{title:'Thông báo',afterShow: function() { $('#boxy_button_OK').focus();} });
      	return false;
   	}
	if (jCheckblank($('#frm_phone').val())) {
     	 Boxy.alert('Bạn vui lòng nhập số điện thoại của bạn.',function(){ $('#frm_phone').focus();$('#register_wait').hide(20);},{title:'Thông báo',afterShow: function() { $('#boxy_button_OK').focus();} });
      	return false;
   	}
	var regData = $('form#frmRegister').serialize();
	$.ajax({
			type : 'POST',
			url : '/ajax.html',
			dataType : 'json',
			data:regData,
			success : function(data){Boxy.alert(data.message,function(){if (data.error==false) {$(window.location).attr('href', data.url);$('#register_wait').hide(20);}},{title:'Thông báo',afterShow: function() { $('#boxy_button_OK').focus();} });},
			error : function(XMLHttpRequest, textStatus, errorThrown) {Boxy.alert('Có lỗi trong quá trình đưa lên máy chủ. Xin bạn vui lòng kiểm tra lại kết nối.',function(){$('#register_wait').hide(20);},{title:'Thông báo',afterShow: function() { $('#boxy_button_OK').focus();} });
			}
		});
	return false;
}
function changeCity(obj){
	var cID = $(obj).val();
	$.ajax({
			type : 'POST',
			url : '/ajax.html',
			dataType : 'json',
			data:{action:'district',cID:cID},
			success : function(data){if(data.error==false){$('#frm_district').html(data.html)}},
			error : function(XMLHttpRequest, textStatus, errorThrown){}
		});
	return false;
}
function loginValidate(){
	$('#login_waitting').show(20);	
	if ($('#txtUsername').val() == '' ) {
     	 Boxy.alert('Bạn vui lòng nhập tên tài khoản',function(){$('#txtUsername').focus();$('#login_waitting').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
      	return false;
   	}
	if ($('#txtPassword').val() == '' ) {
     	 Boxy.alert('Bạn vui lòng nhập mật khẩu',function(){$('#txtPassword').focus();$('#login_waitting').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
      	return false;
   	}
	var regData = $('form#frmLogin').serialize();
	$.ajax({
			type : 'POST',
			url : '/ajax.html',
			dataType : 'json',
			data: regData,
			success : function(data){
				Boxy.alert(data.message,function(){
					$('#login_waitting').hide(20); 
					if (data.error==false) {$(window.location).attr('href', data.url); }
				},
				{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
			},
			error : function(XMLHttpRequest, textStatus, errorThrown) {Boxy.alert('Có lỗi trong quá trình đưa lên máy chủ. Xin bạn vui lòng kiểm tra lại kết nối.',function(){$('#login_waitting').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });}
		});
	return false;	
}
function changepassValidate(){
	$('#changpass_waiting').show(20);	
	var oldpassword 	 = $('#frm_old_password').val();
	var password 		 = $('#frm_new_password').val();
	var password_confirm = $('#frm_confirm_password').val();
	if(oldpassword=='' ){
		Boxy.alert('Bạn chưa nhập mật khẩu cũ.',function(){$('#frm_old_password').focus();$('#changpass_waiting').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });	
		return false;
	}
	if(password=='' ){
		Boxy.alert('Bạn chưa nhập mật khẩu.',function(){$('#frm_new_password').focus();$('#changpass_waiting').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });	
		return false;
	}
	if(password_confirm=='' ){
		Boxy.alert('Bạn vui lòng xác nhận mật khẩu.',function(){$('#frm_confirm_password').focus();$('#changpass_waiting').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });	
		return false;
	}
	if(password!=password_confirm ){
		Boxy.alert('Hai mật khẩu chưa trùng khớp. Bạn vui lòng kiểm tra lại.',function(){$('#frm_confirm_password').focus();$('#changpass_waiting').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });	
		return false;
	}
	/*if (password.length<6 || !(password.match(/[A-Za-z]/)) || !(password.match(/\d+/))) {
     	 Boxy.alert('Bạn vui lòng chọn mật khẩu ít nhất có 6 kí tự bao gồm cả ký tự và số.',function(){ $('#frm_new_password').focus();$('#changpass_waiting').hide(20);},{title:'Thông báo',afterShow: function() { $('#boxy_button_OK').focus();}});
      	return false;
   	}*/
	if (password.length<1) {
     	 Boxy.alert('Bạn vui lòng chọn mật khẩu.',function(){ $('#frm_new_password').focus();$('#changpass_waiting').hide(20);},{title:'Thông báo',afterShow: function() { $('#boxy_button_OK').focus();}});
      	return false;
   	}
	var regData = $('form#frmChangepass').serialize();
	$.ajax({
			type : 'POST',
			url : '/ajax.html',
			dataType : 'json',
			data: regData,
			success : function(data){Boxy.alert(data.message,function(){if(data.error==false){$(window.location).attr('href',data.url);}else{$('#changpass_waiting').hide(20);}},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });},
			error : function(XMLHttpRequest, textStatus, errorThrown) {Boxy.alert('Có lỗi trong quá trình đưa lên máy chủ. Xin bạn vui lòng kiểm tra lại kết nối.',function(){$('#changpass_waiting').hide(20);},{title:'Thông báo.',afterShow: function() {$('#boxy_button_OK').focus();}});}
		});
	return false;	
}
function logout(){
	Boxy.confirm('Bạn có thực sự muốn xóa thoát ?.',function(){
		$.ajax({
			type : 'POST',
			url : '/ajax.html',
			dataType : 'json',
			data: {action:'logout'},
			success : function(data){if(data.error==false){$(window.location).attr('href', data.url);}},
			error : function(XMLHttpRequest, textStatus, errorThrown) {Boxy.alert('Có lỗi trong quá trình đưa lên máy chủ. Xin bạn vui lòng kiểm tra lại kết nối.',function(){},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });}
		});
	  },{title:'Thông báo.',afterShow:function() { $('#boxy_button_OK').focus();} });
}
function uChangeCity(obj,dID,rID){
	var cID = $(obj).val();
	if(rID=='' || rID ==undefined) rID = '#use_district';
	$.ajax({
			type : 'POST',
			url : '/ajax.html',
			dataType : 'json',
			data:{action:'uDistrict',cID:cID,dID:dID},
			success : function(data){if(data.error==false){$(rID).html(data.html)}},
			error : function(XMLHttpRequest, textStatus, errorThrown){}
		});
	return false;
}
function changeInfo(){
	$('#changInfo_waiting').show(20);	
	
	if($('#use_email').val()==''){
		Boxy.alert('Bạn vui lòng điền số Email của bạn.',function(){$('#use_email').focus();$('#changInfo_waiting').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });	
		return false;
	}
	if(!jIsemail($('#use_email').val())){
		Boxy.alert('Email của bạn không hợp lệ vui lòng nhập lại.',function(){$('#use_email').focus();$('#changInfo_waiting').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });	
		return false;
	}
	if($('#use_city').val()<1){
		Boxy.alert('Bạn vui lòng chọn Tỉnh/Thành.',function(){$('#use_city').focus();$('#changInfo_waiting').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });	
		return false;
	}
	if($('#use_phone').val()==''){
		Boxy.alert('Bạn vui lòng điền số điện thoại của bạn.',function(){$('#use_city').focus();$('#changInfo_waiting').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });	
		return false;
	}
	
	var regData = $('form#frmChangInfo').serialize();
	$.ajax({
			type : 'POST',
			url : '/ajax.html',
			dataType : 'json',
			data: regData,
			success : function(data){Boxy.alert(data.message,function(){if(data.error==false){$(window.location).attr('href',data.url);}else{$('#changInfo_waiting').hide(20);}},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });},
			error : function(XMLHttpRequest, textStatus, errorThrown) {Boxy.alert('Có lỗi trong quá trình đưa lên máy chủ. Xin bạn vui lòng kiểm tra lại kết nối.',function(){$('#changInfo_waiting').hide(20);},{title:'Thông báo.',afterShow: function() {$('#boxy_button_OK').focus();}});}
		});
	return false;
}
function uCheck(){
	var Item = $('.uff_add2cart[type="checkbox"]');	
	var ItemChecked = $('.uff_add2cart[type="checkbox"]:checked');
	var numItem = Item.length;
	var numItemChecked = ItemChecked.length;
	if(numItem == numItemChecked) $('.check_all input[type="checkbox"]').attr('checked','checked');
	else $('.check_all input[type="checkbox"]').attr('checked','');
}
function uCheckAll(obj){
	var Item = $('.uff_add2cart[type="checkbox"]');	
	var ItemCheckAll = $('.check_all input[type="checkbox"]');	
	var val ='';
	if(($(obj).attr('checked'))) val = 'checked';
	Item.each(function(index) {
		$(this).attr('checked',val);
	});
	ItemCheckAll.each(function(index) {
		$(this).attr('checked',val);
	});
}
function delFavorits(obj){
	$(obj).addClass('loading');
	var pID = $(obj).attr('rel');
		
	if(pID==''){
		Boxy.alert('Không tìm thấy sản phẩm này.',function(){$(obj).removeClass();},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });	
		return false;
	}
	$.ajax({
			type : 'POST',
			url : '/ajax.html',
			dataType : 'json',
			data: {action:'delFavorits',pID:pID},
			success : function(data){Boxy.alert(data.message,function(){if(data.error==false){$(window.location).attr('href',data.url);}else{$(obj).removeClass();}},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });},
			error : function(XMLHttpRequest, textStatus, errorThrown) {Boxy.alert('Có lỗi trong quá trình đưa lên máy chủ. Xin bạn vui lòng kiểm tra lại kết nối.',function(){$(obj).removeClass();},{title:'Thông báo.',afterShow: function() {$('#boxy_button_OK').focus();}});}
		});
	return false;
}
function uAdd2Cart(){
	var Item = $('.uff_add2cart[type="checkbox"]:checked');	
	if(Item.length<1){
		Boxy.alert('Bạn vui lòng chọn sản phẩm để đưa vào giỏ hàng.',function(){},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });	
		return false;
	}
	var regData = 'action=uAdd2Cart&'+Item.serialize();
	$.ajax({
			type : 'POST',
			url : '/ajax.html',
			dataType : 'json',
			data: regData,
			success : function(data){Boxy.alert(data.message,function(){if(data.code==0) {$('#numCart').html('Giỏ hàng \('+data.numItem+'\)'); $('#popCart').html(data.short); $('#cartTotal span').html('Tổng tiền: '+data.Total+' ₫'); }},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });},
			error : function(XMLHttpRequest, textStatus, errorThrown) {Boxy.alert('Có lỗi trong quá trình đưa lên máy chủ. Xin bạn vui lòng kiểm tra lại kết nối.',function(){},{title:'Thông báo.',afterShow: function() {$('#boxy_button_OK').focus();}});}
		});
	return false;
	
}
function delItemInCart(obj){
	var pID = $(obj).attr('rel');
	var regData = 'action=delItemInCart&pID='+pID;
	$.ajax({
			type : 'POST',
			url : '/ajax.html',
			dataType : 'json',
			data: regData,
			success : function(data){Boxy.alert(data.message,function(){if(data.error==false){$(window.location).attr('href',data.url);}},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });},
			error : function(XMLHttpRequest, textStatus, errorThrown) {Boxy.alert('Có lỗi trong quá trình đưa lên máy chủ. Xin bạn vui lòng kiểm tra lại kết nối.',function(){},{title:'Thông báo.',afterShow: function() {$('#boxy_button_OK').focus();}});}
		});
	return false;
}
function updateItemInCart(obj){
	var pID = $(obj).attr('title');
	var pQuality = $('#quality_'+pID).val();
	var urlBack  = $('#cart_update_back').val();
		if(urlBack==undefined) urlBack ='';
	var regData = 'action=updateCart&pID='+pID+'&pQuality='+pQuality+'&urlBack='+urlBack;
	$.ajax({
			type : 'POST',
			url : '/ajax.html',
			dataType : 'json',
			data: regData,
			success : function(data){Boxy.alert(data.message,function(){if(data.error==false){$(window.location).attr('href',data.url);}},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });},
			error : function(XMLHttpRequest, textStatus, errorThrown) {Boxy.alert('Có lỗi trong quá trình đưa lên máy chủ. Xin bạn vui lòng kiểm tra lại kết nối.',function(){},{title:'Thông báo.',afterShow: function() {$('#boxy_button_OK').focus();}});}
		});
	return false;
}
function updateAllItemInCart(){	
	var pQuality = $('.pro_quantity input[type="text"]');
	var pID  = $('.pro_quantity input[type="button"]');
	var urlBack  = $('#cart_update_back').val();
		if(urlBack==undefined) urlBack ='';
	var regData = 'action=updateAllCart+&urlBack='+urlBack;
	$.each(pQuality, function(index, value) {
		regData+='&pQuality[]='+$(value).val();	
	} )
	$.each(pID, function(index, value) {
		regData+='&pID[]='+$(value).attr('title');	
	} )
	$.ajax({
			type : 'POST',
			url : '/ajax.html',
			dataType : 'json',
			data: regData,
			success : function(data){$(window.location).attr('href',data.url);},
			error : function(XMLHttpRequest, textStatus, errorThrown) {Boxy.alert('Có lỗi trong quá trình đưa lên máy chủ. Xin bạn vui lòng kiểm tra lại kết nối.',function(){},{title:'Thông báo.',afterShow: function() {$('#boxy_button_OK').focus();}});}		
		});
	return false;
	/*Boxy.alert(data.message,function(){if(data.error==false){$(window.location).attr('href',data.url);}},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });*/
}
function userBookValidate(){
	$('#user_book_wait').show(20);	
	if($('#book_user_name').val()==''){
		Boxy.alert('Bạn chưa điền tên người đặt hàng.',function(){$('#book_user_name').focus();$('#user_book_wait').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });	
		return false;
	}
	if($('#book_user_address').val()==''){
		Boxy.alert('Bạn chưa điền địa chỉ.',function(){$('#book_user_address').focus();$('#user_book_wait').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });	
		return false;
	}
	if($('#book_user_city').val()<1){
		Boxy.alert('Bạn vui lòng chọn Tỉnh/Thành.',function(){$('#book_user_city').focus();$('#user_book_wait').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });	
		return false;
	}
	if($('#book_user_district').val()<1){
		Boxy.alert('Bạn vui lòng chọn Quận/Huyện.',function(){$('#book_user_district').focus();$('#user_book_wait').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });	
		return false;
	}
	
	if($('#book_user_phone').val()<1){
		Boxy.alert('Bạn vui lòng điền số điện thoại.',function(){$('#book_user_phone').focus();$('#user_book_wait').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });	
		return false;
	}
	if(!jIsemail($('#book_user_email').val())){
		Boxy.alert('Bạn vui lòng điện Email hợp lệ.',function(){$('#book_user_email').focus();$('#user_book_wait').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });	
		return false;
	}
	var regData = $('form#formUserBookPayment').serialize();
	$.ajax({
			type : 'POST',
			url : '/ajax.html',
			dataType : 'json',
			data: regData,
			success : function(data){
				if (data.error==false) {
					//$(window.location).attr('href', data.url); 
					//alert('xxx');
					if(data.account==1){
						Boxy.ask(data.message, ['Đăng nhập', 'Quên mật khẩu', 'Tiếp tục thanh toán'], function(val) {
						  //alert("You chose: " + val);
						  if(val=='Đăng nhập') $(window.location).attr('href', data.url_login);
						  else if(val=='Quên mật khẩu') $(window.location).attr('href', data.url_forget);
						  else if(val=='Tiếp tục thanh toán') $(window.location).attr('href', data.url_next);
						}, {title: 'Thông báo'});
					}else $(window.location).attr('href', data.url); 
					
				}else{
					Boxy.alert(data.message,function(){
						$('#user_book_wait').hide(20);					
					},
					{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
				}
			},
			error : function(XMLHttpRequest, textStatus, errorThrown) {Boxy.alert('Có lỗi trong quá trình đưa lên máy chủ. Xin bạn vui lòng kiểm tra lại kết nối.',function(){$('#user_book_wait').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });}
		});
	return false;
}
function userReciveValidate(){
	$('#user_recive_wait').show(20);	
	if($('#recive_user_name').val()==''){
		Boxy.alert('Bạn chưa điền tên người nhận hàng.',function(){$('#recive_user_name').focus();$('#user_recive_wait').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });	
		return false;
	}
	if($('#recive_user_address').val()==''){
		Boxy.alert('Bạn chưa điền địa chỉ.',function(){$('#recive_user_address').focus();$('#user_recive_wait').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });	
		return false;
	}
	if($('#recive_user_city').val()<1){
		Boxy.alert('Bạn vui lòng chọn Tỉnh/Thành.',function(){$('#recive_user_city').focus();$('#user_recive_wait').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });	
		return false;
	}
	if($('#recive_user_district').val()<1){
		Boxy.alert('Bạn vui lòng chọn Quận/Huyện.',function(){$('#recive_user_district').focus();$('#user_recive_wait').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });	
		return false;
	}
	if($('#recive_user_phone').val()<1){
		Boxy.alert('Bạn vui lòng điền số điện thoại.',function(){$('#recive_user_phone').focus();$('#user_recive_wait').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });	
		return false;
	}
	if(!jIsemail($('#recive_user_email').val())){
		Boxy.alert('Bạn vui lòng điện Email hợp lệ.',function(){$('#recive_user_email').focus();$('#user_recive_wait').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });	
		return false;
	}
	var regData = $('form#formUserRecivePayment').serialize();
	$.ajax({
			type : 'POST',
			url : '/ajax.html',
			dataType : 'json',
			data: regData,
			success : function(data){
				if (data.error==false) {$(window.location).attr('href', data.url); }
				else{
					Boxy.alert(data.message,function(){
						$('#user_recive_wait').hide(20); 
						
					},
					{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
				}
			},
			error : function(XMLHttpRequest, textStatus, errorThrown) {Boxy.alert('Có lỗi trong quá trình đưa lên máy chủ. Xin bạn vui lòng kiểm tra lại kết nối.',function(){$('#user_recive_wait').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });}
		});
	return false;
}
function validateBR(){
	$('#user_book_wait').show(20);	
	if($('#book_user_name').val()==''){
		Boxy.alert('Bạn chưa điền tên người đặt hàng.',function(){$('#book_user_name').focus();$('#user_book_wait').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });	
		return false;
	}
	if($('#book_user_address').val()==''){
		Boxy.alert('Bạn chưa điền địa chỉ.',function(){$('#book_user_address').focus();$('#user_book_wait').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });	
		return false;
	}
	if($('#book_user_city').val()<1){
		Boxy.alert('Bạn vui lòng chọn Tỉnh/Thành.',function(){$('#book_user_city').focus();$('#user_book_wait').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });	
		return false;
	}
	if($('#book_user_district').val()<1){
		Boxy.alert('Bạn vui lòng chọn Quận/Huyện.',function(){$('#book_user_district').focus();$('#user_book_wait').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });	
		return false;
	}
	
	if($('#book_user_phone').val()<1){
		Boxy.alert('Bạn vui lòng điền số điện thoại.',function(){$('#book_user_phone').focus();$('#user_book_wait').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });	
		return false;
	}
	if(!jIsemail($('#book_user_email').val())){
		Boxy.alert('Bạn vui lòng điện Email hợp lệ.',function(){$('#book_user_email').focus();$('#user_book_wait').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });	
		return false;
	}
	if($('#recive_user_name').val()==''){
		Boxy.alert('Bạn chưa điền tên người nhận hàng.',function(){$('#recive_user_name').focus();$('#user_recive_wait').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });	
		return false;
	}
	if($('#recive_user_address').val()==''){
		Boxy.alert('Bạn chưa điền địa chỉ.',function(){$('#recive_user_address').focus();$('#user_recive_wait').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });	
		return false;
	}
	if($('#recive_user_city').val()<1){
		Boxy.alert('Bạn vui lòng chọn Tỉnh/Thành.',function(){$('#recive_user_city').focus();$('#user_recive_wait').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });	
		return false;
	}
	if($('#recive_user_district').val()<1){
		Boxy.alert('Bạn vui lòng chọn Quận/Huyện.',function(){$('#recive_user_district').focus();$('#user_recive_wait').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });	
		return false;
	}
	if($('#recive_user_phone').val()<1){
		Boxy.alert('Bạn vui lòng điền số điện thoại.',function(){$('#recive_user_phone').focus();$('#user_recive_wait').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });	
		return false;
	}
	if(!jIsemail($('#recive_user_email').val())){
		Boxy.alert('Bạn vui lòng điện Email hợp lệ.',function(){$('#recive_user_email').focus();$('#user_recive_wait').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });	
		return false;
	}
	var regData = $('form#formUserBookPayment').serialize();
	$.ajax({
			type : 'POST',
			url : '/ajax.html',
			dataType : 'json',
			data: regData,
			success : function(data){
				if (data.error==false) {$(window.location).attr('href', data.url); }
				else{
					Boxy.alert(data.message,function(){
						$('#user_recive_wait').hide(20); 
						
					},
					{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
				}
			},
			error : function(XMLHttpRequest, textStatus, errorThrown) {Boxy.alert('Có lỗi trong quá trình đưa lên máy chủ. Xin bạn vui lòng kiểm tra lại kết nối.',function(){$('#user_recive_wait').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });}
		});
	return false;
}
function promotionCodeValidate(){	
	$('#promotion_wait').show(20);	
	if($('#promotionCode').val()==''){
		Boxy.alert('Bạn chưa nhập mã giảm giá.',function(){$('#promotionCode').focus();$('#promotion_wait').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });	
		return false;
	}	
$.ajax({
			type : 'POST',
			url : '/ajax.html',
			dataType : 'json',
			data:{action:'addPromotionCode',promotionCode:$('#promotionCode').val()},
			success : function(data){
				Boxy.alert(data.message,function(){
					$('#promotion_wait').hide(20); 
					if (data.error==false) {$(window.location).attr('href', data.url); }
				},
				{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
			},
			error : function(XMLHttpRequest, textStatus, errorThrown) {Boxy.alert('Có lỗi trong quá trình đưa lên máy chủ. Xin bạn vui lòng kiểm tra lại kết nối.',function(){$('#promotion_wait').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });}
		});
	return false;
}
function promotionCodeCartValidate(){		
	if($('#promotionCodeCart').val()==''){
		Boxy.alert('Bạn chưa nhập mã giảm giá.',function(){$('#promotionCodeCart').focus();$('#promotion_wait').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });	
		return false;
	}	
$.ajax({
			type : 'POST',
			url : '/ajax.html',
			dataType : 'json',
			data:{action:'addPromotionCode',promotionCode:$('#promotionCodeCart').val()},
			success : function(data){
				if(data.login==1){
					Boxy.ask(data.message, ['OK', 'Cancel'], function(val) {
					 	if(val=='OK'){$(window.location).attr('href', data.url); }
					}, {title: 'Thông báo.'});
				}else{
					Boxy.alert(data.message,function(){					
						if (data.error==false) {$(window.location).attr('href', data.url); }
					},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
				}
			},
			error : function(XMLHttpRequest, textStatus, errorThrown) {Boxy.alert('Có lỗi trong quá trình đưa lên máy chủ. Xin bạn vui lòng kiểm tra lại kết nối.',function(){},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });}
		});
	return false;
}
function optChange(obj){
	$.ajax({
			type : 'POST',
			url : '/ajax.html',
			dataType : 'json',
			data:{action:'optionChange',optValue:$(obj).val()},
			success : function(data){
				if (data.error==false) {
					$('#TotalOrder').html(data.PayTotal);
					$('#freeTranform').html(data.change);
					$('#cartTotal').html(data.CartTotal);
				}
			},
			error : function(XMLHttpRequest, textStatus, errorThrown) {}
		});
	return false;
}
function oStatus(){
	$('#changpass_waiting').show(20);
	oID = jTrim($('#oID').val());
	if(oID=='' ){
		Boxy.alert('Bạn chưa nhập mã đơn hàng..',function(){$('#oID').focus();$('#changpass_waiting').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });	
		return false;
	}
	var regData = $('form#frmOrderStatus').serialize();
	$.ajax({
			type : 'POST',
			url : '/ajax.html',
			dataType : 'json',
			data: regData,
			success : function(data){Boxy.alert(data.message,function(){$('#changpass_waiting').hide(20);$('#oID').val('')},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });},
			error : function(XMLHttpRequest, textStatus, errorThrown) {Boxy.alert('Có lỗi trong quá trình đưa lên máy chủ. Xin bạn vui lòng kiểm tra lại kết nối.',function(){$('#changpass_waiting').hide(20);},{title:'Thông báo.',afterShow: function() {$('#boxy_button_OK').focus();}});}
		});
	return false;
	return false;
}
function forgetValidate(){
	$('#forget_wait').show(20);	
	var user_name = $('#frm_forget_username').val();
	var user_email = $('#frm_forget_email').val();
	if(user_name=='' && user_email=='' ){
		Boxy.alert('Bạn vui lòng nhập Tên đăng nhập hoặc E-Mail đăng ký.',function(){$('#frm_forget_username').focus();$('#forget_wait').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });	
		return false;
	}
	var regData = $('form#frmForget').serialize();
	$.ajax({
			type : 'POST',
			url : '/ajax.html',
			dataType : 'json',
			data: regData,
			success : function(data){Boxy.alert(data.message,function(){if(data.error==false){document.frmForget.reset();}$('#forget_wait').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });},
			error : function(XMLHttpRequest, textStatus, errorThrown) {Boxy.alert('Có lỗi trong quá trình đưa lên máy chủ. Xin bạn vui lòng kiểm tra lại kết nối.',function(){$('#forget_wait').hide(20);},{title:'Thông báo.',afterShow: function() {$('#boxy_button_OK').focus();}});}
		});
	return false;	
}
function cPValidate(){
	$('#changepass_wait').show(20);	
	var password 		 = $('#frm_change_password').val();
	var password_confirm = $('#frm_change_password_confirm').val();
	if(password=='' ){
		Boxy.alert('Bạn chưa nhập mật khẩu.',function(){$('#frm_change_password').focus();$('#changepass_wait').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });	
		return false;
	}
	if(password_confirm=='' ){
		Boxy.alert('Bạn vui lòng xác nhận mật khẩu.',function(){$('#frm_change_password_confirm').focus();$('#changepass_wait').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });	
		return false;
	}
	if(password!=password_confirm ){
		Boxy.alert('Hai mật khẩu chưa trùng khớp. Bạn vui lòng kiểm tra lại.',function(){$('#frm_change_password_confirm').focus();$('#changepass_wait').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });	
		return false;
	}
	var regData = $('form#frmChangepass').serialize();
	$.ajax({
			type : 'POST',
			url : '/ajax.html',
			dataType : 'json',
			data: regData,
			success : function(data){Boxy.alert(data.message,function(){if(data.error==false){$(window.location).attr('href',data.url);}else{$('#changepass_wait').hide(20);}},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });},
			error : function(XMLHttpRequest, textStatus, errorThrown) {Boxy.alert('Có lỗi trong quá trình đưa lên máy chủ. Xin bạn vui lòng kiểm tra lại kết nối.',function(){$('#changepass_wait').hide(20);},{title:'Thông báo.',afterShow: function() {$('#boxy_button_OK').focus();}});}
		});
	return false;	
}
function showInfoCart(obj){
	$('#popCart').addClass('loading');
	var offset = $(obj).offset();
	$("#show-content-1").css({'display':'block','position':'absolute'});
	$.ajax({
		type : 'POST',
		url : '/ajax.html',
		dataType : 'json',
		data: {action:'shortCart'},
		success : function(data){$('#popCart').html(data.html);$('#popCart').removeClass('loading');},
		error : function(XMLHttpRequest, textStatus, errorThrown) {$('#popCart').removeClass('loading');}
	});
}
function hideInfoCart(){
	$('#show-content-1').hide(100);	
}
function setExpandOrColspan(obj,lower){
	if($(obj).attr('rel') == 'colspan')
	{
		$('#'+lower).show(100);
		$(obj).attr('rel','expand')
		$('img',obj).attr('src','/images/icon_colpan.png');
		$('span',obj).html('Thu gọn');
	}else
	{
		$('#'+lower).hide(100);
		$(obj).attr('rel','colspan')
		$('img',obj).attr('src','/images/icon_expand.png');
		$('span',obj).html('Xem thêm');
	}
}
function validateNewsletter()
{
	if ( !jIsemail($('#mail_newletter').val())) {
      Boxy.alert('Email của bạn không hợp lệ !',function(){ $('#mail_newletter').focus();},{title:'Thông báo',afterShow: function() { $('#boxy_button_OK').focus();} });
      return false;
   	}
	tb_show('Đăng ký nhận mã giảm giá','/vn/newletter.php?mail_newletter=' + $('#mail_newletter').val() + '&height=350&width=597&modal=true');
	return false;
}
function validateSaleOff(){
	if ( !jIsemail($('#mail_pro_sale_off').val())) {
      Boxy.alert('Email của bạn không hợp lệ !',function(){ $('#mail_pro_sale_off').focus();},{title:'Thông báo',afterShow: function() { $('#boxy_button_OK').focus();} });
      return false;
   	}
	tb_show('Đăng ký nhận mã giảm giá','/vn/newletter.php?mail_newletter=' + $('#mail_pro_sale_off').val() + '&height=336&width=597&modal=true');
	return false;
}
function regNewsletter()
{
	new_promotion = 0;
	new_research = 0;
	new_tips = 0;
	if(document.getElementById("new_promotion").checked) new_promotion = 1;
	if(document.getElementById("new_research").checked) new_research = 1;
	if(document.getElementById("new_tips").checked) new_tips = 1;	
	$.ajax({
		type : 'POST',
		url : '/ajax.html',
		dataType : 'json',
		data: {action:'reg_newsletter',txtMail:$('#txtMail').val(),new_promotion:new_promotion,new_research:new_research,new_tips:new_tips,url:$('#url_newsletter').val()},
		success : function(data){Boxy.alert(data.message,function(){if(data.error==false){$(window.location).attr('href','/vn/');}},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });},
		error : function(XMLHttpRequest, textStatus, errorThrown) {Boxy.alert('Có lỗi trong quá trình đưa lên máy chủ. Xin bạn vui lòng kiểm tra lại kết nối.',function(){},{title:'Thông báo.',afterShow: function() {$('#boxy_button_OK').focus();}});}
	});
}
function validateNewsletter(obj){
	email = $(obj).find('input[name="email"]');
	//
	if($(email).val()==''){		
	  Boxy.alert('Bạn vui lòng điền Email!',function(){ $('#mail_newletter').focus();},{title:'Thông báo',afterShow: function() { $('#boxy_button_OK').focus();} });
	  return false;		
	}
	//
	if(!jIsemail($(email).val())){		
	  Boxy.alert('Email của bạn không hợp lệ. Bạn vui lòng kiểm tra lại.',function(){ $(email).focus();},{title:'Thông báo',afterShow: function() { $('#boxy_button_OK').focus();} });
	  return false;		
	}
	regData = $(obj).serialize();
	$.ajax({
		type: 'POST',
		url: '/ajax.html',
		dataType: 'json',
		data:regData,
		success: function(data){Boxy.alert(data.message,function(){if(data.error==false){$(window.location).attr('href','/vn/');}},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });},
		error: function(XMLHttpRequest, textStatus, errorThrown) {}
	});
	return false;
}
function checkPolls()
{
	checked = document.getElementById('checkPoll').value;
	if(parseInt(checked)==0){
		Boxy.alert('Bạn phải chọn một đáp án!',function(){},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
		return false;
	}
	var regData = $('form#frmPolls').serialize();
	$.ajax({
			type : 'POST',
			url : '/ajax.html',
			dataType : 'json',
			data: regData,
			success : function(data)
			{
				if(data.error==false)
				{
					tb_show('Kết quả bình chọn',data.url + '?height=336&width=597&modal=true');
				}else Boxy.alert('Có lỗi trong quá trình đưa lên máy chủ. Xin bạn vui lòng kiểm tra lại kết nối.',function(){},{title:'Thông báo.',afterShow: function() {$('#boxy_button_OK').focus();}});
			},
			error : function(XMLHttpRequest, textStatus, errorThrown) {Boxy.alert('Có lỗi trong quá trình đưa lên máy chủ. Xin bạn vui lòng kiểm tra lại kết nối.',function(){},{title:'Thông báo.',afterShow: function() {$('#boxy_button_OK').focus();}});}
		});
	return false;
}
function rateValidate()
{
	general = document.getElementById('check_general').value;
	if(parseInt(general)==0){
		Boxy.alert('Bạn phải chọn "Đánh giá của bạn"!',function(){},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
		return false;
	}
	if($('#rat_title').val() == '' ){
		Boxy.alert('Bạn chưa nhập tiêu đề.',function(){$('#frm_old_password').focus();$('#changpass_waiting').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });	
		return false;
	}
	if($('#rat_code').val() == '' ){
		Boxy.alert('Bạn chưa nhập mã số an toàn.',function(){$('#frm_old_password').focus();$('#changpass_waiting').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });	
		return false;
	}
	var regData = $('form#frmSendRate').serialize();
	$.ajax({
			type : 'POST',
			url : '/ajax.html',
			dataType : 'json',
			data: regData,
			success : function(data){
				Boxy.alert(data.message,function(){if (data.error==false) {$(window.location).attr('href',data.url); }},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
			},
			error : function(XMLHttpRequest, textStatus, errorThrown) {Boxy.alert('Có lỗi trong quá trình đưa lên máy chủ. Xin bạn vui lòng kiểm tra lại kết nối.',function(){},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });}
		});
	return false;
}
function setFindCHC(obj,lower){
	if(!document.getElementById(lower))return false;
	if($(obj).attr('class') != 'active')
	{
		$('#'+lower).show(100);
		$(obj).attr('class','active')
	}else
	{
		$('#'+lower).hide(100);
		$(obj).attr('class','')
	}
	return false;
}
function goLabel(obj){
	ID = $(obj).attr('href');
	offset = $(ID).offset();
	$("html,body").animate({scrollTop:offset.top},"slow");
	$("ul.tabs li a").removeClass();
	$("#pro_indications_label a:first").addClass('current');
	$('#pro_detail_label').hide();
	$('#pro_generate_vote').hide();
	$('#pro_ensure').hide();
	$('#pro_lince').hide();
	$('#pro_indications').show();
}
function getCenteredCoords(width, height) {
    var xPos = null;
    var yPos = null;
    if (window.ActiveXObject) {
        xPos = window.event.screenX - (width/2) + 100;
        yPos = window.event.screenY - (height/2) - 100;
    } else {
        var parentSize = [window.outerWidth, window.outerHeight];
        var parentPos = [window.screenX, window.screenY];
        xPos = parentPos[0] +
            Math.max(0, Math.floor((parentSize[0] - width) / 2));
        yPos = parentPos[1] +
            Math.max(0, Math.floor((parentSize[1] - (height*1.25)) / 2));
    }
   return [xPos, yPos];
}
function openPopupWindow(url) {
  var w = window.open(url, 'openid_popup', 'width=495,height=320,location=1,status=1,resizable=yes');
  var coords = getCenteredCoords(495,320);
  w.moveTo(coords[0],coords[1]);
}
function monitorCountdown(periods,pID) { 		
	var strDate = 'Chỉ còn';
	if(periods[3]>0) strDate += ' '+periods[3]+' ngày';
	if(periods[4]>0) strDate += ' '+periods[4]+':';
	if(periods[5]>0 || periods[4]>0) strDate += ' '+periods[5]+'\'';
	if(periods[5]>0 || periods[6]>0) strDate += ' '+periods[6]+'\'\'';
	$(pID).text(strDate); 
}
function liftOff(pID){
	$('#hot_deal_item_'+pID).hide(0);
	$('#hot_deal_spacer_'+pID).hide(0);
}
function FloatTopDiv(){
	startLX = (($(window).width() -MainContentW)/2)-LeftBannerW-LeftAdjust , startLY = TopAdjust+101;
	startRX = (($(window).width() -MainContentW)/2)+MainContentW+RightAdjust , startRY = TopAdjust+101;
	var d = document;
	function ml(id){
		var el=d.getElementById?d.getElementById(id):d.all?d.all[id]:d.layers[id];
		el.sP=function(x,y){this.style.left=x + 'px';this.style.top=y + 'px';};
		el.x = startRX;
		el.y = startRY;
		return el;
	}
	function m2(id){
		var e2=d.getElementById?d.getElementById(id):d.all?d.all[id]:d.layers[id];
		e2.sP=function(x,y){this.style.left=x + 'px';this.style.top=y + 'px';};
		e2.x = startLX;
		e2.y = startLY;
		return e2;
	}
	window.stayTopLeft=function(){
		if (document.documentElement && document.documentElement.scrollTop)
			var pY =  document.documentElement.scrollTop;
		else if (document.body)
			var pY =  document.body.scrollTop;
		if (document.body.scrollTop > 30){startLY = 3;startRY = 3;} else {startLY = TopAdjust;startRY = TopAdjust;};
		ftlObj.y += (pY+startRY-ftlObj.y)/16;
		ftlObj.sP(ftlObj.x, ftlObj.y);
		ftlObj2.y += (pY+startLY-ftlObj2.y)/16;
		ftlObj2.sP(ftlObj2.x, ftlObj2.y);
		setTimeout("stayTopLeft()", 1);
	}
	ftlObj = ml("divAdRight");
	ftlObj2 = m2("divAdLeft");
	stayTopLeft();
}
function ShowAdDiv(){
	var objAdDivRight = document.getElementById("divAdRight");
	var objAdDivLeft = document.getElementById("divAdLeft");       
	if ($(window).width() < 1220){
		objAdDivRight.style.display = "none";
		objAdDivLeft.style.display = "none";
	}else{
		objAdDivRight.style.display = "block";
		objAdDivLeft.style.display = "block";
		FloatTopDiv();
	}
}
function product_fast_payment(obj,quality,phone){	
	var pID = $(obj).attr('rel');	
	var pQuality = $('#'+quality+pID);
	var pPhone = $('#'+phone+pID);
		phone = pPhone.val();
	if(pQuality.length) pQty = pQuality.val();
	else pQty = 1;	
	

	//Check quality
	if(pQty<1) {
		Boxy.alert('Số lượng sản phẩm phải >0',function(){pQuality.focus();},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
		return false;
	}
	if(phone==''){
		Boxy.alert('Bạn vui lòng nhập số điện thoại để chúng tôi liên lạc',function(){pPhone.focus();},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
		return false;
	}
	var regData = 'action=product_fast_payment&pID='+pID+'&quality='+pQty+'&phone='+phone;
	$.ajax({
			type : 'POST',
			url : '/ajax.html',
			dataType : 'json',
			data: regData,
			success : function(data){
				if (data.error==false) {
					$(window.location).attr('href',data.url); 
				}else{
					Boxy.alert(data.message,function(){},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
				}
				//Boxy.alert(data.message,function(){if (data.error==false) {$(window.location).attr('href',data.url); }},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
			},
			error : function(XMLHttpRequest, textStatus, errorThrown) {Boxy.alert('Có lỗi trong quá trình đưa lên máy chủ. Xin bạn vui lòng kiểm tra lại kết nối.',function(){},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });}
		});
	return false;
	//
}
function order_fast_payment(obj,phone){	
	var pPhone = $('#'+phone);
		phone = pPhone.val();
	
	if(phone==''){
		Boxy.alert('Bạn vui lòng nhập số điện thoại để chúng tôi liên lạc',function(){pPhone.focus();},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
		return false;
	}
	var regData = 'action=order_fast_payment&phone='+phone;
	$.ajax({
			type : 'POST',
			url : '/ajax.html',
			dataType : 'json',
			data: regData,
			success : function(data){
				if (data.error==false) {
					$(window.location).attr('href',data.url); 
				}else{
					Boxy.alert(data.message,function(){},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
				}
			},
			error : function(XMLHttpRequest, textStatus, errorThrown) {Boxy.alert('Có lỗi trong quá trình đưa lên máy chủ. Xin bạn vui lòng kiểm tra lại kết nối.',function(){},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });}
		});
	return false;
	//
}

function paymentValidate(obj){
	$('#user_book_wait').show(20);
	/*	
	if($('#book_user_name').val()==''){
		Boxy.alert('Bạn chưa điền tên người đặt hàng.',function(){$('#book_user_name').focus();$('#user_book_wait').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });	
		return false;
	}
	
	if($('#book_user_address').val()==''){
		Boxy.alert('Bạn chưa điền địa chỉ.',function(){$('#book_user_address').focus();$('#user_book_wait').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });	
		return false;
	}
	
	if($('#book_user_city').val()<1){
		Boxy.alert('Bạn vui lòng chọn Tỉnh/Thành.',function(){$('#book_user_city').focus();$('#user_book_wait').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });	
		return false;
	}	
	*/
	if($('#book_user_phone').val()<1){
		Boxy.alert('Bạn vui lòng điền số điện thoại.',function(){$('#book_user_phone').focus();$('#user_book_wait').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });	
		return false;
	}
	if(!jIsemail($('#book_user_email').val())){
		Boxy.alert('Bạn vui lòng điện Email hợp lệ.',function(){$('#book_user_email').focus();$('#user_book_wait').hide(20);},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });	
		return false;
	}
	
	var regData = $('form#formUserBookPayment').serialize();
	$.ajax({
			type : 'POST',
			url : '/ajax.html',
			dataType : 'json',
			data: regData,
			success : function(data){
				if (data.error==false) {$(window.location).attr('href',data.url); }
				else Boxy.alert(data.message,function(){},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });
				/*Boxy.alert(data.message,function(){},{title:'Thông báo.',afterShow: function() { $('#boxy_button_OK').focus();} });*/
			},
			error : function(XMLHttpRequest, textStatus, errorThrown) {}
		});
	return false;
}
function pro_go_top(obj){
	href = $(obj).attr('href');
	if(href=='#pd_mua_hang'){
		rel = $(obj).attr('rel');
		goto('#pd_quality_'+rel);
	}else if(href=='#pro_xem_nhan'){
		goto('#pro_tabs');
		$('a[href="#pro_indications"]').trigger('click');
	}else if(href=='#pd_y_kien'){
		goto('#pro_tabs');
		$('a[href="#pro_generate_vote"]').trigger('click');
	}else if(href=='#pro_thong_tin'){
		goto('#pro_tabs');
		$('a[href="#pro_detail_label"]').trigger('click');
	}
}
function goto(obj){
	offset = $(obj).offset();
	$("html,body").animate({scrollTop:offset.top},"slow");
}
$(document).ready(function(){				   
	showRate('.pro_favi','#proRate_');showRate('.hot_pro_favi','#hotProRate_');
	$('.pro_go_to a').click(function(event){event.preventDefault();pro_go_top(this);});	
	$('a.send_order').click(function(event){event.preventDefault();product_fast_payment(this,'pd_quality_','pd_phone_');});
	$('a.send_order_1').click(function(event){event.preventDefault();product_fast_payment(this,'pd_quality_1_','pd_phone_1_');});
	$('a.order_fav').click(function(event){event.preventDefault();product_fast_payment(this,'quality_','phone_');});
	$('a#order_phone_payment').click(function(event){event.preventDefault();order_fast_payment(this,'phone_order');});
	$('a#go_top').click(function(event){event.preventDefault();goTop();});
	$('.add_cart,.hdi_add2cart a').click(function(event){event.preventDefault();add2cart(this);});
	$('.add2cart').click(function(event){event.preventDefault();add_cart(this);});
	$('.add2cart1').click(function(event){event.preventDefault();add_cart1(this);});
	$('.add_comment').click(function(event){event.preventDefault();addCommnet(this);});
	$('.add_fav').click(function(event){event.preventDefault();add2favorist(this);});
	$('.comparison input[type="checkbox"]').click(function(event){/*event.preventDefault();*/checkCompare(this);});
	$('.pro_compare').click(function(event){/*event.preventDefault();*/proCompare(this);});
	$('.quickview').mouseover(function(event){/*event.preventDefault();*/showQuickView(this);})
				   .mouseout(function(event){/*event.preventDefault();*/hideQuickView(this);});
				   /*.click(function(event){event.preventDefault();});*/
	$('#pOrder,#numPage').change(function(){pageOption(this)});
	$('#frmRegister a.reg').click(function(event){event.preventDefault();registerValidate();});
	$('#frmChangepass a.changepass').click(function(event){event.preventDefault();changepassValidate();});
	$('#frmChangInfo a.changinfo').click(function(event){event.preventDefault();changeInfo();});
	$('#frmRegister #frm_city').change(function(){changeCity(this)});
	$('#frmRegister #frm_city').change(function(){changeCity(this)});
	$('.a_cart input[type="checkbox"]').click(function(event){uCheck();});
	$('.check_all input[type="checkbox"]').click(function(event){uCheckAll(this);});
	$('#u_logout').click(function(event){event.preventDefault();logout();});
	$('a.uff_delete').click(function(event){event.preventDefault();delFavorits(this);});
	$('a.u_add_cart').click(function(event){event.preventDefault();uAdd2Cart();});
	$('a.cartItemDelete').click(function(event){event.preventDefault();delItemInCart(this);});	
	$('input["button"].btUpdateItem').click(function(event){event.preventDefault();updateAllItemInCart();});	
	$('#addPromotionCode').click(function(event){event.preventDefault();promotionCodeValidate();});
	$('#addPromotionCodeCart').click(function(event){event.preventDefault();promotionCodeCartValidate();});	
	$('.opt_pp input[type="radio"]').click(function(event){optChange(this);});
	$('#frmOrderStatus a.order_status').click(function(event){event.preventDefault();oStatus();});
	$('#frm_forget_click').click(function(event){event.preventDefault();forgetValidate();});
	$('#frm_changepass').click(function(event){event.preventDefault();cPValidate();});
	$('a.label').click(function(event){event.preventDefault();goLabel(this);});
	$('a.livechat').click(function(event){event.preventDefault(); openPopupWindow('/vn/livechat.php');});
	$('#a_newletter').click(function(event){event.preventDefault();validateNewsletter();});
	$('#a_pro_sale_off').click(function(event){event.preventDefault();validateSaleOff();});
	//$('#userBookSubmit').click(function(event){event.preventDefault();userBookValidate();});	
	//$('#userReciveSubmit').click(function(event){event.preventDefault();userReciveValidate();});
	//$('.lazy').lazyload({placeholder : "/images/spacer.gif",effect : "fadeIn"});
	//$('.hot_deal').countdown({until:liftoffTime,onExpiry: liftOff, onTick: watchCountdown}); 
	//$('#defaultCountdown').countdown({until: myDate});
	$('.count_down').each(function(){
		var strRel = $(this).attr('rel');
		var arrRel = strRel.split('|',2);
		var pID = arrRel[0];
		var dateMinlions = parseInt(arrRel[1])*1000;
		var dEnd = new Date(dateMinlions);
			$('#count_down_'+pID).countdown({until: dEnd,onExpiry:liftOff,onTick: monitorCountdown,cID:'#monitor_'+pID});
	});
});	