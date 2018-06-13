<?php // ตัวอย่างโปรแกรมที่ 6.4 การสร้างคุกกี้ขึ้นมาใช้งาน
   ob_start();
   $txtName = "Surachart Boachum";
   $txtType = "Administrator";
   setcookie("UserName", $txtName, time()+3600);
   setcookie("UserType", $txtType, time()+3600);
   echo "<B>Set Cookies</B><BR>"; 
   echo "UserName: ".$_COOKIE['UserName']."<BR>";
   echo "UserType: ".$_COOKIE['UserType'];
   ob_end_flush();
?>