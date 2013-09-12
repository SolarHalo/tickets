<?php /* Smarty version Smarty-3.1.13, created on 2013-09-11 05:08:08
         compiled from "G:\phpserver\tickets\templates\admin\sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14437521c49ccc9aea1-86912931%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db960afd086d22264e718b701c3ccae0dd6ea261' => 
    array (
      0 => 'G:\\phpserver\\tickets\\templates\\admin\\sidebar.tpl',
      1 => 1378564944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14437521c49ccc9aea1-86912931',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_521c49ccd13a30_34093055',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_521c49ccd13a30_34093055')) {function content_521c49ccd13a30_34093055($_smarty_tpl) {?><div class="sidebar-nav"> 
		
	       <a href="#sidebar_menu_1" class="nav-header collapsed" data-toggle="collapse"><i class="icon-th"></i>票务信息管理<i class="icon-chevron-up"></i></a>
		 
				<ul id="sidebar_menu_1" class="nav nav-list collapse in">
					<li><a href="<?php echo @constant('WEBSITE_URL');?>
admin/event">活动信息查看</a></li>
					<li><a href="<?php echo @constant('WEBSITE_URL');?>
admin/ticket">票务信息查看</a></li>
					<li><a href="<?php echo @constant('WEBSITE_URL');?>
admin/ticket">票务信息总体统计</a></li>
					 
				</ul> 
	   <a href="#sidebar_menu_1" class="nav-header collapsed" data-toggle="collapse"><i class="icon-th"></i>用户信息管理<i class="icon-chevron-up"></i></a>
		 
				<ul id="sidebar_menu_1" class="nav nav-list collapse in">
					<li><a href="<?php echo @constant('WEBSITE_URL');?>
admin/adminuser">管理员用户</a></li>
					<li><a href="<?php echo @constant('WEBSITE_URL');?>
admin/users">前台注册用户</a></li> 
					<li><a href="<?php echo @constant('WEBSITE_URL');?>
admin/userLog">用户日志</a></li>
					<li><a href="<?php echo @constant('WEBSITE_URL');?>
admin/imgcarousel">图片展示管理</a></li> 
				</ul> 
		 <a href="#sidebar_menu_1" class="nav-header collapsed" data-toggle="collapse"><i class="icon-th"></i>系统管理 <i class="icon-chevron-up"></i></a>
		 
				<ul id="sidebar_menu_1" class="nav nav-list collapse in">
					<li><a href="<?php echo @constant('WEBSITE_URL');?>
admin/user">系统参数管理</a></li> 
					<li><a href="<?php echo @constant('WEBSITE_URL');?>
admin/userLog">其他功能</a></li>
			 </ul> 
        <a target="_blank" href="#" class="nav-header" ><i class="icon-question-sign"></i>帮助</a>
</div> 
 
	<?php }} ?>