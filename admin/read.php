<?php
session_start();

if (!isset($_SESSION["username"])) {
    echo "Anda harus login dulu <br><a href='login.php'>Klik disini</a>";
    header("Location: login.php");
    exit;
}

$id_user = $_SESSION["id_user"];
$username = $_SESSION["username"];
$nama = $_SESSION["nama"];
$email = $_SESSION["email"];



?>

<?php
include 'functions.php';
// Connect to MySQL database
$pdo = pdo_connect_mysql();
// Get the page via GET request (URL param: page), if non exists default the page to 1
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
// Number of records to show on each page
$records_per_page = 5;


// Prepare the SQL statement and get records from our contacts table, LIMIT will determine the page
$stmt = $pdo->prepare('SELECT * FROM kontak ORDER BY id LIMIT :current_page, :record_per_page');
$stmt->bindValue(':current_page', ($page - 1) * $records_per_page, PDO::PARAM_INT);
$stmt->bindValue(':record_per_page', $records_per_page, PDO::PARAM_INT);
$stmt->execute();
// Fetch the records so we can display them in our template.
$contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);


// Get the total number of contacts, this is so we can determine whether there should be a next and previous button
$num_contacts = $pdo->query('SELECT COUNT(*) FROM kontak')->fetchColumn();
?>


<?= template_header('Read') ?>
<br><br><br><br>
<div class="container">
    <br>
    <div class="row mb-5">
        <div class="position-relative">
            <div class="container position-relative">

                <div class="row justify-content-center">
                    <h1 class="h2 bold-3 my-5 max-width-5x text-center">Halaman Untuk Mengubah Data</h1>
                </div>
                <div class="content read">

                    <h2>Tampilan Data</h2>
                    <div class="row my-4">
                        <div class="col-lg-5">
                            <a href="map/index.php" class="btn btn-custom p-2 rounded shadow width-1n8x">Lihat Peta</a>
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
                                            <td>#</td>
                                            <td>Provinsi</td>
                                            <td>Kabupaten</td>
                                            <td>Kode Dagri</td>
                                            <td>Kecamatan</td>
                                            <td>Jumlah Penduduk</td>
                                            <td>Edit Data</td>
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
                            <td><?= $contact['provinsi'] ?></td>
                            <td><?= $contact['kabupaten'] ?></td>
                            <td><?= $contact['kodedagri'] ?></td>
                            <td><?= $contact['kecamatan'] ?></td>
                            <td><?= $contact['jml'] ?></td>
                            <td class="actions">
                                <a href="update.php?id=<?= $contact['id'] ?>" class="edit"><i class="fas fa-pen fa-xs" style="color: white;"></i></a>
                                <a href="delete.php?id=<?= $contact['id'] ?>" class="trash"><i class="fas fa-trash fa-xs" style="color: white;"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                </table>
                <div class="pagination">
                    <?php if ($page > 1) : ?>
                        <a href="read.php?page=<?= $page - 1 ?>"><i class="fas fa-angle-double-left fa-sm"></i></a>
                    <?php endif; ?>
                    <?php if ($page * $records_per_page < $num_contacts) : ?>
                        <a href="read.php?page=<?= $page + 1 ?>"><i class="fas fa-angle-double-right fa-sm"></i></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?= template_footer() ?>