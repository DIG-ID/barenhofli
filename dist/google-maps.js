!function(e){function t(t){var o=t.find(".marker"),r={zoom:t.data("zoom")||16,styles:[{featureType:"landscape",elementType:"geometry",stylers:[{color:"#f6f0eb"}]},{featureType:"poi",elementType:"geometry.fill",stylers:[{color:"#f6f0eb"}]},{featureType:"poi.attraction",elementType:"geometry.fill",stylers:[{color:"#f6f0eb"}]},{featureType:"poi.medical",elementType:"geometry.fill",stylers:[{color:"#f6f0eb"}]},{featureType:"poi.park",elementType:"geometry.fill",stylers:[{color:"#f6f0eb"}]},{featureType:"poi.place_of_worship",elementType:"geometry.fill",stylers:[{color:"#f6f0eb"}]},{featureType:"poi.sports_complex",elementType:"geometry.fill",stylers:[{color:"#f6f0eb"}]},{featureType:"road",elementType:"geometry.fill",stylers:[{color:"#ffffff"}]},{featureType:"road",elementType:"geometry.stroke",stylers:[{visibility:"off"}]},{featureType:"road",elementType:"labels",stylers:[{visibility:"off"}]},{featureType:"transit",stylers:[{visibility:"off"}]},{featureType:"water",elementType:"geometry.fill",stylers:[{color:"#abaaa4"}]},{featureType:"water",elementType:"labels",stylers:[{visibility:"off"}]}],mapTypeId:google.maps.MapTypeId.ROADMAP},l=new google.maps.Map(t[0],r);return l.markers=[],o.each((function(){!function(e,t){var o=e.data("lat"),r=e.data("lng"),l={lat:parseFloat(o),lng:parseFloat(r)},a=new google.maps.Marker({position:l,map:t,icon:{url:"https://baerenhoefli.ch/wp-content/uploads/map_marker.png"}});if(t.markers.push(a),e.html()){var f=new google.maps.InfoWindow({content:e.html()});google.maps.event.addListener(a,"click",(function(){f.open(t,a)}))}}(e(this),l)})),function(e){var t=new google.maps.LatLngBounds;e.markers.forEach((function(e){t.extend({lat:e.position.lat(),lng:e.position.lng()})})),1==e.markers.length?e.setCenter(t.getCenter()):e.fitBounds(t)}(l),l}e(document).on("ready",(function(){e(".acf-map").each((function(){var o,r;o=document.getElementsByTagName("head")[0],r=o.insertBefore,o.insertBefore=function(e,t){e.href&&e.href.indexOf("//fonts.googleapis.com/css?family=Roboto")>-1||e.href&&e.href.indexOf("//fonts.googleapis.com/css?family=Google+Sans+Text")>-1||r.call(o,e,t)},t(e(this))}))}))}(jQuery);