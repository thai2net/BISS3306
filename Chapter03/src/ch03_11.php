<?php // ตัวอย่างโปรแกรมที่ 3.11 ตัวอย่างการใช้โครงสร้างเงื่อนไขแบบหลายทางเลือก
    $S = 200000;
    $M = 5000000;
    $L =10000000;
    $budget = 250000;
    if($budget >=$L) {
    echo "Large Project<BR>";
    } elseif($budget>=$M) {
    echo "Meduim Project<BR>";
    } elseif($budget>=$S) {
    echo "Small Project<BR>";
    } else {
    echo "Activity<BR>";
    }
?>
