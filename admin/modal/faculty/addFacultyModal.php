<!-- MODAL add faculty -->
<div class="modal fade" id="add_faculty_modal" tabindex="-1" aria-labelledby="add_faculty" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <h1 class="modal-title fs-5 fw-bold text-dark text-center" id="add_faculty">Add Faculty</h1>
            <div class="modal-body">
                <form method="post" action="service/insert/insert_faculty.php" enctype="multipart/form-data"
                    class="d-flex flex-column form">
                    <div class="col-md mb-2">
                        <label for="faculty_name">Faculty name</label>
                        <input type="text" name="faculty_name" class="form-control" required maxlength="50" autofocus>
                    </div>
                    <div class="col-md mb-2">
                        <label for="faculty_email">E-mail</label>
                        <input type="email" name="faculty_email" class="form-control" maxlength="50"
                            title="Please provide a valid email" required>
                    </div>
                    <div class="col-md mb-2">
                        <label for="faculty_phone">Phone</label>
                        <div class="row">
                            <div class="col-sm-3">
                                <input type="text" value="+91" class="form-control" disabled>
                            </div>
                            <div class="col">
                                <input type="tel" name="faculty_phone" class="form-control" maxlength="10"
                                    pattern="[0-9]{10}" title="Provide 10 digit mobile number" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md mb-2">
                        <label for="faculty_image">Photo</label>
                        <input type="file" name="faculty_image" class="form-control"
                            accept="image/png, image/jpg, image/jpeg">
                    </div>
                    <div class="row justify-content-evenly">
                        <div class="col-sm-5 mb-2">
                            <label for="faculty_department">Department</label>
                            <select class="form-select text-center" name="faculty_department">
                                <option value=""></option>
                                <?php
                        $sql_department="SELECT * FROM department";
                        $result_department=mysqli_query($conn,$sql_department);
                        if($result_department -> num_rows >0){
                            while($row_department = $result_department -> fetch_assoc()){?>
                                <option value="<?php echo $row_department['d_id'];?>">
                                    <?php echo $row_department['name'];?></option>
                                <?php
                            }
                        }
                        ?>
                            </select>
                        </div>
                        <div class="col-md mb-2">
                            <label for="faculty_qualification">Qualification</label>
                            <input class="form-control text-center" name="faculty_qualification" type="text"
                                title="please provide a valid qualification">
                        </div>
                    </div>
                    <div class="row justify-content-evenly my-2">
                        <input type="submit" name="submit" value="Add" class="btn btn-primary col-sm-4">
                        <button class="btn btn-danger col-sm-4" type="button" data-bs-dismiss="modal"
                            aria-label="Close">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- MODAL END - add faculty -->