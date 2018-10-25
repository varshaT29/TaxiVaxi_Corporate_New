<!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      .map-alert {
        position: absolute;
        left: 40%;
        top: 2%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>

  <body>
    <div id="map"></div>
    <div class="alert alert-danger map-alert" style="display:none" id="custom_dialog">
       <strong>Error!</strong> Link is either invalid or expired!
    </div>
    <script src="/js/jquery-3.2.1.min.js"></script>
    <script>
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 20.5937, lng: 78.9629},
          zoom: 8
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCstbhex4F6X2-AXz3B1sR1oRvxssE3sc&callback=initMap" async defer></script>

    <script src="https://www.gstatic.com/firebasejs/5.0.3/firebase.js"></script>
    <script>
      $(document).ready(function() {
        // Initialize Firebase
        var config = {
          apiKey: "AIzaSyCMCnwP0M0og8Ep3sFZqJZP9UnPh028l4c",
          authDomain: "fleet247-driver.firebaseapp.com",
          databaseURL: "https://fleet247-driver.firebaseio.com",
          projectId: "fleet247-driver",
          storageBucket: "fleet247-driver.appspot.com",
          messagingSenderId: "600578757637"
        };
        firebase.initializeApp(config);
      });
    </script>

    <script>
      $(document).ready(function() {
        var access_token = '<?php echo $driver_accesstoken ?>';
        var operator_id = '<?php echo $operator_id ?>';
        var driver_id = '<?php echo $driver_id ?>';
        var driver_name = '<?php echo $driver_name ?>';
        var driver_licence = '<?php echo $driver_licence ?>';

        function setCustomMapBounds(lat, lng) {
          var min_lat=lat-0.1;
          var min_lng=lng-0.1;
          var max_lat=lat+0.1;
          var max_lng=lng+0.1;

          var aSW = new google.maps.LatLng(min_lat, min_lng);
          var aNE = new google.maps.LatLng(max_lat, max_lng);

          bounds = new google.maps.LatLngBounds(aSW, aNE);
          if(map)
            map.fitBounds(bounds);
        }

        function addMarker(location, root_data, data, driver_id) {
          marker = new google.maps.Marker({
            position: location,
            map: map
          });

          var contentString = '';
          for(key in root_data){
            contentString = contentString + key + ": " + root_data[key] + "<br>";
          }
          var infowindow = new google.maps.InfoWindow({
            content: contentString
          });
          marker.addListener('click', function() {
            infowindow.open(map, marker);
          });

          setCustomMapBounds(location.lat, location.lng);
        }

        var firebasedata = firebase.database().ref('/operators/'+operator_id+'/drivers/'+driver_id);
        firebasedata.on('value', function(snapshot) {
          if(typeof marker !== 'undefined')
            marker.setMap(null);

          var driver = snapshot.val();
          if(driver) {
            if(driver['driverStatus'] == 'On Ride' && driver['bookingId'] == '<?php echo $booking_id; ?>') {
              $('#custom_dialog').hide();
              var data = {};
              data['Driver Status'] = driver['driverStatus'];
              data['Driver Name'] = driver_name;
              data['Driver Licence'] = driver_licence;
              addMarker({lat: driver['latitude'], lng: driver['longitude']}, data, driver, snapshot.key);
            }
            else {
              $('#custom_dialog').show();
              if(typeof marker !== 'undefined')
                marker.setMap(null);
              setCustomMapBounds(20.5937, 78.9629);
            }
          }
          else {
            $('#custom_dialog').show();
            if(typeof marker !== 'undefined')
              marker.setMap(null);
            setCustomMapBounds(20.5937, 78.9629);

            console.log('No such driver data');
          }
        });
      });
    </script>
  </body>
</html>
