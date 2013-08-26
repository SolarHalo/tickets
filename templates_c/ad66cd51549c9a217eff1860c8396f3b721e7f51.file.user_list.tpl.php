<?php /* Smarty version Smarty-3.1.13, created on 2013-08-23 23:26:38
         compiled from "D:\PHPWeb\tickets\templates\admin\user_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3070352176cf2eeb804-99943905%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad66cd51549c9a217eff1860c8396f3b721e7f51' => 
    array (
      0 => 'D:\\PHPWeb\\tickets\\templates\\admin\\user_list.tpl',
      1 => 1377271596,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3070352176cf2eeb804-99943905',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52176cf3055237_44282217',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52176cf3055237_44282217')) {function content_52176cf3055237_44282217($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/navibar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 


<link rel="stylesheet" type="text/css" href="<?php echo @constant('WEBSITE_URL');?>
/public/assets/lib/jquery-easyui-1.3.4/themes/bootstrap/easyui.css">
<link rel="stylesheet" type="text/css" href="<?php echo @constant('WEBSITE_URL');?>
/public/assets/lib/jquery-easyui-1.3.4/themes/icon.css">
<script type="text/javascript" src="<?php echo @constant('WEBSITE_URL');?>
/public/assets/lib/jquery-easyui-1.3.4/jquery.easyui.min.js"></script>


<div class="content">
        
        <div class="header">
            <div class="stats">
			<p class="stat"><!--span class="number"></span--></p>
			</div>

            <h1 class="page-title">后台管理员管理</h1>
        </div>
        
		<!-- <ul class="breadcrumb">
            <li><a href="<?php echo @constant('WEBSITE_URL');?>
admin/user">管理列表</a> <span class="divider">/</span></li>  
			 <a title= "移除快捷菜单" href="#"><li class="active"><i class="icon-minus" method="del" url="#"></i></li></a>
	         <a title= "加入快捷菜单" href="#"><li class="active"><i class="icon-plus" method="add" url="#"></i></li></a>
        </ul> -->
<div class="container-fluid">
	<div class="row-fluid">
		<div class="bb-alert alert alert-info" style="display: none;">
			<span>操作成功</span>
		</div>
<!--- START 以上内容不需更改，保证该TPL页内的标签匹配即可 --->

<form id="ff" method="post"  >
    <div　style="white-space:nowrap;　width=100%">
        <label for="name">Name:</label>　 <input class="easyui-validatebox" type="text" name="name"  />
  
        <label for="email">Email:</label>
        <input class="easyui-validatebox" type="text" name="email"   />
    </div>
</form>
<table    data-options="url:'user/getpage',fitColumns:true,singleSelect:true"
        class="easyui-datagrid" style="width:700px;height:350px" 
 toolbar="#toolbar" 
  iconCls="icon-save" pagination="true" 
toolbar="#toolbar" rownumbers="true"  >
    <thead>
        <tr>
            <th data-options="field:'user_name',width:100">Code</th>
            <th data-options="field:'real_name',width:100">Name</th>
            <th data-options="field:'price',width:100,align:'right'">Price</th>
        </tr>
    </thead>
</table>

<div id="toolbar"> 
<a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="newUser()">New User</a> 
<a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editUser()">Edit User</a> 
<a href="#" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="removeUser()">Remove User</a> 
</div> 
<!--- END 以下内容不需更改，请保证该TPL页内的标签匹配即可 --->
<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>