<?php /* Smarty version Smarty-3.1.13, created on 2013-08-27 06:40:12
         compiled from "G:\phpserver\tickets\templates\admin\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31034521c49ccd84186-35960404%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '130b5bf6feaa3e979aee8b187747a98075474ed2' => 
    array (
      0 => 'G:\\phpserver\\tickets\\templates\\admin\\footer.tpl',
      1 => 1377182238,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31034521c49ccd84186-35960404',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_521c49ccda7a44_57005342',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_521c49ccda7a44_57005342')) {function content_521c49ccda7a44_57005342($_smarty_tpl) {?>                    
	
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