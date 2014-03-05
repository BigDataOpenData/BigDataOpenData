            var latcenter = 43.46380356;
            var loncenter = 6.63807891;
            var zoom = 10;
            var map;
            var size = new OpenLayers.Size(21, 25);
            var offset = new OpenLayers.Pixel(-(size.w / 2), -size.h);
            var icon = new OpenLayers.Icon('http://www.openstreetmap.org/openlayers/img/marker.png', size, offset);

            /*Fonction d'initiation de la carte*/
            function init() {
                map = new OpenLayers.Map("divmap", {
                    controls: [
                        new OpenLayers.Control.Navigation(),
                        new OpenLayers.Control.PanZoomBar(),
                        new OpenLayers.Control.LayerSwitcher(),
                        new OpenLayers.Control.Attribution()],
                    maxExtent: new OpenLayers.Bounds(-20037508.34, -20037508.34, 20037508.34, 20037508.34),
                    maxResolution: 156543.0399,
                    numZoomLevels: 19,
                    units: 'm',
                    projection: new OpenLayers.Projection("EPSG:900913"),
                    displayProjection: new OpenLayers.Projection("EPSG:4326")
                });

                // Define the map layer
                // Here we use a predefined layer that will be kept up to date with URL changes
                layerMapnik = new OpenLayers.Layer.OSM.Mapnik("Mapnik");
                map.addLayer(layerMapnik);
                layerMarkers = new OpenLayers.Layer.Markers("Markers");
                map.addLayer(layerMarkers);

/* Tracé de la ligne de bus 2602*/
                // Add the Layer with the GPX Track
                var lgpx = new OpenLayers.Layer.Vector("Ligne de bus 2602", {
                    strategies: [new OpenLayers.Strategy.Fixed()],
                    protocol: new OpenLayers.Protocol.HTTP({
                        url: "../data/bus2602.gpx",
                        format: new OpenLayers.Format.GPX
                    }),
                    style: {strokeColor: "blue", strokeWidth: 5, strokeOpacity: 0.5},
                    projection: new OpenLayers.Projection("EPSG:4326")
                });
                map.addLayer(lgpx);

/* Tracé de la ligne de bus 7753 */
                // Add the Layer with the GPX Track
                var lgpx = new OpenLayers.Layer.Vector("Ligne de bus 7753", {
                    strategies: [new OpenLayers.Strategy.Fixed()],
                    protocol: new OpenLayers.Protocol.HTTP({
                        url: "../data/bus7753.gpx",
                        format: new OpenLayers.Format.GPX
                    }),
                    style: {strokeColor: "blue", strokeWidth: 5, strokeOpacity: 0.5},
                    projection: new OpenLayers.Projection("EPSG:4326")
                });
                map.addLayer(lgpx);

                /*
                 * Style pour les points représentant les arrêts de bus
                 */
                var myStyles = new OpenLayers.StyleMap({
                    "default": new OpenLayers.Style({
                        pointRadius: 10,
                        fillColor: "#ffcc66",
                        strokeColor: "#ff9933",
                        strokeWidth: 2,
                        graphicZIndex: 1
                    }),
                    "select": new OpenLayers.Style({
                        fillColor: "#66ccff",
                        strokeColor: "#3399ff",
                        graphicZIndex: 2
                    })
                });
            
/* Liste des arrêts de bus 2602 */
                // Add the Layer with the GPX Track
                var lgpx = new OpenLayers.Layer.PointTrack("Arrêts de bus 2602", {
                    strategies: [new OpenLayers.Strategy.Fixed()],
                    protocol: new OpenLayers.Protocol.HTTP({
                        url: "../data/busstop2602.gpx",
                        format: new OpenLayers.Format.GPX({
                            extractWaypoints: true})
                    }),
                    style: myStyles,
                    projection: new OpenLayers.Projection("EPSG:4326")
                });
                map.addLayer(lgpx);

/* Liste des arrêts de bus 7753 */
                // Add the Layer with the GPX Track
                var lgpx = new OpenLayers.Layer.PointTrack("Arrêts de bus 7753", {
                    strategies: [new OpenLayers.Strategy.Fixed()],
                    protocol: new OpenLayers.Protocol.HTTP({
                        url: "../data/busstop7753.gpx",
                        format: new OpenLayers.Format.GPX
                    }),
                    style: myStyles,
                    projection: new OpenLayers.Projection("EPSG:4326")
                });
                var points = [];
                map.addLayer(lgpx);

                /*Placement du centre de la carte*/
                var lonLat = new OpenLayers.LonLat(loncenter, latcenter).transform(new OpenLayers.Projection("EPSG:4326"), map.getProjectionObject());
                map.setCenter(lonLat, zoom);

                //layerMarkers.addMarker(new OpenLayers.Marker(lonLat,icon));
            }


