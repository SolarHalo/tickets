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
		colNames:['票务id','票务名称','票务类型','票务地址',"联盟提供大图","联盟提供小图","描述信息","票价","产品是否有货","是否热门","是否开售","语言","对应的事件","场地"],
		colModel:[
			{name:'product_id',index:'product_id', width:100,hidden:true,search:true,searchoptions:{sopt: ['cn','eq', 'ne']}},
			{name:'product_name',index:'product_name', width:80,search:true,searchoptions:{sopt: ['cn','eq', 'ne']}},
			{name:'product_type',index:'product_type', width:80 ,search:true,searchoptions:{sopt: ['cn','eq', 'ne']}} ,
			{name:'aw_deep_link',index:'aw_deep_link', width:80,search:true,searchoptions:{sopt: ['cn','eq', 'ne' ]} } ,
			{name:'aw_image_url',index:'aw_image_url', width:80 ,search:true,searchoptions:{sopt: ['cn','eq', 'ne' ]}} ,
			{name:'aw_thumb_url',index:'aw_thumb_url', width:80 ,search:true,searchoptions:{sopt: ['cn','eq', 'ne' ]}} ,
			{name:'description',index:'description', width:80 ,search:true,searchoptions:{sopt: ['cn','eq', 'ne' ]}} ,
			{name:'display_price',index:'display_price', width:80 ,search:true,searchoptions:{sopt: ['cn','eq', 'ne' ]}} ,
			{name:'in_stock',index:'in_stock', width:80 ,search:true,searchoptions:{sopt: ['cn','eq', 'ne' ]}} ,
			{name:'is_hot_pick',index:'is_hot_pick', width:80 ,stype:'select',search:true,searchoptions:{dataUrl:"{{$web_root}}admin/ticket/getDict",buildSelect:buildSelect,sopt: ['eq', 'ne']}} ,
			{name:'is_for_sale',index:'is_for_sale', width:80 ,stype:'select',search:true,searchoptions:{dataUrl:"{{$web_root}}admin/ticket/getDict",buildSelect:buildSelect,sopt: ['eq', 'ne']}} ,
			{name:'language',index:'language', width:80 ,search:true,searchoptions:{sopt: ['cn','eq', 'ne' ]}} ,
			{name:'parent_product_id',index:'parent_product_id', width:80 ,search:true,searchoptions:{sopt: ['cn','eq', 'ne' ]}} ,
			{name:'promotional_text',index:'promotional_text', width:80 ,search:true,searchoptions:{sopt: ['cn','eq', 'ne']}} 
			
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