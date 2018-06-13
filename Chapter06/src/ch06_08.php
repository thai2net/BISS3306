<?php // ตัวอย่างโปรแกรมที่ 6.8 การอ่านไฟล์ทีละบรรทัด
   $myfile = fopen("userlog.txt", "r") or die("Unable to open file!");
   while(!feof($myfile)) {
       echo fgets($myfile)."<br>";
   }
   fclose($myfile);
?>