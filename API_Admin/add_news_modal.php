<!-- update_modal.php -->
<div class="modal fade" id="Add_news_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Notification</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="add_news.php" method="POST">
          <div class="form-group">
            <label for="firstname">News_ID</label>
            <input type="text" name="News_ID" class="form-control">
          </div>
          <div class="form-group">
            <label for="address">News Title</label>
            <input type="text" name="News_Title" class="form-control" >
          </div>
          <div class="form-group">
            <label for="address">Publisher News</label>
            <input type="text" name="Publisher_News" class="form-control" >
          </div>
          <div class="form-group">
            <label for="address">Avatar</label>
            <input type="text" name="Avatar" class="form-control" >
          </div>
          <div class="form-group">
            <label for="address">Image</label>
            <input type="text" name="Img" class="form-control" >
          </div>
          <div class="form-group">
            <label for="address">Time</label>
            <input type="text" name="News_Time" class="form-control" >
          </div>
          <button type="submit" name="Add" class="btn btn-primary">Add</button>
        </form>
      </div>
    </div>
  </div>
</div>
