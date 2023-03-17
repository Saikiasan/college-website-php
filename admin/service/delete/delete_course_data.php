<?php
    include 'auth.php';
    include("db_config.php");
    if(isset($_GET['id'])){
        
        if($result){
            $_SESSION['deleted'] = "Deleted succesfully";
            header("location: ../courses.php");
            }
            else{
            $_SESSION['notdeleted'] = "Leavetype not deleted!";
            header("location: ../courses.php");
        }
    }
    if(isset($_POST['delete_btn_set']))
    {
        $del_id = $_POST['delete_id'];
        $sql = "DELETE FROM courses WHERE id = '$del_id'";
        $result = mysqli_query($conn,$sql);
    }
?>