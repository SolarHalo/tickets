

This repository
Explore
Gist
Blog
Help
blueskydhy
!
You don't have any verified emails. We recommend verifying at least one email.
Email verification helps our support team help you in case you have any email issues or lose your password.
6  Unwatch
Star 0Fork 0PUBLIC SolarHalo/tickets
 branch: master  tickets / templates / admin / header.tpl 
 superyuyue 4 days ago modify style
4 contributors        
 file 85 lines (76 sloc) 3.964 kb EditRawBlameHistory Delete
1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
30
31
32
33
34
35
36
37
38
39
40
41
42
43
44
45
46
47
48
49
50
51
52
53
54
55
56
57
58
59
60
61
62
63
64
65
66
67
68
69
70
71
72
73
74
75
76
77
78
79
80
81
82
83
84
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
	<!-- easyui 引入 -->
	 <link rel="stylesheet" type="text/css" href="{{$smarty.const.WEBSITE_URL}}/public/assets/lib/jquery-easyui-1.3.4/themes/default/easyui.css">
   	 <link rel="stylesheet" type="text/css" href="{{$smarty.const.WEBSITE_URL}}/public/assets/lib/jquery-easyui-1.3.4/themes/icon.css">
	 <script type="text/javascript" src="{{$smarty.const.WEBSITE_URL}}/public/assets/lib/jquery-easyui-1.3.4/jquery.easyui.min.js"></script>
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
        
input.ui-pg-input {
    width: auto;
    padding: 0px;
    margin: 0px;
    line-height: normal
}
select.ui-pg-selbox {
    width: auto;
    padding: 0px;
    margin: 0px;
    line-height: normal
}
        
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  
	
  </head>
    {{if empty($smarty.session.aduser)}}
          <script language='javascript' type='text/javascript'> 
						window.location.href='{{$smarty.const.WEBSITE_URL}}admin/login'; 
	    </script>
				  
	  {{/if}}
  <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
  <!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
  <!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
  <!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
  <!--[if (gt IE 9)|!(IE)]><!--> 
Status API Training Shop Blog About © 2013 GitHub, Inc. Terms Privacy Security Contact 