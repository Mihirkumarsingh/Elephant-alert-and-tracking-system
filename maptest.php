<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8' />
    <title>Alert System</title>
    <meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.50.0/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.50.0/mapbox-gl.css' rel='stylesheet' />
    <style>
    body { margin:0; padding:0; }
    #map { position:absolute; top:0; bottom:0; width:100%; }
    </style>
</head>
<body>

    <div id="map"></div>
    <script>
    mapboxgl.accessToken = 'pk.eyJ1IjoibWloaXJhbWJzamIiLCJhIjoiY2puMXI0ZjNsMGR0dzNxbTRwaDg0NW42dCJ9.BE6bt-aI3aPq7jaxLU7Z2g';
    var map = new mapboxgl.Map({
        container: "map",
        style: "mapbox://styles/mapbox/streets-v9",
        center: [83.8473,22.7875],
        zoom: 8.7
    });

    map.on("load", function() {
     /* Image: An image is loaded and added to the map. */
     map.loadImage("", function(error, image) {
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
            features:[{"type":"Feature","geometry":{"type":"Point","coordinates":["84.22865","22.82681"]}},
            {"type":"Feature","geometry":{"type":"Point","coordinates":["84.22413","22.79753"]}},
            {"type":"Feature","geometry":{"type":"Point","coordinates":["84.24057","22.89976"]}},
            {"type":"Feature","geometry":{"type":"Point","coordinates":["84.03062","22.79635"]}},
            {"type":"Feature","geometry":{"type":"Point","coordinates":["83.7321","22.95585"]}},
            {"type":"Feature","geometry":{"type":"Point","coordinates":["83.80411","22.94748"]}},
            {"type":"Feature","geometry":{"type":"Point","coordinates":["83.86396","22.65797"]}},
            {"type":"Feature","geometry":{"type":"Point","coordinates":["84.07517","22.99354"]}},
            {"type":"Feature","geometry":{"type":"Point","coordinates":["83.68505","22.79437"]}},
            {"type":"Feature","geometry":{"type":"Point","coordinates":["83.7702","23.2192"]}},
            {"type":"Feature","geometry":{"type":"Point","coordinates":["83.55775","22.95725"]}},
            {"type":"Feature","geometry":{"type":"Point","coordinates":["84.38279","22.9224"]}},
            {"type":"Feature","geometry":{"type":"Point","coordinates":["83.95899","22.59798"]}},
            {"type":"Feature","geometry":{"type":"Point","coordinates":["83.659821","22.719851"]}},
            {"type":"Feature","geometry":{"type":"Point","coordinates":["83.41628","22.61679"]}},
            {"type":"Feature","geometry":{"type":"Point","coordinates":["83.60459","22.55153"]}},
            {"type":"Feature","geometry":{"type":"Point","coordinates":["83.74105","22.43994"]}},
            {"type":"Feature","geometry":{"type":"Point","coordinates":["83.87326","22.39277"]}},
            {"type":"Feature","geometry":{"type":"Point","coordinates":["83.98574","22.42804"]}},
            {"type":"Feature","geometry":{"type":"Point","coordinates":["83.91217","22.53266"]}},
            {"type":"Feature","geometry":{"type":"Point","coordinates":["83.85915","22.57569"]}},
            {"type":"Feature","geometry":{"type":"Point","coordinates":["84.137199","22.8773"]}},
            {"type":"Feature","geometry":{"type":"Point","coordinates":["84.05519","22.99787"]}},
            {"type":"Feature","geometry":{"type":"Point","coordinates":["83.85086","22.51596"]}},
            {"type":"Feature","geometry":{"type":"Point","coordinates":["84.1435","22.68608"]}}]}
        },
        layout: {
          "icon-image": "custom-marker",
      }
  });
});
map.addSource("national-park", {
    "type": "geojson",
    "data": {
        "type": "FeatureCollection",
        "features": [{
            "type": "Feature",
            "geometry": {
                "type": "Polygon",
                "coordinates": [
                [
                [83.819248,22.290835],
                [83.832831,22.303398],
                [83.843508,22.323140],
                [83.860973,22.327620],
                [ 83.872623,22.341973],
                [ 83.888143,22.335680],
                [ 83.907551,22.338358],
                [ 83.909732,22.339206],
                [ 83.929602,22.357514],
                [ 83.963031,22.361307],
                [ 83.990207,22.368969],
                [ 84.011118,22.375677],
                [ 84.050998,22.440271],
                [ 84.007127,22.456794],
                [ 83.969576,22.493562],
                [ 83.984250,22.508979],
                [ 83.981127,22.514778],
                [ 83.987425,22.524419],
                [ 84.004181,22.533072],
                [ 84.003161,22.550716],
                [ 84.014911,22.581168],
                [ 84.059696,22.606145],
                [ 84.081191,22.636566],
                [ 84.133723,22.641776],
                [ 84.199994,22.668443],
                [ 84.233092,22.670109],
                [ 84.237234,22.720323],
                [ 84.264739,22.765066],
                [ 84.293042,22.767095],
                [ 84.291476,22.782185],
                [ 84.301393,22.800252],
                [ 84.322857,22.831858],
                [ 84.332845,22.862004],
                [84.365658,22.864905],
                [ 84.365658,22.864905],
                [ 84.371636,22.912123],
                [ 84.389653,22.923486],
                [ 84.377507,22.969234],
                [ 84.329220,22.977005],
                [ 84.276717,22.968272],
                [ 84.275071,22.990714],
                [ 84.259428,22.978187],
                [ 84.224346,22.977353],
                [ 84.200507,23.003794],
                [ 84.188893,23.024399],
                [ 84.176117,22.978793],
                [ 84.153720,22.967208],
                [ 84.122768,23.034366],
                [ 84.131632,23.077299],
                [ 84.112219,23.096122],
                [ 84.077227,23.113173],
                [ 84.048080,23.135580],
                [ 84.026716,23.159766],
                [ 84.015002,23.187330],
                [ 83.996523,23.190927],
                [ 83.970253,23.189163],
                [ 83.957580,23.169500],                                                         
                [ 83.936163,23.151634],
                [ 83.926459,23.170418],
                [ 83.8885498,23.191900], 
                [ 83.868137,23.213370],
                [ 83.845769,23.227686],
                [ 83.794205,23.247368], 
                [ 83.776694,23.227690],
                [ 83.751394,23.239312],
                [ 83.723194,23.213367], 
                [ 83.700819,23.213357],
                [ 83.655072,23.229428],
                [ 83.625894,23.219567], 
                [ 83.603571,23.186455],
                [ 83.577295,23.190004],
                [ 83.567594,23.175683], 
                [ 83.560026,23.131982],
                [ 83.527009,23.100659],
                [ 83.512459,23.078291], 
                [ 83.511175,23.056010],
                [ 83.545591,23.038312],
                [ 83.525013,22.992721], 
                [ 83.511336,22.937012],
                [ 83.558106,22.896547],
                [ 83.574611,22.873776], 
                [ 83.593852,22.859865],
                [ 83.624078,22.838362],
                [ 83.648809,22.825712], 
                [ 83.652932,22.748507],
                [ 83.628238,22.718124],
                [ 83.633655,22.699275], 
                [ 83.667995,22.688723],
                [ 83.669644,22.626873],
                [ 83.632037,22.666085], 
                [ 83.553538,22.690176],
                [ 83.502887,22.662972],
                [ 83.437457,22.674957], 
                [ 83.413025,22.629657],
                [ 83.409801,22.608530],
                [83.403385,22.552698], 
                [ 83.490063,22.497016],
                [ 83.540664,22.515176],
                [ 83.581467,22.542362], 
                [ 83.579887,22.479007],
                [ 83.612562,22.436791],
                [ 83.648478,22.402110], 
                [ 83.692531,22.377980],
                [ 83.738207,22.371940],
                [ 83.759400,22.338741], 
                [ 83.774719,22.321550],
                [ 83.785699,22.308852],
                [ 83.795991,22.306946], 
                [ 83.802165,22.296152],
                [83.809588,22.289809],
                [ 83.813261,22.291319]
                ]
                ]
            }
        }]
    }
});

map.addLayer({
    "id": "park-boundary",
    "type": "fill",
    "source": "national-park",
    "line-color":"red",
    "paint": {
        "fill-color": "red",
        "fill-opacity": 0.05
    },
    "filter": ["==", "$type", "Polygon"]
});

map.addLayer({
    "id": "park-volcanoes",
    "type": "circle",
    "source": "national-park",
    "paint": {
        "circle-radius": 6,
        "circle-color": "#B42222"
    },
    "filter": ["==", "$type", "Point"],
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
                <?php 
                error_reporting(E_ERROR | E_PARSE);
//Connect to the database
                include("connect.php");
                $id=$_GET['elephant'];
                $sql =  mysqli_query($link, "SELECT * From track where elephantid='$id'");
                $row = mysqli_num_rows($sql);
                while ($row = mysqli_fetch_array($sql)){
                    echo "[". $row['longitude'] ."," .$row['latitude'] ."]," ;
                }
                ?>
                [ ,]

                ]
            }
        }
    },
    "layout": {
        "line-join": "round",
        "line-cap": "round"
    },
    "paint": {
        "line-color": "black",
        "line-width": 3
    }
});
map.addLayer({
    "id": "places",
    "type": "symbol",
    "source": {
        "type": "geojson",
        "data": {
            "type": "FeatureCollection",
            "features": [{
                "type": "Feature",
                "properties": {
                    "description": "<strong>Boki</strong>",
                    "icon": "star"
                },
                "geometry": {
                    "type": "Point",
                    "coordinates": [84.23989427,22.83119707]
                }
            }, {
                "type": "Feature",
                "properties": {
                    "description": "<strong>Dharen</strong>",
                    "icon": "star"
                },
                "geometry": {
                    "type": "Point",
                    "coordinates": [84.2226102,22.7955201]
                }
            }, {
                "type": "Feature",
                "properties": {
                    "description": "<strong>Koleng</strong>",
                    "icon": "star"
                },
                "geometry": {
                    "type": "Point",
                    "coordinates": [84.241051,22.9119455]
                }
            }, {
                "type": "Feature",
                "properties": {
                    "description": "<strong>Bhandri</strong>",
                    "icon": "star"
                },
                "geometry": {
                    "type": "Point",
                    "coordinates": [84.0339249,22.7930414]
                }
            }, 
            {
                "type": "Feature",
                "properties": {
                    "description": "<strong>Bene</strong>",
                    "icon": "star"
                },
                "geometry": {
                    "type": "Point",
                    "coordinates": [83.9611964,22.8837765]
                }
            },{
                "type": "Feature",
                "properties": {
                    "description": "<strong>Butanga</strong>",
                    "icon": "star"
                },
                "geometry": {
                    "type": "Point",
                    "coordinates": [83.7969085,22.9367914]
                }
            }, {
                "type": "Feature",
                "properties": {
                    "description": "<strong>Bagiya</strong>",
                    "icon": "star"
                },
                "geometry": {
                    "type": "Point",
                    "coordinates":[83.8711574,22.6548445]
                }
            }, {
                "type": "Feature",
                "properties": {
                    "description": "<strong>Kansabel</strong>",
                    "icon": "star"
                },
                "geometry": {
                    "type": "Point",
                    "coordinates": [83.7438188,22.644]
                }
            }, {
                "type": "Feature",
                "properties": {
                    "description": "<strong>Ghoghar</strong>",
                    "icon": "star"
                },
                "geometry": {
                    "type": "Point",
                    "coordinates": [83.6933415,22.763652]
                }
            }, {
                "type": "Feature",
                "properties": {
                    "description": "<strong>Fuljhar</strong>",
                    "icon": "star"
                },
                "geometry": {
                    "type": "Point",
                    "coordinates": [83.7862942,23.2032882]
                }
            }
            , {
                "type": "Feature",
                "properties": {
                    "description": "<strong>Bimda</strong>",
                    "icon": "star"
                },
                "geometry": {
                    "type": "Point",
                    "coordinates": [83.5603112,22.9540729]
                }
            }
            , {
                "type": "Feature",
                "properties": {
                    "description": "<strong>Girla</strong>",
                    "icon": "star"
                },
                "geometry": {
                    "type": "Point",
                    "coordinates": [84.3726049,22.9344597]
                }
            }
            , {
                "type": "Feature",
                "properties": {
                    "description": "<strong>Kersai</strong>",
                    "icon": "star"
                },
                "geometry": {
                    "type": "Point",
                    "coordinates": [83.9638426,22.5900961]
                }
            }
            , {
                "type": "Feature",
                "properties": {
                    "description": "<strong>Nakbar</strong>",
                    "icon": "star"
                },
                "geometry": {
                    "type": "Point",
                    "coordinates":[83.666758,22.7210737]
                }
            }
            , {
                "type": "Feature",
                "properties": {
                    "description": "<strong>Kilkila</strong>",
                    "icon": "star"
                },
                "geometry": {
                    "type": "Point",
                    "coordinates":[83.4296686,22.5958683]
                }
            }
            , {
                "type": "Feature",
                "properties": {
                    "description": "<strong>Ludeg</strong>",
                    "icon": "star"
                },
                "geometry": {
                    "type": "Point",
                    "coordinates":[83.6188793,22.5352577]
                }
            }
            , {
                "type": "Feature",
                "properties": {
                    "description": "<strong>Kotba</strong>",
                    "icon": "star"
                },
                "geometry": {
                    "type": "Point",
                    "coordinates": [83.7570955,22.4219782]
                }
            }
            , {
                "type": "Feature",
                "properties": {
                    "description": "<strong>Tumla</strong>",
                    "icon": "star"
                },
                "geometry": {
                    "type": "Point",
                    "coordinates": [83.8844068,22.379351]
                }
            } , {
                "type": "Feature",
                "properties": {
                    "description": "<strong>Sahilata</strong>",
                    "icon": "star"
                },
                "geometry": {
                    "type": "Point",
                    "coordinates":[83.9876532,22.4218018]
                }
            } , {
                "type": "Feature",
                "properties": {
                    "description": "<strong>Dhourasand</strong>",
                    "icon": "star"
                },
                "geometry": {
                    "type": "Point",
                    "coordinates": [83.9188416,22.5320145]
                }
            } , {
                "type": "Feature",
                "properties": {
                    "description": "<strong>Rebda</strong>",
                    "icon": "star"
                },
                "geometry": {
                    "type": "Point",
                    "coordinates": [83.8711574,22.5776909]
                }
            } , {
                "type": "Feature",
                "properties": {
                    "description": "<strong>Barjor</strong>",
                    "icon": "star"
                },
                "geometry": {
                    "type": "Point",
                    "coordinates":[83.7889479,22.6012451]
                }
            } , {
                "type": "Feature",
                "properties": {
                    "description": "<strong>Manora</strong>",
                    "icon": "star"
                },
                "geometry": {
                    "type": "Point",
                    "coordinates": [83.9704575,23.1199769]
                }
            } , {
                "type": "Feature",
                "properties": {
                    "description": "<strong>Pharsabahar</strong>",
                    "icon": "star"
                },
                "geometry": {
                    "type": "Point",
                    "coordinates": [83.8492094,22.5277749]
                }
            } , {
                "type": "Feature",
                "properties": {
                    "description": "<strong>Korna</strong>",
                    "icon": "star"
                },
                "geometry": {
                    "type": "Point",
                    "coordinates": [84.1461519,22.6947888]

                }
            }]
        }
    },
    "layout": {
        "icon-image": "{icon}-15",
        "icon-allow-overlap": true
    }
});

    // Create a popup, but don't add it to the map yet.
    var popup = new mapboxgl.Popup({
        closeButton: false,
        closeOnClick: false
    });

    map.on('mouseenter', 'places', function(e) {
        // Change the cursor style as a UI indicator.
        map.getCanvas().style.cursor = 'pointer';

        var coordinates = e.features[0].geometry.coordinates.slice();
        var description = e.features[0].properties.description;

        // Ensure that if the map is zoomed out such that multiple
        // copies of the feature are visible, the popup appears
        // over the copy being pointed to.
        while (Math.abs(e.lngLat.lng - coordinates[0]) > 180) {
            coordinates[0] += e.lngLat.lng > coordinates[0] ? 360 : -360;
        }

        // Populate the popup and set its coordinates
        // based on the feature found.
        popup.setLngLat(coordinates)
        .setHTML(description)
        .addTo(map);
    });

    map.on('mouseleave', 'places', function() {
        map.getCanvas().style.cursor = '';
        popup.remove();
    });
});
</script>

</body>
</html>