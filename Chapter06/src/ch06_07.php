<?php // ตัวอย่างโปรแกรมที่ 6.7 การอ่านไฟล์โดยระบุตามขนาด
    $myfile = fopen("appname.txt", "r");
    echo fread($myfile, filesize("appname.txt"));
    fclose($myfile);
?>