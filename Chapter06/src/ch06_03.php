<?php // ตัวอย่างโปรแกรมที่ 6.3 การล้างหรือทำลายเซสชันเพื่อสิ้นสุดการใช้งาน
    session_start();
    session_destroy(); // ลบค่าทั้งหมดของตัวแปร $_SESSION[] 
    echo "<B>Destroyed Session</B>";
?>