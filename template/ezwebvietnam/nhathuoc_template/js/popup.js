// JavaScript Document

clicksor_enable_MsgAlert = true;
clicksor_enable_pop = true; clicksor_frequencyCap = 0.1;
durl = '';
clicksor_default_url = '';
clicksor_banner_border = '#000f30'; clicksor_banner_ad_bg = '#FFFFFF';
clicksor_banner_link_color = '#0c15ff'; clicksor_banner_text_color = '#da0041';
clicksor_banner_image_banner = true; clicksor_banner_text_banner = true;
clicksor_layer_border_color = '';
clicksor_layer_ad_bg = ''; clicksor_layer_ad_link_color = '';
clicksor_layer_ad_text_color = ''; clicksor_text_link_bg = '';
clicksor_text_link_color = '#0c59ff'; clicksor_enable_text_link = true;
clicksor_enable_VideoAd = true;


pf204652bottomLayer = document.getElementById('fl813691');
var pf204652IntervalId = 0;
var pf204652maxHeight = 98;
var pf204652minHeight = 30;
var pf204652curHeight = 0;
function pf204652show( ){
  pf204652curHeight += 2;
  if (pf204652curHeight > pf204652maxHeight){
	clearInterval ( pf204652IntervalId );
  }
  pf204652bottomLayer.style.height = pf204652curHeight+'px';
}
function pf204652hide( ){
  pf204652curHeight -= 3;
  if (pf204652curHeight < pf204652minHeight){
	clearInterval ( pf204652IntervalId );
  }
  pf204652bottomLayer.style.height = pf204652curHeight+'px';
}
var animate = $.cookie('animate');
if(animate=='1') {
		pf204652bottomLayer.style.height='0px';
		$('#fl813691').css('display',''); 
		document.getElementById('pf204652hide').style.display='none';
		document.getElementById('pf204652show').style.display='inline';
		pf204652bottomLayer.style.height='30px';
		//$('#eb951855_label').show();
}else { 
	pf204652bottomLayer.style.height='0px';
	$('#fl813691').css('display',''); 
	document.getElementById('pf204652hide').style.display='inline';
	document.getElementById('pf204652show').style.display='none';
	pf204652IntervalId=setInterval('pf204652show()',5);
	//$('#eb951855_label').hide();
}
function pf204652clickhide(){
	document.getElementById('pf204652hide').style.display='none';
	document.getElementById('pf204652show').style.display='inline';
	pf204652IntervalId=setInterval('pf204652hide()',5);
	$.cookie('animate', '1', { path:'/',expires:1});  
	//$('#eb951855_label').show();
}
function pf204652clickshow(){
	document.getElementById('pf204652hide').style.display='inline';
	document.getElementById('pf204652show').style.display='none';
	pf204652IntervalId=setInterval('pf204652show()',5);
	$.cookie('animate', '0', { path:'/',expires:1});  
	//$('#eb951855_label').hide();
}
function pf204652clickclose(){
	document.body.style.marginBottom = '0px';
	pf204652bottomLayer.style.display = 'none';
}
