<!-- MODAL edit faculty -->
<div class="modal fade" id="edit_faculty_modal" tabindex="-1" aria-labelledby="edit_faculty" aria-hidden="true"
  data-bs-backdrop="static" data-bs-keyboard="false">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <h1 class="modal-title fs-5 fw-bold text-dark text-center" id="edit_faculty">Edit Faculty</h1>
      <div class="modal-body">
        <form action="service/edit/edit_faculty.php" method="POST" enctype="multipart/form-data">
          <div class="row">
            <div class="col mb-2 text-center">
              <img class="rounded-circle shadow"
                style="width: 100px; height: 100px" id="f_img">
            </div>
          </div>
          <div class="form-group">
            <input type='hidden' name='f_id' id="f_id">
            <label>Name</label>
            <input type="text" class="form-control" name="faculty_name"
              required id="f_name">
          </div>
          <div class="form-group">
            <div class="col-mb">
              <label>Phone</label>
              <div class="row">
                <div class="col-sm-2"><input type="text" value="+91" class="form-control" disabled></div>
                <div class="col-md-5">
                  <input type="tel" class="form-control" name="faculty_phone"
                    required maxlength="10" pattern="[0-9]{10}"
                    title="Enter mobile number" id="f_phone">
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="faculty_email"
              required id="f_mail">
          </div>
          <div class="form-group">
            <div class="col-sm-5 mb-2">
              <label>Department</label>
              <select class="form-select text-center" name="faculty_department">
                <?php
                $sql_department="SELECT * FROM department";
                $result_department=mysqli_query($conn,$sql_department);
                if($result_department -> num_rows >0){
                  while($row_department = $result_department -> fetch_assoc()){?>

                <option><?php echo $row_department['name'];?></option>

                <?php
                $dept_id = "json fetched faculty_department";
  							// display selected item at the beggining
  							if($row_department['d_id'] == $dept_id){
  								echo "<option value='$row_department[d_id]' selected>$row_department[name]</option>";
  							}}} ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label>Qualification</label>
            <input type="text" class="form-control" name="faculty_qualification" required id="f_qual">
          </div>
          <div class="form-group">
            <label for="faculty_image">Image</label>
            <input type="file" class="form-control" name="faculty_image" accept="image/jpg,image/png,image/jpeg">
            <input type="none" value="<?php echo $res['faculty_image'];?>" name="faculty_image_old">
          </div>
          <div class="row justify-content-evenly my-2">
            <input type="submit" class="btn btn-success col-sm-4" name="edit" value="Save">
            <button class="btn btn-danger col-sm-4" data-bs-dismiss="modal" aria-label="Close"
              type="button">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- MODAL END - edit faculty -->