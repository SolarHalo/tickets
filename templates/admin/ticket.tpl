{{include file ="admin/header.tpl"}}

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
		url:'{{$web_root}}admin/ticket/queryTicket',
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

</html>