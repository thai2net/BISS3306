<HTML>
<HEAD>
<TITLE>SEARCH PRODUCTS</TITLE>
<META charset="UTF-8">
</HEAD>
<?php // ตัวอย่างโปรแกรมที่ 5.8 ตัวอย่างการค้นหาจากชื่อสินค้า 
   include "connection.php";  // ส่วนเชื่อมต่อฐานข้อมูล
   if(!empty($_POST['txtKeyword'])) {
    $txtKeyword = $_POST['txtKeyword'];
 } else {
    $txtKeyword = '';
 }
 $sql="SELECT p.*, s.SupplierName, c.CategoryName FROM (( Products p
         INNER JOIN Suppliers s ON p.SupplierID=s.SupplierID)
         INNER JOIN Categories c ON p.CategoryID=c.CategoryID)
         WHERE ProductName LIKE '%$txtKeyword%';";
 $result=mysqli_query($conn, $sql);
?>
<BODY>
<FORM name="frmSearchProduct" id="frmSearchProduct" method="post" 
         action="ch05_08.php">
<H3>ฟอร์มค้นหาสินค้า</H3>
<TABLE>
<TR><TH>คำค้นหา:</TH>
 <TD>
     <INPUT name="txtKeyword" id="txtKeyword" type="text" size="50" 
                maxlength="105" value="<?php echo $txtKeyword;?>">
     <INPUT name="submit" id="submit" type="submit" value="ค้นหา">
</TD>
</TR>
</TABLE>
<H3>รายการสินค้า</H3>
<TABLE border="1">
<TR><TH>รายการ</TH><TH>ผู้ผลิต</TH><TH>ประเภทสินค้า</TH>
     <TH>หน่วยนับ</TH><TH>ราคา</TH></TR>
     <?php
   while($rows = mysqli_fetch_array($result)) {
   echo "<TR><TD>$rows[ProductName]</TD>
           <TD>$rows[SupplierName]</TD><TD>$rows[CategoryName]</TD>
           <TD>$rows[Unit]</TD><TD>$rows[Price]</TD></TR>";
   }
   mysqli_close($conn);
?>
</TABLE>
</FORM>
</BODY>
</HTML>