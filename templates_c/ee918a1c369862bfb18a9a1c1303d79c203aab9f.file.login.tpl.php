<?php /* Smarty version Smarty-3.1.13, created on 2013-09-12 04:09:12
         compiled from "G:\phpserver\tickets\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6836521c69bc3ebee2-33341521%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee918a1c369862bfb18a9a1c1303d79c203aab9f' => 
    array (
      0 => 'G:\\phpserver\\tickets\\templates\\login.tpl',
      1 => 1378958825,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6836521c69bc3ebee2-33341521',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_521c69bc4d92e7_87567030',
  'variables' => 
  array (
    'errortip' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_521c69bc4d92e7_87567030')) {function content_521c69bc4d92e7_87567030($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>login</title>
<link href="<?php echo @constant('WEBSITE_URL');?>
public/style/reset.css" type="text/css" rel="stylesheet" />
<link href="<?php echo @constant('WEBSITE_URL');?>
public/style/style.css" type="text/css" rel="stylesheet" /> 
<link href="<?php echo @constant('WEBSITE_URL');?>
public/style/validationEngine.jquery.css" type="text/css" rel="stylesheet" /> 
<link href="<?php echo @constant('WEBSITE_URL');?>
public/style/func.css" type="text/css" rel="stylesheet" /> 
<link rel="stylesheet" href="<?php echo @constant('WEBSITE_URL');?>
/public/assets/css/jquery-ui.css" />
<link rel="stylesheet" href="<?php echo @constant('WEBSITE_URL');?>
/public/assets/css/jquery.ui.datepicker.css" />
<script src="<?php echo @constant('WEBSITE_URL');?>
public/js/jquery-1.10.1.min.js" type="text/javascript"></script> 
<script src="<?php echo @constant('WEBSITE_URL');?>
/public/assets/js/jquery-ui.js"></script>
<script src="<?php echo @constant('WEBSITE_URL');?>
/public/assets/js/jquery.ui.datepicker.js"></script>
<script src="<?php echo @constant('WEBSITE_URL');?>
/public/js/searchform.js"></script>
</head> 
<body> 
<?php echo $_smarty_tpl->getSubTemplate ('layouts/headerandsearch.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
<div class="mian">
    <div class="content">
    	<div class="login-l login">
        	<h6>sign&nbsp;&nbsp;in</h6>
        	<?php echo $_smarty_tpl->tpl_vars['errortip']->value;?>

        	<form id="loginform" name="loginform" method="post">
            <table> 
				<tr>
                    <td><span>Username</span><input type="text" class="input-style3 validate[required] text-input"   autofocus="true" name="user_name" tabindex=1 /></td> 
                </tr>
				<tr>
                    <td><span>Password<a href="#">Forgotten your password?</a></span><input type="password" class="input-style3 validate[required] text-input " name="password" tabindex=2/></td>  
                </tr>
                <tr>
                    <td><span><input type="checkbox" name="remember" value="1"/><font>Remember Me</font></span></td>  
                </tr>
                <tr>
                    <td><input type="submit" class="input-style1" value="sign&nbsp;&nbsp;in" /></td>  
                </tr>
            </table>          
            </form>
        </div>
        <div class="login-r login">
        	<h6>ARE&nbsp;&nbsp;YOU&nbsp;&nbsp;A&nbsp;&nbsp;NEW&nbsp;&nbsp;USER?</h6>
            <table> 
				<tr>
                    <td><span>Sign up to Search4Gigs right here...</span><a href="<?php echo @constant('WEBSITE_URL');?>
register" class="input-style1">register</a></td> 
                </tr> 
                <tr><td height="30"></td></tr>
            </table>     
             <h6>OR.....</h6>
            <table class="bor-none"> 
				<tr>
                    <td><a href="#" class="btn btn-blue btn-Calendar"><img src="<?php echo @constant('WEBSITE_URL');?>
public/images/fb_iocn.gif" /> Log in with Facebook</a></td> 
                </tr>
                <tr>
                    <td><a href="#" class="btn btn-lc btn-Calendar"><img src="<?php echo @constant('WEBSITE_URL');?>
public/images/in_iocn.gif" /> Log in with Linkedln</a></td> 
                </tr>
                <tr>
                    <td><a href="#" class="btn btn-hui btn-Calendar"><img src="<?php echo @constant('WEBSITE_URL');?>
public/images/tt_iocn.gif" /> Log in with Twitter</a></td> 
                </tr>  
            </table>       
        </div>
    </div>
	<div class="h-blackbg"></div>
</div>
<script src="<?php echo @constant('WEBSITE_URL');?>
public/js/jquery.validationEngine-en.js" type="text/javascript"></script>
<script src="<?php echo @constant('WEBSITE_URL');?>
public/js/jquery.validationEngine.js" type="text/javascript"></script> 


	
<script type="text/javascript"> 
$(document).ready(function(){
	// binds form submission and fields to the validation engine
	$("#loginform").validationEngine();
}); 
</script>
<?php echo $_smarty_tpl->getSubTemplate ('layouts/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 <?php }} ?>