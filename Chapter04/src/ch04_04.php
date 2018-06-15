<?php // ตัวอย่างโปรแกรมที่ 4.4 การติดต่อฐานข้อมูลเพื่อลบแถวในตาราง 
    $conn=mysqli_connect("localhost", "root", "");
    $db=mysqli_select_db($conn, "db_chapter04");
    mysqli_query($conn, "SET character_set_results=utf8");
    mysqli_query($conn, "SET character_set_client=utf8");
    mysqli_query($conn, "SET character_set_connection=utf8");
    $sql="DELETE FROM Products 
            WHERE ProductID = '3';"; // กำหนดคำสั่ง SQL
    $result=mysqli_query($conn, $sql); // ประมวลผลคำสั่ง SQL
    mysqli_close($conn);
    echo "<META http-equiv='refresh' content='0; url=ch04_01.php'>";
?>