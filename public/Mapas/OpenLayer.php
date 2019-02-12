<!--
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>OpenStreetMap &amp; OpenLayers - Marker Example</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" href="https://openlayers.org/en/v4.6.5/css/ol.css" type="text/css">
  <script src="https://openlayers.org/en/v4.6.5/build/ol.js" type="text/javascript"></script>
  
  <script>
    /* OSM & OL example code provided by https://mediarealm.com.au/ */
    var map;
    var mapLat = -17.381774;
    var mapLng = -66.152911;
    var mapDefaultZoom = 17;
    
    function initialize_map() {
      map = new ol.Map({
        target: "map",
        layers: [
            new ol.layer.Tile({
                source: new ol.source.OSM({
                      url: "https://a.tile.openstreetmap.org/{z}/{x}/{y}.png"
                })
            })
        ],
        view: new ol.View({
            center: ol.proj.fromLonLat([mapLng, mapLat]),
            zoom: mapDefaultZoom
        })
      });
    }
    function add_map_point(lat, lng) {
      var vectorLayer = new ol.layer.Vector({
        source:new ol.source.Vector({
          features: [new ol.Feature({
                geometry: new ol.geom.Point(ol.proj.transform([parseFloat(lng), parseFloat(lat)], 'EPSG:4326', 'EPSG:3857')),
            })]
        }),
        style: new ol.style.Style({
          image: new ol.style.Icon({
            anchor: [0.5, 0.5],
            anchorXUnits: "fraction",
            anchorYUnits: "fraction",
            src: "https://upload.wikimedia.org/wikipedia/commons/e/ec/RedDot.svg"
          })
        })
      });
      map.addLayer(vectorLayer); 
    }
  </script>
</head>
<body onload="initialize_map(); add_map_point(-17.381774, -66.152911);">
  <div id="map" style="width: 100vw; height: 100vh;"></div>
</body>
</html>

-->
   
<!--
<html>
    <head>
        <title></title>

        <script src="http://openlayers.org/api/OpenLayers.js"></script>   
        <script type="text/javascript">
            var lat=-17.381774;
            var lon=-66.152911;
            var zoom=15;
            var map;
 




            function init(){
                map = new OpenLayers.Map ("map", {
                controls:[
                    new OpenLayers.Control.Navigation(),
                    new OpenLayers.Control.PanZoomBar(),
                    new OpenLayers.Control.LayerSwitcher(),
                    new OpenLayers.Control.Attribution()],
                    maxExtent: new OpenLayers.Bounds(-20037508.34,-20037508.34,20037508.34,20037508.34),
                    maxResolution: 156543.0399,
                    numZoomLevels: 19,
                    units: 'm',
                    projection: new OpenLayers.Projection("EPSG:900913"),
                    displayProjection: new OpenLayers.Projection("EPSG:4326")
                } );
 
                
                map.addLayer(new OpenLayers.Layer.OSM());
 
                var lonLat = new OpenLayers.LonLat(lon, lat).transform(new OpenLayers.Projection("EPSG:4326"), new OpenLayers.Projection("EPSG:900913"));
 
                map.setCenter (lonLat, zoom);

                //Initialise the vector layer using OpenLayers.Format.OSM
                var layer = new OpenLayers.Layer.Vector("Polygon", {
                    strategies: [new OpenLayers.Strategy.Fixed()],
                    protocol: new OpenLayers.Protocol.HTTP({
                        url: "myosmfile.osm",   //<-- relative or absolute URL to your .osm file
                        format: new OpenLayers.Format.OSM()
                    }),
                    projection: new OpenLayers.Projection("EPSG:4326")
                });

                /////////agregado////////////////
                var markers = new OpenLayers.Layer.Markers( "Markers" );
                map.addLayer(markers);
                markers.addMarker(new OpenLayers.Marker(lonLat));

                //-17.3815992, -66.1529672

                ////////////////////////////////


 
                map.addLayers([layer]);
 
            }
        </script>
    </head>
    <body onload="init()">
        <div id="map" class="smallmap"></div>
        </div>
    </body>
</html>
-->


<html>
    <head>
        <title></title>

        <script src="http://openlayers.org/api/OpenLayers.js"></script>   
        <script type="text/javascript">
            var lat=-17.381774;
            var lon=-66.152911;
            var zoom=15;
            var map;
 




            function init(){
                map = new OpenLayers.Map ("map", {
                controls:[
                    new OpenLayers.Control.Navigation(),
                    new OpenLayers.Control.PanZoomBar(),
                    new OpenLayers.Control.LayerSwitcher(),
                    new OpenLayers.Control.Attribution()],
                    maxExtent: new OpenLayers.Bounds(-20037508.34,-20037508.34,20037508.34,20037508.34),
                    maxResolution: 156543.0399,
                    numZoomLevels: 19,
                    units: 'm',
                    projection: new OpenLayers.Projection("EPSG:900913"),
                    displayProjection: new OpenLayers.Projection("EPSG:4326")
                } );
 
                
                map.addLayer(new OpenLayers.Layer.OSM());
 
                var lonLat = new OpenLayers.LonLat(lon, lat).transform(new OpenLayers.Projection("EPSG:4326"), new OpenLayers.Projection("EPSG:900913"));
 
                map.setCenter (lonLat, zoom);

                //Initialise the vector layer using OpenLayers.Format.OSM
                var layer = new OpenLayers.Layer.Vector("Polygon", {
                    strategies: [new OpenLayers.Strategy.Fixed()],
                    protocol: new OpenLayers.Protocol.HTTP({
                        url: "myosmfile.osm",   //<-- relative or absolute URL to your .osm file
                        format: new OpenLayers.Format.OSM()
                    }),
                    projection: new OpenLayers.Projection("EPSG:4326")
                });

                /////////agregado////////////////
                var markers = new OpenLayers.Layer.Markers( "Markers" );
                map.addLayer(markers);
                markers.addMarker(new OpenLayers.Marker(lonLat));

                //-17.3815992, -66.1529672

                ////////////////////////////////


 
                map.addLayers([layer]);
 
            }
        </script>
    </head>
    <body onload="init()">
        <div id="map" class="smallmap"></div>
        </div>
    </body>
</html>