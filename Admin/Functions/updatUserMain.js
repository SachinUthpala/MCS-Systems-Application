 document.addEventListener('DOMContentLoaded', function () {
        const togglePasswordUpdate = document.getElementById('togglePasswordUpdate');
        const passwordField = document.getElementById('modalUserPassword');

        togglePasswordUpdate.addEventListener('change', function () {
            passwordField.disabled = !this.checked;
            if (!this.checked) {
                passwordField.value = ''; // Optional: Clear password field when disabled
            }
        });
    });






    document.getElementById('UpdateUserForm').addEventListener('submit', function(e) {
  e.preventDefault();

  const formData = new FormData(this);

  fetch('./BackEnd/db.updateUser.php', {
    method: 'POST',
    body: formData
  })
  .then(response => response.json()) // Expect JSON
  .then(data => {
    Toastify({
      text: data.message || "Unknown response",
      duration: 3000,
      gravity: "top",
      position: "right",
      backgroundColor: data.status === "success" ? "#355EFC" : "#f44336",
      close: true
    }).showToast();

     if (data.status === "success") {
    setTimeout(() => {
      location.reload();
    }, 3000);
  }

  })
  .catch(error => {
    Toastify({
      text: "Error: " + error,
      duration: 3000,
      gravity: "top",
      position: "right",
      backgroundColor: "#f44336",
      close: true
    }).showToast();
  });
});