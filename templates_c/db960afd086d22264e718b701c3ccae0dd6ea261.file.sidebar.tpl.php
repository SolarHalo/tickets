<?php /* Smarty version Smarty-3.1.13, created on 2013-08-27 06:40:12
         compiled from "G:\phpserver\tickets\templates\admin\sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14437521c49ccc9aea1-86912931%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db960afd086d22264e718b701c3ccae0dd6ea261' => 
    array (
      0 => 'G:\\phpserver\\tickets\\templates\\admin\\sidebar.tpl',
      1 => 1377182238,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14437521c49ccc9aea1-86912931',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_521c49ccd13a30_34093055',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_521c49ccd13a30_34093055')) {function content_521c49ccd13a30_34093055($_smarty_tpl) {?><div class="sidebar-nav"> 
		
	       <a href="#sidebar_menu_1" class="nav-header collapsed" data-toggle="collapse"><i class="icon-th"></i>系统展示管理<i class="icon-chevron-up"></i></a>
		 
				<ul id="sidebar_menu_1" class="nav nav-list collapse in">
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