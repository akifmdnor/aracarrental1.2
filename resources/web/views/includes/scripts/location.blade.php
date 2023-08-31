<script>
    function initialize() {
      distance();
     // distance2();
      distance3();
     // initMap();
    }
  
    function distance(){
  
        var options = {
            componentRestrictions: {country: "my"}
            };
  
        var input = document.getElementById('pickup_location');
        var autocomplete = new google.maps.places.Autocomplete(input,options);
        google.maps.event.addListener(autocomplete, 'place_changed', function () {
            var place = autocomplete.getPlace();
            document.getElementById('pickup_location').value = place.name;
            document.getElementById('pickup_latitude').value = place.geometry.location.lat();
            document.getElementById('pickup_longitude').value = place.geometry.location.lng();
        });
    }
  
    function distance2(){
  
        var options = {
            componentRestrictions: {country: "my"}
            };
  
        var input = document.getElementById('return_location');
        var autocomplete = new google.maps.places.Autocomplete(input,options);
        google.maps.event.addListener(autocomplete, 'place_changed', function () {
            var place = autocomplete.getPlace();
            document.getElementById('return_location').value = place.name;
            document.getElementById('return_latitude').value = place.geometry.location.lat();
            document.getElementById('return_longitude').value = place.geometry.location.lng();
        });
    }
  
    function distance3(){
  
        var options = {
            componentRestrictions: {country: "my"}
            };
  
        var input = document.getElementById('return_location_2');
        var autocomplete = new google.maps.places.Autocomplete(input,options);
        google.maps.event.addListener(autocomplete, 'place_changed', function () {
            var place = autocomplete.getPlace();
            document.getElementById('return_location_2').value = place.name;
            document.getElementById('return_latitude').value = place.geometry.location.lat();
            document.getElementById('return_longitude').value = place.geometry.location.lng();
        });
    }
  </script>
   <script src="https://maps.googleapis.com/maps/api/js?key={{config('google.maps.api_key')}}&libraries={{config('google.maps.library')}}&callback={{config('google.maps.callback')}} " async defer></script>