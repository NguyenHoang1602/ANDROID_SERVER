<?php

    require_once('../config/DBHelper.php');

    $News_ID = $_GET["News_ID"];

    // Câu truy vấn
    $sql = " DELETE FROM news WHERE News_ID = '$News_ID'";

    //
    $result = $conn->query($sql);
    if ($result == true) {  
                echo header("Location: news.php");
            } 
            $conn->close();



?>
