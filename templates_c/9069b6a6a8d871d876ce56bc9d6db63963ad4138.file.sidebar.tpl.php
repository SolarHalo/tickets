<?php /* Smarty version Smarty-3.1.13, created on 2013-12-26 22:49:11
         compiled from "E:\phpweb\tickets\templates\admin\sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1065952bc41e7d8cbe2-79500947%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9069b6a6a8d871d876ce56bc9d6db63963ad4138' => 
    array (
      0 => 'E:\\phpweb\\tickets\\templates\\admin\\sidebar.tpl',
      1 => 1383661964,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1065952bc41e7d8cbe2-79500947',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52bc41e7db5354_46291453',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52bc41e7db5354_46291453')) {function content_52bc41e7db5354_46291453($_smarty_tpl) {?><div class="sidebar-nav">

	<a href="#sidebar_menu_1" class="nav-header collapsed"
		data-toggle="collapse"><i class="icon-th"></i>Tickets Manager<i
		class="icon-chevron-up"></i></a>

	<ul id="sidebar_menu_1" class="nav nav-list collapse in">
		<li><a href="<?php echo @constant('WEBSITE_URL');?>
admin/event">event info
				manager</a></li>
		<li><a href="<?php echo @constant('WEBSITE_URL');?>
admin/ticket">ticket info
				manager</a></li>
		<li><a href="<?php echo @constant('WEBSITE_URL');?>
admin/ticket">ticket
				statistics</a></li>

	</ul>
	<a href="#sidebar_menu_2" class="nav-header collapsed"
		data-toggle="collapse"><i class="icon-th"></i>User Manager<i
		class="icon-chevron-up"></i></a>

	<ul id="sidebar_menu_2" class="nav nav-list collapse in">
		<li><a href="<?php echo @constant('WEBSITE_URL');?>
admin/adminuser">admin user</a></li>
		<li><a href="<?php echo @constant('WEBSITE_URL');?>
admin/users">register user</a></li>
		<li><a href="<?php echo @constant('WEBSITE_URL');?>
admin/imgcarousel">img
				manager</a></li>
		<li><a href="<?php echo @constant('WEBSITE_URL');?>
admin/advertising">advertising
				manager</a></li>

	</ul>


</div>

<?php }} ?>