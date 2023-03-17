<?php
include '../saikia/auth.php';
include "../saikia/db_config.php";

if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $type = $_POST['type'];
    $timestamp = $_POST['timestamp'];

    $sql = "INSERT INTO notification(title,description,type,timestamp)
    VALUES ('$title','$description','$type','$timestamp')";

    $result = mysqli_query($conn, $sql);
    if($result){
        $_SESSION['success'] = "Data created successfully";
        header('location: ../../notifications.php');
    }

    else {
        $_SESSION['status'] = "Data cannot be created";
        header('location: ../../notifications.php');
    }
}

?>