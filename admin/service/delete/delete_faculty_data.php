<?php
    include '../saikia/auth.php';
    include("../saikia/db_config.php");

    if(isset($_GET['f_id'])){
        
        if($result){
            $_SESSION['deleted'] = "Deleted succesfully";
            header("location: ../../faculty.php");
            }
            else{
            $_SESSION['notdeleted'] = "Data not deleted!";
            header("location: ../../faculty.php");
            }
            unset($_SESSION['status']);
    }

    if(isset($_POST['delete_btn_set']))
    {
        $del_id = $_POST['delete_id'];
        // delete the image from the folder
        $sql_img = "SELECT * FROM faculty WHERE f_id = '$del_id'";
        $result_img = $conn->query($sql_img);
        $row_img = $result_img->fetch_assoc();
        $img_name = $row_img['faculty_image'];
        if($img_name !== "def.ico") {
            unlink("../../../assets/faculty_img/".$img_name);
        }
        // delete the image from the folder
        $sql = "DELETE FROM faculty WHERE f_id = '$del_id'";
        $result = $conn->query($sql);
        if($result){
            $_SESSION['deleted'] = "Deleted succesfully";
            header("location: ../../faculty.php");
            }
            else{
            $_SESSION['notdeleted'] = "Data not deleted!";
            header("location: ../../faculty.php");
        }
    }

    // This is the delete php code for faculty.php to delete the data from the faculty table database in the application.