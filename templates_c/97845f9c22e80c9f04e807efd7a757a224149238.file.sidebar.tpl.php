<?php /* Smarty version Smarty-3.1.13, created on 2013-08-23 23:41:19
         compiled from "D:\PHPWeb\tickets\templates\admin\sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1484852162efded6f68-11202010%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97845f9c22e80c9f04e807efd7a757a224149238' => 
    array (
      0 => 'D:\\PHPWeb\\tickets\\templates\\admin\\sidebar.tpl',
      1 => 1377272474,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1484852162efded6f68-11202010',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52162efdefa1f7_76868189',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52162efdefa1f7_76868189')) {function content_52162efdefa1f7_76868189($_smarty_tpl) {?><div class="sidebar-nav"> 
		
	       <a href="#sidebar_menu_1" class="nav-header collapsed" data-toggle="collapse"><i class="icon-th"></i>系统展示管理<i class="icon-chevron-up"></i></a>
		 
				<ul id="sidebar_menu_1" class="nav nav-list ">
					<li><a href="<?php echo @constant('WEBSITE_URL');?>
admin/param/load/paramtype=rights">会员权益更新</a></li>
					<li><a href="<?php echo @constant('WEBSITE_URL');?>
admin/param/load/paramtype=faq">常见问题更新</a></li>
					<li><a href="<?php echo @constant('WEBSITE_URL');?>
admin/param/load/paramtype=google">GOOGLE统计更新</a></li>
					<li><a href="<?php echo @constant('WEBSITE_URL');?>
admin/activities">会员专享活动管理</a></li>
					<li><a href="<?php echo @constant('WEBSITE_URL');?>
admin/userLog">用户日志</a></li>
				</ul> 
		 <a href="#sidebar_menu_1" class="nav-header collapsed" data-toggle="collapse"><i class="icon-th"></i>系统管理 <i class="icon-chevron-up"></i></a>
		 
				<ul id="sidebar_menu_1" class="nav nav-list collapse in">
					<li><a href="<?php echo @constant('WEBSITE_URL');?>
admin/user">管理员管理</a></li> 
					<li><a href="<?php echo @constant('WEBSITE_URL');?>
admin/userLog">用户日志</a></li>
			 </ul> 
        <a target="_blank" href="#" class="nav-header" ><i class="icon-question-sign"></i>帮助</a>
</div> 
 
	<?php }} ?>