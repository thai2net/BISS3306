<?php // ตัวอย่างโปรแกรมที่ 6.1 การเริ่มต้นเซสชันและการกำหนดค่าเซสชัน
   session_start();
   $_SESSION['UserName'] = "Surachart Boachum";
   $_SESSION["UserType"] = "Administrator";
   session_write_close();
   echo "<B>Started and Registered Session</B><BR>";
   echo "UserName: ".$_SESSION['UserName']."<BR>";
   echo "UserType: ".$_SESSION['UserType'];
?>