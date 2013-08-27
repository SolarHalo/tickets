<!DOCTYPE html>
<html>
  <head>
   <meta charset="utf-8">
    <title>{{$page_title}} - {{$smarty.const.ADMIN_TITLE}} - </title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="{{$smarty.const.WEBSITE_URL}}/public/assets/lib/bootstrap/css/bootstrap.css">
    
    <link rel="stylesheet" href="{{$smarty.const.WEBSITE_URL}}/public/assets/stylesheets_blacktie/theme.css">
    <link rel="stylesheet" href="{{$smarty.const.WEBSITE_URL}}/public/assets/lib/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="{{$smarty.const.WEBSITE_URL}}/public/assets/css/other.css">
	<link rel="stylesheet" href="{{$smarty.const.WEBSITE_URL}}/public/assets/css/jquery-ui.css" />
	<link rel="stylesheet" href="{{$smarty.const.WEBSITE_URL}}/public/assets/css/jquery.ui.datepicker.css" />
	<link rel="stylesheet" href="{{$smarty.const.WEBSITE_URL}}/public/assets/css/ui.jqgrid.css" />
<!-- 	<link rel="stylesheet" href="{{$smarty.const.WEBSITE_URL}}/public/assets/css/jquery-ui-custom.css" /> -->
    <script src="{{$smarty.const.WEBSITE_URL}}/public/assets/lib/jquery-1.8.1.min.js" ></script>
	<!--script src="http://www.cnbootstrap.com/assets/js/jquery.js"></script-->
	<script src="{{$smarty.const.WEBSITE_URL}}/public/assets/lib/bootstrap/js/bootbox.min.js"></script>
	<script src="{{$smarty.const.WEBSITE_URL}}/public/assets/lib/bootstrap/js/bootstrap-modal.js"></script>
	<script src="{{$smarty.const.WEBSITE_URL}}/public/assets/js/other.js"></script>
	<script src="{{$smarty.const.WEBSITE_URL}}/public/assets/js/jquery-ui.js"></script>
	<script src="{{$smarty.const.WEBSITE_URL}}/public/assets/js/jquery.ui.datepicker.js"></script>
	<script src="{{$smarty.const.WEBSITE_URL}}/public/assets/js/grid.locale-en.js"></script>
	<script src="{{$smarty.const.WEBSITE_URL}}/public/assets/js/jquery.jqGrid.min.js"></script>
	<script src="{{$smarty.const.WEBSITE_URL}}/public/assets/js/My97DatePicker/WdatePicker.js"></script>
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
        
        .ui-pg-input{
			width:20px;
		}
		.ui-pg-selbox {
			width:60px;
		    height:30px;
		}
        
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
      {{if empty($smarty.session.aduser)}}
         wherere {{$smarty.session.aaa}}
	  {{/if}}
	  		 
  </head>

  <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
  <!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
  <!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
  <!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
  <!--[if (gt IE 9)|!(IE)]><!--> 
