<?php
include '../saikia/auth.php';
include "../saikia/db_config.php";

if(isset($_POST['submit'])){
    $faculty_name = $_POST['faculty_name'];
    $faculty_email = $_POST['faculty_email'];
    $faculty_phone = $_POST['faculty_phone'];
    $facullty_department = $_POST['faculty_department'];
    $faculty_qualification = $_POST['faculty_qualification'];

    $img_file = $_FILES['faculty_image'];
    $file_name = $_FILES['faculty_image']['name'];
    $file_tmp = $_FILES['faculty_image']['tmp_name'];
    $file_size = $_FILES['faculty_image']['size'];
    $file_error = $_FILES['faculty_image']['error'];
    $file_type = $_FILES['faculty_image']['type'];

    $file_ext = explode('.', $file_name);
    $file_actual_ext = strtolower(end($file_ext));

    $allowed = array('jpg', 'jpeg', 'png');

    if(in_array($file_actual_ext, $allowed)){
        if($file_error === 0){
            if($file_size < 10485760){
                $file_new_name = uniqid(true).".".$file_actual_ext;
                $file_destination = '../../../assets/faculty_img/'.$file_new_name;
                move_uploaded_file($file_tmp, $file_destination);
            } else {
                echo "Your file size is too big!";
            }
        } else {
            echo "There was an error uploading your file!";
        }
    } else {
        echo "You cannot upload files of this type!";
    }

    // if no image is uploaded, upload the default image
    if($file_name == ""){
        $file_new_name = "def.ico";
    }

    $sql = "INSERT INTO faculty (faculty_name, faculty_email, faculty_phone, faculty_department, faculty_qualification, faculty_image) 
                VALUES ('$faculty_name', '$faculty_email', '$faculty_phone', '$facullty_department', '$faculty_qualification', '$file_new_name')";
                $result = mysqli_query($conn, $sql);
                if($result){
                    $_SESSION['success'] = "Data created";
                    header("location: ../../faculty.php");
                } else {
                    $_SESSION['status'] = "Data not created";
                    header("location: ../../faculty.php");
                }
}

?>