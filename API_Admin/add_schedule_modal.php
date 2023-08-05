<!-- update_modal.php -->
<div class="modal fade" id="Add_schedule_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Notification</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="add_schedule.php" method="POST">
          <div class="form-group">
            <label for="firstname">Schedule_ID</label>
            <input type="text" name="schedule_ID" class="form-control">
          </div>
          <div class="form-group">
            <label for="lastname">Date</label>
            <input type="text" name="Date" class="form-control">
          </div>
          <div class="form-group">
            <label for="address">Room</label>
            <input type="text" name="Room_ID" class="form-control" >
          </div>
          <div class="form-group">
            <label for="address">Amphitheater</label>
            <input type="text" name="Amphitheater_ID" class="form-control" >
          </div>
          <div class="form-group">
            <label for="address">Subject</label>
            <input type="text" name="Subject_ID" class="form-control" >
          </div>
          <div class="form-group">
            <label for="address">Classroom</label>
            <input type="text" name="Classroom_ID" class="form-control" >
          </div>
          <div class="form-group">
            <label for="address">Lecturers</label>
            <input type="text" name="Lecturers" class="form-control" >
          </div>
          <div class="form-group">
            <label for="address">Slot</label>
            <input type="text" name="Slot" class="form-control" >
          </div>
          <button type="submit" name="Add" class="btn btn-primary">Add</button>
        </form>
      </div>
    </div>
  </div>
</div>
