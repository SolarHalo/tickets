<?php /* Smarty version Smarty-3.1.13, created on 2013-08-25 06:01:17
         compiled from "E:\phpweb\tickets\templates\admin\ticket.tpl" */ ?>
<?php /*%%SmartyHeaderCode:173415219818dd8d4f3-55643256%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be0b773d03a94a0968022e4061c512038c77ebc6' => 
    array (
      0 => 'E:\\phpweb\\tickets\\templates\\admin\\ticket.tpl',
      1 => 1377403267,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173415219818dd8d4f3-55643256',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_root' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5219818ddcb042_23979876',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5219818ddcb042_23979876')) {function content_5219818ddcb042_23979876($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<body>	
	<table id="grid"></table>
	<div clsss='a' id="gridPager"></div>
	
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
admin/ticket/queryTicket',
		datatype: "json",
		mtype: "POST",	
		height: '100%',
		width:1500,
		rowNum: 10,
		rowList: [10,20,30],
		colNames:['票务id','票务名称','票务类型',"联盟提供小图","票价","场地","时间"],
		colModel:[
			{name:'aw_product_id',index:'aw_product_id', width:100,hidden:true,search:false,searchoptions:{sopt: ['cn','eq', 'ne']}},
			{name:'product_name',index:'product_name', width:80,search:true,searchoptions:{sopt: ['cn','eq', 'ne']}},
			{name:'product_type',index:'product_type', width:80 ,search:true,searchoptions:{sopt: ['cn','eq', 'ne']}} ,
			{name:'aw_thumb_url',index:'aw_thumb_url', width:80 ,search:false,searchoptions:{sopt: ['cn','eq', 'ne' ]}} ,
			{name:'display_price',index:'display_price', sorttype:"float",width:80 ,search:true,searchoptions:{sopt: ['cn','eq', 'ne' ]}} ,
			{name:'promotional_text',index:'promotional_text', width:80 ,search:true,searchoptions:{sopt: ['cn','eq', 'ne']}} , 
			{name:'specifications',index:'specifications', sorttype:"date", formatter:"date", width:80 ,search:true,searchoptions:{sopt: ['cn','eq', 'ne' ]}} 
		],
		pager: "#gridPager",
		viewrecords: true,
		caption: "票务信息展示" 
	});
	
	
	//jQuery("#grid").jqGrid('navGrid','#gridPager',{del:false,add:false,edit:false},{},{},{},{multipleSearch:false});
		
	jQuery("#grid").jqGrid('filterToolbar',{searchOperators :true,stringResult: true,searchOnEnter : true});
	
	</script>

</body>

</html><?php }} ?>