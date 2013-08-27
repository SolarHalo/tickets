<?php /* Smarty version Smarty-3.1.13, created on 2013-08-27 15:39:51
         compiled from "E:\phpweb\tickets\templates\layouts\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29259521cac278edac9-74421513%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c4f65794d7eae96d1722ae1b3426825597045e7' => 
    array (
      0 => 'E:\\phpweb\\tickets\\templates\\layouts\\header.tpl',
      1 => 1377610713,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29259521cac278edac9-74421513',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_521cac278fb1d2_57169527',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_521cac278fb1d2_57169527')) {function content_521cac278fb1d2_57169527($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
                <a href="#"><img src="<?php echo @constant('WEBSITE_URL');?>
public/images/logo.png" class="index-logo" /></a>
            </li>
        </ul>
    </div>
</div>
<div class="index_banner">
	<div>
    	<a href="#"><img src="<?php echo @constant('WEBSITE_URL');?>
public/images/topbanner.png" /></a>
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
</div><?php }} ?>