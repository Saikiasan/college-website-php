<?php
    include '../saikia/auth.php';
    include("../saikia/db_config.php");
    if(isset($_GET['id'])){
        
        if($result){
            $_SESSION['deleted'] = "Deleted succesfully";
            header("location: ../../notifications.php");
            }
            else{
            $_SESSION['notdeleted'] = "Data not deleted!";
            header("location: ../../notifications.php");
        }
    }
    if(isset($_POST['delete_btn_set']))
    {
        $del_id = $_POST['delete_id'];
        $sql = "DELETE FROM notification WHERE id = '$del_id'";
        $result = mysqli_query($conn,$sql);
    }
?>