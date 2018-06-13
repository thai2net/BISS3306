<?php // ตัวอย่างโปรแกรมที่ 7.15 การโหลดเอกสารเอ็กซ์เอ็มแอลด้วยภาษาพีเอชพี
    $doc = new DOMDocument(); // สร้างออบเจ็คจากเม็ดธอด DOMDocument()
    $doc->preserveWhiteSpace = false; // กำหนดให้ไม่นับค่าว่าง
    $doc->load('ch07_13.xml'); // โหลดไฟล์เอกสารเอ็กซ์เอ็มแอลกำหนดค่าให้ออบเจ็ค // note.xml
    $node = $doc->firstChild; // กำหนดตัวแปรอ้างอิงตำแหน่งไปยังแท็กแรก
    echo $node->nodeName."<BR>";
    echo $node->childNodes->item(0)->nodeName.": ".
         $node->childNodes->item(0)->nodeValue."<BR>"; 
    echo $node->childNodes->item(1)->nodeName.": ".
         $node->childNodes->item(1)->nodeValue."<BR>"; 
    echo $node->childNodes->item(2)->nodeName.": ".
         $node->childNodes->item(2)->nodeValue."<BR>"; 
    echo $node->childNodes->item(3)->nodeName.": ".
         $node->childNodes->item(3)->nodeValue."<BR>"; 
?>