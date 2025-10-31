<?php
    $host = "localhost";         
    $user = "root";          
    $pwd = "";              
    $sql_db = "s104221122";

    $conn = mysqli_connect($host, $user, $pwd, $sql_db);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>