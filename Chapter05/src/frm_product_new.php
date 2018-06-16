<HTML>
<HEAD>
<TITLE>NEW PRODUCT</TITLE>
<META charset="UTF-8">
<?php
    include "connection.php";
    $sql = "SELECT * FROM Suppliers;";
    $result_sup = mysqli_query($conn, $sql); // ประมวลผลคำสั่ง SQL
    $sql = "SELECT * FROM Categories;";
    $result_cat = mysqli_query($conn, $sql); // ประมวลผลคำสั่ง SQL
?>
</HEAD>
<BODY>
<FORM name='frmNewProduct' id='frmNewProduct' method='post' action='ch05_04.php'>
<H3>ฟอร์มเพิ่มรายการสินค้า</H3>
<TABLE>
<TR>
	<TD>ชื่อสินค้า</TD>
	<TD><INPUT name="txtProductName" type="text" size="50" maxlength="150"</TD>
</TR>
<TR>
	<TD>ผู้ผลิต</TD>
	<TD>
	<SELECT name="txtSupplierID" id="txtSupplierID">
        <OPTION value="0" selected="selected">--กรุณาเลือกรายการ--</OPTION>
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
	    <OPTION value="0" selected="selected">--กรุณาเลือกรายการ--</OPTION>
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
	<TD><INPUT name="txtUnit" type="text"></TD>
</TR>
<TR>
	<TD>ราคา</TD>
	<TD><INPUT name="txtPrice" type="text"></TD>
</TR>
<TR>
	<TD></TD>
	<TD><INPUT name="submit" id="submit" type="submit" value="เพิ่มสินค้า"> 
	</TD>
</TR>
</TABLE>
</FORM>
</BODY>
</HTML>