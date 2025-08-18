
let benefitCount = 0;

function addBenefit() {
  benefitCount++;
  const benefitId = `benefit_${benefitCount}`;

  const benefitDiv = document.createElement("div");
  benefitDiv.classList.add("card", "mb-3");
  benefitDiv.innerHTML = `
    <div class="card-body">
      <div class="form-group">
        <label>Benefit Title</label>
        <input type="text" class="form-control" name="benefits[${benefitCount}][title]" required>
      </div>

      <div class="form-group">
        <label>Benefit Details</label>
        <div id="${benefitId}_details"></div>
        <button type="button" class="btn btn-sm btn-info" onclick="addDetail('${benefitId}', ${benefitCount})">+ Add Detail</button>
      </div>

      <button type="button" class="btn btn-sm btn-danger" onclick="this.closest('.card').remove()">Remove Benefit</button>
    </div>
  `;

  document.getElementById("benefitsSection").appendChild(benefitDiv);
}

function addDetail(benefitId, benefitCount) {
  const detailsDiv = document.getElementById(`${benefitId}_details`);
  const index = detailsDiv.children.length;

  const detailInput = document.createElement("div");
  detailInput.classList.add("input-group", "mb-2");
  detailInput.innerHTML = `
    <input type="text" class="form-control" name="benefits[${benefitCount}][details][]" placeholder="Enter detail" required>
    <div class="input-group-append">
      <button class="btn btn-outline-danger" type="button" onclick="this.closest('.input-group').remove()">X</button>
    </div>
  `;

  detailsDiv.appendChild(detailInput);
}






document.getElementById('AddProductForm').addEventListener('submit', function(e) {
  e.preventDefault();

  const form = this;
  const formData = new FormData(form);

  fetch('./BackEnd/db.AddProduct.php', {
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
