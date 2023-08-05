<!-- update_modal.php -->
<div class="modal fade" id="update_modal_<?php echo $fetch['User_ID'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Notification</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="update_student.php" method="POST">
          <div class="form-group">
            <label for="firstname">MSSV</label>
            <input type="text" name="MSSV" class="form-control" value="<?php echo $fetch['MSSV'] ?>">
          </div>
          <div class="form-group">
            <label for="address">Name</label>
            <input type="text" name="Name" class="form-control" value="<?php echo $fetch['MSSV'] ?>">
          </div>
          <div class="form-group">
            <label for="address">Email</label>
            <input type="text" name="Email" class="form-control" value="<?php echo $fetch['MSSV'] ?>">
          </div>
          <div class="form-group">
            <label for="address">Contact Number</label>
            <input type="text" name="Contact_Number" class="form-control" value="<?php echo $fetch['MSSV'] ?>">
          </div>
          <div class="form-group">
            <label for="address">Pass</label>
            <input type="text" name="Pass" class="form-control" value="<?php echo $fetch['MSSV'] ?>">
          </div>
          <div class="form-group">
            <label for="address">Sex</label>
            <input type="text" name="Sex_ID" class="form-control" value="<?php echo $fetch['MSSV'] ?>">
          </div>
          <div class="form-group">
            <label for="address">Date of birth</label>
            <input type="text" name="Date_of_birth" class="form-control" value="<?php echo $fetch['MSSV'] ?>">
          </div>
          <div class="form-group">
            <label for="address">Specialized</label>
            <input type="text" name="Specialized_ID" class="form-control" value="<?php echo $fetch['MSSV'] ?>">
          </div>
          <div class="form-group">
            <label for="address">Classroom</label>
            <input type="text" name="Classroom_ID" class="form-control" value="<?php echo $fetch['MSSV'] ?>">
          </div>
          <div class="form-group">
            <label for="address">Status</label>
            <input type="text" name="Status_ID" class="form-control" value="<?php echo $fetch['MSSV'] ?>">
          </div>
          <button type="submit" name="Update" class="btn btn-primary">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>
