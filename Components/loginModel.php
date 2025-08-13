<?php

if (empty($_SESSION['csrf_token'])) {
  $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

?>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body" style="background-color: transparent !important;">

        <!-- Pills navs -->
        <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="nav-link active" id="tab-login" data-bs-toggle="pill" href="#pills-login" role="tab"
              aria-controls="pills-login" aria-selected="true">Login</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="tab-register" data-bs-toggle="pill" href="#pills-register" role="tab"
              aria-controls="pills-register" aria-selected="false">Register</a>
          </li>
        </ul>
        <!-- Pills navs -->

        <!-- Pills content -->
        <div class="tab-content">
          <!-- LOGIN -->
          <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
          <button class="btn btn-google btn-block mb-2 w-100 p-2"><i class="fab fa-google"></i> Continive With Google</button>
          <p class="text-center">- OR -</p>
            <form action="./BackEnd/Auth.php" method="post">
              <div class="form-floating mb-2">
                <input type="email" class="form-control" id="name" placeholder="Your Email" name="userEmail" required>
                <label for="name">Your Email</label>
              </div>


              <div class="form-floating mb-4">
                <input type="password" class="form-control" id="password" placeholder="Your Password" name="userPassword" required>
                <label for="password">Your Password</label>
              </div>

              <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">

              <div class="row mb-4">
                <div class="col-md-6 d-flex justify-content-center">
                  <div class="form-check mb-3 mb-md-0">
                    <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
                    <label class="form-check-label" for="loginCheck"> Remember me </label>
                  </div>
                </div>
                <div class="col-md-6 d-flex justify-content-center">
                  <a href="#!" style="color: #011A41 !important;">Forgot password?</a>
                </div>
              </div>

              <button type="submit" name="login" class="btn btn-primary btn-block mb-4 w-100 p-2">Sign in</button>
            </form>
          </div>

          <!-- REGISTER -->
          <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
            <button class="btn btn-google btn-block mb-2 w-100 p-2"><i class="fab fa-google"></i> Continive With Google</button>
            <p class="text-center">- OR -</p>
            <form action="./BackEnd/Auth.php" method="post">
              <div class="form-floating mb-4">
                <input type="email" class="form-control" name="userEmail" id="sEmail" placeholder="Your Email" required>
                <label for="sEmail">Your Email</label>
              </div>

              <div class="row g-3 mb-4">
                <div class="col-md-6">
                  <div class="form-floating ">
                    <input type="password" class="form-control" name="userPassword" id="spassword" placeholder="Your Password" required>
                    <label for="spassword">Your Password</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating ">
                    <input type="password" class="form-control" name="userPassword" id="srpassword" placeholder="Re Enter Password" required>
                    <label for="srpassword">Re Enter Password</label>
                  </div>
                </div>
              </div>

              <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">

              <div class="form-check d-flex justify-content-center mb-4">
                <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checked />
                <label class="form-check-label" for="registerCheck" style="color: #011A41 !important;">
                  I have read and agree to the terms
                </label>
              </div>

              <button type="submit" class="btn btn-primary btn-block mb-3 w-100 p-2" name="register">Sign up</button>
            </form>
          </div>
        </div>
        <!-- Pills content -->

      </div>
    </div>
  </div>
</div>