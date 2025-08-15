$(document).ready(function() {
  $('.btn-update-user').click(function() {
    // Get data from the button attributes
    var userId = $(this).data('id');
    var userName = $(this).data('name');
    var userEmail = $(this).data('email');
    var adminAccess = $(this).data('access');

    // Set the form fields in the modal
    $('#modalUserId').val(userId);
    $('#modalUserName').val(userName);
    $('#modalUserEmail').val(userEmail);
    $('#modalAdminAccess').val(adminAccess);

    // Show the modal
    $('#updateUserModal').modal('show');
  });
});