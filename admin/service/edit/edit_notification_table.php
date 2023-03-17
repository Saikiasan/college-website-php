<?php include 'auth.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edit notification details</title>
	<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../lib/animate/animate.min.css">
</head>
<body>

<div class="container-fluid">
	<div class="row justify-content-center align-content-center mt-5">
		<div class="card shadow-lg p-2 col-md-6 border border-dark text-dark">
		<form action="edit_notification.php" method="post">
				<div class="modal-header">						
					<h4 class="modal-title text-uppercase fw-bold">Edit Notifications</h4>
					<a href="../notifications.php" class="btn btn-danger">Cancel</a>
				</div>
                <?php
					include("db_config.php");
                    $sql = "SELECT * FROM notification WHERE id='$_GET[id]'";
                    $query = mysqli_query($conn,$sql);
                    $res = mysqli_fetch_array($query);
                ?>
				<div class="modal-body">		
					<div class="form-group">
						<input type='hidden' name='id' value="<?php echo $res['id']; ?>">
						<label>Title</label>
						<input type="text" class="form-control" name="title" value="<?php echo $res['title']; ?>" required maxlength="20">
					</div>			
					<div class="form-group">
						<label>Description</label>
						<input type="text" class="form-control" name="description" value="<?php echo $res['description']; ?>" required>
					</div>
					<div class="form-group">
						<label>Type</label>
						<input type="text" class="form-control" name="type" value="<?php echo $res['type'] ?>" required>
					</div>		
						
				</div>
				<div class="modal-footer mt-4 mb-2 justify-content-around">
               		<a href="../notifications.php" class="btn btn-danger">Cancel</a>
					<input type="submit" class="btn btn-success" name="edit" value="Save">
				</div>
			</form>
		</div>
	</div>
</div>
      	
</body>
</html>