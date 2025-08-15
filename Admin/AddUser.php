<?php

require '../Db/db.config.php';
session_start();


if(!isset($_SESSION['userEmail']) || !isset($_SESSION['userName']) || !isset($_SESSION['userId']) || $_SESSION['AdminAccess'] == 0 ) {
 header('Location: ../index.php'); 
}


?>

<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>MCS Solutions | Ja-Ela</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/logo2.png' />


  <!-- Toastify CSS & JS -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>

     <!-- top header -->
      <?php require './Components/TopNav.php'; ?>


      <!-- side Navigation -->
       <?php require './Components/SideBar.php'; ?>
      


      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
        
        

         <div class="row">
  <form id="AddUserForm" class="w-100">
    <div class="card w-100">
      <div class="card-header">
        <h4>Add New User Form</h4>
      </div>
      <div class="card-body">
        <div class="form-row">
          <div class="form-group col-md-6 col-12">
            <label>User Name <code>.Users's Name</code></label>
            <input type="text" class="form-control" name="userName">
          </div>

          <div class="form-group col-md-6 col-12">
            <label>User Email <code>.User's Email</code></label>
            <input type="text" class="form-control" name="userEmail">
          </div>

          <div class="form-group col-md-6 col-12">
            <label>User Password <code>.User Login Password</code></label>
            <input type="text" class="form-control" name="userPassword">
          </div>

          <div class="form-group col-md-6 col-12">
            <label>Admin Access Type <code>.Admin User Type</code></label>
            <select class="form-control" name="AdminAccess">
              <option value="1">Admin User With Limitations</option>
              <option value="2">Admin User Without Limitations</option>
            </select>
          </div>
        </div>
      </div>
      <div class="card-footer text-right">
        <button class="btn btn-primary mr-1" type="submit">Submit</button>
        <button class="btn btn-secondary" type="reset">Reset</button>
      </div>
    </div>
  </form>
</div>





        </section>
        
      </div>
      

      <!-- footer -->
       <?php require './Components/Footer.php'; ?>



    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="assets/bundles/apexcharts/apexcharts.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/js/page/index.js"></script>
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>

  <!-- Page specific script -->
   <script src="./Functions/AddUser.js"></script>

</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>