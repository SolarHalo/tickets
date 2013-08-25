<?php /* Smarty version Smarty-3.1.13, created on 2013-08-25 06:05:11
         compiled from "E:\phpweb\tickets\templates\admin\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:415352198277c01167-03900267%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74338d51c53d3739a2e83e1c59d901e64fb956dd' => 
    array (
      0 => 'E:\\phpweb\\tickets\\templates\\admin\\footer.tpl',
      1 => 1377181910,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '415352198277c01167-03900267',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52198277c05597_54099631',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52198277c05597_54099631')) {function content_52198277c05597_54099631($_smarty_tpl) {?>                    
	
					<footer>
                        <hr>
                         
                    </footer>
				</div>
			</div>
		</div>
    <script src="<?php echo @constant('WEBSITE_URL');?>
/public/assets/lib/bootstrap/js/bootstrap.js"></script>
	
<!--- + -快捷方式的提示 --->
	
<script type="text/javascript">	
	
alertDismiss("alert-success",3);
alertDismiss("alert-info",10);
	
listenShortCut("icon-plus");
listenShortCut("icon-minus");

</script>
  </body>
</html><?php }} ?>