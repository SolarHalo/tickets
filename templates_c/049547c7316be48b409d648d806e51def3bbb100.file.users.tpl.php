<?php /* Smarty version Smarty-3.1.13, created on 2013-09-24 15:31:08
         compiled from "G:\phpserver\tickets\templates\admin\users\users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17398521ccac4da52e1-53793154%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '049547c7316be48b409d648d806e51def3bbb100' => 
    array (
      0 => 'G:\\phpserver\\tickets\\templates\\admin\\users\\users.tpl',
      1 => 1380036631,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17398521ccac4da52e1-53793154',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_521ccac4ea9ad2_77405534',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_521ccac4ea9ad2_77405534')) {function content_521ccac4ea9ad2_77405534($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/navibar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 

<div class="content">
        
        <div class="header">
            <div class="stats">
			<p class="stat"><!--span class="number"></span--></p>
			</div>

            <h1 class="page-title">注册用户管理</h1>
        </div>
        
	
<div class="container-fluid">
	<div class="row-fluid">
		<div class="bb-alert alert alert-info" style="display: none;">
			<span>操作成功</span>
		</div>
<!--- START 以上内容不需更改，保证该TPL页内的标签匹配即可 --->
 
</div>
    <div class="block">
        
          <table id="grid"
				data-options="url:'users/getpage',fitColumns:true,singleSelect:true"
				class="easyui-datagrid" style="width: 700px; height: 350px"
				  iconCls="icon-save" pagination="true"
				  　>
				<thead>
					<tr>
						<th data-options="field:'userid',hidden:true,width:100"></th>
						<th data-options="field:'username',width:100">登陆名</th>
						<th data-options="field:'email',width:100">邮箱</th>
						<th data-options="field:'firstname',width:100">名字</th>
						<th data-options="field:'lastname',width:100">姓氏</th>
						<th data-options="field:'birthdate',width:120" ,formatter="dateTimeFormat">生日</th>
						<th data-options="field:'desc',width:100">描述</th>


					</tr>
				</thead>
			</table>
				<!--- START 分页模板 --->
			 
					
			   <!--- END --->
        </div>
        
 
    </div>

 
<!--- END 以下内容不需更改，请保证该TPL页内的标签匹配即可 --->
<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript">
  function  dateTimeFormat(value, rec, index) {
    if (value == undefined) {
        return "";
    }
    return value.format("yyyy-mm-dd");
}
var Common = {

	    //EasyUI用DataGrid用日期格式化
	    TimeFormatter: function (value, rec, index) {
	        if (value == undefined) {
	            return "";
	        }
	        /*json格式时间转js时间格式*/
	        value = value.substr(1, value.length - 2);
	        var obj = eval('(' + "{Date: new " + value + "}" + ')');
	        var dateValue = obj["Date"];
	        if (dateValue.getFullYear() < 1900) {
	            return "";
	        }
	        var val = dateValue.format("yyyy-mm-dd HH:MM");
	        return val.substr(11, 5);
	    },
	    DateTimeFormatter: function (value, rec, index) {
	        if (value == undefined) {
	            return "";
	        }
	        /*json格式时间转js时间格式*/
	        value = value.substr(1, value.length - 2);
	        var obj = eval('(' + "{Date: new " + value + "}" + ')');
	        var dateValue = obj["Date"];
	        if (dateValue.getFullYear() < 1900) {
	            return "";
	        }

	        return dateValue.format("yyyy-mm-dd HH:MM");
	    },

	    //EasyUI用DataGrid用日期格式化
	    DateFormatter: function (value, rec, index) {
	        if (value == undefined) {
	            return "";
	        }
	        /*json格式时间转js时间格式*/
	        value = value.substr(1, value.length - 2);
	        var obj = eval('(' + "{Date: new " + value + "}" + ')');
	        var dateValue = obj["Date"];
	        if (dateValue.getFullYear() < 1900) {
	            return "";
	        }

	        return dateValue.format("yyyy-mm-dd");
	    }
	};
</script>
<?php }} ?>