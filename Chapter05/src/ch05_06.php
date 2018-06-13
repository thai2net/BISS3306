<?php // ตัวอย่างโปรแกรมที่ 5.6 การอัพโหลดภาพด้วยตัวแปรส่งค่า $_FILES[] // /form/product_photo_up.php
include "connection.php";
$txtProductID=$_POST['txtProductID'];
if(!empty($_FILES['txtPhoto'])){
  if (($_FILES['txtPhoto']['type'] == "image/jpeg" || 
     $_FILES['txtPhoto']['type'] == "image/jpg") && 
     ($_FILES['txtPhoto']['size'] < 5242880) && 
     ($_FILES['txtPhoto']['error'] <= 0)){
    echo "File Name: " . $_FILES["txtPhoto"]["name"] . "<br>";
    echo "Type: " . $_FILES["txtPhoto"]["type"] . "<br>";
    echo "Size: " . ($_FILES["txtPhoto"]["size"] / 1024) . " Kb<br>";
    echo "Temp Name: " . $_FILES["txtPhoto"]["tmp_name"] . "<br>";   
    $sql="INSERT INTO ProductPhotos 
           (PhotoID, ProductID, OriginalPhoto, MiniPhoto, TimeStamp)
           VALUES (NULL,  '$txtProductID', NULL, NULL, NULL);";
    mysqli_query($conn, $sql);
    $sql="SELECT PhotoID FROM ProductPhotos 
           ORDER BY PhotoID DESC LIMIT 0, 1;";
    $output=mysqli_query($conn, $sql);
    while($result = mysqli_fetch_array($output)){
       $txtPhotoID=$result['PhotoID'];
    } 
    $copy_images="photo_".$txtProductID."_".$txtPhotoID.".jpg"; // ชื่อภาพแรก
    $new_images = "mini_photo_".$txtProductID."_".$txtPhotoID.".jpg"; // ชื่อภาพ 2
    copy($_FILES['txtPhoto']['tmp_name'],"product_photos/".$copy_images);
    $width=100; // ตั้งขนาดภาพที่ 2 ให้กว้าง 100 pixel
    $images = $_FILES['txtPhoto']['tmp_name'];
    $images_orig = ImageCreateFromJPEG($images); // สร้างภาพจากต้นฉบับ
    $size=GetimageSize($images); // อ่านขนาดไฟล์จากต้นฉบับ
    $height=round($width*$size[1]/$size[0]); // คำนวนขนาดความสูงภาพ 2
    $photoX = ImagesX($images_orig); // อ่านค่าภาพในแนว X
    $photoY = ImagesY($images_orig); // อ่านค่าภาพในแนว Y
    $images_fin = ImageCreateTrueColor($width, $height); // สร้างภาพ TrueColor
    ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, // คัดลอกแบบ
                                 $width+1, $height+1, $photoX, $photoY); // ปรับขนาด
    ImageJPEG($images_fin,"product_photos/".$new_images); // บันทึกรูป JPEG
    ImageDestroy($images_orig);  // ลบไฟล์ภาพ—สร้างมาใช้ชั่วคราว
    ImageDestroy($images_fin);   // ลบไฟล์—สร้างมาใช้ชั่วคราว
    echo "Stored original photo in: "."../product_photos/".$copy_images.
            " and resize in: "."../product_photos/".$new_images;
    $sql="UPDATE ProductPhotos SET OriginalPhoto = '$copy_images',
            MiniPhoto = '$new_images', WHERE PhotoID = '$txtPhotoID';";
    mysqli_query($conn, $sql);
    echo "<meta http-equiv=refresh content='0;url=products.php'>";
   } else {
       echo "<font color='#FF0000'><br>Can not upload image<br></font>";
   }
}
?>