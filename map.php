    <?php

    error_reporting(E_ERROR | E_PARSE);
    session_start();
    if (isset( $_SESSION['username']) == FALSE){
      header("Location:admin.php");
    } ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
     <meta charset="utf-8">
     <title>Nitrr</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <meta name="description" content="" />
     <!-- css -->
     <link href="css/bootstrap.min.css" rel="stylesheet" />
     <link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
     <link href="css/jcarousel.css" rel="stylesheet" />
     <link href="css/flexslider.css" rel="stylesheet" />
     <link href="css/style.css" rel="stylesheet" />
     <!-- Theme skin -->
     <link href="skins/default.css" rel="stylesheet" />
     <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.49.0/mapbox-gl.js'></script>
     <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.49.0/mapbox-gl.css' rel='stylesheet' />
     <style>
     body { margin:0; padding:0; }
     #map { position:absolute; top:0; bottom:0; width:100%; }
     .mapboxgl-popup {
      max-width: 400px;
      font: 12px/20px 'Helvetica Neue', Arial, Helvetica, sans-serif;
    }

    </style>
  </head>

  <body>
   <div id="wrapper">
    <!-- start header -->
    <header>
      <div class="navbar navbar-default navbar-static-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><span>NIT </span>Raipur</a>
          </div>
          <div class="navbar-collapse collapse ">
            <ul class="nav navbar-nav">
              <li class="active"><a href="index.php">Home</a></li>
              <li ><a href="dashboard.php">Dashboard</a></li>
              <li><a href="logout.php">Logout</a></li>
            </ul>
          </div>
        </div>
      </div>
    </header>
    <!-- end header -->
    

    <section id="content">
     <div class="container">
      <div class="row">
       <div class="col-lg-12">

         
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <div id="tab-1" class="tab-content current">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
        <div id="tab-2" class="tab-content">
        </div>
        <div id="tab-3" class="tab-content">
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        </div>
        <div id="tab-4" class="tab-content">
          Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
      </div>
    </div>
  </div>
  <div id="map"> 
  </div> 
</section>
<!--footer-->

</div>
<script>
mapboxgl.accessToken = 'pk.eyJ1IjoibWloaXJhbWJzamIiLCJhIjoiY2puMXI0ZjNsMGR0dzNxbTRwaDg0NW42dCJ9.BE6bt-aI3aPq7jaxLU7Z2g';

var map = new mapboxgl.Map({
  container: 'map',
  style: 'mapbox://styles/mapbox/streets-v9',
  center: [ 83.8473,22.7875],
  zoom: 7
});





map.on('load', function () {
  /* Image: An image is loaded and added to the map. */
  map.loadImage("https://i.imgur.com/MK4NUzI.png", function(error, image) {
    if (error) throw error;
    map.addImage("custom-marker", image);
    /* Style layer: A style layer ties together the source and image and specifies how they are displayed on the map. */
    map.addLayer({
      id: "markers",
      type: "symbol",
      /* Source: A data source specifies the geographic coordinate where the image marker gets placed. */
      source: {
        type: "geojson",
        data: {
          type: "FeatureCollection",
          features:[{"type":"Feature","geometry":{"type":"Point","coordinates":["81.6021","21.2499"]}},{"type":"Feature","geometry":{"type":"Point","coordinates":["81.6121","21.2501"]}},{"type":"Feature","geometry":{"type":"Point","coordinates":["81.6041","21.2491"]}}]}
        },
        layout: {
          "icon-image": "custom-marker",
        }
      });
  });
  map.addLayer({
    "id": "route",
    "type": "line",
    "source": {
      "type": "geojson",
      "data": {
        "type": "Feature",
        "properties": {},
        "geometry": {
          "type": "LineString",
          "coordinates": [
          [81.6021, 21.2499],
          [81.6022, 21.2498],
          [81.6023, 21.2497],
          [81.6024, 21.2496],
          [81.6025, 21.2495],
          [81.6026, 21.2494],
          [81.6027, 21.2493],
          [81.6028, 21.2492],
          [81.6029, 21.2491],
          [81.60291, 21.2490],
          [81.60292, 21.2489],
          [81.60295, 21.2488],
          [81.6030, 21.2486],

          [81.6031, 21.2484],
          [81.6051,21.2474]
          
          ]
        }
      }
    },
    "layout": {
      "line-join": "round",
      "line-cap": "round"
    },
    "paint": {
      "line-color": "#F00",
      "line-width": 3
    }
  });



});
    </script>
    <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
    <script src="js/jquery.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/jquery.fancybox-media.js"></script>
    <script src="js/google-code-prettify/prettify.js"></script>
    <script src="js/portfolio/jquery.quicksand.js"></script>
    <script src="js/portfolio/setting.js"></script>
    <script src="js/jquery.flexslider.js"></script>
    <script src="js/animate.js"></script>
    <script src="js/custom.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      
      $('ul.tabs li').click(function(){
        var tab_id = $(this).attr('data-tab');

        $('ul.tabs li').removeClass('current');
        $('.tab-content').removeClass('current');

        $(this).addClass('current');
        $("#"+tab_id).addClass('current');
      })

    })</script>
  </body>

  </html>
