<?php // ตัวอย่างโปรแกรมที่ 6.9 การอ่านไฟล์ทีละตัวอักษร
   $myfile = fopen("myname.txt", "r") or die("Unable to open file!");
   while(!feof($myfile)) {
       $ch=fgetc($myfile);
       if($ch!=' ') {
          echo $ch;
       } else {   
          echo "<BR>"; 
       }
   }
   fclose($myfile);
?>