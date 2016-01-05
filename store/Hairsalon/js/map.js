jQuery(window).load(function($){
     "use strict";
    var MY_MAPTYPE_ID = 'custom_style';

    var featureOpts = [
        
        {
            stylers: [
                { "saturation": -100 },
                { "lightness": -8 },
                { "gamma": 1.18 }
            ]
    },{
        featureType: 'water',
        elementType: 'geometry',
        stylers: [
            { color: '#2D333C' }
        ]
    }
    ];

    var latlng = new google.maps.LatLng(41.904246, -87.739362);
    var settings = {
        zoom: 16,
        center: latlng,
        mapTypeControlOptions: {
            mapTypeIds: [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID]
        },
        mapTypeControl: false,
        mapTypeId: MY_MAPTYPE_ID,
        scrollwheel: false,
        draggable: true,
    };


    var map = new google.maps.Map(document.getElementById("hairMap"), settings);
    console.log(map);
    var styledMapOptions = {
        name: 'Custom Style'
    };
    var customMapType = new google.maps.StyledMapType(featureOpts, styledMapOptions);

    map.mapTypes.set(MY_MAPTYPE_ID, customMapType);

    google.maps.event.addDomListener(window, "resize", function() {
        var center = map.getCenter();
        google.maps.event.trigger(map, "resize");
        map.setCenter(center);
    });


    var companyImage = new google.maps.MarkerImage('images/map-marker.png',
        new google.maps.Size(40,46),
        new google.maps.Point(0,0),
        new google.maps.Point(35,20)
    );



    var companyPos = new google.maps.LatLng(41.904246, -87.739362);
    var companyMarker = new google.maps.Marker({
        position: companyPos,
        map: map,
        icon: companyImage,
        title:"SIM ONE PAGE",
        zIndex: 3});



    google.maps.event.addListener(companyMarker, 'click', function() {
        infowindow.open(map,companyMarker);
    });

});