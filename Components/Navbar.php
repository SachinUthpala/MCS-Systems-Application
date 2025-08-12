 <?php
  $currentPage = basename($_SERVER['PHP_SELF']);
?>
 
 
 
 
 <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <small><i class="fa fa-map-marker-alt text-primary me-2"></i>103, Garden City, Minuwangoda Road, Ekala, Ja-Ela</small>
                <small class="ms-4"><i class="fa fa-clock text-primary me-2"></i>9.00 am - 5.00 pm</small>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small onclick="window.location.href='mailto:helpdesk@maryland.lk'" style="cursor: pointer;">
                <i class="fa fa-envelope text-primary me-2"></i> helpdesk@maryland.lk
                </small>

                <small class="ms-4" onclick="window.location.href='tel:+94112233744'" style="cursor: pointer;">
                <i class="fa fa-phone-alt text-primary me-2"></i> +94 112 - 233 744
                </small>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
  <a href="index.php" class="navbar-brand ms-4 ms-lg-0">
    <img src="./img/logo.png" width="150px">
  </a>
  <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse "  id="navbarCollapse">
    <div class="navbar-nav ms-auto p-4 p-lg-0">
      <a href="index.php" class="nav-item nav-link <?php if($currentPage == 'index.php') echo 'active'; ?>">Home</a>
      <a href="about.php" class="nav-item nav-link <?php if($currentPage == 'about.php') echo 'active'; ?>">About</a>
      <a href="404.php" class="nav-item nav-link <?php if($currentPage == '404.php') echo 'active'; ?>">Services</a>

      <div class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle <?php if(in_array($currentPage, ['404.php'])) echo 'active'; ?>" data-bs-toggle="dropdown">Products</a>
        <div class="dropdown-menu border-light m-0">
          <a href="404.php" class="dropdown-item">VTM</a>
          <a href="404.php" class="dropdown-item">CDK</a>
          <a href="404.php" class="dropdown-item">Scanners</a>
          <a href="404.php" class="dropdown-item">Others</a>
        </div>
      </div>

      <a href="contact.php" class="nav-item nav-link <?php if($currentPage == 'contact.php') echo 'active'; ?>">Contact</a>
    </div>
    <div class="d-none d-lg-flex ms-4">
      <button type="button" class="btn btn-primary rounded" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Sign In Now
      </button>
    </div>
  </div>
</nav>
    </div>