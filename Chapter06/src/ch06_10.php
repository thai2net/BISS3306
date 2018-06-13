<?php // ตัวอย่างโปรแกรมที่ 6.10 การเขียนไฟล์ตามข้อความที่กำหนด
   $myfile = fopen("userlog.txt", "a+") or die("Unable to open file!");
   $username = "Surachart"; 
   $action = "DELETE";
   $date = date_format(date_create(), 'Y-m-d H:i:s');
   $txt = $username.", ".$action.", ".$date."\n";
   fwrite($myfile, $txt);
   fclose($myfile);
   echo "write \"$txt\" to userlog.txt";
?>