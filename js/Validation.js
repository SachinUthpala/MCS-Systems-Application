document.addEventListener("DOMContentLoaded", () => {
  const passwordInput = document.getElementById('spassword');
  const rePasswordInput = document.getElementById('srpassword');
  const submitBtn = document.querySelector('#pills-register button[type="submit"]');

  // Create message div
  const msg = document.createElement('p');
  msg.style.color = '#ff1100ff';
  msg.style.marginBottom = '10px';

  // Insert the msg div before the row that contains both password inputs
  const pwdRow = rePasswordInput.closest('.row.g-3'); // the row wrapper div
  pwdRow.parentNode.insertBefore(msg, pwdRow);

  function validatePassword() {
    const pwd = passwordInput.value;
    const rePwd = rePasswordInput.value;

    const regex = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,}$/;

    if (!regex.test(pwd)) {
      msg.textContent = "Password must be at least 6 characters and include a letter, number & symbol.";
      submitBtn.disabled = true;
      return false;
    } else if (pwd !== rePwd) {
      msg.textContent = "Passwords do not match.";
      submitBtn.disabled = true;
      return false;
    } else {
      msg.textContent = "";
      submitBtn.disabled = false;
      return true;
    }
  }

  passwordInput.addEventListener('input', validatePassword);
  rePasswordInput.addEventListener('input', validatePassword);
});