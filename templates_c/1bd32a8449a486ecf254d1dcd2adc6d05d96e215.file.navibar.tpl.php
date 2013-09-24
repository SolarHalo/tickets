<?php /* Smarty version Smarty-3.1.13, created on 2013-09-24 14:47:19
         compiled from "G:\phpserver\tickets\templates\admin\navibar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7516521c49ccb6f617-06047350%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1bd32a8449a486ecf254d1dcd2adc6d05d96e215' => 
    array (
      0 => 'G:\\phpserver\\tickets\\templates\\admin\\navibar.tpl',
      1 => 1380034033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7516521c49ccb6f617-06047350',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_521c49ccc4e328_04759434',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_521c49ccc4e328_04759434')) {function content_521c49ccc4e328_04759434($_smarty_tpl) {?>  <body class=""> 
  <!--<![endif]-->
<div class="navbar">
        <div class="navbar-inner">
                <ul class="nav pull-right">
                    
                    <!-- li><a href="#" class="hidden-phone visible-tablet visible-desktop" role="button">设置模板</a></li 
					 
				 
                    <li id="fat-menu" class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-cog"></i>设置<i class="icon-caret-down"></i>
						</a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo @constant('WEBSITE_URL');?>
/admin/index/setting">系统设置</a></li>
                        </ul>
                    </li>
				 -->
					
					<li id="fat-menu" class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
							
                            选择模板
                            <i class="icon-caret-down"></i>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a href="<?php echo @constant('WEBSITE_URL');?>
admin/set/index/?t=default">默认模板</a></li>
                            <li><a href="<?php echo @constant('WEBSITE_URL');?>
admin/set/index/?t=blacktie">黑色领结</a></li>
                            <li><a href="<?php echo @constant('WEBSITE_URL');?>
admin/set/index/?t=wintertide">冰雪冬季</a></li>
							<li><a href="<?php echo @constant('WEBSITE_URL');?>
admin/set/index/?t=schoolpainting">青葱校园</a></li>
                        </ul>
                    </li>
					
					<li id="fat-menu" class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-user"></i> <?php echo $_SESSION['aduser']->user_name;?>

                            <i class="icon-caret-down"></i>
                        </a>

                        <ul class="dropdown-menu">
                            
                            <li><a tabindex="-1" href="<?php echo @constant('WEBSITE_URL');?>
logout.php">登出</a></li>
                        </ul>
                    </li>
                    
                </ul>
                <a class="brand" href="<?php echo @constant('WEBSITE_URL');?>
/index.php"><span class="first"></span> <span class="second"><?php echo @constant('ADMIN_TITLE');?>
</span></a>
        </div>
</div><?php }} ?>