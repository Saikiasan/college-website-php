<!-- MODAL edit notifications -->
<div class="modal fade" id="edit_notification_modal" tabindex="-1" aria-labelledby="edit_notifications"
  aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <h1 class="modal-title fs-5 fw-bold text-dark text-center" id="edit_notifications">Edit Notification</h1>
      <div class="modal-body">
        <form action="service/edit/edit_notification.php" method="post" class="form">
          <input type="hidden" name="edit_id" id="edit_id">
          <div class="container">
            <div class="col-md mb-2">
              <label>Title</label>
              <input type="text" class="form-control" id="e_title" name="e_title" required maxlength="20">
            </div>
            <div class="col-md mb-2">
              <label>Description</label>
              <input type="text" class="form-control" name="e_desc" required id="e_desc">
            </div>
            <div class="col-md mb-2">
              <label>Type</label>
              <input type="text" class="form-control" name="e_type" required id="e_type">
            </div>
            <div class="col-md mb-2">
              <label for="timestamp">Date</label>
              <input type="date" placeholder="enter Time" class="form-control" name="e_time">
            </div>
            <div class="row justify-content-evenly my-2">
              <input type="submit" class="btn btn-success col-sm-4" name="edit" value="Save">
              <button class="btn btn-danger col-sm-4" data-bs-dismiss="modal" aria-label="Close"
                type="button">Cancel</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- MODAL END - edit notifications -->