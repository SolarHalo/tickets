<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>index</title>
	<link href="{{$smarty.const.WEBSITE_URL}}public/style/reset.css" type="text/css" rel="stylesheet" />
	<link href="{{$smarty.const.WEBSITE_URL}}public/style/style.css" type="text/css" rel="stylesheet" /> 
	<link rel="stylesheet" href="{{$smarty.const.WEBSITE_URL}}/public/assets/css/jquery-ui.css" />
	<link rel="stylesheet" href="{{$smarty.const.WEBSITE_URL}}/public/assets/css/jquery.ui.datepicker.css" />
	
	<script src="{{$smarty.const.WEBSITE_URL}}/public/assets/lib/jquery-1.8.1.min.js" ></script>
	<script src="{{$smarty.const.WEBSITE_URL}}/public/assets/js/jquery-ui.js"></script>
	<script src="{{$smarty.const.WEBSITE_URL}}/public/assets/js/jquery.ui.datepicker.js"></script>
	
	<script  type="text/javascript">
	
	function seatch(){
		var keyword = $("#keyword").val();
		var location = $("#location").val();
		var fromDate = $("#fromDate").val();
		var toDate = $("#toDate").val();
		
		if(keyword == "Search by keyword"){
			keyword = "";
		}
		
		if("Search by location" == location){
			location = "";
		}
		
		if("Date From" == fromDate){
			fromDate = "";
		}
		
		if("SDate To" == toDate){
			toDate = "";
		}
		
		$.post(
			'{{$smarty.const.WEBSITE_URL}}ticket/search',
			{'keyword':keyword,'location':location,"fromDate":fromDate,"toDate":toDate},
			function(obj){
				
				//alert(obj.length);
			},
			"json"
		);
	}
	
	$(function($) {
		$.datepicker.regional['zh-CN'] = {dateFormat: 'yy-mm-dd'};
		$.datepicker.setDefaults($.datepicker.regional['zh-CN']);
		$("#fromDate" ).datepicker();
		$("#toDate" ).datepicker();
		
		seatch();
		
	});
	</script>
</head> 
<body>
{{include file='layouts/headerandsearch.tpl'}} 
<div class="mian">
  <div class="content">
    <div class="events">
      <div class="sub-nav"> <span><a href="#">Home</a> / <a href="#">Search</a> /  The Big Guns</a></span></div>
      <div class="events-l mt15"> <img src="{{$smarty.const.WEBSITE_URL}}public/photo/photo1.gif" width="160" height="265" class="img-sidebar" />
        <ul class="gigs-title map">
          <span>Categories</span>
          <li><a href="#">All Caegories(44)</a></li>
          <li><a href="#">Culture(31)</a></li>
          <li><a href="#">Entertainment(10)</a></li>
          <li><a href="#">Family(23)</a></li>
          <li><a href="#">General(9)</a></li>
          <li><a href="#" class="act">Sport& Outdoor(24)</a>
          <ul class="gigs-ti-2">
            <li><a href="#">Football</a></li>
            <li><a href="#" class="act2">Tennis</a></li>
            <li><a href="#">Golf</a></li>
            <li><a href="#">Cycling</a></li>
          </ul></li>
        </ul>
      </div>
      <div class="events-c2">
        <div class=" gigs_k map"> <span class="aigs_k_title">We have found 18,278 events</span> <strong>sort By:</strong>
          <select name="" class="id_3">
            <option>Best Match</option>
          </select>
        </div>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td>
            	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="gigs-table list-tablep">
                    <tr>
                      <td class="tdC">Wendnesday<br />
                        <span>30 OCT</span><br />
                        <font>20.00</font>
                        <a href="#" class="time2">53 Dates</a>  
                      </td>
                      <td><img src="photo/photo2.gif" width="92" height="92" class="btn" /></td>
                      <td>Entertainment > Comedy<br />
                        <span>Jason Manford</span><br />
                        Bournemouth lnternational Center,Exeter Road, Bournemouth. BH2 5BH,Dorset UK.</td>
                    </tr>
                	<tr>
                      <td colspan="2">&nbsp;</td>
                      <td><p class="mt15"><a href="#" class="btn btn-range btn-Calendar">Add to Calendat</a><a href="#" class="back btn btn-black"><strong>Buy Tickets</strong></a></p></td>
                    </tr> 
              </table>
              <div class="table-xian"></div>
            </td>
          </tr>
          <tr>
            <td>
            	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="gigs-table list-tablep">
                    <tr>
                      <td class="tdC">Wendnesday<br />
                        <span>30 OCT</span><br />
                        <font>20.00</font>
                      	<a href="#" class="time2">53 Dates</a>  
                      </td>
                      <td><img src="photo/photo2.gif" width="92" height="92" class="btn" /></td>
                      <td>Entertainment > Comedy<br />
                        <span>Jason Manford</span><br />
                        Bournemouth lnternational Center,Exeter Road, Bournemouth. BH2 5BH,Dorset UK.</td>
                    </tr>
                	<tr>
                      <td colspan="2">&nbsp;</td>
                      <td><p class="mt15"><a href="#" class="btn btn-range btn-Calendar">Add to Calendat</a><a href="#" class="back btn btn-black"><strong>Buy Tickets</strong></a></p></td>
                    </tr> 
              </table>
              <div class="table-xian"></div>
            </td>
          </tr>
          <tr>
            <td>
            	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="gigs-table list-tablep">
                    <tr>
                      <td class="tdC">Wendnesday<br />
                        <span>30 OCT</span><br />
                        <font>20.00</font>
                        <a href="#" class="time2">53 Dates</a>  
                      </td>
                      <td><img src="photo/photo2.gif" width="92" height="92" class="btn" /></td>
                      <td>Entertainment > Comedy<br />
                        <span>Jason Manford</span><br />
                        Bournemouth lnternational Center,Exeter Road, Bournemouth. BH2 5BH,Dorset UK.</td>
                    </tr>
                	<tr>
                      <td colspan="2">&nbsp;</td>
                      <td><p class="mt15"><a href="#" class="btn btn-range btn-Calendar">Add to Calendat</a><a href="#" class="back btn btn-black"><strong>Buy Tickets</strong></a></p></td>
                    </tr> 
              </table>
              <div class="table-xian"></div>
            </td>
          </tr>
          <tr>
            <td>
            	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="gigs-table list-tablep">
                    <tr>
                      <td class="tdC">Wendnesday<br />
                        <span>30 OCT</span><br />
                        <font>20.00</font>
                        <a href="#" class="time2">53 Dates</a>  
                      </td>
                      <td><img src="photo/photo2.gif" width="92" height="92" class="btn" /></td>
                      <td>Entertainment > Comedy<br />
                        <span>Jason Manford</span><br />
                        Bournemouth lnternational Center,Exeter Road, Bournemouth. BH2 5BH,Dorset UK.</td>
                    </tr>
                	<tr>
                      <td colspan="2">&nbsp;</td>
                      <td><p class="mt15"><a href="#" class="btn btn-range btn-Calendar">Add to Calendat</a><a href="#" class="back btn btn-black"><strong>Buy Tickets</strong></a></p></td>
                    </tr> 
              </table>
              <div class="table-xian"></div>
            </td>
          </tr>
          <tr>
            <td>
            	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="gigs-table list-tablep">
                    <tr>
                      <td class="tdC">Wendnesday<br />
                        <span>30 OCT</span><br />
                       <font>20.00</font>
                        <a href="#" class="time2">53 Dates</a>  
                      </td>
                      <td><img src="photo/photo2.gif" width="92" height="92" class="btn" /></td>
                      <td>Entertainment > Comedy<br />
                        <span>Jason Manford</span><br />
                        Bournemouth lnternational Center,Exeter Road, Bournemouth. BH2 5BH,Dorset UK.</td>
                    </tr>
                	<tr>
                      <td colspan="2">&nbsp;</td>
                      <td><p class="mt15"><a href="#" class="btn btn-range btn-Calendar">Add to Calendat</a><a href="#" class="back btn btn-black"><strong>Buy Tickets</strong></a></p></td>
                    </tr> 
              </table>
              <div class="table-xian"></div>
            </td>
          </tr>
          <br />
		  <br />

        </table>
      </div>
      <div class="events-r mt15">
        <div class="r-row rw-bg2"> <br />
          &nbsp; <br />
          &nbsp; <br />
          &nbsp; <br />
          &nbsp; <br />
          &nbsp; <br />
          &nbsp; </div>
        <div class="r-row rw-bg2"> <br />
          &nbsp; <br />
          &nbsp; <br />
          &nbsp; <br />
          &nbsp; <br />
          &nbsp; <br />
          &nbsp; </div>
      </div>
    </div>
  </div>
</div>
{{include file='layouts/footer.tpl'}} 