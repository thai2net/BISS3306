<?php // ตัวอย่างโปรแกรมที่ 3.12 ตัวอย่างการใช้โครงสร้างเงื่อนไขแบบสวิตซ์
    $page="news";
    switch($page) {
        case "main": include('pages/main.php'); break;
        case "news": include('pages/news.php'); break;
        case "contact": include('pages/contact.php'); break;
        case "about": include('pages/about.php'); break;
        default:  include('pages/main.php');
    }
?>