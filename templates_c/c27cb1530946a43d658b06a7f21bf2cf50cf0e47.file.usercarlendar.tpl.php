<?php /* Smarty version Smarty-3.1.13, created on 2013-09-18 17:43:39
         compiled from "E:\phpweb\tickets\templates\usercarlendar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:60465231d15b7d7ba1-94253852%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c27cb1530946a43d658b06a7f21bf2cf50cf0e47' => 
    array (
      0 => 'E:\\phpweb\\tickets\\templates\\usercarlendar.tpl',
      1 => 1379518920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '60465231d15b7d7ba1-94253852',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5231d15b8994c7_17885065',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5231d15b8994c7_17885065')) {function content_5231d15b8994c7_17885065($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>user agenda manager</title>

<link href="<?php echo @constant('WEBSITE_URL');?>
public/style/reset.css"
	type="text/css" rel="stylesheet" />
<link href="<?php echo @constant('WEBSITE_URL');?>
public/style/style.css"
	type="text/css" rel="stylesheet" />
<link
	href="<?php echo @constant('WEBSITE_URL');?>
public/assets/css/jquery.ui.datepicker.css"
	type="text/css" rel="stylesheet" />
<link
	href='<?php echo @constant('WEBSITE_URL');?>
public/fullcalendar/fullcalendar.css'
	rel='stylesheet' />
<link
	href='<?php echo @constant('WEBSITE_URL');?>
public/fullcalendar/fullcalendar.print.css'
	rel='stylesheet' media='print' />
<link
	href="<?php echo @constant('WEBSITE_URL');?>
public/assets/css/jquery-ui.css"
	type="text/css" rel="stylesheet" />
<link
	href="<?php echo @constant('WEBSITE_URL');?>
public/assets/css/jquery.timepicker.css"
	type="text/css" rel="stylesheet" />
<script
	src="<?php echo @constant('WEBSITE_URL');?>
public/js/jquery-1.10.1.min.js"
	type="text/javascript"></script>
<script
	src='<?php echo @constant('WEBSITE_URL');?>
public/jquery/jquery-ui-1.10.2.custom.min.js'></script>
<script src='<?php echo @constant('WEBSITE_URL');?>
public/js/usercalendar.js'></script>
<script
	src='<?php echo @constant('WEBSITE_URL');?>
public/fullcalendar/fullcalendar.min.js'></script>

<script src='<?php echo @constant('WEBSITE_URL');?>
public/assets/js/jquery-ui.js'></script>
<script
	src='<?php echo @constant('WEBSITE_URL');?>
public/assets/js/jquery.timepicker.js'></script>

<link rel="stylesheet"
	href="<?php echo @constant('WEBSITE_URL');?>
/public/assets/css/jquery-ui.css" />
<link rel="stylesheet"
	href="<?php echo @constant('WEBSITE_URL');?>
/public/assets/css/jquery.ui.datepicker.css" />
<script src="<?php echo @constant('WEBSITE_URL');?>
/public/js/searchform.js"></script>
<script type="text/javascript"
	src="<?php echo @constant('WEBSITE_URL');?>
public/assets/lib/ajaxupload.js"></script>

<script>  

	//文件上传组件处理
	jQuery(function () {
   	 	var button = jQuery('#selectfile'), interval;//绑定事件
    	var load = new AjaxUpload(button, {//绑定AjaxUpload
        action: "<?php echo @constant('WEBSITE_URL');?>
fileupload/fileup",//文件要上传到的处理页面,语言可以PHP,ASP,JSP等
        type:"POST",//提交方式
        data:{//还可以提交的值
            module:"ajaxupload",
            type:jQuery("#__mstype__").attr("value"),
        },
        autoSubmit:true,//选择文件后,是否自动提交.这里可以变成true,自己去看看效果吧.
        name:'msUploadFile',//提交的名字
        onChange:function(file,ext){//当选择文件后执行的方法,ext存在文件后续,可以在这里判断文件格式
			$("#file_show").attr("value",file);
        },
        onSubmit: function (file, ext) {//提交文件时执行的方法
        	if(ext && /^(jpg|jpeg|png|gif)$/.test(ext)){
				//ext是后缀名
        		button.value = "正在上传…";
        		button.disabled = "disabled";
			}else{	
				alert("不支持的文件格式！只能上传jpg|jpeg|png|gif") ;
				return false;
			}
        },
        onComplete: function (file, response) {//文件提交完成后可执行的方法
            button.text('浏览');
            this.enable();
			var data=eval("("+response+")");
			if(data.type==0){
				alert(data.message)
			}else{
				$("#entryimg").val(data.filename);
			}
        }
    });
	//	var submit=jQuery('#subm').click(function(){//触发提交的事件.与autoSubmit的设置有关,是否采用
//			load.submit();
//	});
});




	$(document).ready(function() {

        var calendar;
		$("#tcbox").hide();
		$("#tcbox_addentity").hide();
        $("#newcaledar").click(function(){$("#tcbox_addentity").show();clearWinData();$("#saveEvent").removeAttr('un')});
        $("#saveEvent").bind('click',submitEvent);
		displayevent();
		
		$("#fromdate").datepicker({dateFormat:'yy-mm-dd'});  
		$("#todate").datepicker({dateFormat:'yy-mm-dd'});
		
		$('#fromtime').timepicker({'timeFormat': 'H:i:s' });
		$('#totime').timepicker({'timeFormat': 'H:i:s' });
		
		$('.updateBtn').click(function(){
		    closewin('tcbox');
		    clearWinData();
			popUpdateWin(currentCalEvent);
		});
		
		$("#delBtn").bind('click',deleteCalEvent);
	});
	
	var currentCalEvent;
	
	function closewin(winname){
		  $("#"+winname).hide();
	}
	
	function displayevent(){
		
		calendar = $('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			selectable: true,
			events: "<?php echo @constant('WEBSITE_URL');?>
carlendar/getUserCalEvent",
			eventClick: function(calEvent, jsEvent, view) {
				popupDetailWin(calEvent);
		        //alert('Event: ' + calEvent.title+"--"+calEvent.start+"--"+calEvent.end+"--"+calEvent.entrynote);
		
				//change color
		        $(this).css('border-color', 'red');
		
		    },
			select: function(start, end, allDay) {
				clickCalendarItem(start, end, allDay);
			//	  var title = prompt('Event Title:');
			//	if (title) {
			//		calendar.fullCalendar('renderEvent',
			//			{
			//				title: title,
			//				start: start,
			//				end: end,
			//				allDay: allDay
			//			},
			//			true // make the event "stick"
			//		);
			//	}  
				calendar.fullCalendar('unselect');
			} 
		});
	
}

function submitEvent(){
	var title = $("#title").val();
	
	var allday = $("#allday").prop("checked");
	var fromdate = $("#fromdate").val();
	var fromtime = $("#fromtime").val();
	var todate = $("#todate").val();
	var totime = $("#totime").val();
	var note = $("#note").val();
	var rember = $("#rember").prop("checked")==true?'1':'2';
	var location = $("#location").val();
	var from = fromdate;
	var to = todate;
	if(allday==true){
		if($.trim(fromdate).length<1){
			from = new Date();
			from.setHours(0);
			from.setMinutes(0);
			from.setSeconds(0);
			from = from.pattern("yyyy-MM-dd HH:mm:ss");
	        to = "";
		}else{
			from = fromdate;
			to = todate;
		}
	}else{
		if($.trim(fromdate).length<0){
			alert("请填写起始时间");
			return ;
		}
		if(fromtime.length<1){
			fromtime = "00:00:00";
		}
		from = fromdate+" "+fromtime;
		if(totime.length<1){
			totime = "00:00:00";
		}
		if(todate.length<1){
			to = todate;
		}else{
			to = todate+" "+totime;
		}
		
	}
	
	
	var entry = {};
	entry.entrytitle = title;
	entry.entryfrom = $.trim(from);
	entry.entryto = $.trim(to);
	entry.entrylocation = location;
	entry.entrynote = note;
	entry.entryimg =  $("#entryimg").val();
	entry.emailreminder = rember==true?'1':'2';
	
	var entryid = $("#saveEvent").attr("un");
	
	var url;
	if(entryid!=null){
		entry.entryid = entryid;
		url = "<?php echo @constant('WEBSITE_URL');?>
carlendar/updateCustomEventById";
	}else{
		url = "<?php echo @constant('WEBSITE_URL');?>
carlendar/addEvent";
	}
	var param = {"entry":entry,"type":1};
	
	$.ajax({
		url:url,
		type:"post",
		data:param,
		success:function(data){
			//新增数据成功，关闭窗口，将事件显示在日历上
			closewin('tcbox_addentity');
			console.log(entryid);
			if(entryid!=null){
				calendar.fullCalendar("removeEvents",currentCalEvent.id);
				calendar.fullCalendar("rerenderEvents");
				data = entryid;
			}
			 
			console.log(data,title,new Date(from.replace(/-/g,  '/')),allday,from ,from.replace(/-/g,  '/'))
			calendar.fullCalendar('renderEvent',
					{
						id:$.trim(data),
						title: title,
						start: new Date(from.replace(/-/g,  '/')),
						end: to.length<1?null:new  Date(to.replace(/-/g, '/')),
						allDay:allday,
						entrynote:note
					},
					true // make the event "stick"
				);
		},
		error:function(){
			alert("update event fail");
		}
		
	});
}
 

/*
 * 检测对象是否是空对象(不包含任何可读属性)。
 * 方法既检测对象本身的属性，也检测从原型继承的属性(因此没有使hasOwnProperty)。
 */
function isEmpty(obj)
{
    for (var name in obj) 
    {
        return false;
    }
    return true;
};
function clickCalendarItem(start,end,allday){
	clearWinData();
	$("#tcbox_addentity").show();
	$("#allday").prop("checked",allday);
	$("#fromdate").val(start.pattern("yyyy-MM-dd"));
	$("#todate").val(start.pattern("yyyy-MM-dd"));
	if(allday){
		$("#fromtime").val("");
		$("#totime").val("");
	}else{
		$("#fromtime").val(start.pattern("HH:mm"));
		$("#totime").val(end.pattern("HH:mm"));
	}
}

function clearWinData(){
	$("#title").val("");
	$("#allday").prop("checked",false);
	$("#fromdate").val("");
	$("#fromtime").val("");
	$("#todate").val("");
	$("#totime").val("");
	$("#note").val("");
	$("#location").attr("value","");
	
	$("#entryimg").val("");
	$("#entryimg").val("");
	$("#file_show").attr("value","");
	
	$("#rember").prop("checked",false);
}


function popupDetailWin(calEvent){
	var param;
	if(calEvent.color == "#fb7b0e"){
		 param={"type":2,"entryid":calEvent.id};
	}else{
		 param={"type":1,"entryid":calEvent.id};
	}	
	$.ajax({
		url:"<?php echo @constant('WEBSITE_URL');?>
carlendar/getEventById",
		type:"post",
		data:param,
		success:function(data){
		    calEvent = eval('(' + data + ')');
			calendar.fullCalendar("removeEvents",calEvent.id);
		    calendar.fullCalendar("renderEvent",calEvent);
		    $("#tcbox").show();
			$(".eventname").html(calEvent.title);
			var from;
			var to ;
			if(calEvent.end!=null){
				var fromtime = calEvent.start.pattern("HH:mm");
				var totime = calEvent.end.pattern("HH:mm");
				if(fromtime=="00:00"&&fromtime==totime){
					from = calEvent.start.toDateString();
					to = calEvent.end.toDateString();
				}else if(totime!="00:00"){
					to = calEvent.end.toString();
					from = calEvent.start.toString();
				}
				$("#fromtime").val(calEvent.start.pattern("HH:mm"));
				
				$("#todate").val(calEvent.end.pattern("yyyy-MM-dd"));
				$("#totime").val(calEvent.end.pattern("HH:mm"));
				
			}else{
				from = calEvent.start.toString();
			}
			var timeduration ;
			if(to!=null){
				timeduration = from+" - "+to;
			}else{
				timeduration = from;
			}
			$("#timeduration").html(timeduration);
			$("#note_show").val(calEvent.entrynote);
			$("#entryimg").attr("src","<?php echo @constant('WEBSITE_URL');?>
"+calEvent.entryimg);
			currentCalEvent = calEvent;
		},
		error:function(){
			alert("get event fail");
		}
		
	});
	
  	
}

function popUpdateWin(calEvent){
	$("#tcbox_addentity").show();
	$("#title").val(calEvent.title);
	$("#allday").prop("checked",false);
	$("#fromdate").val(calEvent.start.pattern("yyyy-MM-dd"));
	if(calEvent.end!=null){
		var fromtime = calEvent.start.pattern("HH:mm");
		var totime = calEvent.end.pattern("HH:mm");
		
		if(fromtime=="00:00"&&totime==fromtime){
			$("#allday").prop("checked",true);
		}else{
			$("#fromtime").val(calEvent.start.pattern("HH:mm"));
			$("#totime").val(calEvent.end.pattern("HH:mm"));
		}
		$("#todate").val(calEvent.end.pattern("yyyy-MM-dd"));
	}else{
		$("#allday").prop("checked",true);
	}
	$("#note").val(calEvent.entrynote);
	var reminder = calEvent.emailreminder;
	$("#rember").prop("checked",reminder=='1'?true:false);
	$("#location").val(calEvent.entrylocation);
	
	$("#saveEvent").attr("un",calEvent.id);
}

function deleteCalEvent(){
	
	var param={"type":1,"entryid":currentCalEvent.id};
	$.ajax({
		url:"<?php echo @constant('WEBSITE_URL');?>
carlendar/deleteEventById",
		type:"post",
		data:param,
		success:function(data){
		    closewin('tcbox');
			calendar.fullCalendar("removeEvents",currentCalEvent.id);
			calendar.fullCalendar("rerenderEvents");
		
		},
		error:function(){
			alert("delete event fail");
		}
		
	});
	
}

function openBrowse(){ 
	//$("#fileSel").click();
	document.getElementById("fileSel").click();
	var filename = $("#fileSel").val();
	if(filename==null){
		filename = "&nbsp;&nbsp;&nbsp;No File Chosen";
	}else{
		filename = "&nbsp;&nbsp;&nbsp;"+filename;
	}
	$("#filename").html(filename);
} 


/**
日期格式化
 *  yyyy-MM-dd hh:mm:ss
 *	(new Date()).pattern("yyyy-MM-dd hh:mm:ss.S")==> 2006-07-02 08:09:04.423      
 * (new Date()).pattern("yyyy-MM-dd E HH:mm:ss") ==> 2009-03-10 二 20:09:04      
 * (new Date()).pattern("yyyy-MM-dd EE hh:mm:ss") ==> 2009-03-10 周二 08:09:04      
 * (new Date()).pattern("yyyy-MM-dd EEE hh:mm:ss") ==> 2009-03-10 星期二 08:09:04      
 * (new Date()).pattern("yyyy-M-d h:m:s.S") ==> 2006-7-2 8:9:4.18
*/
Date.prototype.pattern=function(fmt) {         
    var o = {         
    "M+" : this.getMonth()+1, //月份         
    "d+" : this.getDate(), //日         
    "h+" : this.getHours()%12 == 0 ? 12 : this.getHours()%12, //小时         
    "H+" : this.getHours(), //小时         
    "m+" : this.getMinutes(), //分         
    "s+" : this.getSeconds(), //秒         
    "q+" : Math.floor((this.getMonth()+3)/3), //季度         
    "S" : this.getMilliseconds() //毫秒         
    };         
    var week = {         
    "0" : "/u65e5",         
    "1" : "/u4e00",         
    "2" : "/u4e8c",         
    "3" : "/u4e09",         
    "4" : "/u56db",         
    "5" : "/u4e94",         
    "6" : "/u516d"        
    };         
    if(/(y+)/.test(fmt)){         
        fmt=fmt.replace(RegExp.$1, (this.getFullYear()+"").substr(4 - RegExp.$1.length));         
    }         
    if(/(E+)/.test(fmt)){         
        fmt=fmt.replace(RegExp.$1, ((RegExp.$1.length>1) ? (RegExp.$1.length>2 ? "/u661f/u671f" : "/u5468") : "")+week[this.getDay()+""]);         
    }         
    for(var k in o){         
        if(new RegExp("("+ k +")").test(fmt)){         
            fmt = fmt.replace(RegExp.$1, (RegExp.$1.length==1) ? (o[k]) : (("00"+ o[k]).substr((""+ o[k]).length)));         
        }         
    }         
    return fmt;         
}

</script>
</head>

<body>
	<?php echo $_smarty_tpl->getSubTemplate ('layouts/headerandsearch.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


	<div class="mian">
		<div class="content">
			<div class="events">
				<div class="gigs-1">
					<span> <a href="javascript:void(0);" class="fl btn btn-black-2"
						id="newcaledar">New Calendar Entry</a> <a href="#"
						class="fl btn btn-black-3">Export your Calendar</a>
					</span>
					<p class=" mt15 gigs-top-xx fr">

						<a href="<?php echo @constant('WEBSITE_URL');?>
userevent"
							class="btn-hs2 btn-Calendar right-by">Agenda</a>
					</p>
				</div>
				<div class="mt15">
					<div id='calendar'></div>
				</div>
				<table class="gigs-u-l" style="margin: 0;">
					<tr>
						<td valign="center"><b>Legend:</b></td>
						<td><a href="#" class="btn btn-range btn-Calendar">Search4Gigs
								Event</a></td>
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
			<div class="row3 map gigs_tck">
				<span class="fl pl">Event Details</span><a href="#" class="fr pr"
					onclick="javascript:closewin('tcbox');">X</a>
			</div>
			<form>
				<table width="100%" border="0" cellspacing="0" cellpadding="0"
					class="gigs-tck-table mt15 ">
					<tr>
						<td width="50" align="right" valign="top"><img id="entryimg" height="110" width="110" 
							src="<?php echo @constant('WEBSITE_URL');?>
public/images/calendar-ioc.gif" /></td>
						<td align="left">
							<h4 class="eventname">Lorem event title</h4>
							<p class="time" id="timeduration">Saturday, 28 July 2013 19:30
								BST</p>
						</td>
					</tr>
				</table>
				<table>
					<tr>

						<td class="time">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"
							class="input-style4 textinput-w3" id="note_show" readOnly="true" /></td>
					</tr>
				</table>
			</form>
			<div class="row3 map gigs_top">
				<span class="fl"><a href="javascript:void(0);"
					class="btn btn-blue btn-Calendar ml15 updateBtn">Edit</a><font><a
						href="javascript:void(0);" class="cancel"
						onclick="javascript:closewin('tcbox');">Cancle</a></font></span> <span
					class="fr pr"><a href="javascript:void(0);"
					class="btn btn-red btn-Calendar" id="delBtn">Delete</a></span>
			</div>
		</div>
	</div>



	<!-- 添加事件的弹出窗口 -->
	<div id="tcbox_addentity">
		<div id="tccontent">
			<div class="row3 map gigs_tck">
				<span class="fl pl">Edit Entry</span><a href="#" class="fr pr"
					onclick="javascript:closewin('tcbox_addentity');">X</a>
			</div>
			<table width="100%" border="0" cellspacing="0" cellpadding="0"
				class="table-edit mt15" style="border: none;">
				<tr>
					<td width="77" align="right" valign="middle">Title&nbsp;&nbsp;</td>
					<td align="left"><span class="inputborder"><input type="text"
							class="input-style4 textinput-w3" id="title" /></span></td>
				</tr>
				<tr>
					<td width="77" align="right" valign="middle">&nbsp;</td>
					<td align="left"><input type="checkbox" align="middle" id="allday"><span
							class="fontsize12">&nbsp;&nbsp;&nbsp;All Day</span></td>
				</tr>
				<tr>
					<td width="77" align="right" valign="middle">From&nbsp;&nbsp;</td>
					<td align="left"><span class="inputborder"><input type="text"
							class="input-style4 textinput-w4" id="fromdate" readOnly="true" /><a
							href="javascript:void(0);"><img
								src="<?php echo @constant('WEBSITE_URL');?>
public/images/calendar-iocx.gif" /></a></span>
						<span class="inputborder"><input type="text"
							class="input-style4 textinput-w4" id="fromtime" /><a
							href="javascript:void(0);"><img
								src="<?php echo @constant('WEBSITE_URL');?>
public/images/time-iocx.gif" /></a></span>
					</td>
				</tr>
				<tr>
					<td width="77" align="right" valign="middle">To&nbsp;&nbsp;</td>
					<td align="left"><span class="inputborder"><input type="text"
							class="input-style4 textinput-w4" id="todate" readOnly="true" /><a
							href="#"><img
								src="<?php echo @constant('WEBSITE_URL');?>
public/images/calendar-iocx.gif" /></a></span>
						<span class="inputborder"><input type="text"
							class="input-style4 textinput-w4" id="totime" /><a
							href="javascript:void(0);"><img
								src="<?php echo @constant('WEBSITE_URL');?>
public/images/time-iocx.gif" /></a></span>
					</td>
				</tr>
				<tr>
					<td width="77" align="right" valign="middle">Location&nbsp;&nbsp;</td>
					<td align="left"><span class="inputborder"><input type="text"
							class="input-style4 textinput-w3" id="location" /></span></td>
				</tr>
				<tr>
					<td width="77" align="right" valign="middle">Image&nbsp;&nbsp;</td>

					<td align="left"><span class="inputborder"><input type="text"
							id="file_show" class="input-style4 textinput-w3" readOnly="true" /></span>
						<input type="button" class="btn btn-small" id="selectfile"
						value="选择上传文件" /> <input type="text" id="entryimg"
						style="display: none;"></input></td>
				</tr>
				<tr>
					<td width="77" align="right" valign="middle">Note&nbsp;&nbsp;</td>
					<td align="left"><span class="inputborder"><textarea id="note"
								style="height: 80px" class="input-style4 textinput-w3"></textarea></span>
					</td>
				</tr>
				<tr>
					<td width="77" align="right" valign="middle">&nbsp;</td>
					<td align="left"><input type="checkbox" align="middle" id="rember"><span
							class="fontsize12">&nbsp;&nbsp;&nbsp;Email Reminder</span></td>
				</tr>
			</table>
			<div class="row3 map gigs_top">
				<span class="fl"><a href="javascript:void(0);"
					class="btn btn-black-2 btn-Calendar ml15" id="saveEvent">Save</a><font><a
						href="javascript:void(0);" class="cancel"
						onclick="javascript:closewin('tcbox_addentity');">cancel</a></font></span>
			</div>
		</div>
	</div>

	<?php echo $_smarty_tpl->getSubTemplate ('layouts/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>