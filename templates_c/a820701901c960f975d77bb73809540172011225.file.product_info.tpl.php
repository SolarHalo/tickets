<?php /* Smarty version Smarty-3.1.13, created on 2013-09-16 14:00:13
         compiled from "F:\PHP_WorkSapce\tickets\templates\product_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:302555231cbec2155e1-51561933%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a820701901c960f975d77bb73809540172011225' => 
    array (
      0 => 'F:\\PHP_WorkSapce\\tickets\\templates\\product_info.tpl',
      1 => 1379339607,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '302555231cbec2155e1-51561933',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5231cbed1e10d9_98039083',
  'variables' => 
  array (
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5231cbed1e10d9_98039083')) {function content_5231cbed1e10d9_98039083($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>index</title>
	<link href="<?php echo @constant('WEBSITE_URL');?>
public/style/reset.css" type="text/css" rel="stylesheet" />
	<link href="<?php echo @constant('WEBSITE_URL');?>
public/style/style.css" type="text/css" rel="stylesheet" /> 
	<link rel="stylesheet" href="<?php echo @constant('WEBSITE_URL');?>
/public/assets/css/jquery-ui.css" />
	<link rel="stylesheet" href="<?php echo @constant('WEBSITE_URL');?>
/public/assets/css/jquery.ui.datepicker.css" />
	
	<script src="<?php echo @constant('WEBSITE_URL');?>
/public/assets/lib/jquery-1.8.1.min.js" ></script>
	<script src="<?php echo @constant('WEBSITE_URL');?>
/public/assets/js/jquery-ui.js"></script>
	<script src="<?php echo @constant('WEBSITE_URL');?>
/public/assets/js/jquery.ui.datepicker.js"></script>
	<script src="<?php echo @constant('WEBSITE_URL');?>
/public/js/searchform.js"></script>
 
</head>

<body>


﻿<?php echo $_smarty_tpl->getSubTemplate ('layouts/headerandsearch.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 

<script  type="text/javascript">
	var postData = {'id':'<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'};
	$(function($) {
		$.post(
			'<?php echo @constant('WEBSITE_URL');?>
ticket/queryById',
			postData,
			function(obj){
				var html = "<h1>" + obj.product_name +"</h1>" +
                    "<p class=\"add\">"+obj.promotional_text+"</p>" +
                    "<p class=\"time\">"+ obj.time+" BST <a href=\"#\">+ 1 more dates</a></p>" +
                    "<p class=\"mt15\"><a href=\"#\" class=\"btn btn-range\">Add to Calendar</a></p>" ;
				$("#info-show").html(html);
				var str = "<img src=\""+ obj.aw_image_url +"\" width=\"160\" height=\"265\" class=\"img-sidebar\" />";
//	                "<ul class=\"share\">" +
//	                "	<li><a href=\"#\"><img src=\"<?php echo @constant('WEBSITE_URL');?>
/public/images/ioc01.gif\" /></a></li>"+
//	                "   <li><a href=\"#\"><img src=\"<?php echo @constant('WEBSITE_URL');?>
/public/images/ioc02.gif\" /></a></li>"+
//	                "   <li><a href=\"#\"><img src=\"<?php echo @constant('WEBSITE_URL');?>
/public/images/ioc03.gif\" /></a></li>"+
//	                "   <li><a href=\"#\"><img src=\"<?php echo @constant('WEBSITE_URL');?>
/public/images/ioc04.gif\" /></a></li>"+
//	                "   <li><a href=\"#\"><img src=\"<?php echo @constant('WEBSITE_URL');?>
/public/images/ioc05.gif\" /></a></li>"+
//	                "   <li><a href=\"#\"><img src=\"<?php echo @constant('WEBSITE_URL');?>
/public/images/ioc06.gif\" /></a></li>"+
//	                "</ul>";
				$("#img-list").before(str);
			},
			"json"
		);
	});
</script>
<div class="mian">
    <div class="content">
    	<div class="events">
        	<div class="sub-nav">
            	<span><a href="#">Home</a>  /  <a href="#">Search</a>  /  The Big Guns</a></span>
                <a href="#" class="back btn btn-black">&lt;&lt;Search Results</a>
            </div>
        	<div class="events-l mt15" id='img-list'>
				<!-- AddThis Button BEGIN -->
			<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
			<a class="addthis_button_preferred_1"></a>
			<a class="addthis_button_preferred_2"></a>
			<a class="addthis_button_preferred_3"></a>
			<a class="addthis_button_preferred_4"></a>
			<a class="addthis_button_compact"></a>
			<a class="addthis_counter addthis_bubble_style"></a>
			</div>
			<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
			<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-522dce200590139f"></script>
				<!-- AddThis Button END -->
            </div>
            <div class="events-c">
            	<div class="row" id="info-show">
            		<!--
            		<h1>The Big Guns</h1>
                    <p class="add">Princes Hall, Princes Way, Aldershot, GU11 1NX, Hampshire, UK</p>
                    <p class="time">Saturday, 31 Aug 2013 19:30 BST <a href="#">+ 1 more dates</a></p>
                    <p class="mt15"><a href="#" class="btn btn-range">Add to Calendar</a></p>
                    
                    -->
                </div>
                <div class="hr mt15"></div>
                <div class="row2 mt15"> 
                    <font>Featuring</font>: Wade, Van Gerwen, Hankey, Nicholson, George, Joplin.<br />
                    <font>Tickets available from</font>: Modus Darts on <font>08450 180 180</font> 
                    <table cellpadding="0" cellspacing="0" class="mt15">
                        <tr>
                            <td width="140"><font>Running time</font></td>
                            <td>120mins</td>
                        </tr>
                        <tr>
                            <td width="140"><font>Prices</font></td>
                            <td>VIPs - £50, Terrace £25, Balcony - 20</td>
                        </tr>
                    </table>
                </div>
                <div class="row3 map">
                	<span>View Map</span>
                    <div class="mt15" style="width: 407px; height: 339px">
                    	<!-- <img src="<?php echo @constant('WEBSITE_URL');?>
/public/photo/mapphoto.png" /> -->
                    	<?php echo $_smarty_tpl->getSubTemplate ("map.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                    </div>
                </div>
            </div>
            <div class="events-r mt15">
            	<div class="r-row rw-bg">
                	<h3>flagship  event</h3>
                    <font>August 25th, 20:00hrs</font>
                    <p class="mt15">Lorem ipsum dolor sit amet,consectetur adipisicing elit, sed do eiusmod tempor incididunt
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                        ipisicing elit, sed  do eiusmod tempor inc
                    </p>
                    <a href="#" class="Fbot mt15">View Details</a>
                </div>
                <div class="r-row rw-bg">
                	<h3>flagship  event</h3>
                    <font>August 25th, 20:00hrs</font>
                    <p class="mt15">Lorem ipsum dolor sit amet,consectetur adipisicing elit, sed do eiusmod tempor incididunt
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                        ipisicing elit, sed  do eiusmod tempor inc
                    </p>
                    <a href="#" class="Fbot mt15">View Details</a>
                </div>
            </div>
        </div> 
    </div> 
</div>
<div class="footer">
	<div>
    	<a href="#">User guide</a>  |  
        <a href="#">About us</a>  |  
        <a  href="#">Cookies policy</a>  |  
        <a href="#">Privacy policy</a>  |  
        <a href="#">Terms and Conditions</a>
    </div>
</div>
<script type="text/javascript">
searchaddress("北京小学");
</script>
</body>
</html>     <?php }} ?>