<?php /* Smarty version Smarty-3.1.13, created on 2013-09-23 15:01:08
         compiled from "G:\phpserver\tickets\templates\usercarlendar_event_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18887521c5da350c828-68681888%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a9bb68e758352ee54ecb9dcc27d66267ce5def9' => 
    array (
      0 => 'G:\\phpserver\\tickets\\templates\\usercarlendar_event_list.tpl',
      1 => 1379948373,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18887521c5da350c828-68681888',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_521c5da35d90e5_89612615',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_521c5da35d90e5_89612615')) {function content_521c5da35d90e5_89612615($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>index</title>
<link href="<?php echo @constant('WEBSITE_URL');?>
public/style/reset.css" type="text/css" rel="stylesheet" />
<link href="<?php echo @constant('WEBSITE_URL');?>
public/style/style.css" type="text/css" rel="stylesheet" /> 

<script src="<?php echo @constant('WEBSITE_URL');?>
/public/assets/lib/jquery-1.8.1.min.js" ></script>


<script>

	$(document).ready(function() {
		$.ajax({
			url:"<?php echo @constant('WEBSITE_URL');?>
userevent/getAllUserEvent",
			datatype: "json",
			success:function(data){
				var html = "";
				var obj = eval('(' + data + ')');
				
				
				for(var i=0;i<obj.length;i++){
				
					var catory_name = obj[i].category_name;
					if(catory_name==null){
					 catory_name = "";
					}
					
					var descr = obj[i].descr;
					if(descr==null){
						descr="";
					}
					
					var fromdate = strToDate(obj[i].fromtime);
					
					html+="<tr><td><div class='row4 map'> <span>"+fromdate.toDateString()+"</span></div></td></tr><tr><td><div class=\"table-xian\"></div></td></tr>";
					html+="<tr>"+
           " <td class=\"tdT\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"gigs-table map\">"+
                "<tr class=\"tdT\">"+
                  "<td><p><a href=\"#\" class=\"list-time timebtn_bg\">"+handTimeStr(fromdate.toTimeString())+"</a></p></td>"+
                 " <td><img src="+obj[i].imgurl+" width=\"92\" height=\"92\" class=\"btn\" /></td>"+
                  "<td>"+catory_name+" > Comedy<br />"+
                  "  <span>"+obj[i].ename+"</span><br />"+
                  descr+".</td>"+
               " </tr>"+
               " <tr>"+
                  "<td colspan=\"3\"><div class=\"table-xian\"></div></td>"+
               " </tr>"+
             " </table></td>"+
          "</tr>";
				}
				$("#userEvents").html(html);
			},
			error:function(){
				alert("getData failed");
			}
		});
	});
	
	function handTimeStr(timeStr){
		return timeStr.substring(0,8);
	}
	//string 转 date
	function strToDate(sdate){
    	var d = new Date(Date.parse(sdate.replace(/-/g,"/"))); 
    	return d;
	}
</script>

</head> 
<body>
  <?php echo $_smarty_tpl->getSubTemplate ('layouts/headerandsearch.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
<div class="mian">
  <div class="content">
    <div class="events">
      <div class="gigs-1"> <span> <a href="#" class="fl btn btn-black-2">New Calendar Entry</a> <a href="#" class="fl btn btn-black-3">Export your Calendar</a></span> 
      	 <p class=" mt15 gigs-top-xx fr"> 
                    <a href="#" class="btn-hs2 btn-Calendar left-by">Day</a> 
                    <a href="#" class="btn-hs2 btn-Calendar">Week</a> 
                    <a href="#" class="btn-hs2 btn-Calendar">Month</a> 
                    <a href="#" class="btn-hs2 btn-Calendar right-by right-by-hover">Agenda</a> 
            </p></div>
      <div class="table-xian mt15"></div>
      <div class="events-c3">
      
        <table id="userEvents" width="100%" border="0" cellspacing="0" cellpadding="0">
      <!--
          <tr>
            <td><div class="row4 map"> <span>24th July</span></div></td>
          </tr>
          <tr>
            <td><div class="table-xian"></div></td>
          </tr>
          <tr>
            <td class="tdT"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="gigs-table map">
                <tr class="tdT">
                  <td><p><a href="#" class="list-time timebtn_bg">20.00</a></p></td>
                  <td><img src="photo/photo2.gif" width="92" height="92" class="btn" /></td>
                  <td>Entertainment > Comedy<br />
                    <span>Jason Manford</span><br />
                    Bournemouth lnternational Center,Exeter Road, Bournemouth. BH2 5BH,Dorset UK.BH2 5BH,Dorset UK.</td>
                </tr>
                <tr>
                  <td colspan="3"><div class="table-xian"></div></td>
                </tr>
              </table></td>
          </tr>
          <tr>
            <td><div class="row4 map"> <span>9th August</span></div></td>
          </tr>
          <tr>
            <td><div class="table-xian"></div></td>
          </tr> 
          <tr>
            <td class="tdT"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="gigs-table map">
                <tr class="tdT">
                  <td><p><a href="#" class="list-time">20.00</a></p></td>
                  <td><img src="photo/photo2.gif" width="92" height="92" class="btn" /></td>
                  <td>Entertainment > Comedy<br />
                    <span>Jason Manford</span><br />
                    Bournemouth lnternational Center,Exeter Road, Bournemouth. BH2 5BH,Dorset UK.BH2 5BH,Dorset UK.</td>
                </tr>
                <tr>
                  <td colspan="3"><div class="table-xian"></div></td>
                </tr>
              </table></td>
          </tr>
          <tr>
            <td><div class="row4 map"> <span>24th July</span></div></td>
          </tr>
          <tr>
            <td><div class="table-xian"></div></td>
          </tr>
          <tr>
            <td class="tdT"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="gigs-table map">
                <tr class="tdT">
                  <td><p><a href="#" class="list-time">20.00</a></p></td>
                  <td><img src="photo/photo2.gif" width="92" height="92" class="btn" /></td>
                  <td>Entertainment > Comedy<br />
                    <span>Jason Manford</span><br />
                    Bournemouth lnternational Center,Exeter Road, Bournemouth. BH2 5BH,Dorset UK.BH2 5BH,Dorset UK.</td>
                </tr>
                <tr>
                  <td colspan="3"><div class="table-xian"></div></td>
                </tr>
              </table></td>
          </tr>
          <tr>
            <td><div class="row4 map"> <span>24th July</span></div></td>
          </tr>
          <tr>
            <td><div class="table-xian"></div></td>
          </tr>
          <tr>
            <td class="tdT"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="gigs-table map">
                <tr class="tdT">
                  <td><p><a href="#" class="list-time">20.00</a></p></td>
                  <td><img src="photo/photo2.gif" width="92" height="92" class="btn" /></td>
                  <td>Entertainment > Comedy<br />
                    <span>Jason Manford</span><br />
                    Bournemouth lnternational Center,Exeter Road, Bournemouth. BH2 5BH,Dorset UK.BH2 5BH,Dorset UK.</td>
                </tr>
                <tr>
                  <td colspan="3"><div class="table-xian"></div></td>
                </tr>
              </table></td>
          </tr>
          <tr>
            <td><table class="gigs-u-l map">
                <tr>
                  <td valign="center"><b>Legend:</b></td>
                  <td><a href="#" class="btn btn-range btn-Calendar">Search4Gigs Event</a></td>
                  <td><a href="#" class="btn btn-blue btn-Calendar">Private Event</a></td>
                  <td valign="center">Manage Layers</td>
                </tr>
              </table></td>
          </tr>
        -->
        </table>
      </div>
      <div class="events-r mt15">
        <div class="r-row rw-bg">
          <h3>flagship  event</h3>
          <font>August 25th, 20:00hrs</font>
          <p class="mt15">Lorem ipsum dolor sit amet,consectetur adipisicing elit, sed do eiusmod tempor incididunt
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
            ipisicing elit, sed  do eiusmod tempor inc </p>
          <a href="#" class="Fbot mt15">View Details</a> </div>
        <div class="r-row rw-bg">
          <h3>flagship  event</h3>
          <font>August 25th, 20:00hrs</font>
          <p class="mt15">Lorem ipsum dolor sit amet,consectetur adipisicing elit, sed do eiusmod tempor incididunt
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
            ipisicing elit, sed  do eiusmod tempor inc </p>
          <a href="#" class="Fbot mt15">View Details</a> </div>
      </div>
    </div>
  </div>
</div>
  <?php echo $_smarty_tpl->getSubTemplate ('layouts/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
    <?php }} ?>