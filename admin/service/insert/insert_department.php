<?php
include '../saikia/auth.php';
include "../saikia/db_config.php";

if(isset($_REQUEST['name'])){
    $name = $_POST['name'];
    $about = $_POST['about'];

    $sql = "INSERT INTO department (name, about) VALUES ('$name', '$about')";
    $result = mysqli_query($conn,$sql);
}