<?php // ตัวอย่างโปรแกรมที่ 7.16 การโหลดเอกสารเอ็กซ์เอ็มแอลในรูปอาร์เอสเอสด้วยภาษาพีเอชพี
    $url_feed = 'http://www.manager.co.th/RSS/Home/Breakingnews.xml';
    $parsed_xml = simplexml_load_file($url_feed);
    $total=count($parsed_xml->channel->item);
    $perPage = 5;
    $num_naviPage=ceil($total/$perPage);
    if(!isset($_GET['page'])) {
        $s_key=0;
        $e_key=$perPage;    
        $_GET['page']=1;
    } else {
        $s_key=($_GET['page']*$perPage)-$perPage;
        $e_key=$perPage*$_GET['page'];
        $e_key=($e_key>$total)?$total:$e_key;
    }
    for($i=1; $i<=$num_naviPage; $i++) {
    if ($i==1) {
            echo "<a href=?page=".$i.">หน้า $i</a>"; 
    } else {
            echo "  || <a href=?page=".$i.">หน้า $i</a>";
    }
    }
    echo "<HR>";
    for($i=$s_key; $i<$e_key; $i++) {
    echo "<STRONG>หัวข้อข่าว:</STRONG> ".$parsed_xml->channel->item[$i]->title;
    echo " (".$parsed_xml->channel->item[$i]->pubDate.")<BR>";
        echo "<STRONG>รายละเอียด:</STRONG> ".$parsed_xml->channel->item[$i]->description;
        $link_news=$parsed_xml->channel->item[$i]->link;
        echo "..../<A href='$link_news' target='_blank'>อ่านเพิ่มเติม</A><BR><HR>";
    }
    echo "หน้าที่: ".$_GET['page']."/$num_naviPage";
?>
<!--ที่มา: ปรับจาก https://www.ninenik.com/ (ออนไลน์. มีนาคม 2561)-->