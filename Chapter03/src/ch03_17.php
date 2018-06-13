<?php // ตัวอย่างโปรแกรมที่ 3.17 ตัวอย่างการใช้โครงสร้างวนรอบแบบ foreach() กับอาเรย์สองมิติ
    $rows = array(
        "ปากกา" => 15,
        "ดินสอ" => 10, 
        "สมุด" => 25,
        "ยางลบ" => 8,
        "ไม้บรรทัด" => 12
    );
    echo "<TABLE border='1'>";
    echo "<TR><TH>รายการ</TH><TH>ราคา</TH></TR>";
    foreach($rows as $name => $price){
    echo "<TR align='center'>";
    echo "<TD>".$name."</TD>";
    echo "<TD>".$price."</TD>";
    echo "</TR>";
    }
    echo "</TABLE>";
?>
