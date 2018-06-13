<?php // ตัวอย่างโปรแกรมที่ 3.12 ตัวอย่างการใช้โครงสร้างเงื่อนไขแบบสวิตซ์
    $page="news";
    switch($page) {
        case "main": include('main.php'); break;
        case "news": include('news.php'); break;
        case "contact": include('contact.php'); break;
        case "about": include('about.php'); break;
        default:  include('main.php');
    }
?>