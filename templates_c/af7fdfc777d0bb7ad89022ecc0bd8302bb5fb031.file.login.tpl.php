<?php /* Smarty version Smarty-3.1.13, created on 2013-12-26 22:49:14
         compiled from "E:\phpweb\tickets\templates\admin\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:576252bc41eac02304-06857844%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af7fdfc777d0bb7ad89022ecc0bd8302bb5fb031' => 
    array (
      0 => 'E:\\phpweb\\tickets\\templates\\admin\\login.tpl',
      1 => 1382624645,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '576252bc41eac02304-06857844',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'admin_action_alert' => 0,
    '_POST' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52bc41eac5c069_17683269',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52bc41eac5c069_17683269')) {function content_52bc41eac5c069_17683269($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/simple_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  <body class="simple_body"> 
  <!--<![endif]-->
    
    <div class="navbar">
        <div class="navbar-inner">
                <ul class="nav pull-right">
                    
                </ul>
                <a class="brand" href="<?php echo @constant('WEBSITE_URL');?>
/index.php"><span class="first"></span> <span class="second"><?php echo @constant('PROJECT_NAME');?>
</span></a>
        </div>
    </div>
<div>
<div class="container-fluid">	    
    <div class="row-fluid">	
	
    <div class="dialog">
		<?php echo $_smarty_tpl->tpl_vars['admin_action_alert']->value;?>
	
        <div class="block">
            <p class="block-heading">login in</p>
            <div class="block-body">
                <form name="loginForm" method="post" action="">
                    <label>Account</label>
                    <input type="text" class="span12" name="user_name" value="<?php echo $_smarty_tpl->tpl_vars['_POST']->value['user_name'];?>
" required="true" autofocus="true">
                    <label>password</label>
                    <input type="password" class="span12" name="password" value = "<?php echo $_smarty_tpl->tpl_vars['_POST']->value['password'];?>
" required="true" >
                    
                     <label>Verification code</label>
					<input type="text" name="verify_code" class="span4" placeholder="input verification code" autocomplete="off" required="required">
					<a href="#"><img title="Verification code" id="verify_code" src="<?php echo @constant('WEBSITE_URL');?>
/framework/util/verify_code_cn.php" style="vertical-align:top"></a>
					<div class="clearfix"><input type="checkbox" name="remember" value="remember-me"> Remember me
					<span class="label label-info">Do not have to log in again within a month</span>
					<input type="submit" class="btn btn-primary pull-right" name="loginSubmit" value="login"/></div>
					
                </form>
            </div>
        </div>
     
    </div>
<script type="text/javascript">
$("#verify_code").click(function(){
	var d = new Date()
	var hour = d.getHours(); 
	var minute = d.getMinutes();
	var sec = d.getSeconds();
    $(this).attr("src","<?php echo @constant('WEBSITE_URL');?>
/framework/util/verify_code_cn.php?"+hour+minute+sec);
});
</script>

<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<?php }} ?>