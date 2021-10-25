<?php
include "../koneksi.php";
$sql = "SELECT * FROM peternakan WHERE lng>0";
$hasil = mysqli_query($conn, $sql);


?>

var json_PeternakanSapi_2 = {
"type":"FeatureCollection","name":"PeternakanSapi_2",
"crs":{"type":"name","properties":{"name":"urn:ogc:def:crs:OGC:1.3:CRS84"}},
"features":[

<?php
while ($data = mysqli_fetch_array($hasil)) {

    $id = $data['id'];
    $nama = $data['nama'];
    $alamat = $data['alamat'];
    $lat = $data['lat'];
    $lng = $data['lng'];
    //$jenis=3.000000;

?>

    {"type":"Feature","properties":{"id":"<?php echo $id; ?>","nama":"<?php echo $nama; ?>","alamat":"<?php echo $alamat; ?>"},"geometry":{"type":"Point","coordinates":[<?php echo $lng; ?>,<?php echo $lat; ?>]}},

<?php
}
?>
]
}