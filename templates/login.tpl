<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>index</title>
<link href="{{$smarty.const.WEBSITE_URL}}public/style/reset.css" type="text/css" rel="stylesheet" />
<link href="{{$smarty.const.WEBSITE_URL}}public/style/style.css" type="text/css" rel="stylesheet" /> 
</head>

<body>
{{include file='layouts/headerandsearch.tpl'}} 
<div class="mian">
    <div class="content">
    	<div class="login-l login">
        	<h6>sign&nbsp;&nbsp;in</h6>
        	<form>
            <table> 
				<tr>
                    <td><span>Username</span><input type="text" class="input-style3" /></td> 
                </tr>
				<tr>
                    <td><span>Password<a href="#">Forgotten your password?</a></span><input type="password" class="input-style3" /></td>  
                </tr>
                <tr>
                    <td><span><input type="checkbox"/><font>Remember Me</font></span></td>  
                </tr>
                <tr>
                    <td><input type="button" class="input-style1" value="sign&nbsp;&nbsp;in" /></td>  
                </tr>
            </table>          
            </form>
        </div>
        <div class="login-r login">
        	<h6>ARE&nbsp;&nbsp;YOU&nbsp;&nbsp;A&nbsp;&nbsp;NEW&nbsp;&nbsp;USER?</h6>
            <table> 
				<tr>
                    <td><span>Sign up to Search4Gigs right here...</span><a href="#" class="input-style1">register</a></td> 
                </tr> 
                <tr><td height="30"></td></tr>
            </table>     
        </div>
    </div>
	<div class="h-blackbg"></div>
</div>
{{include file='layouts/footer.tpl'}} 