<?php
    require_once('../config/DBHelper.php');

    //Data
    $News_ID = $_POST["News_ID"];
    $News_Title = $_POST["News_Title"];
    $Publisher_News = $_POST["Publisher_News"];
    $Avatar = $_POST["Avatar"];
    $Img = $_POST["Img"];
    $Time = $_POST["News_Time"];

    // Câu truy vấn
    $sql = "INSERT INTO news VALUES ('$News_ID', '$News_Title', '$Publisher_News', '$Avatar', '$Img', '$Time')";

    //
    $result = $conn->query($sql);
    if ($result == true) {  
                echo header("Location: news.php");
            } 
            $conn->close();



?>
