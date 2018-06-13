<?php // ตัวอย่างโปรแกรมที่ 4.5 การสร้างโปรแกรมส่วนเชื่อมฐานข้อมูล // connection.php
    $conn=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($conn, "db_shop");
    mysqli_query($conn, "SET character_set_results=utf8");
    mysqli_query($conn, "SET character_set_client=utf8");
    mysqli_query($conn, "SET character_set_connection=utf8");
?>