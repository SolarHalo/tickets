<?php /* Smarty version Smarty-3.1.13, created on 2013-09-23 16:28:39
         compiled from "E:\phpweb\tickets\templates\admin\sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2457652198277be31c6-13960448%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9069b6a6a8d871d876ce56bc9d6db63963ad4138' => 
    array (
      0 => 'E:\\phpweb\\tickets\\templates\\admin\\sidebar.tpl',
      1 => 1378995457,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2457652198277be31c6-13960448',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52198277bf9e07_50118957',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52198277bf9e07_50118957')) {function content_52198277bf9e07_50118957($_smarty_tpl) {?><div class="sidebar-nav"> 
		
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