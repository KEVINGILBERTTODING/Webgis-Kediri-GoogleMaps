<?php
include 'functions.php';
// Connect to MySQL database
$pdo = pdo_connect_mysql();
// Get the page via GET request (URL param: page), if non exists default the page to 1
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
// Number of records to show on each page
$records_per_page = 5;


// Prepare the SQL statement and get records from our contacts table, LIMIT will determine the page
$stmt = $pdo->prepare('SELECT * FROM peternakan ORDER BY id LIMIT :current_page, :record_per_page');
$stmt->bindValue(':current_page', ($page - 1) * $records_per_page, PDO::PARAM_INT);
$stmt->bindValue(':record_per_page', $records_per_page, PDO::PARAM_INT);
$stmt->execute();
// Fetch the records so we can display them in our template.
$contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);


// Get the total number of contacts, this is so we can determine whether there should be a next and previous button
$num_contacts = $pdo->query('SELECT COUNT(*) FROM peternakan')->fetchColumn();
?>


<?= template_header('Data dan Informasi') ?>
<br><br><br><br>
<div class="container">
    <br>
    <div class="row mb-5">
        <div class="position-relative">
            <div class="container position-relative">

                <div class="row justify-content-center">
                    <h1 class="h2 bold-3 my-5 max-width-5x text-center">Data Peternakan Sapi di Kabupaten Kediri</h1>
                </div>
                <div class="content read">

                    <h2>Tampilan Data</h2>
                    <div class="row my-4">
                        <div class="col-lg-5">
                            <a href="read.php" class="btn btn-custom p-2 rounded shadow width-1n8x">Data Jumlah Ternak</a>
                        </div>
                        <div class="col-lg-7">
                            <br>

                        </div>
                    </div>

                    <div class="position-relative">
                        <div class="container position-relative">
                            <div class="row justify-content-center">
                                <table>
                                    <thead>
                                        <tr>
                                            <td>ID</td>
                                            <td>Nama Peternakan</td>
                                            <td>Alamat</td>
                                            <td>Latitude</td>
                                            <td>Longitude</td>
                                        </tr>
                                    </thead>
                            </div>
                        </div>
                    </div>
                </div>
                <tbody>
                    <?php foreach ($contacts as $contact) : ?>
                        <tr>
                            <td><?= $contact['id'] ?></td>
                            <td><?= $contact['nama'] ?></td>
                            <td><?= $contact['alamat'] ?></td>
                            <td><?= $contact['lat'] ?></td>
                            <td><?= $contact['lng'] ?></td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
                </table>
                <div class="pagination">
                    <?php if ($page > 1) : ?>
                        <a href="read2.php?page=<?= $page - 1 ?>"><i class="fas fa-angle-double-left fa-sm"></i></a>
                    <?php endif; ?>
                    <?php if ($page * $records_per_page < $num_contacts) : ?>
                        <a href="read2.php?page=<?= $page + 1 ?>"><i class="fas fa-angle-double-right fa-sm"></i></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?= template_footer() ?>