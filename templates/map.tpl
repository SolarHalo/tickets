<!DOCTYPE html>
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
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAWmJ21oU_HjdLgc8ZfPzDn92ziu_yI_bA&sensor=true">
    </script>
<script type="text/javascript">
var key = 'AIzaSyAWmJ21oU_HjdLgc8ZfPzDn92ziu_yI_bA';
    var map;
    var geocoder = new google.maps.Geocoder(); //申明地址解析对象  
      function initialize() {
        var mapOptions = {
          center: new google.maps.LatLng(-34.397, 150.644),
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
       map = new google.maps.Map(document.getElementById("map-canvas"),
            mapOptions);
      }
      google.maps.event.addDomListener(window, 'load', initialize);

      /**
      	*渲染图标
      */
      function loadMarkets(sourceArr){
   	   for(var item in sourceArr){
     		var marker = new google.maps.Marker({
        		    map:map,
        		    draggable:true,
        		    animation: google.maps.Animation.DROP,
        		    position: item.geometry.location
        	 });
   	   }
      }
      function mark(map,latLng,title){  
          if(title)  
          return new google.maps.Marker({  
              icon: this.icon,  
              position: latLng,  
              map: map,  
              title:title  
          });  
          else   
          return new google.maps.Marker({  
              //icon: this.icon,  
              position: latLng,  
              map: map  
          });  
      }  

      /**
      设置显示的地址.通过地址,获取google服务,渲染图标
      */
      function searchaddress(address){  
  	    if (geocoder) {  
  	        geocoder.geocode( { 'address': address,"language":"zh_cn"}, function(results, status) {  
  	            if (status == google.maps.GeocoderStatus.OK) {  
  	                if(results[0]){  
  	  	                for(var i=0;i<results.length;i++){
  	                    var point = results[i].geometry.location;  
  	                    map.setCenter(point);  
  	                    var marker =  mark(map,point,results[i].formatted_address);
    	               // google.maps.event.addListener(marker, 'click', toggleBounce);
  	                    }
  	                   
  	                }  
  	            } else {  
  	                alert("Geocode was not successful for the following reason: " + status);  
  	            }  
  	        });  
  	    }
      }  

 
      /**
      *设置地图的等级
      */ 
      function setRoom(room){
          if(map){
              map.setZoom(room);
            }
      }
    </script>
</head>
<body>
	<div id="map-canvas" />
</body>
</html>