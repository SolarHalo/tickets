<?php /* Smarty version Smarty-3.1.13, created on 2013-08-27 14:52:27
         compiled from "D:\workspace\php\tickets\templates\admin\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9072521cbd2b289ea1-47081505%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '177420c1c47abe0ae217066d380f32900270f724' => 
    array (
      0 => 'D:\\workspace\\php\\tickets\\templates\\admin\\footer.tpl',
      1 => 1375883358,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9072521cbd2b289ea1-47081505',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_521cbd2b293c78_62569305',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_521cbd2b293c78_62569305')) {function content_521cbd2b293c78_62569305($_smarty_tpl) {?>                    
	
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