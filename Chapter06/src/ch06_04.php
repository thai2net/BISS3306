<?php // ตัวอย่างโปรแกรมที่ 6.4 การสร้างคุกกี้ขึ้นมาใช้งาน
   ob_start();
   $txtName = "Steve Rogers";
   $txtType = "Administrator";
   setcookie("UserName", $txtName, time()+3600);
   setcookie("UserType", $txtType, time()+3600);
   echo "<B>Set Cookies</B><BR>"; 
   echo "UserName: ".$txtName."<BR>";
   echo "UserType: ".$txtType;
   ob_end_flush();
?>