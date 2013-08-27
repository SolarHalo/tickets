<?php /* Smarty version Smarty-3.1.13, created on 2013-08-27 06:40:55
         compiled from "G:\phpserver\tickets\templates\admin\ticket.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31211521c49f7e95489-10311608%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4346b938eac02b4f9b581cc0a2502f8980a934c' => 
    array (
      0 => 'G:\\phpserver\\tickets\\templates\\admin\\ticket.tpl',
      1 => 1377569144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31211521c49f7e95489-10311608',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_root' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_521c49f8021064_14623798',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_521c49f8021064_14623798')) {function content_521c49f8021064_14623798($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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
		width:1000,
		rowNum: 10,
		rowList: [10,20,30],
		colNames:['票务id','票务名称','票务类型',"联盟提供小图","票价","场地","时间"],
		colModel:[
			{name:'aw_product_id',index:'aw_product_id', width:100,hidden:true,search:false,searchoptions:{sopt: ['cn','eq', 'ne']}},
			{name:'product_name',index:'products.product_name', width:80,search:true,searchoptions:{sopt: ['cn','eq', 'ne']}},
			{name:'category_name',index:'event_category.category_id', width:80 ,search:true,stype:'select',
				searchoptions:{
					sopt: [ 'eq', 'ne'],
					dataUrl:'<?php echo $_smarty_tpl->tpl_vars['web_root']->value;?>
admin/ticket/queryCategory',
					buildSelect:function(str){
						eval(" var obj = " + str);
						var result = "<select><option value=''>请选择... ...</option>";
						for(var i = 0 ; i < obj.length; i++){
							result += "<option value='" + obj[i][0] + "'>" + obj[i][1] + "</option>";		
						}		
						result += "</select>";
						return result;
					}
				}
			} ,
			{name:'aw_thumb_url',index:'aw_thumb_url', width:30 ,search:false,searchoptions:{sopt: ['cn','eq', 'ne' ]}} ,
			{name:'display_price',index:'products.display_price', align:"right",sorttype:"float",width:40 ,search:true,searchoptions:{sopt: ['lt','le', 'eq','gt','ge' ]}} ,
			{name:'promotional_text',index:'products.promotional_text', width:80 ,search:true,searchoptions:{sopt: ['cn','eq', 'ne']}} , 
			{name:'specifications',index:'products.specifications', sorttype:"date", formatter:"date", width:50 ,search:true,searchoptions:{sopt: ['eq', 'ne'],dataInit:function(elem){  
				jQuery(elem).datepicker();
			}},formatoptions: {srcformat:'Y-m-d H:i:s',newformat:'Y-m-d H:i:s'}} 
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