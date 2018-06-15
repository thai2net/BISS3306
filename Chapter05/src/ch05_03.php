<?php // ตัวอย่างโปรแกรมที่ 5.3 ตัวอย่างการตั้งรับค่าตัวแปร $_FILES[] 
    if(!empty($_FILES['txtFile'])) {
          $fileName = $_FILES['txtFile']['name'];
          $fileType = $_FILES['txtFile']['type'];
          $fileTempName = $_FILES['txtFile']['tmp_name'];
          $fileError = $_FILES['txtFile']['error'];
          $fileSize = $_FILES['txtFile']['size'];
    }
    echo "File Name: ".$fileName."<BR>";
    echo "File Type: ".$fileType."<BR>";
    echo "File Temp Name: ".$fileTempName."<BR>";
    echo "File Error: ".$fileError."<BR>";
    echo "File Size: ".$fileSize;
    copy($_FILES['txtFile']['tmp_name'], "NewName".".pdf");
?>