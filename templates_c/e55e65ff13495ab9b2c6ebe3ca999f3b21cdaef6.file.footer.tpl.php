<?php /* Smarty version Smarty-3.1.13, created on 2013-08-22 23:32:13
         compiled from "D:\PHPWeb\tickets\templates\admin\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2514552162efdf09bf4-85335189%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e55e65ff13495ab9b2c6ebe3ca999f3b21cdaef6' => 
    array (
      0 => 'D:\\PHPWeb\\tickets\\templates\\admin\\footer.tpl',
      1 => 1377181908,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2514552162efdf09bf4-85335189',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52162efdf118f9_87140608',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52162efdf118f9_87140608')) {function content_52162efdf118f9_87140608($_smarty_tpl) {?>                    
	
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