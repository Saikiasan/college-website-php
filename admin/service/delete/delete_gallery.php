<?php
    include 'auth.php';
    include("db_config.php");
    if(isset($_GET['f_id'])){
        
        if($result){
            $_SESSION['deleted'] = "Deleted succesfully";
            header("location: ../gallery.php");
            }
            else{
            $_SESSION['notdeleted'] = "Data not deleted!";
            header("location: ../gallery.php");
        }
    }
    if(isset($_POST['delete_btn_set']))
    {
        $del_id = $_POST['delete_id'];
        // delete the image from the folder
        $sql_img = "SELECT * FROM gallery WHERE g_id = '$del_id'";
        $result_img = $conn->query($sql_img);
        $row_img = $result_img->fetch_assoc();
        $img_name = $row_img['picture'];
        unlink("../../assets/gallery_images/".$img_name);
        // delete the image from the folder
        $sql = "DELETE FROM gallery WHERE g_id = '$del_id'";
        $result = $conn->query($sql);
        if($result){
            $_SESSION['deleted'] = "Deleted succesfully";
            header("location: ../gallery.php");
            }
            else{
            $_SESSION['notdeleted'] = "Data not deleted!";
            header("location: ../gallery.php");
        }
    }
?>