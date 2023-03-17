<?php
include 'auth.php';
include "db_config.php";

if(isset($_REQUEST['name'])){
    $c_id = $_POST['c_id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $duration = $_POST['duration'];
    $fees = $_POST['fees'];

    $sql = "INSERT INTO courses (c_id,name,description,duration,fees)
    VALUES ('$c_id','$name','$description','$duration','$fees')";

    $result = mysqli_query($conn, $sql);
    if($result){
        $_SESSION['success'] = "Data created successfully";
        header('location: ../courses.php');
    }

    else {
        $_SESSION['status'] = "Data cannot be created";
        header('location: ../courses.php');
    }
}

?>