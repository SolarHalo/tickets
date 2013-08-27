<?php /* Smarty version Smarty-3.1.13, created on 2013-08-26 17:57:03
         compiled from "E:\phpweb\tickets\templates\admin\user_jqgrid_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31049521b743c0f6e98-84192529%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f5ed603f5c315a4e5d129e38da197d974306550' => 
    array (
      0 => 'E:\\phpweb\\tickets\\templates\\admin\\user_jqgrid_list.tpl',
      1 => 1377532621,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31049521b743c0f6e98-84192529',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_521b743c12ea52_56396191',
  'variables' => 
  array (
    'web_root' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_521b743c12ea52_56396191')) {function content_521b743c12ea52_56396191($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 <?php echo $_smarty_tpl->getSubTemplate ("admin/navibar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 <?php echo $_smarty_tpl->getSubTemplate ("admin/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="content">
	<div class="header">
		<div class="stats">
			<p class="stat">
				<!--span class="number"></span-->
			</p>
		</div>

		<h1 class="page-title">后台管理员管理</h1>
	</div>

	<div class="container-fluid">
		<div class="row-fluid">
			<div class="bb-alert alert alert-info" style="display: none;">
				<span>操作成功</span>
			</div>
			<table id="grid"  ></table>
			<div   id="gridPager"  ></div>

			<script type="text/javascript">
	
	function buildSelect(str){
		eval("var obj = "+str);
		var result = "<select>";
		
		result +="<option value=''>选择...</option>";
		
		for(var key = 0;key < obj.length;key++){
			result +="<option value='"+obj[key].id+"'>"+obj[key].value+"</option>";
		}
		result += "</select>";
		return result;
	}
	
	jQuery("#grid").jqGrid({
		url:'<?php echo $_smarty_tpl->tpl_vars['web_root']->value;?>
user/getgridpage',
		datatype: "json",
		mtype: "POST",	
		height: '100%',
		width:700,
		rowNum: 10,
		rowList: [10,20,30],
		colNames:['id','登陆名','姓名',"手机","邮箱","登陆时间","登陆IP","描述"],
		colModel:[
			{name:'id',index:'id', width:100,hidden:true,search:false,searchoptions:{sopt: ['cn','eq', 'ne']}},
			{name:'user_name',index:'user_name', editable:true, width:80,search:true,searchoptions:{sopt: ['cn','eq', 'ne']}},
			{name:'real_name',index:'real_name',  editable:true,width:80 ,search:true,searchoptions:{sopt: ['cn','eq', 'ne']}} ,
			{name:'mobile',index:'mobile', editable:true, width:80 ,search:false,searchoptions:{sopt: ['cn','eq', 'ne' ]}} ,
			{name:'email',index:'email', editable:true, sorttype:"float",width:80 ,search:true,searchoptions:{sopt: ['cn','eq', 'ne' ]}} ,
			{name:'login_time',index:'login_time', editable:true, width:80 ,search:true,searchoptions:{sopt: ['cn','eq', 'ne']}} , 
			{name:'login_ip',index:'login_ip',  editable:true, width:80 ,search:true,searchoptions:{sopt: ['cn','eq', 'ne' ]}},
			{name:'user_desc',index:'user_desc',  editable:true,width:80 ,search:true,searchoptions:{sopt: ['cn','eq', 'ne']}}  
		],
		pager: "#gridPager",
		viewrecords: true,
		 editurl: '<?php echo $_smarty_tpl->tpl_vars['web_root']->value;?>
user/editData',
		caption: "用户信息管理" 
	});
	//jQuery("#grid").jqGrid('navGrid','#pcrud',{});
	
	// jQuery("#grid").jqGrid('navGrid','#gridPager',{del:false,add:true,edit:true},{},{},{},{multipleSearch:false});
		
	jQuery("#grid").jqGrid('filterToolbar',{searchOperators :true,stringResult: true,searchOnEnter : true});

	 jQuery("#grid")
	 .navGrid('#gridPager',{edit:false,add:false,del:false,search:false})
	 .navButtonAdd('#gridPager',{
	    caption:"Add", 
	    buttonicon:"ui-icon-add", 
	    onClickButton: function(){ 
	      alert("Adding Row");
	    }, 
	    position:"last"
	 })
	 .navButtonAdd('#gridPager',{
	    caption:"Del", 
	    buttonicon:"ui-icon-del", 
	    onClickButton: function(){ 
	       alert("Deleting Row");
	    }, 
	    position:"last"
	 });
	</script>

			<!--- END 以下内容不需更改，请保证该TPL页内的标签匹配即可 --->
		</div>
		<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		</body><?php }} ?>