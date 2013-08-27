<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>index</title>
<link href="{{$smarty.const.WEBSITE_URL}}public/style/reset.css" type="text/css" rel="stylesheet" />
<link href="{{$smarty.const.WEBSITE_URL}}public/style/style.css" type="text/css" rel="stylesheet" /> 
</head>

<body>
<div id="head">
	<div>
        <span class="index-manage"><a href="#"><font color="f7931d">Manage</font> your agenda +</a></span>
        <ul>
            <li class="navuserlogin">
                <span class="username"><div>Mr Igor Diez</div><span>0</span></span>
                <a href="#"  class="btn btn-range btn-Calendar out">Log Out</a> 
            </li>
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
<div class="index_banner">
	<div>
    	<a href="#"><img src="{{$smarty.const.WEBSITE_URL}}public/images/topbanner.png" /></a>
    </div>
</div>
<div id="indexsearch" class="search">
	<div>
    	<div>
        	<form>
            	<table>
                	<tr>
                    	<td><font class="fontstyle">Find&nbsp;&nbsp;an&nbsp;&nbsp;event</font></td>
                    	<td><input type="text" value="Search by keyword" class="searchinput textinput-w" /></td>
                        <td><input type="text" value="Search by location" class="searchinput textinput-w" /></td>
                        <td><input type="text" value="Date From" class="searchinput textinput-w2" /></td>
                        <td><input type="text" value="SDate To" class="searchinput textinput-w2" /></td>
                        <td><input type="button" value="Search" class="input-style2" /></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>