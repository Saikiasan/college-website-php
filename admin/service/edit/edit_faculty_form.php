<?php 
include '../saikia/auth.php';
include("../saikia/db_config.php");

$sql = "SELECT * FROM faculty WHERE f_id='$_GET[id]'";

$query = mysqli_query($conn,$sql);
$res = mysqli_fetch_array($query);
?>
<!DOCTYPE html><html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Edit Faculty details</title>
<link rel="shortcut icon" href="../../../assets/logo/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../../../lib/animate/animate.min.css">
</head>

<body>
<div class="container p-4">
	<div class="row justify-content-center">
		<div class="col">
			<form action="edit_faculty.php" method="POST" enctype="multipart/form-data">
				<div class="container">
					<div class="row justify-content-between">

						<!-- IMAGE -->
						<div class="col py-4 mx-auto my-auto">
							<img src="../../../assets/faculty_img/<?php echo $res['faculty_image'];?>" 
							class="img-profile" style="--s12:200px;width: var(--s12); height: var(--s12)">
						</div>

						<div class="col pt-4">
							<div class="row">
								<!-- NAME -->
								<div class="col-md-10 pb-2">
									<input type='hidden' name='f_id' value="<?php echo $res['f_id']; ?>">
									<label for="faculty_name">Name</label>
									<input type="text" class="form-control" name="faculty_name" 
									value="<?php echo $res['faculty_name']; ?>" required maxlength="100">
								</div>
							</div>
	
							<!-- PHONE & EMAIL -->
							<div class="row justify-content-start pt-3">
								<!-- PHONE -->
								<div class="col-md-3">
									<label>Phone</label>
									<input type="tel" class="form-control" name="faculty_phone" 
									value="<?php echo $res['faculty_phone'] ?>" required maxlength="10" 
									pattern="[0-9]{10}" title="Enter mobile number">
								</div>

								<!-- EMAIL -->
								<div class="col-md-7">
									<label for="faculty_email">Email</label>
									<input type="text" class="form-control" name="faculty_email" value="<?php echo $res['faculty_email'] ?>" required>
								</div>
							</div>

							
							<div class="row pt-3">
									<!-- DEPARTMENT -->
									<div class="col-md-4">
										<label>Department</label>
										<select class="form-select text-center" name="faculty_department">
											<?php
										$sql_department="SELECT * FROM department";
										$result_department=mysqli_query($conn,$sql_department);
										if($result_department -> num_rows >0){
										while($row_department = $result_department -> fetch_assoc()){?>
										<option value="<?php echo $row_department['d_id'];?>">
										<?php echo $row_department['name'];?></option>
										<?php
										// display selected item at the beggining
										if($row_department['d_id'] == $res['faculty_department']){
										echo "<option value='$row_department[d_id]' selected>$row_department[name]</option>";
										}}}?>
									</select>
									</div>
									
									<!-- QUALIFICATION -->
									<div class="col-md-5">
										<label>Qualification</label>
										<input type="text" class="form-control" name="faculty_qualification" value="<?php echo $res['faculty_qualification'] ?>" required>
									</div>			
								</div>

								<!-- IMAGE -->
								<div class="row pt-4 justify-content-between">
									<div class="col">
										<span class="text-danger fw-bold fs-6">Upload image file to change the Profile Image</span>
									</div>
								</div>	
								<div class="row">
									<div class="col-md-6">
										<label for="faculty_image">Profile image</label>
										<input type="file" class="form-control" name="faculty_image" accept="image/jpg,image/png,image/jpeg">
										<input type="hidden" value="<?php echo $res['faculty_image'];?>" name="faculty_image_old">
									</div>
								</div>

								<!-- BUTTONS -->
								<div class="row p-5">
									<div class="col">
										<a href="../../faculty.php" class="btn btn-danger">Cancel</a>
									</div>
									<div class="col">
										<input type="submit" class="btn btn-success" name="edit" value="Save">
									</div>
								</div>
						</div>

					</div>
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>