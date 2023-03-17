<?php

session_start();

include('db_config.php');
if (!$_SESSION['email']) {
    header('location: ./admin_login.php');
}