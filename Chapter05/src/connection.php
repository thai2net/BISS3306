<?php // connection.php
    $conn=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($conn, "db_chapter05");
    mysqli_query($conn, "SET character_set_results=utf8");
    mysqli_query($conn, "SET character_set_client=utf8");
    mysqli_query($conn, "SET character_set_connection=utf8");
?>