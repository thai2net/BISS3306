<?php // ตัวอย่างโปรแกรมที่ 5.1 ตัวอย่างการตั้งรับค่าตัวแปร $_GET[] // 'product_del.php?id=รหัสสินค้า
    include "connection.php";
    $ProductID=$_GET['id']; // การตั้งค่ารับตัวแปรแบบ GET
    $sql="DELETE Products 
            WHERE ProductID = '$ProductID';"; // การนำไปใช้งานในคำสั่ง SQL
    $result=mysqli_query($conn, $sql); 
    mysqli_close($conn);
    echo "<META http-equiv='refresh' content='0; url=products.php'>";
?>