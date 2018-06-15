<HTML>
<HEAD>
<TITLE>EDIT PRODUCT</TITLE>
<META charset="UTF-8">
</HEAD>
<BODY>
<FORM name='frmEditProduct' id='frmEditProduct' method='post' action='product_update.php'>
<H3>ฟอร์มแก้ไขรายการสินค้า</H3>
<TABLE>
<TR>
	<TD>ชื่อสินค้า</TD>
	<TD><INPUT name="txtProductName" type="text" size="50" maxlength="150" value="ปากกา"</TD>
</TR>
<TR>
	<TD>ผู้ผลิต</TD>
	<TD>
	<SELECT name="txtSupplierID" id="txtSupplierID">
	    <OPTION value="0" selected="selected">--กรุณาเลือกรายการ--</OPTION>
		<OPTION value="1">3M</OPTION>
	</SELECT>
	</TD>
</TR>
<TR>
	<TD>ประเภทสินค้า</TD>
	<TD>
	<SELECT name="txtCategoryID" id="txtCategoryID">
	    <OPTION value="0" selected="selected">--กรุณาเลือกรายการ--</OPTION>
		<OPTION value="1">เครื่องเขียน</OPTION>
	</SELECT>
	</TD>
</TR>
<TR>
	<TD>หน่วยนับ</TD>
	<TD><INPUT name="txtUnit" type="text" value="แท่ง"></TD>
</TR>
<TR>
	<TD>ราคา</TD>
	<TD><INPUT name="txtPrice" type="text" value="15"></TD>
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