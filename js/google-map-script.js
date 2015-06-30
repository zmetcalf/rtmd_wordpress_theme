var myCenter = new google.maps.LatLng(39.713023, -105.139474)

function googleMap() {
  var styles = [
    {
      featureType: 'all',
      stylers: [
        { hue: '#7ac042' },
        { saturation: -12 },
        { gamma: .57 }
      ]
    }
  ];

  var styledMap = new google.maps.StyledMapType(styles, {name: "Styled Map"});

  var mapProp = {
    center: myCenter,
    zoom: 12,
    streetViewControl: false,
    mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
  };

  var map = new google.maps.Map(document.getElementById('googleMap'),
                                mapProp);
  map.mapTypes.set('map_style', styledMap);
  map.setMapTypeId('map_style');

  var marker = new google.maps.Marker({
    position:myCenter
  });

  marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', googleMap);
