<?php // ตัวอย่างโปรแกรมที่ 3.19 ตัวอย่างการใช้ฟังก์ชันที่ใช้งานกับข้อมูลแบบอาเรย์
    $score = array(7, 10, 12, 20, 5);
    print_r($score); echo "<BR><BR>";
    echo "MAX=".max($score)."<BR>";
    echo "MIN=".min($score)."<BR>";
    echo "COUNT=".count($score)."<BR>";
    echo "List: ";
    foreach ($score as $num)
    echo $num." ";
    echo "<BR>";
    sort($score);
    echo "Sort: ";
    foreach ($score as $num)
    echo $num." ";
?>
