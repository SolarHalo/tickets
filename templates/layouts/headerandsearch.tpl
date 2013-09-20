<div id="head">
	<div>
        <span class="index-manage"><a href="#"><font color="f7931d">Manage</font> your agenda +</a></span>
        <ul>
           {{if empty($smarty.session.user) }}
            <li>
                <a href="{{$smarty.const.WEBSITE_URL}}register" class="input-style1">Sign up</a>
                <a href="{{$smarty.const.WEBSITE_URL}}login" class="input-style1">Sign In</a>
            </li>
            {{else}}
          <li class="navuserlogin">
                <span class="username"><div>{{$smarty.session.user->username}}</div><span>0</span></span>
                <a href="{{$smarty.const.WEBSITE_URL}}login/loginout"  class="btn btn-range btn-Calendar out">Log Out</a> 
            </li>
            {{/if}}
            
            <li class="navlist">
                <a href="{{$smarty.const.WEBSITE_URL}}carlendar">
                    YOUR CALENDAR<br /> 
                    <font>View and Manage your calendar of events</font>
                </a>
            </li>
            <li class="navlist">
                <a href="{{$smarty.const.WEBSITE_URL}}ticket">
                    EVENTS<br /> 
                    <font>What's on?</font>
                </a>
            </li>
            <li class="navlogo">
                <a href="{{$smarty.const.WEBSITE_URL}}"><img src="{{$smarty.const.WEBSITE_URL}}public/images/logo.png" class="index-logo" /></a>
            </li>
        </ul>
    </div>
</div>
<script  type="text/javascript">
$(function($) {  
	
	function mouseEvent(objId,objVal){
		   
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
			mouseEvent("toDate","SDate To");
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
<div class="search">
	<div>
    	<div><form action="{{$smarty.const.WEBSITE_URL}}ticket/index/" name="searchform" method="get">
            	<table>
                	<tr>
                    	<td><font class="fontstyle">Find&nbsp;&nbsp;an&nbsp;&nbsp;event</font></td>
                    	<td><input type="text" name="keyword" id="keyword" value="{{$keyword}}" class="searchinput textinput-w" tabindex=3 /></td>
                        <td><input type="text" name="location" id="location" value="{{$location}}" class="searchinput textinput-w" tabindex=4/></td>
                        <td><input type="text" name="fromDate" id="fromDate" value="{{$fromDate}}" onchange="setting()" readonly="readonly" class="searchinput textinput-w2" tabindex=5/></td>
                        <td><input type="text" name="toDate" id="toDate" value="{{$toDate}}" onchange="setting()" readonly="readonly" class="searchinput textinput-w2" tabindex=6/></td>
                        <td><input type="submit"   value="Search" onclick="check()" class="input-style2" /></td>
                    </tr>
                </table>
               </form>
        </div>
    </div>
</div>