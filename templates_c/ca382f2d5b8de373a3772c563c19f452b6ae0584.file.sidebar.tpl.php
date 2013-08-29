<?php /* Smarty version Smarty-3.1.13, created on 2013-08-27 14:52:27
         compiled from "D:\workspace\php\tickets\templates\admin\sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29107521cbd2b232c75-82920569%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca382f2d5b8de373a3772c563c19f452b6ae0584' => 
    array (
      0 => 'D:\\workspace\\php\\tickets\\templates\\admin\\sidebar.tpl',
      1 => 1377605471,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29107521cbd2b232c75-82920569',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_521cbd2b27f738_53819856',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_521cbd2b27f738_53819856')) {function content_521cbd2b27f738_53819856($_smarty_tpl) {?><div class="sidebar-nav"> 
		
	       <a href="#sidebar_menu_1" class="nav-header collapsed" data-toggle="collapse"><i class="icon-th"></i>票务信息管理<i class="icon-chevron-up"></i></a>
		 
				<ul id="sidebar_menu_1" class="nav nav-list collapse in">
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