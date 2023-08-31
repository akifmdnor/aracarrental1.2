  @include('web.include.scripts.location')
  <script>
      $(document).ready(function() {
          /****** Change latitude and longitude here ******/
          var myLatlng = new google.maps.LatLng(3.140853, 101.693207);

          /****** Map Options *******/
          var mapOptions = {
              zoom: 6.8,
              center: new google.maps.LatLng(3.940853, 101.693207),
              mapTypeId: google.maps.MapTypeId.ROADMAP,
          };
          var map = new google.maps.Map(document.getElementById('map-canvas-div'), mapOptions);

          /****** Info Window Contents *******/

          var infowindow = new google.maps.InfoWindow();

          var locations = [
              @foreach ($branches as $branch)
                  ['{{ $branch->branch_name }}',
                      '{{ $branch->address_latitude }}',
                      '{{ $branch->address_longitude }}'
                  ],
              @endforeach
          ];
          var marker, i;
          for (i = 0; i < locations.length; i++) {
              marker = new google.maps.Marker({
                  position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                  icon: "{{ asset('images/web/homepage/map-pin.svg') }}",
                  map: map,
              });
          }


      });
  </script>
