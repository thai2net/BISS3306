<HTML>
<HEAD>
<TITLE>SELECT TABLE</TITLE>
</HEAD>
<BODY>
<?php
    include "connection.php";
    $sql = "SELECT p.*, s.SupplierName, c.CategoryName 
        FROM ((Products p
        INNER JOIN Suppliers s ON p.SupplierID = s.SupplierID)
        INNER JOIN Categories c ON p.CategoryID = c.CategoryID);";
    $result = mysqli_query($conn, $sql); // ประมวลผลคำสั่ง SQL
    echo "<TABLE border='1' width='100%'>";
    echo "<TR>
				<TH>รหัส</TH>
				<TH>รายการ</TH>
				<TH>ผู้ผลิต</TH>
				<TH>ประเภท</TH>
				<TH>หน่วยนับ</TH>
                <TH>ราคา</TH>
                <TH>Action</TH>
			</TR>";
    while($row = mysqli_fetch_array($result)) { // เก็บผลลัพธ์ในตัวแปรอาเรย์
        echo "<TR align='center'>";
			echo "<TD>".$row['ProductID']."</TD>";
			echo "<TD>".$row['ProductName']."</TD>";
			echo "<TD>".$row['SupplierName']."</TD>";
			echo "<TD>".$row['CategoryName']."</TD>";
			echo "<TD>".$row['Unit']."</TD>";
            echo "<TD>".$row['Price']."</TD>";
            echo "<TD>[<A href=ch05_01.php?id=".$row['ProductID'].">ลบ</A>]</TD>";
        echo "</TR>";
    }
    echo "</TABLE>";
	mysqli_close($conn);
?>
</BODY>
</HTML>