<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="stylesheet" href="css/leaflet.css">
    <link rel="stylesheet" href="css/qgis2web.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/leaflet-search.css">
    <link rel="stylesheet" href="css/leaflet-measure.css">

    <!-- Bootstrap CSS -->
    <link href="../bs5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../icon/css/all.min.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/body.css">
    <link rel="stylesheet" href="../css/theme.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <style>
        html,
        body,
        #map {
            width: 100%;
            height: 100%;
            padding: 0;
            margin: 0;
        }
    </style>
    <title></title>
</head>

<body>
    <!--============================================================================ NAVBAR ==========================================================-->

    <nav class="navbar navbar-expand-lg navbar-light mt-3 fixed-top" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="../assets/logo1.png" height="90px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="nav nav-pills">
                    <li class="nav-item me-2">
                        <a class="nav-link link-navbar" href="../index.html">Beranda</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link link-navbar" href="../profile.php">Profile</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link link-navbar" href="../read.php">Data dan Informasi</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link  active bg-active link-navbar" href="../map/index.php">Peta</a>
                    </li>
                    <li class="nav-item">
                        <a href="../admin/login.php" class="nav-link btn-custom rounded" id="btn-sign">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">

        <br><br><br><br><br>
        <br><br><br>
        <div class="row mb-2">
            <div class="position-relative">
                <div class="container position-relative">
                    <div class="row justify-content-center">
                        <h2 class="hw bold-2 my-3 max-width-5x text-center">
                            Persebaran Populasi Ternak Sapi dan Persebaran Peternakan Sapi di Kabupaten Kediri
                        </h2>

                    </div>
                    <br>
                    <div class="row my-4">
                        <div class="col-lg-5">
                            <a href="../read.php" class="btn btn-custom p-2 rounded shadow width-1n8x">Lihat Data</a>
                        </div>

                    </div>
                    <hr>
                </div>

            </div>
        </div>

    </div>
    </nav>
    <!--------------------------------- CONTENT PETA ----------------------------------------------------------->


    <div id="map">
    </div>

    <br>
    <!--============================================================================2. Feature ==========================================================-->

    <div class="position-relative">

        <div class="container position-relative">

            <div class="row justify-content-center">
                <h1 class="h2 bold-3 my-5 max-width-5x text-center">Alat untuk mempermudah melihat informasi pada peta</h1>
            </div>

            <div class="row mt-4">
                <div class="col-lg-3">
                    <div class="card border-0">
                        <div class="card-body align">
                            <div class="box bg-purple mb-4">
                                <i class="fas fa-search-plus text-white ms-1"></i>
                            </div>
                            <h5 class="card-title bold-2 mb-3">Memperbesar & memperkecil</h5>
                            <p class="card-text">
                                Berfungsi untuk memperbesar dan mengecilkan tampilan pada peta

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card border-0">
                        <div class="card-body align">
                            <div class="box bg-yellow mb-4">
                                <i class="fas fa-ruler text-white"></i>
                            </div>
                            <h5 class="card-title bold-2 mb-3">Pengukuran</h5>
                            <p class="card-text">Berfungsi untuk mengukur jarak pada peta, satuan km</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card border-0">
                        <div class="card-body align">
                            <div class="box bg-red mb-4">
                                <i class="fas fa-binoculars text-white"></i>
                            </div>
                            <h5 class="card-title bold-2 mb-3">Pencarian</h5>
                            <p class="card-text">Berfungsi untuk mencari nama kecamatan pada peta</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card border-0">
                        <div class="card-body align">
                            <div class="box bg-blue mb-4">
                                <i class="fas fa-layer-group text-white"></i>
                            </div>
                            <h5 class="card-title bold-2 mb-3">Data</h5>
                            <p class="card-text">
                                Berfungsi untuk menampilkan infromasi jumlah penduduk berdasarkan warna pada peta
                            </p>
                        </div>
                    </div>
                </div>


            </div>

            <div class="row my-5 justify-content-center">
                <a href="../index.html" class="btn btn-custom p-3 rounded shadow width-2x bold-2">Beranda</a>
            </div>

        </div>
    </div>
    <!--============================================================================7. Marketin Strategis ==========================================================-->
    <div class="container position-relative">

    </div>

    <div class="container position-relative">

    </div>

    <!--============================================================================8. Footer==========================================================-->
    <div class="container">
        <hr class="my-5">
        <div class="row mb-5">

            <div class="col-lg-3">
                <a href="#">
                    <img src="../assets/logo1.png" height="50px">
                </a>
                <h6><br></h6>
            </div>
            <div class="col-lg-3">
                <h5>Quick Links</h5>
                <br><br>
                <a href="../profile.php" class="link-navbar">About Us</a><br>
                <a href="#" class="link-navbar">Blog</a><br>
                <a href="#" class="link-navbar">Contact</a><br>
                <a href="#" class="link-navbar">FAQ</a><br>
                <br>
            </div>
            <div class="col-lg-3">
                <h5>Legal Stuff</h5>
                <br><br>
                <a href="#" class="link-navbar">Disclaimer</a><br>
                <a href="#" class="link-navbar">Financing</a><br>
                <a href="#" class="link-navbar">Privacy Policy</a><br>
                <a href="#" class="link-navbar">Terms of Service</a><br>
                <br>
            </div>
            <div class="col-lg-3">
                <h5>2021 <b>Kevin Gilbert Toding</b>. Made with ❤️ using bootsrap and QGIS 3 Hannover.</h5>
                <br>
                <form action="#" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Masukkan nomor Handphone anda" required>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-custom rounded shadow">Daftar Sekarang</button>
                </form>
            </div>

        </div>
    </div>
    <br>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="../bs5/dist/js/bootstrap.bundle.js"></script>
    <script src="../js/onscroll.js"></script>

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
            zoomControl: true,
            maxZoom: 28,
            minZoom: 1
        }).fitBounds([
            [-7.985603580183646, 111.71006397640184],
            [-7.5679869109508715, 112.55262392309953]
        ]);
        var hash = new L.Hash(map);
        map.attributionControl.setPrefix('<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot; <a href="https://qgis.org">QGIS</a>');
        var autolinker = new Autolinker({
            truncate: {
                length: 30,
                location: 'smart'
            }
        });
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

        function setBounds() {}
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
            layer.bindPopup(popupContent, {
                maxHeight: 400
            });
        }

        function style_Kecamatan_1_0(feature) {
            if (feature.properties['Sapi Potong'] >= 2565.000000 && feature.properties['Sapi Potong'] <= 3582.600000) {
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
            if (feature.properties['Sapi Potong'] >= 3582.600000 && feature.properties['Sapi Potong'] <= 7095.000000) {
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
            if (feature.properties['Sapi Potong'] >= 7095.000000 && feature.properties['Sapi Potong'] <= 10088.000000) {
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
            if (feature.properties['Sapi Potong'] >= 10088.000000 && feature.properties['Sapi Potong'] <= 11631.600000) {
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
            if (feature.properties['Sapi Potong'] >= 11631.600000 && feature.properties['Sapi Potong'] <= 14890.000000) {
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
            layer.bindPopup(popupContent, {
                maxHeight: 400
            });
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
            pointToLayer: function(feature, latlng) {
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
        L.control.layers(baseMaps, {
            '<img src="legend/PeternakanSapi_2.png" /> Peternakan Sapi': layer_PeternakanSapi_2,
            'Kecamatan<br /><table><tr><td style="text-align: center;"><img src="legend/Kecamatan_1_256535830.png" /></td><td>2565 - 3583</td></tr><tr><td style="text-align: center;"><img src="legend/Kecamatan_1_358370951.png" /></td><td>3583 - 7095</td></tr><tr><td style="text-align: center;"><img src="legend/Kecamatan_1_7095100882.png" /></td><td>7095 - 10088</td></tr><tr><td style="text-align: center;"><img src="legend/Kecamatan_1_10088116323.png" /></td><td>10088 - 11632</td></tr><tr><td style="text-align: center;"><img src="legend/Kecamatan_1_11632148904.png" /></td><td>11632 - 14890</td></tr></table>': layer_Kecamatan_1,
            "OSM Standard": layer_OSMStandard_0,
        }).addTo(map);
        setBounds();
        var i = 0;
        layer_Kecamatan_1.eachLayer(function(layer) {
            var context = {
                feature: layer.feature,
                variables: {}
            };
            layer.bindTooltip((layer.feature.properties['kecamatan'] !== null ? String('<div style="color: #000000; font-size: 10pt; font-family: \'MS Shell Dlg 2\', sans-serif;">' + layer.feature.properties['kecamatan']) + '</div>' : ''), {
                permanent: true,
                offset: [-0, -16],
                className: 'css_Kecamatan_1'
            });
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
            propertyName: 'kecamatan'
        }));
        document.getElementsByClassName('search-button')[0].className +=
            ' fa fa-binoculars';
        resetLabels([layer_Kecamatan_1]);
        map.on("zoomend", function() {
            resetLabels([layer_Kecamatan_1]);
        });
        map.on("layeradd", function() {
            resetLabels([layer_Kecamatan_1]);
        });
        map.on("layerremove", function() {
            resetLabels([layer_Kecamatan_1]);
        });
    </script>
</body>

</html>