<?php /* Smarty version Smarty-3.1.13, created on 2013-09-20 09:57:57
         compiled from "G:\phpserver\tickets\templates\layouts\headerandsearch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28905521c65d4aa37b3-57099622%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fc9ad758920aaa4926b2b4d8b5229b81cc343e9' => 
    array (
      0 => 'G:\\phpserver\\tickets\\templates\\layouts\\headerandsearch.tpl',
      1 => 1379671069,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28905521c65d4aa37b3-57099622',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_521c65d4ac0440_60316161',
  'variables' => 
  array (
    'keyword' => 0,
    'location' => 0,
    'fromDate' => 0,
    'toDate' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_521c65d4ac0440_60316161')) {function content_521c65d4ac0440_60316161($_smarty_tpl) {?><div id="head">
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
                <span class="username"><div><?php echo $_SESSION['user']->username;?>
</div><span>0</span></span>
                <a href="<?php echo @constant('WEBSITE_URL');?>
login/loginout"  class="btn btn-range btn-Calendar out">Log Out</a> 
            </li>
            <?php }?>
            
            <li class="navlist">
                <a href="<?php echo @constant('WEBSITE_URL');?>
carlendar">
                    YOUR CALENDAR<br /> 
                    <font>View and Manage your calendar of events</font>
                </a>
            </li>
            <li class="navlist">
                <a href="<?php echo @constant('WEBSITE_URL');?>
ticket">
                    EVENTS<br /> 
                    <font>What's on?</font>
                </a>
            </li>
            <li class="navlogo">
                <a href="<?php echo @constant('WEBSITE_URL');?>
"><img src="<?php echo @constant('WEBSITE_URL');?>
public/images/logo.png" class="index-logo" /></a>
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
    	<div><form action="<?php echo @constant('WEBSITE_URL');?>
ticket/index/" name="searchform" method="get">
            	<table>
                	<tr>
                    	<td><font class="fontstyle">Find&nbsp;&nbsp;an&nbsp;&nbsp;event</font></td>
                    	<td><input type="text" name="keyword" id="keyword" value="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
" class="searchinput textinput-w" tabindex=3 /></td>
                        <td><input type="text" name="location" id="location" value="<?php echo $_smarty_tpl->tpl_vars['location']->value;?>
" class="searchinput textinput-w" tabindex=4/></td>
                        <td><input type="text" name="fromDate" id="fromDate" value="<?php echo $_smarty_tpl->tpl_vars['fromDate']->value;?>
" onchange="setting()" readonly="readonly" class="searchinput textinput-w2" tabindex=5/></td>
                        <td><input type="text" name="toDate" id="toDate" value="<?php echo $_smarty_tpl->tpl_vars['toDate']->value;?>
" onchange="setting()" readonly="readonly" class="searchinput textinput-w2" tabindex=6/></td>
                        <td><input type="submit"   value="Search" onclick="check()" class="input-style2" /></td>
                    </tr>
                </table>
               </form>
        </div>
    </div>
</div><?php }} ?>