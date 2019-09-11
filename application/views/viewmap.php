<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	 <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Waypoints in directions</title>
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 70%;
        width: 100%;
      }
      
    </style>
</head>
<body>	

<?php 

foreach($mymap as $keyss):
?>
	<div id="map"></div>
 <script>
       function initMap() {
        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 24,
          center: {lat:0, lng:0}
        });
        var waypts = [];
            waypts.push({
              location: '<?php echo $keyss->description; ?>',
              stopover: true
            });
        directionsService.route({
          origin:'<?php echo $keyss->fplace;?>',
          destination: '<?php echo $keyss->tplace;?>',
          waypoints: waypts,
          optimizeWaypoints: true,
          travelMode: 'DRIVING'
        }, function(response, status) {
          if (status === 'OK') {
            directionsDisplay.setDirections(response);
            var route = response.routes[0];
            //var summaryPanel = document.getElementById('directions-panel');
            //summaryPanel.innerHTML = '';
            // For each route, display summary information.
            // for (var i = 0; i < route.legs.length; i++) {
            //   var routeSegment = i + 1;
            //   summaryPanel.innerHTML += '<b>Route Segment: ' + routeSegment +
            //       '</b><br>';
            //   summaryPanel.innerHTML += route.legs[i].start_address + ' to ';
            //   summaryPanel.innerHTML += route.legs[i].end_address + '<br>';
            //   summaryPanel.innerHTML += route.legs[i].distance.text + '<br><br>';
            // }
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });
         directionsDisplay.setMap(map);

        
      }
    </script>
      <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcN6V4XlwXMxmFu03lpoISGtvpzZ3yg38&callback=initMap">
    </script>
    
	<?php
endforeach;
?>
 
  

</body>
</html>
