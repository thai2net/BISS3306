<?php  // ตัวอย่างโปรแกรมที่ 5.7 การอัพโหลดไฟล์ด้วยตัวแปรส่งค่า $_FILES[]
  include "connection.php";
  $txtTitle=$_POST['txtTitle'];
  if(is_uploaded_file($_FILES['txtFile']['tmp_name'])){
    if($_FILES['txtFile']['size'] < 5242880 && $_FILES['txtFile']['error'] <= 0){
      $sql="INSERT INTO  UploadFiles (FileID, Title, FileName, TimeStamp)
              VALUES (NULL, '$txtTitle', NULL, CURRENT_TIMESTAMP);";
      mysqli_query($conn, $sql);
      $sql="SELECT FileID FROM UploadFiles ORDER BY FileID DESC LIMIT 0, 1;";
      $output=mysqli_query($conn, $sql);
      while($result = mysqli_fetch_array($output)){
          $txtFileID=$result['FileID'];
    }
    $typefile=strchr($_FILES['txtFile']['name'],".");
    $data = "file".$txtFileID.$typefile;  
    copy($_FILES['txtFile']['tmp_name'], "uploadfiles/$data");	
    echo "<br>Upload Filename: " . $_FILES['txtFile']['name']." to ".$data. "<br>";
    echo "Type: ".$_FILES['txtFile']['type'] . "<br>";
    echo "Size: ".($_FILES['txtFile']['size'] / 1024) . " Kb<br>";
    echo "Temp file: ".$_FILES['txtFile']['tmp_name'] . "<br>";
    $sql="UPDATE UploadFiles SET FileName = '$data' 
            WHERE FileID = '$txtFileID';"; 
    mysqli_query($conn, $sql);
    echo "Stored file in: "."../uploadfiles/".$data;
    echo "<br><font color='#00FF00'>อัพโหลดไฟล์สำเร็จ</font><br>";
    } else {
        echo "<br><font color='#FF0000'>ไม่สามารถอัพโหลดไฟล์ได้<br></font>";
    }
  }
?>