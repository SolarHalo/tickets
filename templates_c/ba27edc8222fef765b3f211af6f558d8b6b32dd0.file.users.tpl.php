<?php /* Smarty version Smarty-3.1.13, created on 2013-08-23 21:58:47
         compiled from "D:\PHPWeb\tickets\templates\admin\users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:390152162efdba6825-03012496%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba27edc8222fef765b3f211af6f558d8b6b32dd0' => 
    array (
      0 => 'D:\\PHPWeb\\tickets\\templates\\admin\\users.tpl',
      1 => 1377266322,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '390152162efdba6825-03012496',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52162efde272c2_59273086',
  'variables' => 
  array (
    'admin_action_alert' => 0,
    'admin_quick_note' => 0,
    '_GET' => 0,
    'group_options' => 0,
    'page_html' => 0,
    'osadmin_action_confirm' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52162efde272c2_59273086')) {function content_52162efde272c2_59273086($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'D:\\PHPWeb\\tickets/framework/lib/Smarty-3.1.13/libs/plugins\\function.html_options.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/navibar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
<div class="content">
        
        <div class="header">
            <div class="stats">
			<p class="stat"><!--span class="number"></span--></p>
			</div>

            <h1 class="page-title">后台管理员管理</h1>
        </div>
        
		<ul class="breadcrumb">
            <li><a href="<?php echo @constant('WEBSITE_URL');?>
admin/user">管理列表</a> <span class="divider">/</span></li>  
			 <a title= "移除快捷菜单" href="#"><li class="active"><i class="icon-minus" method="del" url="#"></i></li></a>
	         <a title= "加入快捷菜单" href="#"><li class="active"><i class="icon-plus" method="add" url="#"></i></li></a>
			 
			
        </ul>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="bb-alert alert alert-info" style="display: none;">
			<span>操作成功</span>
		</div>
<!--- START 以上内容不需更改，保证该TPL页内的标签匹配即可 --->

<?php echo $_smarty_tpl->tpl_vars['admin_action_alert']->value;?>

<?php echo $_smarty_tpl->tpl_vars['admin_quick_note']->value;?>


<div class="btn-toolbar" style="margin-bottom:2px;">
    <a href="<?php echo @constant('WEBSITE_URL');?>
admin/user/add" class="btn btn-primary"><i class="icon-plus"></i> 账号</a>
	<a data-toggle="collapse" data-target="#search"  href="#" title= "检索"><button class="btn btn-primary" style="margin-left:5px"><i class="icon-search"></i></button></a>
</div>
<?php if ($_smarty_tpl->tpl_vars['_GET']->value['search']){?>
<div id="search" class="collapse in">
<?php }else{ ?>
<div id="search" class="collapse out" >
<?php }?>
<form class="form_search"  action="" method="GET" style="margin-bottom:0px">
	<div style="float:left;margin-right:5px">
		<label>选择账号组</label>
		<?php echo smarty_function_html_options(array('name'=>'user_group','id'=>"DropDownTimezone",'class'=>"input-xlarge",'options'=>$_smarty_tpl->tpl_vars['group_options']->value,'selected'=>$_smarty_tpl->tpl_vars['_GET']->value['user_group']),$_smarty_tpl);?>

	</div>
	<div style="float:left;margin-right:5px">
		<label>查询所有用户请留空</label>
		<input type="text" name="user_name" value="<?php echo $_smarty_tpl->tpl_vars['_GET']->value['user_name'];?>
" placeholder="输入登录名" > 
		<input type="hidden" name="search" value="1" > 
	</div>
	<div class="btn-toolbar" style="padding-top:25px;padding-bottom:0px;margin-bottom:0px">
		<button type="submit" class="btn btn-primary">检索</button>
	</div>
	<div style="clear:both;"></div>
</form>
</div>
    <div class="block">
        <a href="#page-stats" class="block-heading" data-toggle="collapse">账号列表</a>
        <div id="page-stats" class="block-body collapse in">
               <table class="table table-striped">
              <thead>
                <tr>
					<th style="width:20px">#</th>
					<th style="width:80px">登录名</th>
					<th style="width:100px">姓名</th>
					<th style="width:100px">手机</th>
					<th style="width:80px">邮箱</th>
					<th style="width:80px">登录时间</th>
					<th style="width:80px">登录IP</th>
 					<th style="width:80px">描述</th>
					<th style="width:80px">操作</th>
                </tr>
              </thead>
              <tbody>							  
               
            
              </tbody>
            </table> 
				<!--- START 分页模板 --->
				
               <?php echo $_smarty_tpl->tpl_vars['page_html']->value;?>

					
			   <!--- END --->
        </div>
    </div>

<!---操作的确认层，相当于javascript:confirm函数--->
<?php echo $_smarty_tpl->tpl_vars['osadmin_action_confirm']->value;?>


<!--- END 以下内容不需更改，请保证该TPL页内的标签匹配即可 --->
<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>