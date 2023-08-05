<?php

    require_once('../config/DBHelper.php');

    $News_ID = $_POST["News_ID"];
    $News_Title = $_POST["News_Title"];
    $Publisher_News = $_POST["Publisher_News"];
    $Avatar = $_POST["Avatar"];
    $Img = $_POST["Img"];
    $Time = $_POST["Time"];

    // Câu truy vấn
    $sql = " UPDATE room SET News_Title = '$News_Title', Publisher_News = '$Publisher_News', Avatar = '$Avatar', Img = '$Img', Time = '$Time'
             WHERE News_ID = '$News_ID' ";

   // echo $sql;

    //
    $result = $conn->query($sql);
    if ($result == true) {  
                echo header("Location: news.php");
            } 
            $conn->close();
?>
