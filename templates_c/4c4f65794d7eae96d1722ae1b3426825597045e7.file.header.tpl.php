<?php /* Smarty version Smarty-3.1.13, created on 2013-12-26 22:48:02
         compiled from "E:\phpweb\tickets\templates\layouts\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1834252bc41a2e54629-12498427%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c4f65794d7eae96d1722ae1b3426825597045e7' => 
    array (
      0 => 'E:\\phpweb\\tickets\\templates\\layouts\\header.tpl',
      1 => 1382624645,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1834252bc41a2e54629-12498427',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52bc41a2ea7ff0_61849238',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52bc41a2ea7ff0_61849238')) {function content_52bc41a2ea7ff0_61849238($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search4gigs – Music, tickets and cultural events on your calendar.</title>
<meta name="description" content="Search4gigs – Search and find tickets for all types of events. Search and add sport, music or cultural events to your calendar." />
<meta name="keywords" content="Search4gigs, events, sport events, music events, cultural events, manage calendar, music tickets, online tickets." />
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
	
	<script  type="text/javascript">
	
	var setting = null; 
	$(function($) {
		 setting = function(){
			var toDate = $("#toDate").val();
			var fromDate = $("#fromDate").val();
			
			if(toDate != null && "" != toDate && "Date To" != toDate){
				$('#fromDate').datepicker('option', 'maxDate',toDate);  
			}
			
			if(fromDate != null && "" != fromDate && "Date From" != fromDate){
				$('#toDate').datepicker('option', 'minDate',fromDate);  
			}
			
		}
		
		$.datepicker.regional['zh-CN'] = {dateFormat: 'yy-mm-dd'};
		$.datepicker.setDefaults($.datepicker.regional['zh-CN']);

		$("#fromDate" ).datepicker();
		$("#toDate" ).datepicker();
		
			
		function mouseEvent(objId,objVal){
	
			var foucusFun = function(){
				if($("#"+objId).val() == objVal){
					$("#"+objId).val("");
				}
			}
			
			$("#"+objId).focus(foucusFun);
				
			$("#"+objId).blur(function(){
				if("" == $("#"+objId).val()){
					$("#"+objId).val(objVal);
				}
			});
		}
		
		mouseEvent("keyword","Search by keyword");
		mouseEvent("location","Search by location");
		mouseEvent("fromDate","Date From");
		mouseEvent("toDate","Date To");
	});


	
		
	function check( ){
		var keyword = $("#keyword").val();
		var location = $("#location").val();
		var fromDate = $("#fromDate").val();
		var toDate = $("#toDate").val();
		
		if(keyword == "Search by keyword"){
			$("#keyword").val("");
		}
		
		if("Search by location" == location){
			$("#location").val("");
		}
		
		if("Date From" == fromDate){
			$("#fromDate").val("");
		}
		
		if("Date To" == toDate){
			$("#toDate").val("");
		}
		
		return true;
	}
	</script>
	
</head>

<body>
<div id="head">
	<div>
        <span class="index-manage"><a href="<?php echo @constant('WEBSITE_URL');?>
carlendar"><font color="f7931d">Manage</font> your agenda +</a></span>
        <ul>
            <?php if (empty($_SESSION['user'])){?>
            <li>
                <a href="<?php echo @constant('WEBSITE_URL');?>
register" class="input-style1">Sign up<?php echo $_SESSION['user']->username;?>
 </a>
                <a href="<?php echo @constant('WEBSITE_URL');?>
login" class="input-style1">Sign In</a>
            </li>
            <?php }else{ ?>
          <li class="navuserlogin">
                <span class="username"><div><?php echo $_SESSION['user']->username;?>
</div><span>0</span></span>
                <a href="<?php echo @constant('WEBSITE_URL');?>
login/loginout"  class="btn btn-range btn-Calendar out">Log Out</a> 
            </li>
            <?php }?>
            <li class="navlist">
                <a href="<?php echo @constant('WEBSITE_URL');?>
carlendar">
                    YOUR CALENDAR<br /> 
                    <font>View and Manage your calendar of events</font>
                </a>
            </li>
            <li class="navlist">
                <a href="<?php echo @constant('WEBSITE_URL');?>
ticket">
                    EVENTS<br /> 
                    <font>What's on?</font>
                </a>
            </li>
            <li class="navlogo">
                <a href="<?php echo @constant('WEBSITE_URL');?>
"><img src="<?php echo @constant('WEBSITE_URL');?>
public/images/logo.png" class="index-logo" /></a>
            </li>
        </ul>
    </div>
</div>
<div class="index_banner">
	<div>
    	<a href="#"><img src="<?php echo @constant('WEBSITE_URL');?>
public/images/topbanner.png" /></a>
    </div>
</div>
<div id="indexsearch" class="search">
	<div>
    	<div>
        	<form action="<?php echo @constant('WEBSITE_URL');?>
ticket/index/" method="get">
            	<table>
                	<tr>
                    	<td><font class="fontstyle">Find&nbsp;&nbsp;an&nbsp;&nbsp;event</font></td>
                    	<td><input type="text" id="keyword" name="keyword" value="Search by keyword" class="searchinput textinput-w" tabindex=1 /></td>
                        <td><input type="text" id="location" name="location" value="Search by location" class="searchinput textinput-w" tabindex=2/></td>
                        <td><input type="text" name="fromDate" id="fromDate" value="Date From" onchange="setting()" readonly="readonly"  class="searchinput textinput-w2" tabindex=3/></td>
                        <td><input type="text" name="toDate" id="toDate" value="Date To" onchange="setting()" readonly="readonly" class="searchinput textinput-w2" tabindex=4/></td>
                        <td><input type="submit" value="Search" onclick="check()" class="input-style2" /></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div><?php }} ?>