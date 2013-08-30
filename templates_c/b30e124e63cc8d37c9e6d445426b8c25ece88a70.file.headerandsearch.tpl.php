<?php /* Smarty version Smarty-3.1.13, created on 2013-08-30 19:05:30
         compiled from "E:\phpweb\tickets\templates\layouts\headerandsearch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:143215220d0dad747a3-80643685%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b30e124e63cc8d37c9e6d445426b8c25ece88a70' => 
    array (
      0 => 'E:\\phpweb\\tickets\\templates\\layouts\\headerandsearch.tpl',
      1 => 1377782799,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143215220d0dad747a3-80643685',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5220d0dadf88f7_62063880',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5220d0dadf88f7_62063880')) {function content_5220d0dadf88f7_62063880($_smarty_tpl) {?><div id="head">
	<div>
        <span class="index-manage"><a href="#"><font color="f7931d">Manage</font> your agenda +</a></span>
        <ul>
           <?php if (empty($_SESSION['user'])){?>
            <li>
                <a href="<?php echo @constant('WEBSITE_URL');?>
register" class="input-style1">Sign up</a>
                <a href="<?php echo @constant('WEBSITE_URL');?>
login" class="input-style1">Sign In</a>
            </li>
            <?php }else{ ?>
            <li class="navuserlogin">
                <span class="username"><div>Mr Igor Diez</div><span>0</span></span>
                <a href="#"  class="btn btn-range btn-Calendar out">Log Out</a> 
            </li>
            <?php }?>
            
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
<div class="search">
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