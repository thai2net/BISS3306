<?php // ตัวอย่างโปรแกรมที่ 4.2 การติดต่อฐานข้อมูลเพื่อเพิ่มแถวใหม่ในตาราง 
    $conn=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($conn, "db_shop");
    mysqli_query($conn, "SET character_set_results=utf8");
    mysqli_query($conn, "SET character_set_client=utf8");
    mysqli_query($conn, "SET character_set_connection=utf8");
    $sql="INSERT INTO  Products (ProductId,  ProductName, 
        SupplierId,  CategoryId, Unit, Price) 
        VALUES (NULL ,  'ไม้บรรทัด',  '1',  '1',  'อัน',  '13');"; // กำหนดคำสั่ง SQL
    $result=mysqli_query($conn, $sql); // ประมวลผลคำสั่ง SQL
    mysqli_close($conn);
    echo "<META http-equiv='refresh' content='0; url=php_sql_select.php'>";
?>