<!-- MODAL add department -->
<div class="modal fade" id="add_department_modal" tabindex="-1" aria-labelledby="add_faculty" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <h1 class="modal-title fs-5 fw-bold text-dark text-center" id="add_faculty">Add Faculty</h1>
            <div class="modal-body">
                <form method="post" action="service/insert/insert_department.php" class="d-flex flex-column form">
                    <div class="col-md mb-2">
                        <label for="name">Department name</label>
                        <input type="text" name="name" class="form-control text-capitalize" autofocus required>
                    </div>

                    <div class="col-md mb-2">
                        <label for="about">About</label>
                        <input type="text" name="about" class="form-control" title="About the department">
                    </div>                                            

                    <div class="row justify-content-evenly my-2">
                        <input type="submit" name="submit" value="Upload" class="btn btn-primary col-sm-4">
                        <button class="btn btn-danger col-sm-4" type="button" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- MODAL END - add department -->