<!-- MODAL add notifications -->
<div class="modal fade" id="add_notification_modal" tabindex="-1" aria-labelledby="add_notifications" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <h1 class="modal-title fs-5 fw-bold text-dark text-center" id="add_notifications">Add Notification</h1>
      <div class="modal-body">
        <form method="post" action="service/insert/insert_notification.php" class="d-flex flex-column form">
            <div class="col-md mb-2">
                <label for="description">Notification Title</label>
                <input type="text" name="title" class="form-control" autofocus maxlength="40">
            </div>
            <div class="col-md mb-2">
                <label for="description">Notification description</label>
                <input type="text" name="description" class="form-control">
            </div>
            <div class="col-md mb-2">
                <label for="type">Notification type</label>
                <input type="text" name="type" class="form-control" title="Please provide a type" required>
            </div>
            <div class="col-md mb-2">
                <label for="timestamp">Date</label>
                <input type="date" placeholder="enter Time" class="form-control" name="timestamp">
            </div>                              
            <div class="row justify-content-evenly my-2">
                <input type="submit" name="submit" value="Upload" class="btn btn-primary col-sm-4">
                <button class="btn btn-danger col-sm-4" data-bs-dismiss="modal"  aria-label="Close">Cancel</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- MODAL END - add notifications -->