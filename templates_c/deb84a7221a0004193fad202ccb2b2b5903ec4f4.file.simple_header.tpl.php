<?php /* Smarty version Smarty-3.1.13, created on 2013-12-26 22:49:14
         compiled from "E:\phpweb\tickets\templates\admin\simple_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2497952bc41eac623b2-23430123%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'deb84a7221a0004193fad202ccb2b2b5903ec4f4' => 
    array (
      0 => 'E:\\phpweb\\tickets\\templates\\admin\\simple_header.tpl',
      1 => 1377530900,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2497952bc41eac623b2-23430123',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_title' => 0,
    'user_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52bc41eac95a97_23580338',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52bc41eac95a97_23580338')) {function content_52bc41eac95a97_23580338($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
 - <?php echo @constant('ADMIN_TITLE');?>
</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="<?php echo @constant('WEBSITE_URL');?>
/public/assets/lib/bootstrap/css/bootstrap.css">
    
    <link rel="stylesheet" href="<?php echo @constant('WEBSITE_URL');?>
/public/assets/stylesheets_<?php if ($_smarty_tpl->tpl_vars['user_info']->value){?><?php echo $_smarty_tpl->tpl_vars['user_info']->value['template'];?>
<?php }else{ ?>default<?php }?>/theme.css">
    <link rel="stylesheet" href="<?php echo @constant('WEBSITE_URL');?>
/public/assets/lib/font-awesome/css/font-awesome.css">

    <script src="<?php echo @constant('WEBSITE_URL');?>
/public/assets/lib/jquery-1.8.1.min.js" ></script>
	<script src="<?php echo @constant('WEBSITE_URL');?>
/public/assets/js/other.js" ></script>

    <!-- Demo page code -->

    <style type="text/css">
        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .brand { font-family: georgia, serif; }
        .brand .first {
            color: #ccc;
            font-style: italic;
        }
        .brand .second {
            color: #fff;
            font-weight: bold;
        }
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head><?php }} ?>