<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check if POST data is not empty
if (!empty($_POST)) {
    // Post data not empty insert a new record
    // Set-up the variables that are going to be inserted, we must check if the POST variables exist if not we can default them to blank
    $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
    // Check if POST variable "name" exists, if not default the value to blank, basically the same for all variables
    $provinsi = isset($_POST['provinsi']) ? $_POST['provinsi'] : '';
    $kabupaten = isset($_POST['kabupaten']) ? $_POST['kabupaten'] : '';
    $kodedagri = isset($_POST['kodedagri']) ? $_POST['kodedagri'] : '';
    $kecamatan = isset($_POST['kecamatan']) ? $_POST['kecamatan'] : '';
    $jml = isset($_POST['jml']) ? $_POST['jml'] : '';


    // Insert new record into the contacts table
    $stmt = $pdo->prepare('INSERT INTO kontak VALUES (?, ?, ?, ?, ?, ?)');
    $stmt->execute([$id, $provinsi, $kabupaten, $kodedagri, $kecamatan, $jml]);
    // Output message
    $msg = 'Created Successfully!';
}
?>


<?= template_header('Create') ?>

<div class="content update">
    <h2>Create Contact</h2>
    <form action="create.php" method="post">
        <label for="id">ID</label>
        <label for="provinsi">Provinsi</label>
        <input type="text" name="id" value="auto" id="id">
        <input type="text" name="provinsi" id="provinsi">
        <label for="kabupaten">Kabupaten</label>
        <label for="kodedagri">Kode Dagri</label>
        <input type="text" name="kabupaten" id="kabupaten">
        <input type="text" name="kodedagri" id="kodedagri">
        <label for="kecamatan">Kecamatan</label>
        <label for="jml">Jumlah Penduduk</label>
        <input type="text" name="kecamatan" id="kecamatan">
        <input type="text" name="jml" id="jml">

        <input type="submit" value="Create">
    </form>
    <?php if ($msg) : ?>
        <p><?= $msg ?></p>
    <?php endif; ?>
</div>

<?= template_footer() ?>