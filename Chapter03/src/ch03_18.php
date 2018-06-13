<?php // ตัวอย่างโปรแกรมที่ 3.18 ตัวอย่างการใช้งานฟังก์ชันในแสดงผลลัพธ์
    $totalPrice = 25040.7526;
    print("ราคารวม $totalPrice บาท <BR>");
    printf("ราคารวม %.2f บาท <BR>", $totalPrice);
    echo "ราคารวม ".number_format($totalPrice,2, '.', ',')." บาท <BR>";
?>
