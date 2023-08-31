@include('web.include.scripts.location')
<script>
    $(document).ready(function() {
        initMap();
    });
    var markers = [];

    function initMap() {

        /****** Change latitude and longitude here ******/
        var myLatlng = new google.maps.LatLng({{ app('request')->input('pickup_latitude') }},
            {{ app('request')->input('pickup_longitude') }});

        /****** Map Options *******/
        var mapOptions = {
            zoom: 10,
            center: new google.maps.LatLng({{ app('request')->input('pickup_latitude') }},
                {{ app('request')->input('pickup_longitude') }}),
            mapTypeId: google.maps.MapTypeId.ROADMAP,
        };
        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

        /****** Info Window Contents *******/

        var infowindow = new google.maps.InfoWindow();

        var locations = [
            @foreach ($car_models as $car_model)
                ['{{ $car_model->id }}',
                    '{{ $car_model->branch->address_latitude }}',
                    '{{ $car_model->branch->address_longitude }}',
                    'RM{{ ceil($car_model->price_per_day) }}'
                ],
            @endforeach
        ];
        var marker, i;

        for (i = 0; i < locations.length; i++) {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                icon: {
                    url: "{{ asset('images/pin.png') }}",
                    labelOrigin: new google.maps.Point(55, 15),
                    scaledSize: new google.maps.Size(110, 90),
                    anchor: new google.maps.Point(16, 32)
                },
                map: map,
                label: {
                    text: locations[i][3],
                    color: "#ffffff",
                    fontSize: "15px",
                }
            });
            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    $(`#page3-modal-${locations[i][0]}`).modal()
                    infowindow.setContent(locations[i][3]);
                    //   infowindow.open(map, marker);
                    //$('.scrollFix').parent.css('left', '1300px');


                    // $(".scrollFix").parent.parent.style.left="0";
                }
            })(marker, i));

            //   infowindow.setContent(locations[i][3]);
            //infowindow.open(map,marker);

            markers.push(marker);
            //alert(marker.id);\
        }
    }

    function myClick(id) {
        google.maps.event.trigger(markers[1], 'click');
    }
</script>
