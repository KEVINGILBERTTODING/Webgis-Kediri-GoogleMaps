<?php
include('header.php');
$user = $_SESSION['user'];
if (isset($_POST['update']) and !empty($_POST['update'])) {
   $ret_val = $obj->updatePoint();
   if ($ret_val == 1) {
      echo '<script type="text/javascript">';
      echo 'alert("Record Updated Successfully");';
      echo 'window.location.href = "input.php";';
      echo '</script>';
   }
}


?>

<br><br><br><br><br>
<div class="container">

   <div class="row justify-content-center">
      <h1 class="h2 bold-3 my-5 max-width-5x text-center">Update Data Peternakan</h1>
   </div>

</div>

<div class="container">

   <a href="index.php" class="btn btn-primary pull-left mt-4"><span class="glyphicon glyphicon-step-backward"></span>Back</a>
   <br>
   <hr>
   <div class="card-body">

      <form class="card-body mb-4 mt-4" method="post">
         <div class="panel-body">
            <div class="form-group">
               <label class="control-label col-sm-2">Id:<span style='color:red'>*</span></label>
               <div class="col-sm-5 mb-2 mt-2">
                  <input class="form-control" value="<?= $user->id ?>" type="text" name="id" required>
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-sm-2 mb-2">Nama Peternakan:<span style='color:red'>*</span></label>
               <div class="col-sm-5 mb-2">
                  <input class="form-control" value="<?= $user->nama ?>" name="nama" required>
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-sm-2">Alamat Peternakan:<span style='color:red'>*</span></label>
               <div class="col-sm-5 mt-2">
                  <input class="form-control" value="<?= $user->alamat ?>" name="alamat" required>
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-sm-2 mt-2">Latitude:<span style='color:red'>*</span></label>
               <div class="col-sm-5 mt-2">
                  <input class="form-control" value="<?= $user->lat ?>" name="lat" required>
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-sm-2 mt-2">Longitude:<span style='color:red'>*</span></label>
               <div class="col-sm-5 mt-2">
                  <input class="form-control" value="<?= $user->lng ?>" name="lng" required>
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-sm-2"> </label>
               <div class="col-sm-5">
                  <input type="submit" class="btn btn-success" name="update" value="Update">
               </div>
            </div>
         </div>
      </form>
   </div>
</div>
<?php include('footer.php'); ?>