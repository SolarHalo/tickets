<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>user agenda manager</title>


<link href="{{$smarty.const.WEBSITE_URL}}public/style/reset.css" type="text/css" rel="stylesheet" />
<link href="{{$smarty.const.WEBSITE_URL}}public/style/style.css" type="text/css" rel="stylesheet" />
<link href='{{$smarty.const.WEBSITE_URL}}public/fullcalendar/fullcalendar.css' rel='stylesheet' />
<link href='{{$smarty.const.WEBSITE_URL}}public/fullcalendar/fullcalendar.print.css' rel='stylesheet' media='print' />
<link href="{{$smarty.const.WEBSITE_URL}}public/assets/css/jquery.timepicker.css" type="text/css" rel="stylesheet" />

<script src='{{$smarty.const.WEBSITE_URL}}public/jquery/jquery-1.9.1.min.js'></script>
<script src='{{$smarty.const.WEBSITE_URL}}public/jquery/jquery-ui-1.10.2.custom.min.js'></script>
<script src='{{$smarty.const.WEBSITE_URL}}public/js/usercalendar.js'></script>
<script src='{{$smarty.const.WEBSITE_URL}}public/fullcalendar/fullcalendar.min.js'></script>
<script src='{{$smarty.const.WEBSITE_URL}}public/assets/js/My97DatePicker/WdatePicker.js'></script>

<script src='{{$smarty.const.WEBSITE_URL}}public/assets/js/jquery.timepicker.js'></script>



<script>
   
	$(document).ready(function() {
        var calendar;
		$("#tcbox").hide();
		$("#tcbox_addentity").hide();
        $("#newcaledar").click(function(){$("#tcbox_addentity").show();});
        $("#saveEvent").bind('click',submitEvent);
		displayevent();
		
		$('#fromtime').timepicker({'timeFormat': 'H:i:s' });
		$('#totime').timepicker({'timeFormat': 'H:i:s' });
		
		
	});
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
			editable: true,
			events: "{{$smarty.const.WEBSITE_URL}}carlendar/getUserCalEvent"
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
	var rember = $("#rember").attr("checked")==true?'1':'2';
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
			from = fromdate+" 00:00:00";
			to = "";
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
		if(totime.length<0){
			totime = "00:00:00";
		}
		to = todate+" "+totime;
	}
	
	
	var entry = {};
	entry.entrytitle = title;
	entry.entryfrom = $.trim(from);
	entry.entryto = $.trim(to);
	entry.entrylocation = location;
	entry.entrynote = note;
	entry.emailreminder = rember==true?'1':'2';
	var param = {"entry":entry,"type":1};
	
	$.ajax({
		url:"{{$smarty.const.WEBSITE_URL}}carlendar/addEvent",
		type:"post",
		data:param,
		success:function(data){
			//新增数据成功，关闭窗口，将事件显示在日历上
			closewin('tcbox_addentity');
			calendar.fullCalendar('renderEvent',
					{
						title: title,
						start: new Date(from),
						end: new Date(to),
						allDay:allday
					},
					true // make the event "stick"
				);
		
		},
		error:function(){
			alert("add event fail");
		}
		
	});
	
	
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
{{include file='layouts/headerandsearch.tpl'}} 

<div class="mian">
    <div class="content">
    	<div class="events">
        	<div class="gigs-1">
                <span>
                    <a href="javascript:void(0);" class="fl btn btn-black-2" id="newcaledar" >New Calendar Entry</a>
                    <a href="#" class="fl btn btn-black-3">Export your Calendar</a>
                </span>
                <p class=" mt15 gigs-top-xx fr"> 
                    <a href="#" class="btn-hs2 btn-Calendar left-by">Day</a> 
                    <a href="#" class="btn-hs2 btn-Calendar by-hover">Week</a> 
                    <a href="#" class="btn-hs2 btn-Calendar">Month</a> 
                    <a href="{{$smarty.const.WEBSITE_URL}}userevent" class="btn-hs2 btn-Calendar right-by">Agenda</a> 
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
        <td width="50" align="right" valign="top"><img src="{{$smarty.const.WEBSITE_URL}}public/images/calendar-ioc.gif" /></td>
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
        	<span class="inputborder"><input type="text" class="input-style4 textinput-w3" id="title" /></span>
        </td>
      </tr>
       <tr>
        <td width="77" align="right" valign="middle">&nbsp;</td>
        <td align="left">
        	<input type="checkbox" align="middle" id="allday" ><span class="fontsize12">&nbsp;&nbsp;&nbsp;All Day</span>
        </td>
      </tr> 
       <tr>
        <td width="77" align="right" valign="middle">From&nbsp;&nbsp;</td>
        <td align="left">
        	<span class="inputborder"><input type="text" class="input-style4 textinput-w4" id="fromdate" onclick="WdatePicker()" readOnly="true"/><a href="javascript:void(0);"><img src="{{$smarty.const.WEBSITE_URL}}public/images/calendar-iocx.gif" /></a></span>
            <span class="inputborder"><input type="text" class="input-style4 textinput-w4" id="fromtime" /><a href="javascript:void(0);" ><img src="{{$smarty.const.WEBSITE_URL}}public/images/time-iocx.gif" /></a></span>
        </td>
      </tr> 
       <tr>
        <td width="77" align="right" valign="middle">To&nbsp;&nbsp;</td>
        <td align="left">
        	<span class="inputborder"><input type="text" class="input-style4 textinput-w4" id="todate" onclick="WdatePicker()" readOnly="true"/><a href="#"><img src="{{$smarty.const.WEBSITE_URL}}public/images/calendar-iocx.gif" /></a></span>
            <span class="inputborder"><input type="text" class="input-style4 textinput-w4" id="totime"/><a href="javascript:void(0);"><img src="{{$smarty.const.WEBSITE_URL}}public/images/time-iocx.gif" /></a></span>
        </td>
      </tr> 
       <tr>
        <td width="77" align="right" valign="middle">Location&nbsp;&nbsp;</td>
        <td align="left">
        		<span class="inputborder"><input type="text" class="input-style4 textinput-w3" id="location"/></span>
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
        		<span class="inputborder"><textarea id="note" style="height:80px" class="input-style4 textinput-w3"></textarea></span>
        </td>
      </tr> 
       <tr>
        <td width="77" align="right" valign="middle">&nbsp;</td>
        <td align="left">
        	<input type="checkbox" align="middle" id="rember"><span class="fontsize12">&nbsp;&nbsp;&nbsp;Email Reminder</span>
        </td>
      </tr> 
    </table> 
    </form> 
    <div class="row3 map gigs_top">
        <span class="fl"><a href="javascript:void(0);" class="btn btn-black-2 btn-Calendar ml15" id="saveEvent">Save</a><font><a href="#" class="cancel">cancel</a></font></span> 
    </div>
  </div>
</div>

{{include file='layouts/footer.tpl'}} 