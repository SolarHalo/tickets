<?php /* Smarty version Smarty-3.1.13, created on 2013-08-27 08:39:48
         compiled from "G:\phpserver\tickets\templates\usercarlendar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11541521c647f90fdb6-69881549%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a97e8e78d745e3ee8e2cb58d571d361e3c7c676' => 
    array (
      0 => 'G:\\phpserver\\tickets\\templates\\usercarlendar.tpl',
      1 => 1377592785,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11541521c647f90fdb6-69881549',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_521c647fa3dbc0_57794312',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_521c647fa3dbc0_57794312')) {function content_521c647fa3dbc0_57794312($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>用户日历中心</title>
<link href="<?php echo @constant('WEBSITE_URL');?>
public/style/reset.css" type="text/css" rel="stylesheet" />
<link href="<?php echo @constant('WEBSITE_URL');?>
public/style/style.css" type="text/css" rel="stylesheet" />
<link href='<?php echo @constant('WEBSITE_URL');?>
public/fullcalendar/fullcalendar.css' rel='stylesheet' />
<link href='<?php echo @constant('WEBSITE_URL');?>
public/fullcalendar/fullcalendar.print.css' rel='stylesheet' media='print' />
<script src='<?php echo @constant('WEBSITE_URL');?>
public/jquery/jquery-1.9.1.min.js'></script>
<script src='<?php echo @constant('WEBSITE_URL');?>
public/jquery/jquery-ui-1.10.2.custom.min.js'></script>
<script src='<?php echo @constant('WEBSITE_URL');?>
public/fullcalendar/fullcalendar.min.js'></script>
<script>

	$(document).ready(function() {
	
		var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();
		
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			editable: true,
			events: [
				{
					title: 'All Day Event',
					start: new Date(y, m, 1)
				},
				{
					title: 'Long Event',
					start: new Date(y, m, d-5),
					end: new Date(y, m, d-2)
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: new Date(y, m, d-3, 16, 0),
					allDay: false
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: new Date(y, m, d+4, 16, 0),
					allDay: false
				},
				{
					title: 'Meeting',
					start: new Date(y, m, d, 10, 30),
					allDay: false
				},
				{
					title: 'Lunch',
					start: new Date(y, m, d, 12, 0),
					end: new Date(y, m, d, 14, 0),
					allDay: false
				},
				{
					title: 'Birthday Party',
					start: new Date(y, m, d+1, 19, 0),
					end: new Date(y, m, d+1, 22, 30),
					allDay: false
				},
				{
					title: 'Click for Google',
					start: new Date(y, m, 28),
					end: new Date(y, m, 29),
					url: 'http://google.com/'
				}
			]
		});
		
	});

</script>
</head>

<body>
<?php echo $_smarty_tpl->getSubTemplate ('layouts/headerandsearch.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 

<div class="mian">
    <div class="content">
    	<div class="events">
        	<div class="gigs-1">
                <span>
                    <a href="#" class="fl btn btn-black-2">New Calendar Entry</a>
                    <a href="#" class="fl btn btn-black-3">Export your Calendar</a>
                </span>
                <p class=" mt15 gigs-top-xx fr"> 
                    <a href="#" class="btn-hs2 btn-Calendar left-by">Day</a> 
                    <a href="#" class="btn-hs2 btn-Calendar by-hover">Week</a> 
                    <a href="#" class="btn-hs2 btn-Calendar">Month</a> 
                    <a href="#" class="btn-hs2 btn-Calendar right-by">Agenda</a> 
                </p>
            </div>
            <div class="mt15">
            	<div id='calendar'></div>
            </div>
            <table class="gigs-u-l" style="margin:0;">
                <tr>
                  <td valign="center"><b>Legend:</b></td>
                  <td><a href="#" class="btn btn-range btn-Calendar">Search4Gigs Event</a></td>
                  <td><a href="#" class="btn btn-blue btn-Calendar">Private Event</a></td>
                  <td valign="center">Manage Layers</td>
                </tr>
              </table>
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
</body>
</html>     <?php }} ?>