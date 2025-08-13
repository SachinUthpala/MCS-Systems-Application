<?php



if (!empty($_SESSION['userRegister']) && $_SESSION['userRegister'] == 1) {
    echo '
    <script>
    Toastify({
      text: "User Successfully Registed !",
      duration: 3000,
      newWindow: true,
      close: true,
      gravity: "top", // top or bottom
      position: "right", // left, center or right
      stopOnFocus: true, // Prevent dismissing on hover
      style: {
        background: "linear-gradient(to right, #011A41, #355EFC)",
      },
      onClick: function(){} 
    }).showToast();
    </script>
    ';
    
    unset($_SESSION['userRegister']); // clear after showing toast
} else if (!empty($_SESSION['userAvialable']) && $_SESSION['userAvialable'] == 1) {
  echo "
  <script>
  Toastify({
    text: 'User Already Exist. Please login!',
    duration: 5000,
    newWindow: true,
    close: true,
    gravity: 'top', // top or bottom
    position: 'right', // left, center or right
    stopOnFocus: true, // Prevent dismissing on hover
    style: {
      background: 'linear-gradient(to right, #355EFC,rgb(252, 53, 53))',
    },
    onClick: function(){} 
  }).showToast();
  </script>
  ";

  echo "
  <script>
  document.addEventListener('DOMContentLoaded', function () {
      var myModal = new bootstrap.Modal(document.getElementById('exampleModal'));
      myModal.show();
  });
  </script>
  ";

  unset($_SESSION['userAvialable']); // clear after showing toast
}else if (!empty($_SESSION['loginSuccess']) && $_SESSION['loginSuccess'] == 1) {
  echo '
  <script>
  Toastify({
    text: "User Successfully LogedIn !",
    duration: 3000,
    newWindow: true,
    close: true,
    gravity: "top", // top or bottom
    position: "right", // left, center or right
    stopOnFocus: true, // Prevent dismissing on hover
    style: {
      background: "linear-gradient(to right, #011A41, #355EFC)",
    },
    onClick: function(){} 
  }).showToast();
  </script>
  ';
  
  unset($_SESSION['loginSuccess']); // clear after showing toast
}else if (!empty($_SESSION['loginError']) && $_SESSION['loginError'] == 1) {
  echo "
  <script>
  Toastify({
    text: 'Opps ! Something Went Wrong',
    duration: 5000,
    newWindow: true,
    close: true,
    gravity: 'top', // top or bottom
    position: 'right', // left, center or right
    stopOnFocus: true, // Prevent dismissing on hover
    style: {
      background: 'linear-gradient(to right, #355EFC,rgb(252, 53, 53))',
    },
    onClick: function(){} 
  }).showToast();
  </script>
  ";

  echo "
  <script>
  document.addEventListener('DOMContentLoaded', function () {
      var myModal = new bootstrap.Modal(document.getElementById('exampleModal'));
      myModal.show();
  });
  </script>
  ";

  unset($_SESSION['loginError']); // clear after showing toast
}



?>
