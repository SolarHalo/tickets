<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>{{$category_name}} , {{$product_name}} , {{$time}}</title>
	<link href="{{$smarty.const.WEBSITE_URL}}public/style/reset.css" type="text/css" rel="stylesheet" />
	<link href="{{$smarty.const.WEBSITE_URL}}public/style/style.css" type="text/css" rel="stylesheet" /> 
	<link rel="stylesheet" href="{{$smarty.const.WEBSITE_URL}}/public/assets/css/jquery-ui.css" />
	<link rel="stylesheet" href="{{$smarty.const.WEBSITE_URL}}/public/assets/css/jquery.ui.datepicker.css" /> 
	<script src="{{$smarty.const.WEBSITE_URL}}/public/assets/lib/jquery-1.8.1.min.js" ></script>
	<script src="{{$smarty.const.WEBSITE_URL}}/public/assets/js/jquery-ui.js"></script>
	<script src="{{$smarty.const.WEBSITE_URL}}/public/assets/js/jquery.ui.datepicker.js"></script>
	<script src="{{$smarty.const.WEBSITE_URL}}/public/js/searchform.js"></script>
 <script  type="text/javascript">  
	function addCalendat(pid){
		console.log("add calendar");
		$.post(
			'{{$smarty.const.WEBSITE_URL}}ticket/addCalendat',
			{'pid':pid},
			function(obj){
				if(obj.res){
					alert("success");
				}else{
					window.location.href="{{$smarty.const.WEBSITE_URL}}login";
				}
				
			},
			"json"
		);
	} 
 </script>
</head>

<body>


﻿{{include file='layouts/headerandsearch.tpl'}} 

<script  type="text/javascript">

	$(function($) {
		var source = new Array();
		var obj = new Array();
		obj['promotional_text'] = '{{$promotional_text}}';
		source.push(obj);
		loadDatas(source,"promotional_text");
		setRoom(16);
	});
	
</script>
<div class="mian">
    <div class="content">
    	<div class="events">
        	<div class="sub-nav">
            	<span><a href="{{$smarty.const.WEBSITE_URL}}">Home</a>  /  <a href="{{$smarty.const.WEBSITE_URL}}ticket/index/?cat={{$category_id}}">{{$category_name}}</a>  /  {{$product_name}}</a></span>
                <a href="#" class="back btn btn-black">&lt;&lt;Search Results</a>
            </div>
        	<div class="events-l mt15" id='img-list'>
        		<img src="{{$aw_image_url}}" width="160" height="265" class="img-sidebar" />
				<!-- AddThis Button BEGIN -->
				<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
				<a class="addthis_button_preferred_1"></a>
				<a class="addthis_button_preferred_2"></a>
				<a class="addthis_button_preferred_3"></a>
				<a class="addthis_button_preferred_4"></a>
				<a class="addthis_button_compact"></a>
				<a class="addthis_counter addthis_bubble_style"></a>
			</div>
			<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
			<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-522dce200590139f"></script>
				<!-- AddThis Button END -->
            </div>
            <div class="events-c">
            	<div class="row" id="info-show">
            		<h1>{{$product_name}}</h1>
                    <p class="add">{{$promotional_text}}</p>
                    <p class="time">{{$time}} BST <!--<a href="#">+ 1 more dates</a>--></p>
                    <p class="mt15">
	                    <a href="javascript:addCalendat('{{$id}}')" class="btn btn-range">Add to Calendar</a>
	                    <a href="{{$smarty.const.WEBSITE_URL}}buyticket/index/?pid={{$id}}" class="ml15 btn btn-black"><strong>Buy Tickets</strong></a>
                    </p>
                </div>
                <div class="hr mt15"></div>
                <div class="row2 mt15" id="info-other">
                
                    <font>Description</font>: {{$description}}<br />
                    <!--<font>Tickets available from</font>: Modus Darts on <font>08450 180 180</font> -->
                    <table cellpadding="0" cellspacing="0" class="mt15">
                        <tr>
                            <td width="140"><font>Time</font></td>
                            <td>{{$time}}</td>
                        </tr>
                        <tr>
                            <td width="140"><font>Prices</font></td>
                            <td>{{$display_price}}</td>
                        </tr>
                    </table>
                    
                </div>
                <div class="row3 map">
                	<span>View Map</span>
                    <div   style="  height: 339px">
                    	<!-- <img src="{{$smarty.const.WEBSITE_URL}}/public/photo/mapphoto.png" /> -->
                    	{{include file="map.tpl" }}
                    </div>
                </div>
            </div> 
        </div> 
         <div class="events-r mt15">
            	<div class="r-row rw-bg">
                	<h3>flagship  event</h3>
                    <font>August 25th, 20:00hrs</font>
                    <p class="mt15">Lorem ipsum dolor sit amet,consectetur adipisicing elit, sed do eiusmod tempor incididunt
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                        ipisicing elit, sed  do eiusmod tempor inc
                    </p>
                    <a href="#" class="Fbot mt15">View Details</a>
                </div>
                <div class="r-row rw-bg">
                	<h3>flagship  event</h3>
                    <font>August 25th, 20:00hrs</font>
                    <p class="mt15">Lorem ipsum dolor sit amet,consectetur adipisicing elit, sed do eiusmod tempor incididunt
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                        ipisicing elit, sed  do eiusmod tempor inc
                    </p>
                    <a href="#" class="Fbot mt15">View Details</a>
                </div>
            </div>
    </div> 
</div>
{{include file='layouts/footer.tpl'}}   