<!DOCTYPE html>

<?php
  session_start();
  
  $day = date("Y-m-d");
  $date = date("Y-m-d H:i:s");
  $errors = array();
  $email ="";
  $password="";
  
 
  if(isset($_POST['login'])){
    
    $code =   $_POST['code'];

    if (empty($code)) { array_push($errors, "pass code is required"); }
    
    if (count($errors) == 0) {
      
      if($code == "active_net"){
        $_SESSION['status'] = "logged in";
        header("location: all_details");        
      }

    }
    
  }
?>
<html lang="en">


<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login</title>
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
<style>

  .errror {
  width: 100%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
  }
</style>

  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
              <div style="text-align:center;" class="brand-logo">
              </div>
              <!-- <h4>Login</h4> -->
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form class="pt-3" method="post" action="login.php">
                <?php include('includes/errors.php'); ?>
                
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Pass Code:" name="code" required>
                </div>
                <div class="mt-3">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" name="login">
                      <i class="mdi mdi-login"></i>                      
                      Sign In
                    </button>
                </div>
               
                
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
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
</body>


</html>
