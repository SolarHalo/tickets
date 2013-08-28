{{include file ="admin/header.tpl"}} {{include file
="admin/navibar.tpl"}} {{include file ="admin/sidebar.tpl"}}

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
            <li><a href="{{$smarty.const.WEBSITE_URL}}admin/user">管理列表</a> <span class="divider">/</span></li>  
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
		url:'{{$web_root}}admin/event/queryEvent',
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
					dataUrl:'{{$web_root}}admin/event/queryCategory',
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
					return "<a href=\"{{$web_root}}admin/ticket/index/?event="+cellvalue+"\">查看票务</a>";
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
	
	</script>
 </div> 
 </div>
 </div>
	<!--- END 以下内容不需更改，请保证该TPL页内的标签匹配即可 --->
			{{include file="admin/footer.tpl" }}