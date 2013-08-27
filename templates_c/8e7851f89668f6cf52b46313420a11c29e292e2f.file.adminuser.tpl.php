<?php /* Smarty version Smarty-3.1.13, created on 2013-08-27 15:50:32
         compiled from "G:\phpserver\tickets\templates\admin\users\adminuser.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11354521ccac84d0b95-32552162%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e7851f89668f6cf52b46313420a11c29e292e2f' => 
    array (
      0 => 'G:\\phpserver\\tickets\\templates\\admin\\users\\adminuser.tpl',
      1 => 1377618268,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11354521ccac84d0b95-32552162',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_root' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_521ccac86213c0_71858638',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_521ccac86213c0_71858638')) {function content_521ccac86213c0_71858638($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 <?php echo $_smarty_tpl->getSubTemplate ("admin/navibar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 <?php echo $_smarty_tpl->getSubTemplate ("admin/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<link rel="stylesheet" type="text/css"
	href="<?php echo @constant('WEBSITE_URL');?>
/public/assets/lib/jquery-easyui-1.3.4/themes/bootstrap/easyui.css">
<link rel="stylesheet" type="text/css"
	href="<?php echo @constant('WEBSITE_URL');?>
/public/assets/lib/jquery-easyui-1.3.4/themes/icon.css">
<script type="text/javascript"
	src="<?php echo @constant('WEBSITE_URL');?>
/public/assets/lib/jquery-easyui-1.3.4/jquery.easyui.min.js"></script>

<script type="text/javascript">

	$(document).ready(function(){
		$('#win_add').window('close'); 
	});
	 
	function newUser(){
		$('#win_add').window('open'); 
		$("#div_add").show();
		$("#div_edit").hide();
		$("#form").form('clear');
		$("#user_name").attr("readonly",false);
		
	}
	function editUser(){
		var select = getSelectUser();
		if(select == null || select.length == 0 ){
			$.messager.alert('错误','请选择要修改的记录!');
			return;
		}

		$('#win_add').window('open'); 
		$("#div_edit").show();
		$("#div_add").hide();
		$("#form").form('clear');
		$("#form").form('load',select[0]);
	
		$("#user_name").attr("readonly",true);
			
	}
	function removeUser(){

		$.messager.confirm('删除确定','确定要删除当前选择的记录!',function(r){
		    if (r){
		    	var select = getSelectUser();
				if(select == null || select.length == 0 ){
					$.messager.alert('错误','请选择要删除的记录!');
					return;
				}
				$.ajax({  
		            type: "POST",  
		            dataType: "json",  
		            url: '<?php echo $_smarty_tpl->tpl_vars['web_root']->value;?>
user/delete',
		            data: { id: select[0].id },  
		            success: function (data) {  
		                $.messager.alert("消息", "删除成功!", "info");  
		             	$('#grid').datagrid('reload'); 
		            },  
		            error: function () {  
		            }  
		        });  
		    }
		});
		
	}
	function addNewUser(){

		  if(!$('#form').form('validate')){
		        return;
		     }
		$('#form').form({
		    url:'<?php echo $_smarty_tpl->tpl_vars['web_root']->value;?>
user/add',
		    type: "POST",  
            dataType: "json", 
		    onSubmit: function(){
		        //进行表单验证
		        //如果返回false阻止提交
		    },
		    success:function(data){
			    if(data <0){
			    	$.messager.alert('错误','存在相同的用户!');
			    	return;
				 }
		    	win_close();
		    	$.messager.alert('成功','添加成功!');
		    	$('#grid').datagrid('reload'); 
		    	
		    }
		});
		//提交表单
		$('#form').submit();
	}
	function editCurUser(){
		  if(!$('#form').form('validate')){
		        return;
		     }
		  win_close();
		$.ajax({  
            type: "POST",  
            dataType: "json",  
            url: '<?php echo $_smarty_tpl->tpl_vars['web_root']->value;?>
user/editData',
           	data: $("#form").serialize(),
            success: function (data) {  
            	
		    	$.messager.alert('成功','修改成功!'); 
             	$('#grid').datagrid('reload'); 
            },  
            error: function () {  
            }  
        });  
	}
	function win_close(){
		$('#win_add').window('close'); 
	}


	function getSelectUser(){
		var select  = $("#grid").datagrid('getSelections');
		if(select == null || select.length == 0 ){
			return null;
		}
		return select;
	}
</script>

<div class="content">
	<div class="header">
		<div class="stats">
			<p class="stat">
				<!--span class="number"></span-->
			</p>
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

		 
			<table id="grid"
				data-options="url:'user/getpage',fitColumns:true,singleSelect:true"
				class="easyui-datagrid" style="width: 700px; height: 350px"
				toolbar="#toolbar" iconCls="icon-save" pagination="true"
				  rownumbers="true">
				<thead>
					<tr>
					<th data-options="field:'passwd',hidden:true"></th>
						<th data-options="field:'id',width:100,checkbox:true"></th>
						<th data-options="field:'user_name',width:100">登陆名</th>
						<th data-options="field:'real_name',width:100">姓名</th>
						<th data-options="field:'mobile',width:100">手机</th>
						<th data-options="field:'email',width:100">邮箱</th>
						<th data-options="field:'login_time',width:100">登陆时间</th>
						<th data-options="field:'login_ip',width:100">登陆IP</th>
						<th data-options="field:'user_desc',width:100">描述</th>


					</tr>
				</thead>
			</table>

			<div id="toolbar">
				<a href="#" class="easyui-linkbutton" iconCls="icon-add"
					plain="true" onclick="newUser()">添加新用户</a> <a href="#"
					class="easyui-linkbutton" iconCls="icon-edit" plain="true"
					onclick="editUser()">修改用户信息</a> <a href="#"
					class="easyui-linkbutton" iconCls="icon-remove" plain="true"
					onclick="removeUser()">删除用户</a>
			</div>

			<div id="win_add" class="easyui-window" title="添加新用户"
				style="width: 600px; height: 425px"
				data-options="iconCls:'icon-save',collapsible:false,minimizable:false,maximizable:false,modal:true">
				<div class="easyui-layout" data-options="fit:true">
					<form id="form"  method="post" class="form-horizontal">
						<div class="control-group" hidden="true">
							<input type="text" name="id" hidden="true">
						</div>
						<div class="control-group">
							<label class="control-label" for="Text input">登陆名:</label>
							<div class="controls">
								<input type="text" class="easyui-validatebox"
									data-options="required:true" id="user_name" name="user_name"
									placeholder="请输入名称">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="inputPassword">密码:</label>
							<div class="controls">
								<input type="password" class="easyui-validatebox"
									data-options="required:true" id="passwd" name="passwd"
									placeholder="请输入密码">
							</div>
						</div>

						<div class="control-group">
							<label class="control-label" for="Text input">姓名:</label>
							<div class="controls">
								<input type="text" id="real_name" name="real_name"
									placeholder="姓名">
							</div>
						</div>

						<div class="control-group">
							<label class="control-label" for="Text input">手机:</label>
							<div class="controls">
								<input type="text" id="mobile" name="mobile"
									placeholder="手机">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="inputEmail">邮件:</label>
							<div class="controls">
								<input type="text" id="email" name="email"
									placeholder="Email">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="Text input">描述:</label>
							<div class="controls">
								<textarea rows="2" name="user_desc"></textarea>
							</div>
						</div>
						<div class="form-actions" id="div_add">
							<button type="button" style="width: 100px;"
								class="btn btn-primary" onclick="addNewUser()">添加</button>
							<button type="button" onclick="win_close()" style="width: 100px;"
								class="btn">取消</button>
						</div>
						<div class="form-actions" id="div_edit">
							<button type="button" style="width: 100px;"
								class="btn btn-primary" onclick="editCurUser()">修改</button>
							<button type="button" onclick="win_close()" style="width: 100px;"
								class="btn">取消</button>
						</div>
					</form>
				</div>
			</div>
			<!--- END 以下内容不需更改，请保证该TPL页内的标签匹配即可 --->
			<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>