<?php // ตัวอย่างโปรแกรมที่ 6.11 การเขียนไฟล์ทีละบรรทัด
   $myfile = fopen("last_userlog.txt", "w") or die("Unable to open file!");
   $username = "Surachart"; 
   $action = "DELETE";
   $date = date_format(date_create(), 'Y-m-d H:i:s');
   $txt = $username.", ".$action.", ".$date."\n";
   fputs($myfile, $txt);
   fclose($myfile);
   echo "write \"$txt\" to last_userlog.txt";
?>