<?php
include('header3.php');
if (isset($_POST['submit']) and !empty($_POST['submit'])) {
   $ret_val = $obj->createPoint();
   if ($ret_val == 1) {
      echo '<script type="text/javascript">';
      echo 'alert("Record Saved Successfully");';
      echo 'window.location.href = "insert.php";';
      echo '</script>';
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
               <h1 class="h2 bold-3 my-5 max-width-5x text-center">Tambahkan Data Peternakan</h1>
            </div>


            <div class="container">

               <a href="input.php" class="btn btn-primary pull-left mt-4"><span class="glyphicon glyphicon-eye-open"></span> View Records</a>
               <br>
               <hr>

               <div class="card-body mt-5 mb-4">
                  <form class="card-body" method="post">
                     <div id="petaku" style="width:460px;height:300px"></div>
                     <div class="panel-body">
                        <div class="form-group">
                           <label class="control-label col-sm-2">ID:<span style='color:red'>*</span></label>
                           <div class="col-sm-5 mt-2">
                              <input class="form-control" type="number" name="id" required>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="control-label col-sm-2 mt-2">Nama Peternakan:<span style='color:red'>*</span></label>
                           <div class="col-sm-5 mt-2">
                              <input class="form-control" type="text" name="nama" required>
                           </div>
                        </div>

                        <div class="form-group">
                           <label class="control-label col-sm-2 mt-2">Kategori peternakan:<span style='color:red'>*</span></label>
                           <div class="col-sm-5 mt-2">
                              <select name="jenis" id="jenis">
                                 <option value="Sapi">Sapi</option>
                                 <option value="Unggas">Unggas</option>
                              </select>
                           </div>
                        </div>

                        <div class="form-group">
                           <label class="control-label col-sm-2 mt-2">Alamat Peternakan:<span style='color:red'>*</span></label>
                           <div class="col-sm-5 mt-2">
                              <input class="form-control" type="text" name="alamat" required>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="control-label col-sm-2 mt-2">Latitude:<span style='color:red'>*</span></label>
                           <div class="col-sm-5 mt-2">
                              <input class="form-control" id="lat" name="lat" required>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="control-label col-sm-2 mt-2">Longitude:<span style='color:red'>*</span></label>
                           <div class="col-sm-5 mt-2">
                              <input class="form-control" id="lng" name="lng" required>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="control-label col-sm-2"> </label>
                           <div class="col-sm-5">
                              <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
            <?php include('footer.php'); ?>