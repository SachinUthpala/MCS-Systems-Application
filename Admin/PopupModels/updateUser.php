<!-- Update User Modal -->
<div class="modal fade" id="updateUserModal" tabindex="-1" role="dialog" aria-labelledby="updateUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form id="UpdateUserForm" class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateUserModalLabel">Update User Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="userId" id="modalUserId">
                <div class="form-row">
                    <div class="form-group col-md-6 col-12">
                        <label>User Name</label>
                        <input type="text" class="form-control" name="userName" id="modalUserName">
                    </div>

                    <div class="form-group col-md-6 col-12">
                        <label>User Email</label>
                        <input type="email" class="form-control" name="userEmail" id="modalUserEmail">
                    </div>

                    <div class="form-group col-md-6 col-12">
                        <label>User Password</label>
                        <input type="text" class="form-control" name="userPassword" id="modalUserPassword">
                    </div>

                    <div class="form-group col-md-6 col-12">
                        <label>Admin Access Type</label>
                        <select class="form-control" name="AdminAccess" id="modalAdminAccess">
                            <option value="1">Admin User With Limitations</option>
                            <option value="2">Admin User Without Limitations</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
        </form>
    </div>
</div>