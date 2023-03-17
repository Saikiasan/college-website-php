<?php
    include '../saikia/auth.php';
    include("../saikia/db_config.php");

    if(isset($_POST['delete_btn_set']))
    {
        $del_id = $_POST['delete_id'];
        $sql = "DELETE FROM department WHERE d_id = '$del_id'";
        $result = mysqli_query($conn,$sql);
    }