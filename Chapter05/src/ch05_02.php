<?php // ตัวอย่างโปรแกรมที่ 5.2 ตัวอย่างการตั้งรับค่าตัวแปร $_POST[] 
    include "connection.php";
    $txtUser=$_POST['txtUser']; // การตั้งค่ารับตัวแปรแบบ POST
    $txtPassword=$_POST['txtPassword']; // การตั้งค่ารับตัวแปรแบบ POST
    $sql="SELECT user, name FROM users // การนำไปใช้งานในคำสั่ง SQL
            WHERE user = '$txtUser' AND password = '$txtPassword';"; 
    $result=mysqli_query($conn, $sql); 
    mysqli_close($conn);
    if(mysqli_num_rows($result) >= 1){
        echo "<META http-equiv='refresh' content='0; url=main.php'>";
     } else {
        echo "<META http-equiv='refresh' content='0; url=error.php'>";}
     }
 ?> 