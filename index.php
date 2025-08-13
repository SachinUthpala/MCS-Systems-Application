<?php

session_start();



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MCS Computer Systems | Sri Lanka</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/logo2.png" rel="icon">

    <!-- Google Web Fonts -->
     <link rel="preload" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- tostify js -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

     <!-- tostify -->
     <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

    
</head>



    <!-- Spinner Start -->
<?php require './Components/Spinner.php'; ?>
<!-- Spinner End -->


<!-- Navbar Start -->
<?php require './Components/Tostify.php'; ?>
    <!-- Navbar End -->


    <!-- Navbar Start -->
    <?php require './Components/Navbar.php'; ?>
    <!-- Navbar End -->




   
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn"   data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" >
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-8">
                                    <p class="d-inline-block border border-white rounded text-primary fw-semi-bold py-1 px-3 animated slideInDown">Welcome to MCS</p>
                                    <h2 class="display-3 mb-4 animated slideInDown">Innovating the Future with Smart Banking</h2>
                                    <a href="./about.html" class="btn btn-primary py-3 px-5 animated slideInDown">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7">
                                    <p class="d-inline-block border border-white rounded text-primary fw-semi-bold py-1 px-3 animated slideInDown">Welcome to MCS</p>
                                    <h2 class="display-3 mb-4 animated slideInDown">Future of Banking with Smart IT & Automation</h2>
                                    <a href="./about.html" class="btn btn-primary py-3 px-5 animated slideInDown">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-xxl py-5" >
        <div class="container">
            <div class="row g-4 align-items-end mb-4">


            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">About Us</p>
                    <h1 class="display-5 mb-4">Powering the Future of Banking with Smart IT & Automation</h1>
                    <p class="mb-4">We are driven by a passion for excellence and innovation. Our team of skilled professionals is dedicated to pushing the boundaries of technology and creating future-ready solutions that empower our clients to stay ahead in a rapidly evolving digital landscape.</p>
                    <div class="border rounded p-4">
                        <nav>
                            <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                                <button class="nav-link fw-semi-bold active" id="nav-story-tab" data-bs-toggle="tab" data-bs-target="#nav-story" type="button" role="tab" aria-controls="nav-story" aria-selected="true">Story</button>
                                <button class="nav-link fw-semi-bold" id="nav-mission-tab" data-bs-toggle="tab" data-bs-target="#nav-mission" type="button" role="tab" aria-controls="nav-mission" aria-selected="false">Mission</button>
                                <button class="nav-link fw-semi-bold" id="nav-vision-tab" data-bs-toggle="tab" data-bs-target="#nav-vision" type="button" role="tab" aria-controls="nav-vision" aria-selected="false">Vision</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-story" role="tabpanel" aria-labelledby="nav-story-tab">
                                <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                                <p class="mb-0">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit</p>
                            </div>
                            <div class="tab-pane fade" id="nav-mission" role="tabpanel" aria-labelledby="nav-mission-tab">
                                <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                                <p class="mb-0">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit</p>
                            </div>
                            <div class="tab-pane fade" id="nav-vision" role="tabpanel" aria-labelledby="nav-vision-tab">
                                <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                                <p class="mb-0">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid rounded" src="img/about.jpg">
                </div>
                
            </div>
            <div class="border rounded p-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row g-4">
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                        <div class="h-100">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fas fa-laptop-code text-white"></i>
                                </div>
                                <div class="ps-3">
                                    <h4>Software Projects</h4>
                                    <span>Clita erat ipsum lorem sit sed stet duo justo</span>
                                </div>
                                <div class="border-end d-none d-lg-block"></div>
                            </div>
                            <div class="border-bottom mt-4 d-block d-lg-none"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                        <div class="h-100">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-laptop text-white"></i>
                                </div>
                                <div class="ps-3">
                                    <h4>Self Driven Devices</h4>
                                    <span>Clita erat ipsum lorem sit sed stet duo justo</span>
                                </div>
                                <div class="border-end d-none d-lg-block"></div>
                            </div>
                            <div class="border-bottom mt-4 d-block d-lg-none"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                        <div class="h-100">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-print text-white"></i>
                                </div>
                                <div class="ps-3">
                                    <h4>Scanner Machines</h4>
                                    <span>Clita erat ipsum lorem sit sed stet duo justo</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

 <!-- Particles Container -->
  <div id="particles-js"></div>
    <!-- Facts Start -->
    <div class="container-fluid facts my-5 py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-users fa-3x text-white mb-3"></i>
                    <h1 class="display-4 text-white" data-toggle="counter-up">100</h1>
                    <span class="fs-5 text-white">Our Teams</span>
                    <hr class="bg-white w-25 mx-auto mb-0">
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <i class="fas fa-laptop-code fa-3x text-white mb-3"></i>
                    <h1 class="display-4 text-white" data-toggle="counter-up">15</h1>
                    <span class="fs-5 text-white">Software Engineers</span>
                    <hr class="bg-white w-25 mx-auto mb-0">
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-desktop fa-3x text-white mb-3"></i>
                    <h1 class="display-4 text-white" data-toggle="counter-up">20</h1>
                    <span class="fs-5 text-white">QA Engineers</span>
                    <hr class="bg-white w-25 mx-auto mb-0">
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <i class="fa fa-cog fa-3x text-white mb-3"></i>
                    <h1 class="display-4 text-white" data-toggle="counter-up">45</h1>
                    <span class="fs-5 text-white">Technical Engineers</span>
                    <hr class="bg-white w-25 mx-auto mb-0">
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->



    <!-- Features Start -->
    <div class="container-xxl feature py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Why Choosing Us!</p>
                    <h1 class="display-5 mb-4">Few Reasons Why People Choosing Us!</h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <a class="btn btn-primary py-3 px-5" href="">Explore More</a>
                </div>
                <div class="col-lg-6">
                    <div class="row g-4 align-items-center">
                        <div class="col-md-6">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="feature-box border rounded p-4">
                                        <i class="fa fa-check fa-3x text-primary mb-3"></i>
                                        <h4 class="mb-3">Software Solutions</h4>
                                        <p class="mb-3">Innovative Software Solutions, Tailored for Your Success</p>
                                        <a class="fw-semi-bold" href="">Read More <i class="fa fa-arrow-right ms-1"></i></a>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="feature-box border rounded p-4">
                                        <i class="fa fa-check fa-3x text-primary mb-3"></i>
                                        <h4 class="mb-3">Technical Solutions</h4>
                                        <p class="mb-3">Precision Repairs, Cutting-Edge Solutions</p>
                                        <a class="fw-semi-bold" href="">Read More <i class="fa fa-arrow-right ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeIn" data-wow-delay="0.7s">
                            <div class="row g-4">
                            <div class="feature-box border rounded p-4">
                                <i class="fa fa-check fa-3x text-primary mb-3"></i>
                                <h4 class="mb-3">QA and Implementation</h4>
                                <p class="mb-3">Excellence in Testing, Seamless in Delivery</p>
                                <a class="fw-semi-bold" href="">Read More <i class="fa fa-arrow-right ms-1"></i></a>
                            </div>

                            <div class="feature-box border rounded p-4">
                                <i class="fa fa-check fa-3x text-primary mb-3"></i>
                                <h4 class="mb-3">Company Manufacturing Bay</h4>
                                <p class="mb-3">Precision in Every Kiosk, Excellence in Every Build</p>
                                <a class="fw-semi-bold" href="">Read More <i class="fa fa-arrow-right ms-1"></i></a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- logo slider -->
    <div class="container-fluid  py-5">
        <div class="container py-2">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Our Clients</p>
                <h1 class="display-5 mb-5">Check Our Main clients</h1>
             </div>
            <!-- Add this inside your HTML <body> -->
      <div class="container py-2">
        <div class="logo-slider d-flex overflow-auto">
          <div class="logo-item flex-shrink-0 px-5">
            <img src="./img/client02.png" alt="Logo 1" class="img-fluid">
          </div>


          <div class="logo-item flex-shrink-0 px-5">
            <img src="./img/client03.png" alt="Logo 1" class="img-fluid">
          </div>

          <div class="logo-item flex-shrink-0 px-5">
            <img src="./img/client04.png" alt="Logo 1" class="img-fluid">
          </div>

          <div class="logo-item flex-shrink-0 px-5">
            <img src="./img/client05.png" alt="Logo 1" class="img-fluid">
          </div>


          <div class="logo-item flex-shrink-0 px-5">
            <img src="./img/client06.png" alt="Logo 1" class="img-fluid">
          </div>
          
          <div class="logo-item flex-shrink-0 px-5">
            <img src="./img/client08 (1).png" alt="Logo 1" class="img-fluid">
          </div>

          <div class="logo-item flex-shrink-0 px-5">
            <img src="./img/client09.png" alt="Logo 1" class="img-fluid">
          </div>
          
          
          
         
          
          
          <!-- Add more logos here -->
        </div>
      </div>
        </div>
    </div>




    


    <!-- Service Start -->
    <div class="container-xxl service py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Our Services</p>
                <h1 class="display-5 mb-5">Check Our Services</h1>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-4">
                    <div class="nav nav-pills d-flex justify-content-between w-100 h-100 me-4">
                        <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-4 active" data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                            <h5 class="m-0"><i class="fa fa-bars text-primary me-3"></i>Customer Support</h5>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                            <h5 class="m-0"><i class="fa fa-bars text-primary me-3"></i>Remote Monitoring</h5>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                            <h5 class="m-0"><i class="fa fa-bars text-primary me-3"></i>Technical Monitoring</h5>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                            <h5 class="m-0"><i class="fa fa-bars text-primary me-3"></i>Backup & Recovery</h5>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-5" type="button">
                            <h5 class="m-0"><i class="fa fa-bars text-primary me-3"></i>Self-Service Machine & Scanner Maintenance</h5>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-0" data-bs-toggle="pill" data-bs-target="#tab-pane-6" type="button">
                            <h5 class="m-0"><i class="fa fa-bars text-primary me-3"></i>Consultancy Services</h5>
                        </button>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <div class="row g-4 mb-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute rounded w-100 h-100" src="img/service-1.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-4">Experience In Customer Support</h3>
                                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat amet.</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>24/7 Avilability</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Fast Responce</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Experianced Team</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                                </div>
                            </div>
                            <p class="mb-3">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio cum corporis est id hic rem, consectetur consequatur provident, quia, expedita suscipit recusandae. Eligendi perferendis deleniti minima consectetur qui. Cum tempore quas numquam enim ex iste iusto laboriosam corrupti ullam? Iure?
                            </p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum explicabo necessitatibus incidunt eaque nihil totam fugiat consequuntur sapiente odio facilis.</p>
                        </div>

                        <div class="tab-pane fade show " id="tab-pane-2">
                            <div class="row g-4 mb-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute rounded w-100 h-100" src="img/service-1.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-4">Remote Monitoring Services</h3>
                                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat amet.</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>24/7 Avilability</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Fast Responce</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Experianced Team</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                                </div>
                            </div>
                            <p class="mb-3">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio cum corporis est id hic rem, consectetur consequatur provident, quia, expedita suscipit recusandae. Eligendi perferendis deleniti minima consectetur qui. Cum tempore quas numquam enim ex iste iusto laboriosam corrupti ullam? Iure?
                            </p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum explicabo necessitatibus incidunt eaque nihil totam fugiat consequuntur sapiente odio facilis.</p>
                        </div>

                        <div class="tab-pane fade show " id="tab-pane-3">
                            <div class="row g-4 mb-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute rounded w-100 h-100" src="img/service-1.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-4">Technical Monitoring Services</h3>
                                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat amet.</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>24/7 Avilability</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Fast Responce</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Experianced Team</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                                </div>
                            </div>
                            <p class="mb-3">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio cum corporis est id hic rem, consectetur consequatur provident, quia, expedita suscipit recusandae. Eligendi perferendis deleniti minima consectetur qui. Cum tempore quas numquam enim ex iste iusto laboriosam corrupti ullam? Iure?
                            </p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum explicabo necessitatibus incidunt eaque nihil totam fugiat consequuntur sapiente odio facilis.</p>
                        </div>


                        <div class="tab-pane fade show " id="tab-pane-4">
                            <div class="row g-4 mb-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute rounded w-100 h-100" src="img/service-1.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-4">Backup And Recovery Services</h3>
                                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat amet.</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>24/7 Avilability</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Fast Responce</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Experianced Team</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                                </div>
                            </div>
                            <p class="mb-3">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio cum corporis est id hic rem, consectetur consequatur provident, quia, expedita suscipit recusandae. Eligendi perferendis deleniti minima consectetur qui. Cum tempore quas numquam enim ex iste iusto laboriosam corrupti ullam? Iure?
                            </p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum explicabo necessitatibus incidunt eaque nihil totam fugiat consequuntur sapiente odio facilis.</p>
                        </div>


                        <div class="tab-pane fade show " id="tab-pane-5">
                            <div class="row g-4 mb-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute rounded w-100 h-100" src="img/service-1.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-4">Self-Service Machine & Scanner Maintenance Services</h3>
                                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat amet.</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>24/7 Avilability</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Fast Responce</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Experianced Team</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                                </div>
                            </div>
                            <p class="mb-3">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio cum corporis est id hic rem, consectetur consequatur provident, quia, expedita suscipit recusandae. Eligendi perferendis deleniti minima consectetur qui. Cum tempore quas numquam enim ex iste iusto laboriosam corrupti ullam? Iure?
                            </p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum explicabo necessitatibus incidunt eaque nihil totam fugiat consequuntur sapiente odio facilis.</p>
                        </div>


                        <div class="tab-pane fade show " id="tab-pane-6">
                            <div class="row g-4 mb-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute rounded w-100 h-100" src="img/service-1.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-4">Consultancy Services</h3>
                                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat amet.</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>24/7 Avilability</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Fast Responce</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Experianced Team</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                                </div>
                            </div>
                            <p class="mb-3">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio cum corporis est id hic rem, consectetur consequatur provident, quia, expedita suscipit recusandae. Eligendi perferendis deleniti minima consectetur qui. Cum tempore quas numquam enim ex iste iusto laboriosam corrupti ullam? Iure?
                            </p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum explicabo necessitatibus incidunt eaque nihil totam fugiat consequuntur sapiente odio facilis.</p>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Testimonial</p>
                <h1 class="display-5 mb-5">What Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.3s">
                <div class="testimonial-item">
                    <div class="testimonial-text border rounded p-4 pt-5 mb-5">
                        <div class="btn-square bg-white border rounded-circle">
                            <i class="fa fa-quote-right fa-2x text-primary"></i>
                        </div>
                        Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.
                    </div>
                    <img class="rounded-circle mb-3" src="img/testimonial-1.jpg" alt="">
                    <h4>Client Name</h4>
                    <span>Profession</span>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-text border rounded p-4 pt-5 mb-5">
                        <div class="btn-square bg-white border rounded-circle">
                            <i class="fa fa-quote-right fa-2x text-primary"></i>
                        </div>
                        Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.
                    </div>
                    <img class="rounded-circle mb-3" src="img/testimonial-2.jpg" alt="">
                    <h4>Client Name</h4>
                    <span>Profession</span>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-text border rounded p-4 pt-5 mb-5">
                        <div class="btn-square bg-white border rounded-circle">
                            <i class="fa fa-quote-right fa-2x text-primary"></i>
                        </div>
                        Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.
                    </div>
                    <img class="rounded-circle mb-3" src="img/testimonial-3.jpg" alt="">
                    <h4>Client Name</h4>
                    <span>Profession</span>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-text border rounded p-4 pt-5 mb-5">
                        <div class="btn-square bg-white border rounded-circle">
                            <i class="fa fa-quote-right fa-2x text-primary"></i>
                        </div>
                        Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.
                    </div>
                    <img class="rounded-circle mb-3" src="img/testimonial-4.jpg" alt="">
                    <h4>Client Name</h4>
                    <span>Profession</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <?php require './Components/Footer.php'; ?>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <?php require './Components/CopyRight.php'; ?>
    <!-- Copyright End -->



<!-- login Model -->

<?php require './Components/loginModel.php'; ?>


 <!-- end of login model -->





    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <!-- partical js for best animations -->
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="./js/partical.js"></script>
    <script src="./js/LogoSlider.js"></script>

   


    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="./js/Validation.js"></script>
</body>

</html>