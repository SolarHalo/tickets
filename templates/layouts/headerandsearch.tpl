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
                <span class="username"><div>Mr Igor Diez</div><span>0</span></span>
                <a href="#"  class="btn btn-range btn-Calendar out">Log Out</a> 
            </li>
            {{/if}}
            
            <li class="navlist">
                <a href="#">
                    YOUR CALENDAR<br /> 
                    <font>View and Manage your calendar of events</font>
                </a>
            </li>
            <li class="navlist">
                <a href="#">
                    EVENTS<br /> 
                    <font>What's on?</font>
                </a>
            </li>
            <li class="navlogo">
                <a href="#"><img src="{{$smarty.const.WEBSITE_URL}}public/images/logo.png" class="index-logo" /></a>
            </li>
        </ul>
    </div>
</div>
<div class="search">
	<div>
    	<div>
            	<table>
                	<tr>
                    	<td><font class="fontstyle">Find&nbsp;&nbsp;an&nbsp;&nbsp;event</font></td>
                    	<td><input type="text" name="keyword" id="keyword" value="{{$keyword}}" class="searchinput textinput-w" /></td>
                        <td><input type="text" name="location" id="location" value="{{$location}}" class="searchinput textinput-w" /></td>
                        <td><input type="text" name="fromDate" id="fromDate" value="{{$fromDate}}" class="searchinput textinput-w2" /></td>
                        <td><input type="text" name="toDate" id="toDate" value="{{$toDate}}" class="searchinput textinput-w2" /></td>
                        <td><input type="button" onclick="search()" value="Search" class="input-style2" /></td>
                    </tr>
                </table>
        </div>
    </div>
</div>