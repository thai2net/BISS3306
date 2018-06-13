<?php // ตัวอย่างโปรแกรมที่ 4.3 การติดต่อฐานข้อมูลเพื่อปรับปรุงแถวในตาราง
    $conn=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($conn, "db_shop");
    mysqli_query($conn, "SET character_set_results=utf8");
    mysqli_query($conn, "SET character_set_client=utf8");
    mysqli_query($conn, "SET character_set_connection=utf8");
    $sql="UPDATE  Products SET Price = '10' 
            WHERE ProductID = '4';"; // กำหนดคำสั่ง SQL
    $result=mysqli_query($conn, $sql); // ประมวลผลคำสั่ง SQL
    mysqli_close($conn);
    echo "<META http-equiv='refresh' content='0; url=php_sql_select.php'>";
?>