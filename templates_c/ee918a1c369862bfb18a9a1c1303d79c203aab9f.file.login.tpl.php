<?php /* Smarty version Smarty-3.1.13, created on 2013-08-27 08:56:28
         compiled from "G:\phpserver\tickets\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6836521c69bc3ebee2-33341521%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee918a1c369862bfb18a9a1c1303d79c203aab9f' => 
    array (
      0 => 'G:\\phpserver\\tickets\\templates\\login.tpl',
      1 => 1377593695,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6836521c69bc3ebee2-33341521',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_521c69bc4d92e7_87567030',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_521c69bc4d92e7_87567030')) {function content_521c69bc4d92e7_87567030($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>index</title>
<link href="<?php echo @constant('WEBSITE_URL');?>
public/style/reset.css" type="text/css" rel="stylesheet" />
<link href="<?php echo @constant('WEBSITE_URL');?>
public/style/style.css" type="text/css" rel="stylesheet" /> 
</head>

<body>
<?php echo $_smarty_tpl->getSubTemplate ('layouts/headerandsearch.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
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
<?php echo $_smarty_tpl->getSubTemplate ('layouts/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 <?php }} ?>