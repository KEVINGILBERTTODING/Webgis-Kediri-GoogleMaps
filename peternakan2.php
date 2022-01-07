<?php

include_once('connection.inc.php');
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
$dbconn = pg_connect($connection_string) or die('Could not reach database.');

$nama = $_POST['nama'];
$lat = $_POST['lat'];
$lng = $_POST['lng'];

$sql = "INSERT INTO peternakan1 (nama, jenis, lat, lng, geom) VALUES ('$nama', 'Sapi', '$lat', '$lng', ST_GeomFromText('POINT($lng $lat)', 4326))";
return pg_affected_rows(pg_query($sql));
