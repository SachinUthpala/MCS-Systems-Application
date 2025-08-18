document.getElementById('AddUserForm').addEventListener('submit', function(e) {
  e.preventDefault();

  const form = this;
  const formData = new FormData(form);

  fetch('./BackEnd/db.AddUser.php', {
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

    // ✅ Clear form if success
    if (data.status === "success") {
      form.reset();
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
