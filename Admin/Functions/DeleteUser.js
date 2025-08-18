
document.addEventListener('DOMContentLoaded', function() {
    // Attach click event to all delete buttons
    document.querySelectorAll('.delete-btn').forEach(button => {
        button.addEventListener('click', function() {
            const userId = this.getAttribute('data-id');
            
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Send AJAX request to delete userAdmin\BackEnd\db.DeleteUser.php
                    fetch('./BackEnd/db.DeleteUser.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded'
                        },
                        body: 'userId=' + userId
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            // Remove deleted row
                            this.closest('tr').remove();
                            
                            Toastify({
                                text: data.message || "User Deleted Successfully !",
                                duration: 3000,
                                gravity: "top",
                                position: "right",
                                backgroundColor: data.status === "success" ? "#355EFC" : "#355EFC",
                                close: true
                                }).showToast();
                        } else {
                            Swal.fire(
                                'Error!',
                                data.message || 'Could not delete user',
                                'error'
                            );
                        }
                    })
                    .catch(error => {
                        Swal.fire(
                            'Error!',
                            'Network request failed',
                            'error'
                        );
                    });
                }
            });
        });
    });
});
