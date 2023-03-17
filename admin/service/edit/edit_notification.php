<?php
include_once '../saikia/db_config.php';
if(isset($_POST['edit_btn_set'])){
    $edit_id = $_POST['editid'];

    $result_arr = [];
    $query = "SELECT * FROM notification WHERE id = '$edit_id'";
    $query_run = mysqli_query($conn, $query);

    if(mysqli_num_rows($query_run) > 0){
        foreach($query_run as $row){
            array_push($result_arr, $row);
            header('Content-Type: application/json');
            echo json_encode($result_arr);
        }
    }
}

if(isset($_POST['edit'])){
    $id=$_POST['edit_id'];
    $title = $_POST['e_title'];
    $description = $_POST['e_desc'];
    $type = $_POST['e_type'];
    $time = $_POST['e_time'];

    $query = "UPDATE notification SET title = '$title', description = '$description', type = '$type', timestamp = '$time' WHERE id = '$id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run){
        $_SESSION['success'] = "Data updated successfully";
        header("location: ../../notifications.php");
    } else {
        $_SESSION['status'] = "Data not updated";
        header("location: ../../notifications.php");
    }
}
?>