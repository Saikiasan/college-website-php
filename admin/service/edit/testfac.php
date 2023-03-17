<?php
require '../saikia/db_config.php';

if(isset($_POST['edit'])){
    $id = $_POST['f_id'];
    $name = $_POST['faculty_name'];
    $email = $_POST['faculty_email'];
    $phone = $_POST['faculty_phone'];
    $department = $_POST['faculty_department'];
    $qualification = $_POST['faculty_qualification'];

    $img_new = $_FILES['faculty_image']['name'];
    $img_old = $_POST['faculty_image_old'];

    if($img_new !== ''){
        $img_name = $_FILES['faculty_image']['name'];
    }else{
        $img_name = $img_old;
    }

        // updating
        $query = "UPDATE faculty SET faculty_name='$name', faculty_email='$email', faculty_phone='$phone', faculty_department='$department', faculty_image='$img_name' WHERE f_id='$id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run){

            if( $_FILES['faculty_image']['name'] !== ''){
                move_uploaded_file($_FILES['faculty_image']['tmp_name'], "../../../assets/faculty_img/".$_FILES['faculty_image']['name']);
                unlink("../../../assets/faculty_img/".$img_old);
            }

            $_SESSION['success'] = "Data updated";
            header("location: ../../faculty.php");
        } else {
            $_SESSION['status'] = "Data not updated";
            header("location: ../../faculty.php");
        }
    }
