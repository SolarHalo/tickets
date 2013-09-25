<?php /* Smarty version Smarty-3.1.13, created on 2013-09-25 16:06:14
         compiled from "E:\phpweb\tickets\templates\search_product_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24466524049c5609f58-72188520%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5706c5401558cd8de5d8d07fc3db49b1e7540106' => 
    array (
      0 => 'E:\\phpweb\\tickets\\templates\\search_product_list.tpl',
      1 => 1380117649,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24466524049c5609f58-72188520',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_524049c570deb8_57709652',
  'variables' => 
  array (
    'data' => 0,
    'cats' => 0,
    'c' => 0,
    'totalEvent' => 0,
    'd' => 0,
    'pager' => 0,
    'curCat' => 0,
    'pagers' => 0,
    'index' => 0,
    'totalPage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524049c570deb8_57709652')) {function content_524049c570deb8_57709652($_smarty_tpl) {?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search4gigs Search – Music, tickets and cultural events on your calendar.</title>
	<link href="<?php echo @constant('WEBSITE_URL');?>
public/style/reset.css" type="text/css" rel="stylesheet" />
	<link href="<?php echo @constant('WEBSITE_URL');?>
public/style/style.css" type="text/css" rel="stylesheet" /> 
	<link rel="stylesheet" href="<?php echo @constant('WEBSITE_URL');?>
/public/assets/css/jquery-ui.css" />
	<link rel="stylesheet" href="<?php echo @constant('WEBSITE_URL');?>
/public/assets/css/jquery.ui.datepicker.css" />
	
	<script src="<?php echo @constant('WEBSITE_URL');?>
/public/assets/lib/jquery-1.8.1.min.js" ></script>
	<script src="<?php echo @constant('WEBSITE_URL');?>
/public/assets/js/jquery-ui.js"></script>
	<script src="<?php echo @constant('WEBSITE_URL');?>
/public/assets/js/jquery.ui.datepicker.js"></script>
	
	<script  type="text/javascript"> 
	function buyTickets(pid){
		$.post(
			'<?php echo @constant('WEBSITE_URL');?>
ticket/buyTickets',
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
			'<?php echo @constant('WEBSITE_URL');?>
ticket/addCalendat',
			{'pid':pid},
			function(obj){
				if(obj.res){
					alert("success");
				}else{
					window.location.href="<?php echo @constant('WEBSITE_URL');?>
login";
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
		
		if(toDate == null || toDate == undefined || "Date To" == toDate){
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
			
			if(toDate != null && "" != toDate && "Date To" != toDate){
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
	      
		     
		var pdata = '<?php echo json_encode($_smarty_tpl->tpl_vars['data']->value);?>
';
	  //(pdata);
	  var regex = /<\S*\s*[\/]?<?php ?>>/gi; 
	  var regex2 = /\n/gi;
	  pdata = pdata.replace(regex, "");
	  pdata = pdata.replace(regex2, ""); 
		  
	//	alert(pdata)
		// eval("var source ="+pdata); 
		//console.log(source);
		//source  = eval('(' + '<?php echo json_encode($_smarty_tpl->tpl_vars['data']->value);?>
' + ')');
		//alert(source)
		loadDatas(eval(pdata),"promotional_text");
	});

 
	function productOver(e){
		alert(e);
	}

	function productOut(e){
		alert(e);
	}
	</script>
</head> 
<body>
<?php echo $_smarty_tpl->getSubTemplate ('layouts/headerandsearch.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
<div class="mian">
  <div class="content">
    <div class="events">
      <div class="sub-nav"> <span><a href="#">Home</a> / <a href="#">Search</a> /  The Big Guns</a></span></div>
      <div class="events-l mt15">
      <div style="width:260px;height: 265px;">
      	<?php echo $_smarty_tpl->getSubTemplate ("map.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

      </div>
      
<!--        <img src="<?php echo @constant('WEBSITE_URL');?>
public/photo/photo1.gif" width="160" height="265" class="img-sidebar" /> -->
        <ul id="cat-list" class="gigs-title map">
         	<span>Categories</span>
         	
         	<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
         	 	<li><a href="javascript:search('<?php echo @constant('WEBSITE_URL');?>
ticket/index/?cat=<?php echo $_smarty_tpl->tpl_vars['c']->value['category_id'];?>
')"><?php echo $_smarty_tpl->tpl_vars['c']->value['category_name'];?>
(<?php echo $_smarty_tpl->tpl_vars['c']->value['total'];?>
)</a></li>
         	<?php } ?>
        </ul>
       
      </div>
      <div class="events-c2">
        <div class=" gigs_k map"> <span class="aigs_k_title" id="totalCounter" >We have found <?php echo $_smarty_tpl->tpl_vars['totalEvent']->value;?>
 events</span> <strong>sort By:</strong>
          <select name="" class="id_3">
            <option>Best Match</option>
          </select>
        </div>
        <table id="list-result" width="100%" border="0" cellspacing="0" cellpadding="0">
        
       
       <?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
       	
	       	<tr >
	       		<td>
					<table width="100%" border="0" cellspacing="0" cellpadding="0" class="gigs-table list-tablep">
		        		<tr>
		               		<td class="tdC"><?php echo $_smarty_tpl->tpl_vars['d']->value['week'];?>
<br />
		                  		<span><?php echo $_smarty_tpl->tpl_vars['d']->value['date'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['d']->value['month'];?>
</span><br />
		                        <font><?php echo $_smarty_tpl->tpl_vars['d']->value['time'];?>
</font>
		                       <!-- <a href="#" class="time2">53 Dates</a>  -->
		               		</td>
		               		<td>
	                      		<a href="<?php echo @constant('WEBSITE_URL');?>
ticket/info/?id=<?php echo $_smarty_tpl->tpl_vars['d']->value['aw_product_id'];?>
">
	                      			<img src="<?php echo $_smarty_tpl->tpl_vars['d']->value['aw_thumb_url'];?>
" width="92" height="92" class="btn" />
	                      		</a>
	                      	</td>
	                      	<td><?php echo $_smarty_tpl->tpl_vars['d']->value['category_name'];?>
<br />
	                        	<span>
	                        		<a href="<?php echo @constant('WEBSITE_URL');?>
ticket/info/?id=<?php echo $_smarty_tpl->tpl_vars['d']->value['aw_product_id'];?>
" name= <?php echo $_smarty_tpl->tpl_vars['d']->value['aw_product_id'];?>
 onmouseover='productOver(name)'  onmouseout='productOut(name)'>
		                      			<?php echo $_smarty_tpl->tpl_vars['d']->value['product_name'];?>

		                      		</a>
	                        	</span><br />
	                        	
	                        	<?php echo $_smarty_tpl->tpl_vars['d']->value['promotional_text'];?>
 &nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['d']->value['display_price'];?>

	                        		
	                        </td>
		               	</tr>
	                	<tr>
	                		<td colspan="2">&nbsp;</td>
	                      	<td>
	                      		<p class="mt15">
	                      			<a href="javascript:addCalendat('<?php echo $_smarty_tpl->tpl_vars['d']->value['aw_product_id'];?>
')" class="btn btn-range btn-Calendar">Add to Calendar</a>
	                      			<a href="<?php echo @constant('WEBSITE_URL');?>
buyticket/index/?pid=<?php echo $_smarty_tpl->tpl_vars['d']->value['aw_product_id'];?>
" class="back btn btn-black"><strong>Buy Tickets</strong></a>
	                      		</p>
	                      	</td>
	                	</tr> 
	              	</table>
	              	<div class="table-xian"></div>
	          	</td>
	    	</tr>   	
       <?php } ?>
     		<tr>
	            <td>
	             <?php if ($_smarty_tpl->tpl_vars['totalEvent']->value!=0){?>
	           	 <p class="mt15 gigs-fy"> 

		           	<?php if ($_smarty_tpl->tpl_vars['pager']->value!=1){?>
		           		<a href="javascript:search('<?php echo @constant('WEBSITE_URL');?>
ticket/index/?cat=<?php echo $_smarty_tpl->tpl_vars['curCat']->value;?>
&pager=1')" class="btn-hs btn-Calendar fontcolor">&lt;&lt;</a> 
		            	<a href="javascript:search('<?php echo @constant('WEBSITE_URL');?>
ticket/index/?cat=<?php echo $_smarty_tpl->tpl_vars['curCat']->value;?>
&pager=<?php echo $_smarty_tpl->tpl_vars['pager']->value-1;?>
')" class="btn-hs btn-Calendar fontcolor">&lt;</a>
		           	<?php }?>
		           
		           	<?php  $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['index']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pagers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['index']->key => $_smarty_tpl->tpl_vars['index']->value){
$_smarty_tpl->tpl_vars['index']->_loop = true;
?>
		           		<a href="javascript:search('<?php echo @constant('WEBSITE_URL');?>
ticket/index/?cat=<?php echo $_smarty_tpl->tpl_vars['curCat']->value;?>
&pager=<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
')" class="btn-hs btn-Calendar"><?php echo $_smarty_tpl->tpl_vars['index']->value;?>
</a> 
		           	<?php } ?>
		           	
		           	<?php if ($_smarty_tpl->tpl_vars['pager']->value!=$_smarty_tpl->tpl_vars['totalPage']->value){?>
			      		<a href="javascript:search('<?php echo @constant('WEBSITE_URL');?>
ticket/index/?cat=<?php echo $_smarty_tpl->tpl_vars['curCat']->value;?>
&pager=<?php echo $_smarty_tpl->tpl_vars['pager']->value+1;?>
')" class="btn-hs btn-Calendar fontcolor">&gt;</a> 
			            <a href="javascript:search('<?php echo @constant('WEBSITE_URL');?>
ticket/index/?cat=<?php echo $_smarty_tpl->tpl_vars['curCat']->value;?>
&pager=<?php echo $_smarty_tpl->tpl_vars['totalPage']->value;?>
')" class="btn-hs btn-Calendar fontcolor">&gt;&gt;</a>
			       	<?php }?>
			   	
			       	
	            </p>
	            <span class="fy-size">Showing <?php echo $_smarty_tpl->tpl_vars['pager']->value;?>
 of <?php echo $_smarty_tpl->tpl_vars['totalPage']->value;?>
 pages</span> </td>
	            <?php }?> 
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
<?php echo $_smarty_tpl->getSubTemplate ('layouts/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 <?php }} ?>