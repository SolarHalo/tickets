<?php /* Smarty version Smarty-3.1.13, created on 2013-10-28 22:17:11
         compiled from "E:\phpweb\tickets\templates\about.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11550526e71e71cd841-83523479%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04753cd6f07f9faab7a10303784a9c44be82a8e4' => 
    array (
      0 => 'E:\\phpweb\\tickets\\templates\\about.tpl',
      1 => 1382969799,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11550526e71e71cd841-83523479',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_526e71e721ad85_38718578',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526e71e721ad85_38718578')) {function content_526e71e721ad85_38718578($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php echo $_smarty_tpl->getSubTemplate ('layouts/title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link href="<?php echo @constant('WEBSITE_URL');?>
public/style/reset.css"
	type="text/css" rel="stylesheet" />
<link href="<?php echo @constant('WEBSITE_URL');?>
public/style/style.css"
	type="text/css" rel="stylesheet" />
<link
	href="<?php echo @constant('WEBSITE_URL');?>
public/style/validationEngine.jquery.css"
	type="text/css" rel="stylesheet" />
<link href="<?php echo @constant('WEBSITE_URL');?>
public/style/func.css"
	type="text/css" rel="stylesheet" />
<link rel="stylesheet"
	href="<?php echo @constant('WEBSITE_URL');?>
/public/assets/css/jquery-ui.css" />
<link rel="stylesheet"
	href="<?php echo @constant('WEBSITE_URL');?>
/public/assets/css/jquery.ui.datepicker.css" />
<script
	src="<?php echo @constant('WEBSITE_URL');?>
public/js/jquery-1.10.1.min.js"
	type="text/javascript"></script>
<script
	src="<?php echo @constant('WEBSITE_URL');?>
/public/assets/js/jquery-ui.js"></script>
<script
	src="<?php echo @constant('WEBSITE_URL');?>
/public/assets/js/jquery.ui.datepicker.js"></script>
<script src="<?php echo @constant('WEBSITE_URL');?>
/public/js/searchform.js"></script>

</head>

<body>
	<?php echo $_smarty_tpl->getSubTemplate ('layouts/headerandsearch.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<div class="mian">
		<div class="content">
			<div class="article">
				<h5>ABOUT US</h5>
				<p>At Search4gigs it's our mission to make your search for events or
					tickets much easier than ever before! Search4gigs will help you to
					find out about the latest gigs, tickets or events going on plus you
					will also be able to save any events on your calendar so there will
					be no excuses for missing a show again.</p>
				<p>Search4hgigs has a database of over half a million events around
					the globe so you will always be able to find something you like.</p>
				<p>When you register at Search4gigs you will also receive
					newsletters about your favourite events from your chosen venues,
					artists or events so you will never miss an event again.</p>
				<p>Some of the cool features included in Search4gigs are:</p>
				<ul>
					<li>Massive database of events around the globe.</li>
					<li>Export your favourite events into your calendars and set
						reminders.</li>
					<li>Maps including all geographic locations.</li>
					<li>Ability to purchase tickets and compare prices.</li>
				</ul>
			</div>
		</div>
		<div class="h-blackbg"></div>
	</div>


	<table id="list-result" width="100%" border="0" cellspacing="0"
		cellpadding="0">
		<tr>
			<td>
				<table width="100%" border="0" cellspacing="0" cellpadding="0"
					class="gigs-table list-tablep">
					<tr>
						<td class="tdC">Tuesday<br /> <span>29&nbsp;Oct</span><br /> <font>02:30</font>
							<!-- <a href="#" class="time2">53 Dates</a>  -->
						</td>
						<td><a href="http://localhost/ticket/info/?id=750541828"> <img
								src="http://images.productserve.com/thumb/2448/750541828.jpg"
								width="92" height="92" class="btn" />
						</a></td>
						<td>Sporting Events<br /> <span> <a
								href="http://localhost/ticket/info/?id=750541828" name=750541828
								onmouseover='productOver(name)'> New York Rangers vs Montreal
									Canadiens </a>
						</span><br /> Madison Square Garden &nbsp;&nbsp;From: 627.84

						</td>
					</tr>
					<tr>
						<td colspan="2">&nbsp;</td>
						<td>
							<p class="mt15">
								<a href="javascript:addCalendat('750541828')"
									class="btn btn-range btn-Calendar">Add to Calendar</a> <a
									href="http://localhost/buyticket/index/?pid=750541828"
									class="back btn btn-black"><strong>Buy Tickets</strong></a>
							</p>
						</td>
					</tr>
				</table>
				<div class="table-xian"></div>
			</td>
		</tr>
	</table>
	<?php echo $_smarty_tpl->getSubTemplate ('layouts/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>