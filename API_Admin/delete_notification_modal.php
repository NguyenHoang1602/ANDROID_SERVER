<!-- update_modal.php -->
<div class="modal fade" id="delete_modal_<?php echo $fetch['Notification_ID'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Notification</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5>Are you sure about this</h5>
          <a href="delete_room.php?Notification_ID=<?php echo $fetch['Notification_ID'] ?>"  class="btn btn-primary">Delete</a>
      </div>
    </div>
  </div>
</div>
