<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search4gigs Search – Music, tickets and cultural events on your calendar.</title>
	<link href="{{$smarty.const.WEBSITE_URL}}public/style/reset.css" type="text/css" rel="stylesheet" />
	<link href="{{$smarty.const.WEBSITE_URL}}public/style/style.css" type="text/css" rel="stylesheet" /> 
	<link rel="stylesheet" href="{{$smarty.const.WEBSITE_URL}}/public/assets/css/jquery-ui.css" />
	<link rel="stylesheet" href="{{$smarty.const.WEBSITE_URL}}/public/assets/css/jquery.ui.datepicker.css" />
	
	<script src="{{$smarty.const.WEBSITE_URL}}/public/assets/lib/jquery-1.8.1.min.js" ></script>
	<script src="{{$smarty.const.WEBSITE_URL}}/public/assets/js/jquery-ui.js"></script>
	<script src="{{$smarty.const.WEBSITE_URL}}/public/assets/js/jquery.ui.datepicker.js"></script>
	
	<script  type="text/javascript"> 
	function buyTickets(pid){
		$.post(
			'{{$smarty.const.WEBSITE_URL}}ticket/buyTickets',
			{'pid':pid},
			function(obj){
				if(obj.res){
					window.location.href = obj.href;
				}else{
					alert("failed");
				}
				
			},
			"json"
		);
	}
	
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
	
	function search(url,pageSize){
		var keyword = $("#keyword").val();
		var location = $("#location").val();
		var fromDate = $("#fromDate").val();
		var toDate = $("#toDate").val();
		
		if(keyword == null || keyword == undefined || keyword == "Search by keyword"){
			keyword = "";
		}
		
		if(location == null || location == undefined || "Search by location" == location){
			location = "";
		}
		
		if(toDate == null || toDate == undefined || "SDate To" == toDate){
			toDate = "";
		}
		
		if(fromDate == null || fromDate == undefined || "Date From" == fromDate){
			fromDate = "";
		}
		
		window.location.href = url + "&keyword=" + keyword + "&location=" + location + "&fromDate=" + fromDate + "&toDate="+toDate;
	}
	
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
		
	});
	</script>
</head> 
<body>
{{include file='layouts/headerandsearch.tpl'}} 
<div class="mian">
  <div class="content">
    <div class="events">
      <div class="sub-nav"> <span><a href="#">Home</a> / <a href="#">Search</a> /  The Big Guns</a></span></div>
      <div class="events-l mt15"> <img src="{{$smarty.const.WEBSITE_URL}}public/photo/photo1.gif" width="160" height="265" class="img-sidebar" />
        <ul id="cat-list" class="gigs-title map">
         	<span>Categories</span>
         	
         	{{foreach $cats as $c}}
         	 	<li><a href="javascript:search('{{$smarty.const.WEBSITE_URL}}ticket/index/?cat={{$c['category_id']}}')">{{$c['category_name']}}({{$c['total']}})</a></li>
         	{{/foreach}}
        </ul>
       
      </div>
      <div class="events-c2">
        <div class=" gigs_k map"> <span class="aigs_k_title" id="totalCounter" >We have found {{$totalEvent}} events</span> <strong>sort By:</strong>
          <select name="" class="id_3">
            <option>Best Match</option>
          </select>
        </div>
        <table id="list-result" width="100%" border="0" cellspacing="0" cellpadding="0">
        
       
       {{foreach $data as $d}}
       	
	       	<tr>
	       		<td>
					<table width="100%" border="0" cellspacing="0" cellpadding="0" class="gigs-table list-tablep">
		        		<tr>
		               		<td class="tdC">{{$d['week']}}<br />
		                  		<span>{{$d['date']}}</span><br />
		                        <font>{{$d['time']}}</font>
		                        <a href="#" class="time2">53 Dates</a>  
		               		</td>
		               		<td>
	                      		<a href="{{$smarty.const.WEBSITE_URL}}ticket/info/?id={{$d['aw_product_id']}}">
	                      			<img src="{{$d['aw_thumb_url']}}" width="92" height="92" class="btn" />
	                      		</a>
	                      	</td>
	                      	<td>{{$d['category_name']}} > Comedy<br />
	                        	<span>
	                        		<a href="{{$smarty.const.WEBSITE_URL}}ticket/info/?id={{$d['aw_product_id']}}">
		                      			{{$d['product_name']}}
		                      		</a>
	                        	</span><br />
	                        		
	                        </td>
		               	</tr>
	                	<tr>
	                		<td colspan="2">&nbsp;</td>
	                      	<td>
	                      		<p class="mt15">
	                      			<a href="javascript:addCalendat('{{$d['aw_product_id']}}')" class="btn btn-range btn-Calendar">Add to Calendar</a>
	                      			<a href="{{$smarty.const.WEBSITE_URL}}buyticket/index/?pid={{$d['aw_product_id']}}" class="back btn btn-black"><strong>Buy Tickets</strong></a>
	                      		</p>
	                      	</td>
	                	</tr> 
	              	</table>
	              	<div class="table-xian"></div>
	          	</td>
	    	</tr>   	
       {{/foreach}}
     		<tr>
	            <td>
	             {{if $totalEvent != 0}}
	           	 <p class="mt15 gigs-fy"> 

		           	{{if $pager != 1}}
		           		<a href="javascript:search('{{$smarty.const.WEBSITE_URL}}ticket/index/?cat={{$curCat}}&pager=1')" class="btn-hs btn-Calendar fontcolor">&lt;&lt;</a> 
		            	<a href="javascript:search('{{$smarty.const.WEBSITE_URL}}ticket/index/?cat={{$curCat}}&pager={{$pager-1}}')" class="btn-hs btn-Calendar fontcolor">&lt;</a>
		           	{{/if}}
		           
		           	{{foreach from=$pagers item=index}}
		           		<a href="javascript:search('{{$smarty.const.WEBSITE_URL}}ticket/index/?cat={{$curCat}}&pager={{$index}}')" class="btn-hs btn-Calendar">{{$index}}</a> 
		           	{{/foreach}}
		           	
		           	{{if $pager != $totalPage}}
			      		<a href="javascript:search('{{$smarty.const.WEBSITE_URL}}ticket/index/?cat={{$curCat}}&pager={{$pager+1}}')" class="btn-hs btn-Calendar fontcolor">&gt;</a> 
			            <a href="javascript:search('{{$smarty.const.WEBSITE_URL}}ticket/index/?cat={{$curCat}}&pager={{$totalPage}}')" class="btn-hs btn-Calendar fontcolor">&gt;&gt;</a>
			       	{{/if}}
			   	
			       	
	            </p>
	            <span class="fy-size">Showing {{$pager}} of {{$totalPage}} pages</span> </td>
	            {{/if}} 
	          </tr>
        </table>
      </div>
      
      <div class="events-r mt15">
        <div class="r-row rw-bg2"> <br />
          &nbsp; <br />
          &nbsp; <br />
          &nbsp; <br />
          &nbsp; <br />
          &nbsp; <br />
          &nbsp; </div>
        <div class="r-row rw-bg2"> <br />
          &nbsp; <br />
          &nbsp; <br />
          &nbsp; <br />
          &nbsp; <br />
          &nbsp; <br />
          &nbsp; </div>
      </div>
    </div>
  </div>
</div>
{{include file='layouts/footer.tpl'}} 