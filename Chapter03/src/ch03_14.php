<?php // ตัวอย่างโปรแกรมที่ 3.14 ตัวอย่างการใช้โครงสร้างวนรอบแบบ while()
    $rows = array(
        "ปากกา" => 15,
        "ดินสอ" => 10, 
        "สมุด" => 25,
        "ยางลบ" => 8,
        "ไม้บรรทัด" => 12);
    $i=1;
    echo "<TABLE border='1'>";
    echo "<TR><TH>รายการ</TH><TH>ราคา</TH></TR>";
    while(list($name, $price) = each($rows)){
    echo "<TR align='center'>";
    echo "<TD>".$name."</TD>";
    echo "<TD>".$price."</TD>";
    echo "</TR>";
    $i++;
    }
    echo "</TABLE>";
?>
