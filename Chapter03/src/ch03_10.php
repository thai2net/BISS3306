<?php // ตัวอย่างโปรแกรมที่ 3.10 ตัวอย่างการใช้โครงสร้างเงื่อนไขแบบสองทางเลือก
    $RATE = 40000;
    $salary = 45000;
    if($salary<$RATE) {
        echo $salary." < ".$RATE."<BR>";
    } else {
        echo $salary." >= ".$RATE."<BR>";
    }
?>
