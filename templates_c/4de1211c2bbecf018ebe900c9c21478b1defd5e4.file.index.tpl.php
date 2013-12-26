<?php /* Smarty version Smarty-3.1.13, created on 2013-12-26 23:33:24
         compiled from "E:\phpweb\tickets\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1971352bc41a2daeef6-75648123%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4de1211c2bbecf018ebe900c9c21478b1defd5e4' => 
    array (
      0 => 'E:\\phpweb\\tickets\\templates\\index.tpl',
      1 => 1388072002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1971352bc41a2daeef6-75648123',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52bc41a2e4b074_91916208',
  'variables' => 
  array (
    'imagesources' => 0,
    'events' => 0,
    'event' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52bc41a2e4b074_91916208')) {function content_52bc41a2e4b074_91916208($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('layouts/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
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
        <?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['events']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value){
$_smarty_tpl->tpl_vars['event']->_loop = true;
?>
                	<div>
                <h3><?php echo $_smarty_tpl->tpl_vars['event']->value['name'];?>
</h3>
                <span class="time"><?php echo $_smarty_tpl->tpl_vars['event']->value['time'];?>
</span>
                <p><?php echo $_smarty_tpl->tpl_vars['event']->value['desc'];?>

                </p>
                <A href="<?php echo $_smarty_tpl->tpl_vars['event']->value['url'];?>
" class="a-but">View Details</A>
            </div>
		<?php } ?>
<!--         	<div> -->
<!--                 <h3>live  at  the  apollo6</h3> -->
<!--                 <span class="time">August 25th, 20:00hrs</span> -->
<!--                 <p>Lorem ipsum dolor sit amet,  -->
<!--                     consectetur adipisicing elit, sed  -->
<!--                     do eiusmod tempor incididunt -->
<!--                 </p> -->
<!--                 <A href="<?php echo @constant('WEBSITE_URL');?>
about" class="a-but">View Details</A> -->
<!--             </div> -->
<!--             <div> -->
<!--                 <h3>live  at  the  apollo6</h3> -->
<!--                 <span class="time">August 25th, 20:00hrs</span> -->
<!--                 <p>Lorem ipsum dolor sit amet,  -->
<!--                     consectetur adipisicing elit, sed  -->
<!--                     do eiusmod tempor incididunt -->
<!--                 </p> -->
<!--                 <A href="<?php echo @constant('WEBSITE_URL');?>
about" class="a-but">View Details</A> -->
<!--             </div> -->
<!--             <div> -->
<!--                 <h3>live  at  the  apollo6</h3> -->
<!--                 <span class="time">August 25th, 20:00hrs</span> -->
<!--                 <p>Lorem ipsum dolor sit amet,  -->
<!--                     consectetur adipisicing elit, sed  -->
<!--                     do eiusmod tempor incididunt -->
<!--                 </p> -->
<!--                 <A href="<?php echo @constant('WEBSITE_URL');?>
about" class="a-but">View Details</A> -->
<!--             </div> -->
<!--             <div> -->
<!--                 <h3>live  at  the  apollo6</h3> -->
<!--                 <span class="time">August 25th, 20:00hrs</span> -->
<!--                 <p>Lorem ipsum dolor sit amet,  -->
<!--                     consectetur adipisicing elit, sed  -->
<!--                     do eiusmod tempor incididunt -->
<!--                 </p> -->
<!--                 <A href="<?php echo @constant('WEBSITE_URL');?>
about" class="a-but">View Details</A> -->
<!--             </div> -->
        </div>
        <div class="row6">
        	<div>
                <h3><img src="<?php echo @constant('WEBSITE_URL');?>
public/images/index-ioc01.gif" />find   an   event</h3> 
                <p>Search for events around the 
                   globe and compare prices from 
                   the biggest operators in the industry.
                </p>
                <A href="<?php echo @constant('WEBSITE_URL');?>
about" class="a-but">View Details</A>
            </div>
            <div>
                <h3><img src="<?php echo @constant('WEBSITE_URL');?>
public/images/index-ioc02.gif" />add   to   calendar</h3> 
                <p>Set reminders in your calendar
                 and you will never miss any of your
                  favorite events again.
                </p>
                <A href="<?php echo @constant('WEBSITE_URL');?>
about" class="a-but">View Details</A>
            </div>
            <div>
                <h3><img src="<?php echo @constant('WEBSITE_URL');?>
public/images/index-ioc03.gif" />iphone  /  android  app</h3> 
                <p>Iphone and Android apps coming
                 soon to iTunes & Google Play.
                </p>
                <A href="<?php echo @constant('WEBSITE_URL');?>
about" class="a-but">View Details</A>
            </div>
            <div>
                <h3><img src="<?php echo @constant('WEBSITE_URL');?>
public/images/index-ioc04.gif" />view  video</h3> 
                <p>Share your favorite events
                 with your friends on all major
                  social media platforms.
                </p>
                <A href="<?php echo @constant('WEBSITE_URL');?>
about" class="a-but">View Details</A>
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