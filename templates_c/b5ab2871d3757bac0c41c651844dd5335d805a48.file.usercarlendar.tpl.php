<?php /* Smarty version Smarty-3.1.13, created on 2013-08-29 14:01:46
         compiled from "D:\workspace\php\tickets\templates\usercarlendar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16689521c9859611640-73038461%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5ab2871d3757bac0c41c651844dd5335d805a48' => 
    array (
      0 => 'D:\\workspace\\php\\tickets\\templates\\usercarlendar.tpl',
      1 => 1377783854,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16689521c9859611640-73038461',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_521c98596f8e53_26286395',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_521c98596f8e53_26286395')) {function content_521c98596f8e53_26286395($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>user agenda manager</title>
<link href="<?php echo @constant('WEBSITE_URL');?>
public/style/reset.css" type="text/css" rel="stylesheet" />
<link href="<?php echo @constant('WEBSITE_URL');?>
public/style/style.css" type="text/css" rel="stylesheet" />
<link href='<?php echo @constant('WEBSITE_URL');?>
public/fullcalendar/fullcalendar.css' rel='stylesheet' />
<link href='<?php echo @constant('WEBSITE_URL');?>
public/fullcalendar/fullcalendar.print.css' rel='stylesheet' media='print' />
<script src='<?php echo @constant('WEBSITE_URL');?>
public/jquery/jquery-1.9.1.min.js'></script>
<script src='<?php echo @constant('WEBSITE_URL');?>
public/jquery/jquery-ui-1.10.2.custom.min.js'></script>
<script src='<?php echo @constant('WEBSITE_URL');?>
public/fullcalendar/fullcalendar.min.js'></script>
<script>

	$(document).ready(function() {
        
		$("#tcbox").hide();
		$("#tcbox_addentity").hide();
        $("#newcaledar").click(function(){$("#tcbox_addentity").show();});
      
		
		//carlendar
		var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();
		
		var calendar = $('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			editable: true,
			events: "<?php echo @constant('WEBSITE_URL');?>
carlendar/getUserCalEvent?userid=1"
		});
		
		$("#saveEvent").click(function(){
			var title = $("#title").val();
			calendar.fullCalendar('renderEvent',
						{
							title: title,
							start: new Date(y, m, d,20,0),
							end: new Date(y, m, d,21,0),
							allDay:false
						},
						true // make the event "stick"
					);
			closewin('tcbox_addentity');
					
		});
		
	});
function closewin(winname){
	  $("#"+winname).hide();;
}
</script>
</head>

<body>
<?php echo $_smarty_tpl->getSubTemplate ('layouts/headerandsearch.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 

<div class="mian">
    <div class="content">
    	<div class="events">
        	<div class="gigs-1">
                <span>
                    <a href="#" class="fl btn btn-black-2" id="newcaledar" >New Calendar Entry</a>
                    <a href="#" class="fl btn btn-black-3">Export your Calendar</a>
                </span>
                <p class=" mt15 gigs-top-xx fr"> 
                    <a href="#" class="btn-hs2 btn-Calendar left-by">Day</a> 
                    <a href="#" class="btn-hs2 btn-Calendar by-hover">Week</a> 
                    <a href="#" class="btn-hs2 btn-Calendar">Month</a> 
                    <a href="<?php echo @constant('WEBSITE_URL');?>
userevent" class="btn-hs2 btn-Calendar right-by">Agenda</a> 
                </p>
            </div>
            <div class="mt15">
            	<div id='calendar'></div>
            </div>
            <table class="gigs-u-l" style="margin:0;">
                <tr>
                  <td valign="center"><b>Legend:</b></td>
                  <td><a href="#" class="btn btn-range btn-Calendar">Search4Gigs Event</a></td>
                  <td><a href="#" class="btn btn-blue btn-Calendar">Private Event</a></td>
                  <td valign="center">Manage Layers</td>
                </tr>
              </table>
    	</div> 
    </div> 
</div>

<!-- 事件详情的弹出窗口 -->
<div id="tcbox">
  <div id="tccontent">
    <div class="row3 map gigs_tck"><span class="fl pl">Event Details</span><a href="#" class="fr pr" onclick="javascript:closewin('tcbox');">X</a></div>
    <form>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="gigs-tck-table mt15 ">
      <tr>
        <td width="50" align="right" valign="top"><img src="<?php echo @constant('WEBSITE_URL');?>
public/images/calendar-ioc.gif" /></td>
        <td align="left">
        	<h4  class="eventname">Lorem event title</h4>
            <p class="time">Saturday, 28 July 2013 19:30 BST</p>
        </td>
      </tr> 
    </table>
    <table>
    	 <tr>
            <td class="time">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Add a Note</a></td> 
          </tr>
    </table>
    </form> 
    <div class="row3 map gigs_top">
        <span class="fl"><a href="#" class="btn btn-blue btn-Calendar ml15">Save</a><font><a href="#" class="cancel">cancel</a></font></span>
        <span class="fr pr"><a href="#" class="btn btn-red btn-Calendar">Delete</a></span>
    </div>
  </div>
</div>



<!-- 添加事件的弹出窗口 -->
<div id="tcbox_addentity">
  <div id="tccontent">
    <div class="row3 map gigs_tck"><span class="fl pl">Edit Entry</span><a href="#" class="fr pr" onclick="javascript:closewin('tcbox_addentity');">X</a></div>
    <form>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table-edit mt15" style="border:none;">
      <tr>
        <td width="77" align="right" valign="middle">Title&nbsp;&nbsp;</td>
        <td align="left">
        	<span class="inputborder"><input type="text" class="input-style4 textinput-w3" id="title"/></span>
        </td>
      </tr>
       <tr>
        <td width="77" align="right" valign="middle">&nbsp;</td>
        <td align="left">
        	<input type="checkbox" align="middle"><span class="fontsize12">&nbsp;&nbsp;&nbsp;All Day</span>
        </td>
      </tr> 
       <tr>
        <td width="77" align="right" valign="middle">From&nbsp;&nbsp;</td>
        <td align="left">
        	<span class="inputborder"><input type="text" class="input-style4 textinput-w4" /><a href="#"><img src="<?php echo @constant('WEBSITE_URL');?>
public/images/calendar-iocx.gif" /></a></span>
            <span class="inputborder"><input type="text" class="input-style4 textinput-w4" /><a href="#"><img src="<?php echo @constant('WEBSITE_URL');?>
public/images/time-iocx.gif" /></a></span>
        </td>
      </tr> 
       <tr>
        <td width="77" align="right" valign="middle">To&nbsp;&nbsp;</td>
        <td align="left">
        	<span class="inputborder"><input type="text" class="input-style4 textinput-w4" /><a href="#"><img src="<?php echo @constant('WEBSITE_URL');?>
public/images/calendar-iocx.gif" /></a></span>
            <span class="inputborder"><input type="text" class="input-style4 textinput-w4" /><a href="#"><img src="<?php echo @constant('WEBSITE_URL');?>
public/images/time-iocx.gif" /></a></span>
        </td>
      </tr> 
       <tr>
        <td width="77" align="right" valign="middle">Location&nbsp;&nbsp;</td>
        <td align="left">
        		<span class="inputborder"><input type="text" class="input-style4 textinput-w3" /></span>
        </td>
      </tr> 
       <tr>
        <td width="77" align="right" valign="middle">Note&nbsp;&nbsp;</td>
        <td align="left">
        		  <input type="button" runat="server" value="" id="file" /><span class="fontsize12">&nbsp;&nbsp;&nbsp;No File Chosen</span>
        </td>
      </tr> 
       <tr>
        <td width="77" align="right" valign="middle">Note&nbsp;&nbsp;</td>
        <td align="left">
        		<span class="inputborder"><textarea style="height:80px" class="input-style4 textinput-w3"></textarea></span>
        </td>
      </tr> 
       <tr>
        <td width="77" align="right" valign="middle">&nbsp;</td>
        <td align="left">
        	<input type="checkbox" align="middle"><span class="fontsize12">&nbsp;&nbsp;&nbsp;Email Reminder</span>
        </td>
      </tr> 
    </table> 
    </form> 
    <div class="row3 map gigs_top">
        <span class="fl"><a href="#" class="btn btn-black-2 btn-Calendar ml15" id="saveEvent">Save</a><font><a href="#" class="cancel">cancel</a></font></span> 
    </div>
  </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('layouts/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 <?php }} ?>