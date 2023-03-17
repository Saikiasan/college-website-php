<?php
include 'auth.php';
include "db_config.php";

if(isset($_POST['submit'])){
    $title = $_POST['img_title'];
    $description = $_POST['img_description'];

    $file = $_FILES['image_file'];

    $file_name = $_FILES['image_file']['name'];
    $file_tmp_name = $_FILES['image_file']['tmp_name'];
    $file_size = $_FILES['image_file']['size'];
    $file_error = $_FILES['image_file']['error'];
    $file_type = $_FILES['image_file']['type'];

    // file extention
    $file_ext = explode('.', $file_name);
    $file_actual_ext = strtolower(end($file_ext));

    // allowed file extention
    $allowed = array('jpg', 'jpeg', 'png');

    if(in_array($file_actual_ext, $allowed)){
        if($file_error === 0){
            if($file_size < 10485760){
                $file_new_name = "gallery_".uniqid(true).".".$file_actual_ext;
                $file_destination = '../../assets/gallery_images/'.$file_new_name;
                move_uploaded_file($file_tmp_name, $file_destination);
                header("Location: add_gallery.php?uploadsuccess");
            } else {
                // echo "Your file size is too big!";
                $_SESSION['status'] = "Your file size is too big!";
                header("Location: add_gallery.php");
            }
        } else {
            // echo "There was an error uploading your file!";
            $_SESSION['status'] = "There was an error uploading your file!";
            header("Location: add_gallery.php");
        }
    } else {
        // echo "You cannot upload files of this type!";
        $_SESSION['status'] = "You cannot upload files of this type!";
        header("Location: add_gallery.php");
    }

    $sql = "INSERT INTO gallery (title, picture, description)
                VALUES ('$title','$file_new_name','$description')";

    $result = mysqli_query($conn, $sql);
    if($result){
        $_SESSION['success'] = "Data created";
        header("location: ../gallery.php");
    } else {
        $_SESSION['status'] = "Data not created";
        header("location: ../gallery.php");
    }
}
?>