<?php // ตัวอย่างโปรแกรมที่ 6.2 การรับค่าตัวแปรเซสชันผู้ใช้งานระบบ
    session_start();
    if(!empty($_SESSION['UserName'])) {
          $UserName = $_SESSION['UserName'];
          $UserType = $_SESSION['UserType'];
          echo "<B>Get Session</B><BR>";
          echo "User Name: ".$UserName."<BR>";
          echo "User Type: ".$UserType;
    } else {
          echo "<B>Closed Session</B>";
    }
?>