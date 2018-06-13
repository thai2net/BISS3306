<?php // ตัวอย่างโปรแกรมที่ 5.5 ปรับปรุงรายการสินค้าด้วยตัวแปรส่งค่า $_POST[] จากฟอร์ม
   include "connection.php";
   $txtProductID=$_POST['txtProductID']; 
   $txtProductName=$_POST['txtProductName']; 
   $txtSupplierID=$_POST['txtSupplierID']; 
   $txtCategoryID=$_POST['txtCategoryID']; 
   $txtUnit=$_POST['txtUnit']; 
   $txtPrice =$_POST['txtPrice']; 
   $sql="UPDATE  Products 
       SET ProductName = '$txtProductName', SupplierID = '$txtSupplierID',
             CategoryID = '$txtCategoryID', Unit = '$txtUnit', Price = '$txtPrice' 
       WHERE ProductID = '$txtProductID';";
   $result=mysqli_query($conn, $sql); 
   mysqli_close($conn);
   echo "<META http-equiv='refresh' content='0; url=products.php'>";
?>