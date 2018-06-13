<?php // ตัวอย่างโปรแกรมที่ 6.5 การตรวจสอบและตั้งรับค่าคุกกี้
    ob_start();
    if(!empty($_COOKIE['UserName'])) {
          $UserName = $_COOKIE['UserName'];
          $UserType = $_COOKIE['UserType'];
          echo "<B>Get Cookies</B><BR>";
          echo "User Name: ".$UserName."<BR>";
          echo "User Type: ".$UserType;
    } else {
          echo "<B>Cleared Cookies</B>";
    }
    ob_end_flush();
?>