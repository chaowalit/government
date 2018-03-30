<script type="text/javascript" src="<?php echo asset('fn/'.$template.'/js/script.js'); ?>"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $(".custom-carousel-slide-news").owlCarousel({
            navigation : false,
            pagination: false,
            slideSpeed : 400,
            stopOnHover: true,
              autoPlay: 3000,
              items : 1,
              itemsDesktopSmall : [900,3],
            itemsTablet: [600,2],
            itemsMobile : [479, 1]
        });
    });
</script>

<?php if($menu_nav == 'index') { ?>
<link rel="stylesheet" type="text/css" href="<?php echo asset('fn/'.$template.'/css/custom_theme.css'); ?>" media="screen">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#dataTableNews').DataTable();

        $("#click_information").click(function(e){
            window.location.href = "/news-search-all/information";
            e.preventDefault();
        });
        $("#click_purchase_news").click(function(e){
            window.location.href = "/news-search-all/purchase_news";
            e.preventDefault();
        });
        $("#click_calculate_middle_price").click(function(e){
            window.location.href = "/news-search-all/calculate_middle_price";
            e.preventDefault();
        });
        $("#click_activity_news").click(function(e){
            window.location.href = "/news-search-all/activity_news";
            e.preventDefault();
        });
        $("#click_presentation").click(function(e){
            window.location.href = "/news-search-all/presentation";
            e.preventDefault();
        });
        $("#click_resolution_of_meeting").click(function(e){
            window.location.href = "/news-search-all/resolution_of_meeting";
            e.preventDefault();
        });
        $("#click_vdo_youtube").click(function(e){
            window.location.href = "/news-search-all/vdo_youtube";
            e.preventDefault();
        });
        $("#click_landmarks").click(function(e){
            window.location.href = "/news-search-all/landmarks";
            e.preventDefault();
        });
        $("#click_otop").click(function(e){
            window.location.href = "/news-search-all/otop";
            e.preventDefault();
        });
        $("#click_transfer_news").click(function(e){
            window.location.href = "/news-search-all/transfer_news";
            e.preventDefault();
        });
    });
</script>

<style type="text/css">
    .right-detail-all {
        padding-right: 30px;
        position: absolute;
        right: 10px;
        font-size: 14px;
    }
</style>
<?php } ?>

<?php if($menu_nav == 'contact_us') { ?>
	<!-- Google Maps -->
  <style>
    #google-map,
    body,
    html {
      padding: 0;
      height: 400px;
    }
  </style>

	<!-- Google Maps API -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB4nlO7fqX5bllcCAKgjWGrBh8gYT9yh-I">
  </script>
  <!-- Google Maps JS Only for Contact Pages -->
    <script type="text/javascript">
    var map;
    var plain = new google.maps.LatLng("<?php echo isset($contact_us[0]->latitude)? $contact_us[0]->latitude:""; ?>", "<?php echo isset($contact_us[0]->longitude)? $contact_us[0]->longitude:""; ?>");
    var mapCoordinates = new google.maps.LatLng("<?php echo isset($contact_us[0]->latitude)? $contact_us[0]->latitude:""; ?>", "<?php echo isset($contact_us[0]->longitude)? $contact_us[0]->longitude:""; ?>");
    
    
    var markers = [];
    var image = new google.maps.MarkerImage(
      'public/fn/demo1/images/map-marker.png',
      new google.maps.Size(84, 70),
      new google.maps.Point(0, 0),
      new google.maps.Point(60, 60)
    );
    
    function addMarker() {
      markers.push(new google.maps.Marker({
        position: plain,
        raiseOnDrag: false,
        icon: image,
        map: map,
        draggable: false
      }
                                         ));
      
    }
    
    function initialize() {
      var mapOptions = {
        backgroundColor: "#ffffff",
        zoom: 15,
        disableDefaultUI: true,
        center: mapCoordinates,
        zoomControl: false,
        scaleControl: false,
        scrollwheel: false,
        disableDoubleClickZoom: true,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        styles: [{
          "featureType": "landscape.natural",
          "elementType": "geometry.fill",
          "stylers": [{
            "color": "#ffffff"
          }
                     ]
        }
                 , {
                   "featureType": "landscape.man_made",
                   "stylers": [{
                     "color": "#ffffff"
                   }
                               , {
                                 "visibility": "off"
                               }
                              ]
                 }
                 , {
                   "featureType": "water",
                   "stylers": [{
                     "color": "#80C8E5"
                   }
                               , {
                                 "saturation": 0
                               }
                              ]
                 }
                 , {
                   "featureType": "road.arterial",
                   "elementType": "geometry",
                   "stylers": [{
                     "color": "#999999"
                   }
                              ]
                 }
                 , {
                   "elementType": "labels.text.stroke",
                   "stylers": [{
                     "visibility": "off"
                   }
                              ]
                 }
                 , {
                   "elementType": "labels.text",
                   "stylers": [{
                     "color": "#333333"
                   }
                              ]
                 }
                 
                 , {
                   "featureType": "road.local",
                   "stylers": [{
                     "color": "#dedede"
                   }
                              ]
                 }
                 , {
                   "featureType": "road.local",
                   "elementType": "labels.text",
                   "stylers": [{
                     "color": "#666666"
                   }
                              ]
                 }
                 , {
                   "featureType": "transit.station.bus",
                   "stylers": [{
                     "saturation": -57
                   }
                              ]
                 }
                 , {
                   "featureType": "road.highway",
                   "elementType": "labels.icon",
                   "stylers": [{
                     "visibility": "off"
                   }
                              ]
                 }
                 , {
                   "featureType": "poi",
                   "stylers": [{
                     "visibility": "off"
                   }
                              ]
                 }
                 
                ]
        
      }
          ;
      map = new google.maps.Map(document.getElementById('google-map'), mapOptions);
      addMarker();
      
    }
    google.maps.event.addDomListener(window, 'load', initialize);
  </script>

<?php } ?>