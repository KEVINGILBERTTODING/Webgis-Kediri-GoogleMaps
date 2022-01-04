<?php
include('header2.php');
$users = $obj->getPoint();

if (isset($_POST['update'])) {

  $user = $obj->getPointById();
  $_SESSION['user'] = pg_fetch_object($user);
  header('location:edit.php');
}



if (isset($_POST['delete'])) {

  $ret_val = $obj->deletepoint();
  if ($ret_val == 1) {

    echo "<script language='javascript'>";
    echo "alert('Record Deleted Successfully'){
          window.location.reload();
      }";
    echo "</script>";
  }
}
?>
<br><br><br><br>
<div class="container">
  <br>
  <div class="row mb-5">
    <div class="position-relative">
      <div class="container position-relative">

        <div class="row justify-content-center">
          <h1 class="h2 bold-3 my-5 max-width-5x text-center">Data Peternakan Sapi di Kabupaten Kediri</h1>
        </div>

        <div class=" container mt-5">
          <div class="container-fluid">
            <br>
            <div class="position-relative">
              <div class="container position-relative">
                <div class="row justify-content-center">
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr class="active">
                        <th>ID</th>
                        <th>Nama Peternakan</th>
                        <th>Alamat Peternakan</th>
                        <th>Latitude</th>
                        <th>Longitude</th>

                      </tr>
                    </thead>
                    <tbody>
                      <?php while ($user = pg_fetch_object($users)) : ?>
                        <tr align="left">
                          <td><?= $user->id ?></td>
                          <td><?= $user->nama ?></td>
                          <td><?= $user->alamat ?></td>
                          <td><?= $user->lat ?></td>
                          <td><?= $user->lng ?></td>


                        </tr>
                      <?php endwhile; ?>
                    </tbody>
                  </table>
                </div>

              </div>
            </div>
            <?php include('footer.php'); ?>