<?php
include('header4.php');

?>
<br><br><br><br>
<div class="container">
    <br>
    <div class="row mb-5">
        <div class="position-relative">
            <div class="container position-relative">

                <div class="row justify-content-center">
                    <h1 class="h2 bold-3 my-5 max-width-5x text-center">Peta Persebaran Peternakan Sapi di Kabupaten Kediri</h1>
                </div>
                <div class="container">

                    <div class="container">
                        <div class="map mt-4">
                            <object data="http://localhost/geoserver/kediri/wms?service=WMS&version=1.1.0&request=GetMap&layers=kediri%3Apeternakan%20kediri&bbox=111.79463195800781%2C-7.987174034118652%2C112.41781616210938%2C-7.589443206787109&width=768&height=490&srs=EPSG%3A404000&styles=&format=application/openlayers" width="1920px" height="800px"></object>
                        </div>
                    </div>
                </div>
                <?php include('footer2.php'); ?>