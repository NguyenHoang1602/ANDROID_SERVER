<!-- update_modal.php -->
<div class="modal fade" id="update_modal_<?php echo $fetch['Room_ID'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Notification</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="update_room.php" method="POST">
          <div class="form-group">
            <label for="firstname">Room_ID</label>
            <input type="text" name="schedule_ID" class="form-control" value="<?php echo $fetch['Room_ID'] ?>">
          </div>
          <div class="form-group">
            <label for="address">Room Name</label>
            <input type="text" name="Room_ID" class="form-control" value="<?php echo $fetch['Room_ID'] ?>">
          </div>
          <button type="submit" name="Update" class="btn btn-primary">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>
