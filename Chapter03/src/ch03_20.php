<?php // ตัวอย่างโปรแกรมที่ 3.20 ตัวอย่างการเขียนฟังก์ชันใช้งาน
    function getName() { // ฟังก์ชันอ่านชื่อ
    return "Steve Rogers";
    }
    function printlnName($name) { // ฟังก์ชันรับค่าชื่อมาพิมพ์ค่า
    print("$name<BR>");
    }
    function getArea($width, $height) { // ฟังก์ชันคำนวนพื้นที่สี่เหลี่ยม
    return $width * $height;
    }
    function getNFactorial($n) { // ฟังก์ชันคำนวนค่าแฟ็กโทเรียลแบบรีเคอร์ซีพ
        $result = 1;
            for ($i = 1; $i <= $n; $i++) {
            $result *= $i;
            }
        return $result;
    }
    // ตัวอย่างการเรียกใช้งานฟังก์ชัน
    $name=getName();
    printlnName($name);
    echo getArea(10, 5)."<BR>";
    echo getNFactorial(5);
  ?>