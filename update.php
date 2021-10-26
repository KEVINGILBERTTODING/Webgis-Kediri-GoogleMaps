<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check if the contact id exists, for example update.php?id=1 will get the contact with the id of 1
if (isset($_GET['id'])) {
    if (!empty($_POST)) {
        // This part is similar to the create.php, but instead we update a record and not insert
        $id = isset($_POST['id']) ? $_POST['id'] : NULL;
        $provinsi = isset($_POST['provinsi']) ? $_POST['provinsi'] : '';
        $kabupaten = isset($_POST['kabupaten']) ? $_POST['kabupaten'] : '';
        $kodedagri = isset($_POST['kodedagri']) ? $_POST['kodedagri'] : '';
        $kecamatan = isset($_POST['kecamatan']) ? $_POST['kecamatan'] : '';
        $jml = isset($_POST['jml']) ? $_POST['jml'] : '';


        // Update the record
        $stmt = $pdo->prepare('UPDATE kontak SET id = ?, provinsi = ?, kabupaten = ?, kodedagri = ?, kecamatan = ?, jml = ? WHERE id = ?');
        $stmt->execute([$id, $provinsi, $kabupaten, $kodedagri, $kecamatan, $jml, $_GET['id']]);
        $msg = 'Update Data Berhasil!';
    }
    // Get the contact from the contacts table
    $stmt = $pdo->prepare('SELECT * FROM kontak WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $contact = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$contact) {
        exit('Contact doesn\'t exist with that ID!');
    }
} else {
    exit('No ID specified!');
}
?>



<?= template_header('Read') ?>

<br><br><br>
<div class="container">
    <hr class="my-5">
    <div class="row mb-5">
        <div class="position-relative">
            <div class="container position-relative">

                <div class="row justify-content-center">
                    <h1 class="h2 bold-3 my-5 max-width-5x text-center">Halaman Untuk Mengubah Data</h1>
                </div>
                <div class="content update">

                    <h2>Update Data #<?= $contact['id'] ?></h2>
                    <div class="row my-2">
                        <div class="col-lg-4">
                            <a href="read.php" class="btn btn-custom p-1 rounded shadow width-1n8x">Kembali</a>
                        </div>
                    </div>
                    <form action="update.php?id=<?= $contact['id'] ?>" method="post">
                        <label for="id">ID</label>
                        <label for="provinsi">Provinsi</label>
                        <input type="text" readonly name="id" value="<?= $contact['id'] ?>" id="id">
                        <input type="text" readonly name="provinsi" value="<?= $contact['provinsi'] ?>" id="provinsi">
                        <label for="kabupaten">Kabupaten</label>
                        <label for="kodedagri">Kode Dagri</label>
                        <input type="text" readonly name="kabupaten" value="<?= $contact['kabupaten'] ?>" id="kabupaten">
                        <input type="text" readonly name="kodedagri" value="<?= $contact['kodedagri'] ?>" id="kodedagri">
                        <label for="kecamatan">Kecamatan</label>
                        <label for="jml">Jumlah Penduduk</label>
                        <input type="text" name="kecamatan" value="<?= $contact['kecamatan'] ?>" id="kecamatan">
                        <input type="text" name="jml" value="<?= $contact['jml'] ?>" id="jml">

                        <div class="row my-2">
                            <div class="col-lg-4">
                                <input type="submit" value="Submit" class="btn btn-custom p-2 rounded shadow width-1n8x">

                            </div>

                    </form>

                </div>

                <?php if ($msg) : ?>
                    <p><?= $msg ?></p>
                <?php endif; ?>
            </div>

            <?= template_footer() ?>