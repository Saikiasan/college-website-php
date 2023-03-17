<?php
    include 'auth.php';
    include("db_config.php");
    if(isset($_POST['edit'])){
        $id = $_POST['id'];
		$c_id=$_POST['c_id'];
		$name=$_POST['name'];
        $description=$_POST['description'];
        $duration=$_POST['duration'];
        $fees=$_POST['fees'];

        $sql = "UPDATE courses SET c_id = '$c_id', name = '$name', description = '$description', duration = '$duration', fees = '$fees'  WHERE id = '$_POST[id]'";
        $result = mysqli_query($conn,$sql);
        if($result){
            $_SESSION['success']=true;
            header("location: ../courses.php?id=$_POST[id]");
        } else {
            $_SESSION['status']=false;
            header("location: ../courses.php?id=$_POST[id]");
        }
    }
?>