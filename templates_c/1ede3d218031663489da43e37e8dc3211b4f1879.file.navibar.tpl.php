<?php /* Smarty version Smarty-3.1.13, created on 2013-10-24 22:57:56
         compiled from "E:\phpweb\tickets\templates\admin\navibar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:166752198277bbd515-12245088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ede3d218031663489da43e37e8dc3211b4f1879' => 
    array (
      0 => 'E:\\phpweb\\tickets\\templates\\admin\\navibar.tpl',
      1 => 1382624645,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '166752198277bbd515-12245088',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52198277bda966_47866959',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52198277bda966_47866959')) {function content_52198277bda966_47866959($_smarty_tpl) {?>  <body class=""> 
  <!--<![endif]-->
<div class="navbar">
        <div class="navbar-inner">
                <ul class="nav pull-right">
                    
                    <!-- li><a href="#" class="hidden-phone visible-tablet visible-desktop" role="button">Style Template</a></li 
					 
				 
                    <li id="fat-menu" class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-cog"></i>设置< class="icon-caret-down"></i>
						</a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo @constant('WEBSITE_URL');?>
/admin/index/setting">系统设置</a></li>
                        </ul>
                    </li>
				 -->
					
					<li id="fat-menu" class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Style Template
                            <i class="icon-caret-down"></i>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a href="<?php echo @constant('WEBSITE_URL');?>
admin/set/index/?t=default">default</li>
                            <li><a href="<?php echo @constant('WEBSITE_URL');?>
admin/set/index/?t=blacktie">Black</a></li>
                            <li><a href="<?php echo @constant('WEBSITE_URL');?>
admin/set/index/?t=wintertide">Gray</a></li>
							<li><a href="<?php echo @constant('WEBSITE_URL');?>
admin/set/index/?t=schoolpainting">Green</a></li>
                        </ul>
                    </li>
					
					<li id="fat-menu" class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-user"></i> <?php echo $_SESSION['aduser']->user_name;?>

                            <i class="icon-caret-down"></i>
                        </a>

                        <ul class="dropdown-menu">
                            
                            <li><a tabindex="-1" href="<?php echo @constant('WEBSITE_URL');?>
logout.php">Log Out<a></li>
                        </ul>
                    </li>
                    
                </ul>
                <a class="brand" href="<?php echo @constant('WEBSITE_URL');?>
/index.php"><span class="first"></span> <span class="second"><?php echo @constant('ADMIN_TITLE');?>
</span></a>
        </div>
</div><?php }} ?>