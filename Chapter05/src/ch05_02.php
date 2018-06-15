<?php // ตัวอย่างโปรแกรมที่ 5.2 ตัวอย่างการตั้งรับค่าตัวแปร $_POST[] 
    include "connection.php";
    $txtUser=$_POST['txtUser']; // การตั้งค่ารับตัวแปรแบบ POST
    $txtPassword=$_POST['txtPassword']; // การตั้งค่ารับตัวแปรแบบ POST
    $sql="SELECT Name FROM users 
            WHERE User = '$txtUser' AND Password = '$txtPassword';"; // การนำไปใช้งานในคำสั่ง SQL
    $result=mysqli_query($conn, $sql); 
    mysqli_close($conn);
    if(mysqli_num_rows($result) >= 1) {
        $row=mysqli_fetch_array($result);
        echo "ยินดีต้อนรับ คุณ ".$row['Name']." เข้าสู่ระบบ";
     } else {
        echo "พบข้อผิดพลาด ไม่พบชื่อผู้ใช้ หรือ รหัสผ่านไม่ถูกต้อง";
     }
 ?>