<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>index</title>
	<link href="{{$smarty.const.WEBSITE_URL}}public/style/reset.css" type="text/css" rel="stylesheet" />
	<link href="{{$smarty.const.WEBSITE_URL}}public/style/style.css" type="text/css" rel="stylesheet" /> 
	<link rel="stylesheet" href="{{$smarty.const.WEBSITE_URL}}/public/assets/css/jquery-ui.css" />
	<link rel="stylesheet" href="{{$smarty.const.WEBSITE_URL}}/public/assets/css/jquery.ui.datepicker.css" />
	
	<script src="{{$smarty.const.WEBSITE_URL}}/public/assets/lib/jquery-1.8.1.min.js" ></script>
	<script src="{{$smarty.const.WEBSITE_URL}}/public/assets/js/jquery-ui.js"></script>
	<script src="{{$smarty.const.WEBSITE_URL}}/public/assets/js/jquery.ui.datepicker.js"></script>
	
	<script  type="text/javascript">
	
	var setting = null;
	
	$(function($) {
	
		 setting = function(){
			var toDate = $("#toDate").val();
			var fromDate = $("#fromDate").val();
			
			if(toDate != null && "" != toDate && "SDate To" != toDate){
				$('#fromDate').datepicker('option', 'maxDate',toDate);  
			}
			
			if(fromDate != null && "" != fromDate && "Date From" != fromDate){
				$('#toDate').datepicker('option', 'minDate',fromDate);  
			}
			
		}
		
		$.datepicker.regional['zh-CN'] = {dateFormat: 'yy-mm-dd'};
		$.datepicker.setDefaults($.datepicker.regional['zh-CN']);

		$("#fromDate" ).datepicker();
		$("#toDate" ).datepicker();
		
		/*function mouseEvent(objId,objVal){
	
			var foucusFun = function(){
				if($("#"+objId).val() == objVal){
					$("#"+objId).val("");
				}
			}
			
			$("#"+objId).focus(foucusFun);
				
			$("#"+objId).blur(function(){
				if("" == $("#"+objId).val()){
					$("#"+objId).val(objVal);
				}
			});
		}
		
		mouseEvent("keyword","Search by keyword");
		mouseEvent("location","Search by location");
		mouseEvent("fromDate","Date From");
		mouseEvent("toDate","SDate To");*/
	});
	function check( ){
		var keyword = $("#keyword").val();
		var location = $("#location").val();
		var fromDate = $("#fromDate").val();
		var toDate = $("#toDate").val();
		
		if(keyword == "Search by keyword"){
			$("#keyword").val("");
		}
		
		if("Search by location" == location){
			$("#location").val("");
		}
		
		if("Date From" == fromDate){
			$("#fromDate").val("");
		}
		
		if("SDate To" == toDate){
			$("#toDate").val("");
		}
		
		return true;
	}
	</script>
	
</head>

<body>


﻿{{include file='layouts/headerandsearch.tpl'}} 

<script  type="text/javascript">
	var postData = {'id':'{{$id}}'};
	$(function($) {
		$.post(
			'{{$smarty.const.WEBSITE_URL}}ticket/queryById',
			postData,
			function(obj){
				var html = "<h1>" + obj.product_name +"</h1>" +
                    "<p class=\"add\">"+obj.promotional_text+"</p>" +
                    "<p class=\"time\">"+ obj.time+" BST <a href=\"#\">+ 1 more dates</a></p>" +
                    "<p class=\"mt15\"><a href=\"#\" class=\"btn btn-range\">Add to Calendar</a></p>" ;
				$("#info-show").html(html);
				
				var str = "<img src=\""+ obj.aw_image_url +"\" width=\"160\" height=\"265\" class=\"img-sidebar\" />"+
	                "<ul class=\"share\">" +
	                "	<li><a href=\"#\"><img src=\"images/ioc01.gif\" /></a></li>"+
	                "   <li><a href=\"#\"><img src=\"images/ioc02.gif\" /></a></li>"+
	                "   <li><a href=\"#\"><img src=\"images/ioc03.gif\" /></a></li>"+
	                "   <li><a href=\"#\"><img src=\"images/ioc04.gif\" /></a></li>"+
	                "   <li><a href=\"#\"><img src=\"images/ioc05.gif\" /></a></li>"+
	                "   <li><a href=\"#\"><img src=\"images/ioc06.gif\" /></a></li>"+
	                "</ul>";
				$("#img-list").html(str);
			},
			"json"
		);
	});
</script>
<div class="mian">
    <div class="content">
    	<div class="events">
        	<div class="sub-nav">
            	<span><a href="#">Home</a>  /  <a href="#">Search</a>  /  The Big Guns</a></span>
                <a href="#" class="back btn btn-black">&lt;&lt;Search Results</a>
            </div>
        	<div class="events-l mt15" id='img-list'>
            	<img src="photo/photo.gif" width="160" height="265" class="img-sidebar" />
                <ul class="share">
                	<li><a href="#"><img src="images/ioc01.gif" /></a></li>
                    <li><a href="#"><img src="images/ioc02.gif" /></a></li>
                    <li><a href="#"><img src="images/ioc03.gif" /></a></li>
                    <li><a href="#"><img src="images/ioc04.gif" /></a></li>
                    <li><a href="#"><img src="images/ioc05.gif" /></a></li>
                    <li><a href="#"><img src="images/ioc06.gif" /></a></li>
                </ul>
            </div>
            <div class="events-c">
            	<div class="row" id="info-show">
            		<!--
            		<h1>The Big Guns</h1>
                    <p class="add">Princes Hall, Princes Way, Aldershot, GU11 1NX, Hampshire, UK</p>
                    <p class="time">Saturday, 31 Aug 2013 19:30 BST <a href="#">+ 1 more dates</a></p>
                    <p class="mt15"><a href="#" class="btn btn-range">Add to Calendar</a></p>
                    
                    -->
                </div>
                <div class="hr mt15"></div>
                <div class="row2 mt15"> 
                    <font>Featuring</font>: Wade, Van Gerwen, Hankey, Nicholson, George, Joplin.<br />
                    <font>Tickets available from</font>: Modus Darts on <font>08450 180 180</font> 
                    <table cellpadding="0" cellspacing="0" class="mt15">
                        <tr>
                            <td width="140"><font>Running time</font></td>
                            <td>120mins</td>
                        </tr>
                        <tr>
                            <td width="140"><font>Prices</font></td>
                            <td>VIPs - £50, Terrace £25, Balcony - 20</td>
                        </tr>
                    </table>
                </div>
                <div class="row3 map">
                	<span>View Map</span>
                    <div class="mt15" style="width: 407px; height: 339px">
                    	<!-- <img src="{{$smarty.const.WEBSITE_URL}}/public/photo/mapphoto.png" /> -->
                    	{{include file="map.tpl" }}
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
</div>
<div class="footer">
	<div>
    	<a href="#">User guide</a>  |  
        <a href="#">About us</a>  |  
        <a  href="#">Cookies policy</a>  |  
        <a href="#">Privacy policy</a>  |  
        <a href="#">Terms and Conditions</a>
    </div>
</div>
<script type="text/javascript">
searchaddress("北京小学");
</script>
</body>
</html>     