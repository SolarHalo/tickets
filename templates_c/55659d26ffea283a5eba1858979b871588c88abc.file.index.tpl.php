<?php /* Smarty version Smarty-3.1.13, created on 2013-09-11 05:07:33
         compiled from "G:\phpserver\tickets\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27571521c57859b84c8-84292440%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55659d26ffea283a5eba1858979b871588c88abc' => 
    array (
      0 => 'G:\\phpserver\\tickets\\templates\\index.tpl',
      1 => 1378875544,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27571521c57859b84c8-84292440',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_521c5785b2ff89_56202349',
  'variables' => 
  array (
    'imagesources' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_521c5785b2ff89_56202349')) {function content_521c5785b2ff89_56202349($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('layouts/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
<div class="mian"> 
    <div id="indexcontent" class="content">
    	 <DIV class="main-wrap">
            <DIV id="slide-box">
                <B class="corner"></B>
                <DIV class="slide-content" id="J_slide">
                    <DIV class="wrap slideBox"  id="demo4">
                        <UL class="ks-switchable-content items">
                          <?php echo $_smarty_tpl->tpl_vars['imagesources']->value;?>
 
                        </UL>
                    </DIV>
                    <DIV class="ks-switchable-triggers" id="nav-arrows">
                        <A class=prev id="J_prev" href="javascript:void(0);">
                        </A> 
                        <A class=next id="J_next" href="javascript:void(0);">
                        </A>			
                    </DIV>
                </DIV>
                <B class="corner"></B>	
        	</DIV>
        </DIV>
        <div class="row5">
        	<div>
                <h3>live  at  the  apollo6</h3>
                <span class="time">August 25th, 20:00hrs</span>
                <p>Lorem ipsum dolor sit amet, 
                    consectetur adipisicing elit, sed 
                    do eiusmod tempor incididunt
                </p>
                <A href="#" class="a-but">View Details</A>
            </div>
            <div>
                <h3>live  at  the  apollo6</h3>
                <span class="time">August 25th, 20:00hrs</span>
                <p>Lorem ipsum dolor sit amet, 
                    consectetur adipisicing elit, sed 
                    do eiusmod tempor incididunt
                </p>
                <A href="#" class="a-but">View Details</A>
            </div>
            <div>
                <h3>live  at  the  apollo6</h3>
                <span class="time">August 25th, 20:00hrs</span>
                <p>Lorem ipsum dolor sit amet, 
                    consectetur adipisicing elit, sed 
                    do eiusmod tempor incididunt
                </p>
                <A href="#" class="a-but">View Details</A>
            </div>
            <div>
                <h3>live  at  the  apollo6</h3>
                <span class="time">August 25th, 20:00hrs</span>
                <p>Lorem ipsum dolor sit amet, 
                    consectetur adipisicing elit, sed 
                    do eiusmod tempor incididunt
                </p>
                <A href="#" class="a-but">View Details</A>
            </div>
        </div>
        <div class="row6">
        	<div>
                <h3><img src="<?php echo @constant('WEBSITE_URL');?>
public/images/index-ioc01.gif" />find   an   event</h3> 
                <p>Lorem ipsum dolor sit amet, 
                    consectetur adipisicing elit, sed 
                    do eiusmod tempor incididunt
                </p>
                <A href="#" class="a-but">View Details</A>
            </div>
            <div>
                <h3><img src="<?php echo @constant('WEBSITE_URL');?>
public/images/index-ioc02.gif" />add   to   calendar</h3> 
                <p>Lorem ipsum dolor sit amet, 
                    consectetur adipisicing elit, sed 
                    do eiusmod tempor incididunt
                </p>
                <A href="#" class="a-but">View Details</A>
            </div>
            <div>
                <h3><img src="<?php echo @constant('WEBSITE_URL');?>
public/images/index-ioc03.gif" />iphone  /  android  app</h3> 
                <p>Lorem ipsum dolor sit amet, 
                    consectetur adipisicing elit, sed 
                    do eiusmod tempor incididunt
                </p>
                <A href="#" class="a-but">View Details</A>
            </div>
            <div>
                <h3><img src="<?php echo @constant('WEBSITE_URL');?>
public/images/index-ioc04.gif" />view  video</h3> 
                <p>Lorem ipsum dolor sit amet, 
                    consectetur adipisicing elit, sed 
                    do eiusmod tempor incididunt
                </p>
                <A href="#" class="a-but">View Details</A>
            </div>
        </div> 
    </div> 
</div>
<link href="<?php echo @constant('WEBSITE_URL');?>
public/style/jquery.slideBox.css" rel="stylesheet" type="text/css" />
<script src="<?php echo @constant('WEBSITE_URL');?>
public/js/jquery-1.10.1.min.js" type="text/javascript"></script>
<script src="<?php echo @constant('WEBSITE_URL');?>
public/js/ticket.slide.js" type="text/javascript"></script>
<?php echo $_smarty_tpl->getSubTemplate ('layouts/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
  <?php }} ?>