<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ctctsk01";
$conn = new mysqli($servername,$username,$password,$dbname) or die("Connct failed: %s\n". $conn -> error);
