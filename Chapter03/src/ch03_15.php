<?php // ตัวอย่างโปรแกรมที่ 3.15 ตัวอย่างการใช้โครงสร้างวนรอบแบบ do…while()
    $i=1;
    echo "<TABLE border='1'>";
    echo "<TR><TH>สุ่มรอบที่</TH><TH>ค่าที่สุ่มได้ (0-99)</TH></TR>";
    do{
        $ran = rand(0,99);
        echo "<TR align='center'>";
        echo "<TD>".$i."</TD>";
        echo "<TD>".$ran."</TD>";
        echo "</TR>";
        $i++;
    } while($ran%5 != 0);
?>