<HTML>
<HEAD>
<TITLE>EDIT PRODUCT</TITLE>
<META charset="UTF-8">
<?php
    include "connection.php";
    $ProductID=$_GET['id']; // การตั้งค่ารับตัวแปรแบบ GET
    $sql = "SELECT p.*, s.SupplierName, c.CategoryName 
        FROM ((Products p
        INNER JOIN Suppliers s ON p.SupplierID = s.SupplierID)
        INNER JOIN Categories c ON p.CategoryID = c.CategoryID)
        WHERE p.ProductID='$ProductID';";
    $result = mysqli_query($conn, $sql); // ประมวลผลคำสั่ง SQL
    while($row=mysqli_fetch_array($result)) {
        $txtProductID=$row['ProductID'];
        $txtProductName=$row['ProductName'];
        $txtSupplierID=$row['SupplierID'];
        $txtSupplierName=$row['SupplierName'];
        $txtCategoryID=$row['CategoryID'];
		$txtCategoryName=$row['CategoryName'];
		$txtUnit=$row['Unit'];
        $txtPrice=$row['Price'];
    }
    $sql = "SELECT * FROM Suppliers;";
    $result_sup = mysqli_query($conn, $sql); // ประมวลผลคำสั่ง SQL
    $sql = "SELECT * FROM Categories;";
    $result_cat = mysqli_query($conn, $sql); // ประมวลผลคำสั่ง SQL
?>
</HEAD>
<BODY>
<FORM name='frmEditProduct' id='frmEditProduct' method='post' action='ch05_05.php'>
<H3>ฟอร์มแก้ไขรายการสินค้า</H3>
<TABLE>
<TR>
	<TD>ชื่อสินค้า</TD>
	<TD><INPUT name="txtProductName" type="text" size="50" maxlength="150" value="<?php echo $txtProductName;?>"</TD>
</TR>
<TR>
	<TD>ผู้ผลิต</TD>
	<TD>
	<SELECT name="txtSupplierID" id="txtSupplierID">
	    <OPTION value="<?php echo $txtSupplierID;?>" selected="selected"><?php echo $txtSupplierName;?></OPTION>
        <OPTION value="0">--กรุณาเลือกรายการ--</OPTION>
        <?php
            while($row_sup=mysqli_fetch_array($result_sup)) {
        ?> 
            <OPTION value="<?php echo $row_sup['SupplierID'];?>"><?php echo $row_sup['SupplierName']; ?></OPTION>
        <?php
            }
        ?>
	</SELECT>
	</TD>
</TR>
<TR>
	<TD>ประเภทสินค้า</TD>
	<TD>
	<SELECT name="txtCategoryID" id="txtCategoryID">
        <OPTION value="<?php echo $txtCategoryID;?>" selected="selected"><?php echo $txtCategoryName;?></OPTION>
        <OPTION value="0">--กรุณาเลือกรายการ--</OPTION>
        <?php
            while($row_cat=mysqli_fetch_array($result_cat)) {
        ?> 
            <OPTION value="<?php echo $row_cat['CategoryID'];?>"><?php echo $row_cat['CategoryName']; ?></OPTION>
        <?php
            }
        ?>
	</SELECT>
	</TD>
</TR>
<TR>
	<TD>หน่วยนับ</TD>
	<TD><INPUT name="txtUnit" type="text" value="<?php echo $txtUnit;?>"></TD>
</TR>
<TR>
	<TD>ราคา</TD>
	<TD><INPUT name="txtPrice" type="text" value="<?php echo $txtPrice;?>"></TD>
</TR>
<TR>
	<TD></TD>
	<TD><INPUT name="submit" id="submit" type="submit" value="บันทึก"> 
	<INPUT name="reset" id="reset" type="reset" value="รีเซต"> 
	</TD>
</TR>
</TABLE>
</FORM>
</BODY>
</HTML>