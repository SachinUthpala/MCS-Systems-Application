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
  <form id="AddProductForm"  class="w-100" enctype="multipart/form-data" >
    <div class="card w-100">
      <div class="card-header">
        <h4>Add New Product</h4>
      </div>

      <div class="card-body">
        <div class="form-row">
          <!-- Product Name -->
          <div class="form-group col-md-6 col-12">
            <label>Product Name <code>.Product's Name</code></label>
            <input type="text" class="form-control" name="productName" required>
          </div>

          <!-- Product Description -->
          <div class="form-group col-md-6 col-12">
            <label>Product Description <code>.Product Details</code></label>
            <textarea class="form-control" name="productDescription" rows="2" required></textarea>
          </div>
        </div>



        <div class="form-row">
          <!-- Product Types -->
          <div class="form-group col-md-6 col-12">
            <label>Product Image <code>.Product's Image</code></label>
            <input type="file" class="form-control" accept="image/*" name="productImage" required>
          </div>

          <!-- Product Types -->
           <div class="form-group col-md-6 col-12">
            <label>Product Type <code>.ATM / CDM / SSP</code></label>
            <select class="form-control" name="AdminAccess">
              <option value="ATM">ATM</option>
              <option value="VTM">VTM</option>
              <option value="CDK">CDK</option>
              <option value="Scanners">Scanners</option>
              <option value="Other">Other</option>
            </select>
          </div>
          
        </div>

        <hr>

        <!-- Benefits Section -->
        <div id="benefitsSection">
          <h5>Product Benefits</h5>
          <button type="button" class="btn btn-sm btn-success mb-3" onclick="addBenefit()">+ Add Benefit</button>
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

  <!-- page specific -->
   <script src="./Functions/AddProduct.js"></script>



</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>