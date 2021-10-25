<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="stylesheet" href="css/leaflet.css">
        <link rel="stylesheet" href="css/qgis2web.css"><link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/leaflet-search.css">
        <link rel="stylesheet" href="css/leaflet-measure.css">
        <style>
        html, body, #map {
            width: 100%;
            height: 100%;
            padding: 0;
            margin: 0;
        }
        </style>
        <title></title>
    </head>
    <body>
        <div id="map">
        </div>
        <script src="js/qgis2web_expressions.js"></script>
        <script src="js/leaflet.js"></script>
        <script src="js/leaflet.rotatedMarker.js"></script>
        <script src="js/leaflet.pattern.js"></script>
        <script src="js/leaflet-hash.js"></script>
        <script src="js/Autolinker.min.js"></script>
        <script src="js/rbush.min.js"></script>
        <script src="js/labelgun.min.js"></script>
        <script src="js/labels.js"></script>
        <script src="js/leaflet-measure.js"></script>
        <script src="js/leaflet-search.js"></script>
        <script src="data/Kecamatan_1.php"></script>
        <script src="data/PeternakanSapi_2.php"></script>
        <script>
        var highlightLayer;
        function highlightFeature(e) {
            highlightLayer = e.target;

            if (e.target.feature.geometry.type === 'LineString') {
              highlightLayer.setStyle({
                color: '#ffff00',
              });
            } else {
              highlightLayer.setStyle({
                fillColor: '#ffff00',
                fillOpacity: 1
              });
            }
        }
        var map = L.map('map', {
            zoomControl:true, maxZoom:28, minZoom:1
        }).fitBounds([[-7.985603580183646,111.71006397640184],[-7.5679869109508715,112.55262392309953]]);
        var hash = new L.Hash(map);
        map.attributionControl.setPrefix('<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot; <a href="https://qgis.org">QGIS</a>');
        var autolinker = new Autolinker({truncate: {length: 30, location: 'smart'}});
        var measureControl = new L.Control.Measure({
            position: 'topleft',
            primaryLengthUnit: 'meters',
            secondaryLengthUnit: 'kilometers',
            primaryAreaUnit: 'sqmeters',
            secondaryAreaUnit: 'hectares'
        });
        measureControl.addTo(map);
        document.getElementsByClassName('leaflet-control-measure-toggle')[0]
        .innerHTML = '';
        document.getElementsByClassName('leaflet-control-measure-toggle')[0]
        .className += ' fas fa-ruler';
        var bounds_group = new L.featureGroup([]);
        function setBounds() {
        }
        map.createPane('pane_OSMStandard_0');
        map.getPane('pane_OSMStandard_0').style.zIndex = 400;
        var layer_OSMStandard_0 = L.tileLayer('http://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            pane: 'pane_OSMStandard_0',
            opacity: 1.0,
            attribution: '<a href="https://www.openstreetmap.org/copyright">© OpenStreetMap contributors, CC-BY-SA</a>',
            minZoom: 1,
            maxZoom: 28,
            minNativeZoom: 0,
            maxNativeZoom: 19
        });
        layer_OSMStandard_0;
        map.addLayer(layer_OSMStandard_0);
        function pop_Kecamatan_1(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (i in e.target._eventParents) {
                        e.target._eventParents[i].resetStyle(e.target);
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">kecamatan</th>\
                        <td>' + (feature.properties['kecamatan'] !== null ? autolinker.link(feature.properties['kecamatan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">kodedagri</th>\
                        <td>' + (feature.properties['kodedagri'] !== null ? autolinker.link(feature.properties['kodedagri'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">provinsi</th>\
                        <td>' + (feature.properties['provinsi'] !== null ? autolinker.link(feature.properties['provinsi'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">kabupaten</th>\
                        <td>' + (feature.properties['kabupaten'] !== null ? autolinker.link(feature.properties['kabupaten'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Sapi Potong</th>\
                        <td>' + (feature.properties['Sapi Potong'] !== null ? autolinker.link(feature.properties['Sapi Potong'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_Kecamatan_1_0(feature) {
            if (feature.properties['Sapi Potong'] >= 2565.000000 && feature.properties['Sapi Potong'] <= 3582.600000 ) {
                return {
                pane: 'pane_Kecamatan_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,255,255,1.0)',
                interactive: true,
            }
            }
            if (feature.properties['Sapi Potong'] >= 3582.600000 && feature.properties['Sapi Potong'] <= 7095.000000 ) {
                return {
                pane: 'pane_Kecamatan_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,191,191,1.0)',
                interactive: true,
            }
            }
            if (feature.properties['Sapi Potong'] >= 7095.000000 && feature.properties['Sapi Potong'] <= 10088.000000 ) {
                return {
                pane: 'pane_Kecamatan_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,128,128,1.0)',
                interactive: true,
            }
            }
            if (feature.properties['Sapi Potong'] >= 10088.000000 && feature.properties['Sapi Potong'] <= 11631.600000 ) {
                return {
                pane: 'pane_Kecamatan_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,64,64,1.0)',
                interactive: true,
            }
            }
            if (feature.properties['Sapi Potong'] >= 11631.600000 && feature.properties['Sapi Potong'] <= 14890.000000 ) {
                return {
                pane: 'pane_Kecamatan_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,0,0,1.0)',
                interactive: true,
            }
            }
        }
        map.createPane('pane_Kecamatan_1');
        map.getPane('pane_Kecamatan_1').style.zIndex = 401;
        map.getPane('pane_Kecamatan_1').style['mix-blend-mode'] = 'normal';
        var layer_Kecamatan_1 = new L.geoJson(json_Kecamatan_1, {
            attribution: '',
            interactive: true,
            dataVar: 'json_Kecamatan_1',
            layerName: 'layer_Kecamatan_1',
            pane: 'pane_Kecamatan_1',
            onEachFeature: pop_Kecamatan_1,
            style: style_Kecamatan_1_0,
        });
        bounds_group.addLayer(layer_Kecamatan_1);
        map.addLayer(layer_Kecamatan_1);
        function pop_PeternakanSapi_2(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (i in e.target._eventParents) {
                        e.target._eventParents[i].resetStyle(e.target);
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">id</th>\
                        <td>' + (feature.properties['id'] !== null ? autolinker.link(feature.properties['id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">nama</th>\
                        <td>' + (feature.properties['nama'] !== null ? autolinker.link(feature.properties['nama'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">alamat</th>\
                        <td>' + (feature.properties['alamat'] !== null ? autolinker.link(feature.properties['alamat'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_PeternakanSapi_2_0() {
            return {
                pane: 'pane_PeternakanSapi_2',
        rotationAngle: 0.0,
        rotationOrigin: 'center center',
        icon: L.icon({
            iconUrl: 'markers/farm-svgrepo-com.svg',
            iconSize: [28.120000000000005, 28.120000000000005]
        }),
                interactive: true,
            }
        }
        map.createPane('pane_PeternakanSapi_2');
        map.getPane('pane_PeternakanSapi_2').style.zIndex = 402;
        map.getPane('pane_PeternakanSapi_2').style['mix-blend-mode'] = 'normal';
        var layer_PeternakanSapi_2 = new L.geoJson(json_PeternakanSapi_2, {
            attribution: '',
            interactive: true,
            dataVar: 'json_PeternakanSapi_2',
            layerName: 'layer_PeternakanSapi_2',
            pane: 'pane_PeternakanSapi_2',
            onEachFeature: pop_PeternakanSapi_2,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.marker(latlng, style_PeternakanSapi_2_0(feature));
            },
        });
        bounds_group.addLayer(layer_PeternakanSapi_2);
        map.addLayer(layer_PeternakanSapi_2);
        var baseMaps = {};
        L.control.layers(baseMaps,{'<img src="legend/PeternakanSapi_2.png" /> Peternakan Sapi': layer_PeternakanSapi_2,'Kecamatan<br /><table><tr><td style="text-align: center;"><img src="legend/Kecamatan_1_256535830.png" /></td><td>2565 - 3583</td></tr><tr><td style="text-align: center;"><img src="legend/Kecamatan_1_358370951.png" /></td><td>3583 - 7095</td></tr><tr><td style="text-align: center;"><img src="legend/Kecamatan_1_7095100882.png" /></td><td>7095 - 10088</td></tr><tr><td style="text-align: center;"><img src="legend/Kecamatan_1_10088116323.png" /></td><td>10088 - 11632</td></tr><tr><td style="text-align: center;"><img src="legend/Kecamatan_1_11632148904.png" /></td><td>11632 - 14890</td></tr></table>': layer_Kecamatan_1,"OSM Standard": layer_OSMStandard_0,}).addTo(map);
        setBounds();
        var i = 0;
        layer_Kecamatan_1.eachLayer(function(layer) {
            var context = {
                feature: layer.feature,
                variables: {}
            };
            layer.bindTooltip((layer.feature.properties['kecamatan'] !== null?String('<div style="color: #000000; font-size: 10pt; font-family: \'MS Shell Dlg 2\', sans-serif;">' + layer.feature.properties['kecamatan']) + '</div>':''), {permanent: true, offset: [-0, -16], className: 'css_Kecamatan_1'});
            labels.push(layer);
            totalMarkers += 1;
              layer.added = true;
              addLabel(layer, i);
              i++;
        });
        map.addControl(new L.Control.Search({
            layer: layer_Kecamatan_1,
            initial: false,
            hideMarkerOnCollapse: true,
            propertyName: 'kecamatan'}));
        document.getElementsByClassName('search-button')[0].className +=
         ' fa fa-binoculars';
        resetLabels([layer_Kecamatan_1]);
        map.on("zoomend", function(){
            resetLabels([layer_Kecamatan_1]);
        });
        map.on("layeradd", function(){
            resetLabels([layer_Kecamatan_1]);
        });
        map.on("layerremove", function(){
            resetLabels([layer_Kecamatan_1]);
        });
        </script>
    </body>
</html>
