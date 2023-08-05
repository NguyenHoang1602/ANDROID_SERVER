<?php

    require_once('../config/DBHelper.php');

    $Notification_ID = $_POST["Notification_ID"];
    $Publishers = $_POST["Publishers"];
    $C_Notification = $_POST["C_Notification"];
    $Title = $_POST["Title"];
    $Details = $_POST["Details"];
    $Time = $_POST["Time"];

    // Câu truy vấn
    $sql = " UPDATE notification SET Publisher = '$Publishers', C_Notification = '$C_Notification', Title = '$Title', Details = '$Details', Time = '$Time'
             WHERE Notification_ID = '$Notification_ID' ";

   // echo $sql;

    //
    $result = $conn->query($sql);
    if ($result == true) {  
                echo header("Location: notification.php");
            } 
            $conn->close();



?>
