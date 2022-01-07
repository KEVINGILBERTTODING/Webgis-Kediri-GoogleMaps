<?php

$conn = pg_connect("host=localhost dbname=kediri user=postgres password=12345");

$nama = $_POST['nama'];
$jenis = $_POST['jenis'];
$alamat = $_POST['alamat'];
$lat = $_POST['lat'];
$lng = $_POST['lng'];


$sql = "SELECT MAX(id) as id from peternakan1";
$hasil = pg_query($conn, $sql);
$data = pg_fetch_array($hasil);
$id = $data['id'] + 1;

$sql = "INSERT INTO peternakan1 (id, nama, jenis, alamat, lat, lng, geom) VALUES ('$id', '$nama','$jenis', '$alamat', '$lat', '$lng',  ST_SetSRID(ST_MakePoint($lng,$lat), 4326))";

pg_query($conn, $sql);
