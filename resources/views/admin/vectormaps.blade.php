@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Vector Maps
@parent
@stop

{{-- page level styles --}}
@section('header_styles')    
    
	<link href="{{ asset('css/pages/jqvmap.css') }}" media="screen" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://openlayers.org/en/v4.6.5/css/ol.css" type="text/css">
@stop

{{-- Page content --}}
@section('content')

            <section class="content">
                <!-- row -->

                	
                <div class="row">
                    <div class="col-lg-12 col-12 col-md-12 my-3">
                        <!-- Basic charts strats here-->
                        <div class="card panel-primary">
                            <div class="card-heading">
                                <h4 class="card-title">Bolivia</h4>
                                <span class="float-right">
                                    <i class="fa fa-chevron-up showhide clickable"></i>
                                    <i class="fa fa-remove removepanel clickable"></i>
                                </span>
                            </div>
                            
			            
			                            
                            <div class="card-body" style="width: 100%; height: 700px;">
								<body onload="initialize_map(); add_map_point(-17.381774, -66.152911);">
	                              
	                              
	                              <div class="form-inline">
                                    <select class="form-control" style="width: 180px; height: 35px;">
                                    	<option>Seleccionar vehículo</option>
									    <option>Juan</option>
									    <option>Pepe</option>
									    <option>Carlos</option>
									</select>
									<button type="button" class="btn btn-primary">Rastrear</button>
				                  </div>	
				                  
				                  
								  <div id="map" style="width: 100%; height: 100%;"></div>
								</body>
							    
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row --> 
            </section>
            <!--page wrapper--> 
    @stop

{{-- page level scripts --}}
@section('footer_scripts')
   <!-- 
    <script src="{{ asset('vendors/jqvmap/js/jquery.vmap.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('vendors/jqvmap/js/jquery.vmap.world.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('vendors/jqvmap/js/jquery.vmap.usa.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('vendors/jqvmap/js/jquery.vmap.europe.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('vendors/jqvmap/js/jquery.vmap.germany.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('vendors/jqvmap/js/jquery.vmap.russia.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('vendors/jqvmap/js/jquery.vmap.sampledata.js') }}" ></script>
    <script type="text/javascript"> -->
    <script src="https://openlayers.org/en/v4.6.5/build/ol.js" type="text/javascript"></script>     
@stop

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






