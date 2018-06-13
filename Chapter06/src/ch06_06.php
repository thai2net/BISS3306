<?php // ตัวอย่างโปรแกรมที่ 6.6 การล้างค่าตัวแปรคุกกี้
    ob_start();
    setcookie("UserName");
    setcookie("UserType");
    echo "<B>Cleared Cookies</B>";
    ob_end_flush();
?>