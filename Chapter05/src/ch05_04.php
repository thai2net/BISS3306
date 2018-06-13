<?php // ตัวอย่างโปรแกรมที่ 5.4 เพิ่มรายการสินค้าด้วยตัวแปรส่งค่า $_POST[] จากฟอร์ม
   include "connection.php";
   $txtProductName=$_POST['txtProductName'];
   $txtSupplierID=$_POST['txtSupplierID'];
   $txtCategoryID=$_POST['txtCategoryID']; 
   $txtUnit=$_POST['txtUnit']; 
   $txtPrice =$_POST['txtPrice']; 
   $sql="INSERT INTO  Products (ProductId,  ProductName, 
        SupplierId,  CategoryId, Unit, Price) 
        VALUES (NULL , '$txtProductName', '$txtSupplierID',
                   '$txtCategoryID', '$txtUnit', '$txtPrice');";
   $result=mysqli_query($conn, $sql); 
   mysqli_close($conn);
   echo "<META http-equiv='refresh' content='0; url=products.php'>";
?>