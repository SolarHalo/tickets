<?php /* Smarty version Smarty-3.1.13, created on 2013-11-08 08:24:35
         compiled from "G:\phpserver\tickets\templates\product_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:93315225a6bf457402-04173806%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5dd388c400ee1e85376bab9f673b38d2eccbb88' => 
    array (
      0 => 'G:\\phpserver\\tickets\\templates\\product_info.tpl',
      1 => 1383899071,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93315225a6bf457402-04173806',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5225a6bf53c504_69706401',
  'variables' => 
  array (
    'category_name' => 0,
    'product_name' => 0,
    'time' => 0,
    'promotional_text' => 0,
    'category_id' => 0,
    'aw_image_url' => 0,
    'id' => 0,
    'description' => 0,
    'display_price' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5225a6bf53c504_69706401')) {function content_5225a6bf53c504_69706401($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo $_smarty_tpl->tpl_vars['category_name']->value;?>
 , <?php echo $_smarty_tpl->tpl_vars['product_name']->value;?>
 , <?php echo $_smarty_tpl->tpl_vars['time']->value;?>
</title>
	<link href="<?php echo @constant('WEBSITE_URL');?>
public/style/reset.css" type="text/css" rel="stylesheet" />
	<link href="<?php echo @constant('WEBSITE_URL');?>
public/style/style.css" type="text/css" rel="stylesheet" /> 
	<link rel="stylesheet" href="<?php echo @constant('WEBSITE_URL');?>
/public/assets/css/jquery-ui.css" />
	<link rel="stylesheet" href="<?php echo @constant('WEBSITE_URL');?>
/public/assets/css/jquery.ui.datepicker.css" />
	<script src="<?php echo @constant('WEBSITE_URL');?>
/public/assets/lib/jquery-1.8.1.min.js" ></script>
	<script src="<?php echo @constant('WEBSITE_URL');?>
/public/assets/js/jquery-ui.js"></script>
	<script src="<?php echo @constant('WEBSITE_URL');?>
/public/assets/js/jquery.ui.datepicker.js"></script>
	<script src="<?php echo @constant('WEBSITE_URL');?>
/public/js/searchform.js"></script>
	<script src="<?php echo @constant('WEBSITE_URL');?>
/public/js/slideshow.js" type="text/javascript"></script> 
 <script  type="text/javascript">  
	function addCalendat(pid){ 
		$.post(
			'<?php echo @constant('WEBSITE_URL');?>
ticket/addCalendat',
			{'pid':pid},
			function(obj){
				if(obj.res){
					alert("success");
				}else{
					window.location.href="<?php echo @constant('WEBSITE_URL');?>
login";
				}
				
			},
			"json"
		);
	} 
 </script>
</head> 
<body><?php echo $_smarty_tpl->getSubTemplate ('layouts/headerandsearch.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script  type="text/javascript">

	$(function($) {
		var source = new Array();
		var obj = new Array();
		obj['promotional_text'] = '<?php echo $_smarty_tpl->tpl_vars['promotional_text']->value;?>
';
		source.push(obj);
		loadDatas(source,"promotional_text");
		setRoom(16);
		//加载广告
		param={"type":"product1","site":"search1"};
	$.ajax({
		url:"<?php echo @constant('WEBSITE_URL');?>
ticket/getAdvertising",
		type:"post",
		data:param,
		success:function(data){
			//console.log(data);
		    var divshow = $("#frameHlicAe");
            divshow.text("");// 清空数据
            divshow.append(data);
           // console.log(divshow);
            SlideShow(0);
		//	 document.getElementById("frameHlicAe").innerHTML=data;
		},
		error:function(){
			console.log("con't get advertise product1");
		}
		
	});
	param={"type":"product2","site":"search2"};
	$.ajax({
		url:"<?php echo @constant('WEBSITE_URL');?>
ticket/getAdvertising",
		type:"post",
		data:param,
		success:function(data){
			//console.log(data);
		    var divshow = $("#frameHlicAe2");
            divshow.text("");// 清空数据
            divshow.append(data);
            //console.log(divshow);
            SlideShow2(0);
		//	 document.getElementById("frameHlicAe").innerHTML=data;
		},
		error:function(){
		  console.log("con't get advertise product1");
		}
		
	});
	});
	
</script>
<div class="mian">
    <div class="content">
    	<div class="events">
        	<div class="sub-nav">
            	<span><a href="<?php echo @constant('WEBSITE_URL');?>
">Home</a>  /  <a href="<?php echo @constant('WEBSITE_URL');?>
ticket/index/?cat=<?php echo $_smarty_tpl->tpl_vars['category_id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['category_name']->value;?>
</a>  /  <?php echo $_smarty_tpl->tpl_vars['product_name']->value;?>
</a></span>
                
            </div>
        	<div class="events-l mt15" id='img-list'>
        		<img src="<?php echo $_smarty_tpl->tpl_vars['aw_image_url']->value;?>
" width="160" height="265" class="img-sidebar" />
				<!-- AddThis Button BEGIN -->
				<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
				<a class="addthis_button_preferred_1"></a>
				<a class="addthis_button_preferred_2"></a>
				<a class="addthis_button_preferred_3"></a>
				<a class="addthis_button_preferred_4"></a>
				<a class="addthis_button_compact"></a>
				<a class="addthis_counter addthis_bubble_style"></a>
			</div>
			<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
			<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-522dce200590139f"></script>
				<!-- AddThis Button END -->
            </div>
            <div class="events-c">
            	<div class="row" id="info-show">
            		<h1><?php echo $_smarty_tpl->tpl_vars['product_name']->value;?>
</h1>
                    <p class="add"><?php echo $_smarty_tpl->tpl_vars['promotional_text']->value;?>
</p>
                    <p class="time"><?php echo $_smarty_tpl->tpl_vars['time']->value;?>
 BST <!--<a href="#">+ 1 more dates</a>--></p>
                    <p class="mt15">
	                    <a href="javascript:addCalendat('<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
')" class="btn btn-range">Add to Calendar</a>
	                    <a href="<?php echo @constant('WEBSITE_URL');?>
buyticket/index/?pid=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="ml15 btn btn-black"><strong>Buy Tickets</strong></a>
                    </p>
                </div>
                <div class="hr mt15"></div>
                <div class="row2 mt15" id="info-other">
                
                    <font>Description</font>: <?php echo $_smarty_tpl->tpl_vars['description']->value;?>
<br />
                    <!--<font>Tickets available from</font>: Modus Darts on <font>08450 180 180</font> -->
                    <table cellpadding="0" cellspacing="0" class="mt15">
                        <tr>
                            <td width="140"><font>Time</font></td>
                            <td><?php echo $_smarty_tpl->tpl_vars['time']->value;?>
</td>
                        </tr>
                        <tr>
                            <td width="140"><font>Prices</font></td>
                            <td>From <?php echo $_smarty_tpl->tpl_vars['display_price']->value;?>
</td>
                        </tr>
                    </table>
                    
                </div>
                <div class="row3 map">
                	<span>View Map</span>
                    <div   style="  height: 339px">
                    	<!-- <img src="<?php echo @constant('WEBSITE_URL');?>
/public/photo/mapphoto.png" /> -->
                    	<?php echo $_smarty_tpl->getSubTemplate ("map.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                    </div>
                </div>
            </div> 
        </div> 
         <div class="events-r mt15">
            	<div class="r-row rw-bg2">
	                <div class="comiis_wrapad" id="slideContainer">
	  						<div id="frameHlicAe" class="frame cl"> 
	 						</div>
	 				</div>
				</div>
               
                
                <div class="r-row rw-bg2">
	                <div class="comiis_wrapad" id="slideContainer2">
	  						<div id="frameHlicAe2" class="frame cl"> 
	 						</div>
	 				</div>
				</div>
                 
            </div>
    </div> 
</div>
<?php echo $_smarty_tpl->getSubTemplate ('layouts/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
   <?php }} ?>