<?php

require '../Db/db.config.php';
session_start();


if (!isset($_SESSION['userEmail']) || !isset($_SESSION['userName']) || !isset($_SESSION['userId']) || $_SESSION['AdminAccess'] == 0) {
    header('Location: ../index.php');
}



$sql = "SELECT * FROM users WHERE AdminAccess != 0";
$smtp = $pdo->prepare($sql);
$smtp->execute();




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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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

                    <div class="row ">
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="card">
                                <div class="card-statistic-4">
                                    <div class="align-items-center justify-content-between">
                                        <div class="row ">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                                <div class="card-content">
                                                    <h5 class="font-15">All Users</h5>
                                                    <h2 class="mb-3 font-18">258</h2>
                                                    <p class="mb-0"><span class="col-green">10%</span> From Total</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                                <div class="banner-img">
                                                    <img src="assets/img/banner/1.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="card">
                                <div class="card-statistic-4">
                                    <div class="align-items-center justify-content-between">
                                        <div class="row ">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                                <div class="card-content">
                                                    <h5 class="font-15"> Admins</h5>
                                                    <h2 class="mb-3 font-18">1,287</h2>
                                                    <p class="mb-0"><span class="col-orange">09%</span> From Total</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                                <div class="banner-img">
                                                    <img src="assets/img/banner/2.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="card">
                                <div class="card-statistic-4">
                                    <div class="align-items-center justify-content-between">
                                        <div class="row ">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                                <div class="card-content">
                                                    <h5 class="font-15">Super Admins</h5>
                                                    <h2 class="mb-3 font-18">128</h2>
                                                    <p class="mb-0"><span class="col-green">18%</span>
                                                        From Total</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                                <div class="banner-img">
                                                    <img src="assets/img/banner/3.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="section-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Our System Users</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped" id="table-1">
                                                <thead>
                                                    <tr>
                                                        <th>User Name</th>
                                                        <th>User Email</th>
                                                        <th>Password</th>
                                                        <th>Profile Img</th>
                                                        <th>Admin Type</th>
                                                        <th>Update</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php

                                                    while ($user = $smtp->fetch(PDO::FETCH_ASSOC)) {
                                                    ?>

                                                        <tr>
                                                            <td><?php echo $user['userName']; ?></td>
                                                            <td><?php echo $user['userEmail']; ?></td>
                                                            <td><span class="text-danger" style="font-weight: bold;">Soory! Cannot Show</span></td>
                                                            <td>
                                                                <img alt="image" src="<?php echo '../' . $user['ProfilePic']; ?>" width="35">
                                                            </td>
                                                            <td>
                                                                <div class="badge badge-warning badge-shadow">
                                                                    <?php echo ($user['AdminAccess'] == 1) ? 'Admin' : 'Super Admin'; ?>
                                                                </div>
                                                            </td>
                                                           <td>
    <button 
        type="button"
        class="btn btn-primary delete-btn"
        data-id="<?php echo htmlspecialchars($user['userId'], ENT_QUOTES, 'UTF-8'); ?>">
        Delete
    </button>
</td>

                                                        </tr>


                                                    <?php
                                                    }


                                                    ?>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>

            </div>


            <!-- footer -->
            <?php require './Components/Footer.php'; ?>

            <!-- userpopup script -->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="./Functions/updateUserpopup.js"></script>
            <!-- popup model -->

            <?php require './PopupModels/updateUser.php'; ?>

            
          
            






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

    <script src="./Functions/updatUserMain.js"></script>
    <!-- page specifoc -->
     <script src="./Functions/DeleteUser.js"></script>


  


</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->

</html>