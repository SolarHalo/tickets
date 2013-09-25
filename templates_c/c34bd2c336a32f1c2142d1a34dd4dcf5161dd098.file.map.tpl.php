<?php /* Smarty version Smarty-3.1.13, created on 2013-09-25 17:39:18
         compiled from "E:\phpweb\tickets\templates\map.tpl" */ ?>
<?php /*%%SmartyHeaderCode:119665225e736142f67-83673444%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c34bd2c336a32f1c2142d1a34dd4dcf5161dd098' => 
    array (
      0 => 'E:\\phpweb\\tickets\\templates\\map.tpl',
      1 => 1380123552,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119665225e736142f67-83673444',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5225e7361826b3_17307607',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5225e7361826b3_17307607')) {function content_5225e7361826b3_17307607($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<style type="text/css">
html {
	height: 100%
}

body {
	height: 100%;
	margin: 0;
	padding: 0
}

#map-canvas {
	height: 100%
}
</style>
<script type="text/javascript"
	src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAWmJ21oU_HjdLgc8ZfPzDn92ziu_yI_bA&sensor=false">
    </script>
<script type="text/javascript">
		var key = 'AIzaSyAWmJ21oU_HjdLgc8ZfPzDn92ziu_yI_bA';

	  var activeicon = "<?php echo @constant('WEBSITE_URL');?>
public/images/marker-active.png";
      var map;
      var markersArray = [];
      var markerDatasArray ={};
      
      var geocoder = new google.maps.Geocoder(); //申明地址解析对象  
      function initialize() {
        var haightAshbury = new google.maps.LatLng(52.928775,6.249504);
        var mapOptions = {
          zoom: 1,
          center: haightAshbury,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map =  new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
      }

      function addMarker(map,latLng,title) {
    	  if(title)  
    		  marker = new google.maps.Marker({  
                  icon: this.icon,  
                  position: latLng,  
                  map: map,  
                  title:title  
              });  
              else   
            	  marker =  new google.maps.Marker({  
                  //icon: this.icon,  
                  position: latLng,  
                  map: map  
              });  
        markersArray.push(marker);
      }




      //显示当前的id的marker状态
      function showCurrentKeyMarker(key){
          console.log(key+":::"+markerDatasArray[key])
    	  noActiveAllMarkers();
    	  var add = markerDatasArray[key];
    	  if(add){
    		  var curmarker = getAddRessMaker(add);
    		  activeMarker(curmarker);
    	  }
      }

	 function getAddRessMaker(address){
		 if (markersArray) {
             for (i in markersArray) {
              if(address == markersArray[i].getTitle()){
                  return markersArray[i];
            	}
           }
		 }
	 }
		
      function activeMarker(marker) {
          if(marker){
    		  marker.setIcon(activeicon);
    		  marker.setMap(map);
    		  marker.setZIndex(google.maps.Marker.MAX_ZINDEX + 1);
          }
      }
      //关闭当前的所有markers变成正常状态
      function noActiveAllMarkers() {
    	  if (markersArray) {
              for (i in markersArray) {
                markersArray[i].setIcon(this.icon);
              }
            }
      }
      
      // Removes the overlays from the map, but keeps them in the array
      function clearOverlays() {
        if (markersArray) {
          for (i in markersArray) {
            markersArray[i].setMap(null);
          }
        }
      }

      // Shows any overlays currently in the array
      function showOverlays() {
        if (markersArray) {
          for (i in markersArray) {
            markersArray[i].setMap(map);
          }
        }
      }

      // Deletes all markers in the array by removing references to them
      function deleteOverlays() {
        if (markersArray) {
          for (i in markersArray) {
            markersArray[i].setMap(null);
          }
          markersArray.length = 0;
          markerDatasArray={};
        }
      }
     

      /**
      设置显示的地址.通过地址,获取google服务,渲染图标
      */
      function searchaddress(address,title){  
    	  var iID=setInterval(loadServicedata, 500);
    	  function loadServicedata()
    	  {
        	  if(map != null){
        		  if (geocoder) {  
      	  	        geocoder.geocode( { 'address': address}, function(results, status) {  
      	  	            if (status == google.maps.GeocoderStatus.OK) {  
      	  	                if(results[0]){  
          	  	               
      	  	  	                for(var i=0;i<1;i++){
      	  	                    var point = results[i].geometry.location;  
      	  	                    map.setCenter(point);  
          	  	                markerDatasArray[title] = results[i].formatted_address;
          	  	                console.log(title+"---"+markerDatasArray.title)
      	  	                    addMarker(map,point,results[i].formatted_address);
      	    	               // google.maps.event.addListener(marker, 'click', toggleBounce);
      	  	                    }
      	  	                   
      	  	                }  
      	  	            } else {  
      	  	               // alert("Geocode was not successful for the following reason: " + status);  
      	  	            }  
      	  	        });  
      	  	    }
        		  clearInterval(iID);
        	  }
    	  }
        	
  	  
      }  

 
      /**
      *设置地图的等级
      */ 
      function setRoom(room){
    	  var ziID=setInterval(setRoomnow, 500);
    	  function setRoomnow()
    	  {
    		  if(map){
                  map.setZoom(room);
                  clearInterval(ziID);
                } 
    	  }
        
      }


      /**
       * datas: 传人的集合类型的数据源
      	proty: 选取的一个属性字段作为address的值
       */ 
       function loadDatas(datas,proty){
    	   deleteOverlays();
		   if(datas){
			   for (i in datas) {
				  var address = datas[i][proty];
				  var key =  datas[i]["aw_product_id"];
				  if(address){
					  searchaddress(address,key);
				  }
				}
		   }
		  
       }



      
    </script>
</head>
<body onload="initialize()">
	<div id="map-canvas" />
</body>
</html><?php }} ?>