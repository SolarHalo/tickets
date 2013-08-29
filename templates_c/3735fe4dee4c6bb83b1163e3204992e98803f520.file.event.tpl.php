<?php /* Smarty version Smarty-3.1.13, created on 2013-08-29 14:47:24
         compiled from "G:\phpserver\tickets\templates\admin\event\event.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6564521e1cd4e2dbc7-70336536%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3735fe4dee4c6bb83b1163e3204992e98803f520' => 
    array (
      0 => 'G:\\phpserver\\tickets\\templates\\admin\\event\\event.tpl',
      1 => 1377787642,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6564521e1cd4e2dbc7-70336536',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_521e1cd50379f9_46425080',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_521e1cd50379f9_46425080')) {function content_521e1cd50379f9_46425080($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 <?php echo $_smarty_tpl->getSubTemplate ("admin/navibar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 <?php echo $_smarty_tpl->getSubTemplate ("admin/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="content">
	<div class="header">
		<div class="stats">
			<p class="stat">
				<!--span class="number"></span-->
			</p>
		</div>

		<h1 class="page-title">活动信息查看</h1>
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
			<hr>
	<table id="grid"></table>
	<div clsss='a' id="gridPager"></div>
	
	<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header">
    		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    		<h3 id="myModalLabel">修改活动描述</h3>
 		</div>
  		<div class="modal-body">
    		<textarea name=""></textarea>
  		</div>
  		<div class="modal-footer">
    		<button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
    		<button class="btn btn-primary">Save changes</button>
  		</div>
	</div>
	
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
		url:'<?php echo @constant('WEBSITE_URL');?>
admin/event/queryEvent',
		datatype: "json",
		mtype: "POST",	
		height: '100%',
		width:1000,
		rowNum: 20,
		rowList: [10,20,30],
		colNames:['活动id','活动名称','活动类型',"描述","操作"],
		colModel:[
			{name:'event_id',index:'events.event_id', width:100,hidden:true,search:false,searchoptions:{sopt: ['cn','eq', 'ne']}},
			{name:'event_name',index:'events.event_name', width:80,search:true,searchoptions:{sopt: ['cn','eq', 'ne']}},
			{name:'category_name',index:'event_category.category_id', width:80 ,search:true,stype:'select',
				searchoptions:{
					sopt: [ 'eq', 'ne'],
					dataUrl:'<?php echo @constant('WEBSITE_URL');?>
admin/event/queryCategory',
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
			},
			{name:'description',index:'events.description', width:80,search:true,searchoptions:{sopt: ['cn','eq', 'ne']}},
			{name:'op',index:'op', width:80,search:false,sortable:false,
				formatter:function(cellvalue, options, rowObject){
					var res =  "<a href=\"<?php echo @constant('WEBSITE_URL');?>
admin/ticket/index/?event="+cellvalue+"\">查看票务</a> | ";
					
					res += "<a href=\"#\"   onclick=\"mdfdesc('"+cellvalue+"');\">修改活动描述</a>";
					return res ;
				}
			}
		],
		//sortname:"products.specifications",
		//sortorder:'desc',
		pager: "#gridPager",
		viewrecords: true,
		caption: "活动信息展示" 
	});
	
	
	//jQuery("#grid").jqGrid('navGrid','#gridPager',{del:false,add:false,edit:false},{},{},{},{multipleSearch:false});
		
	jQuery("#grid").jqGrid('filterToolbar',{searchOperators :true,stringResult: true,searchOnEnter : true
	});
	function mdfdesc(id){
		 console.log(id);
		$('#myModal').modal('show');
	 };
	</script>
 </div> 
 </div>
 </div>
	<!--- END 以下内容不需更改，请保证该TPL页内的标签匹配即可 --->
			<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>