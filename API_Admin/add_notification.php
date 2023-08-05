<?php
    require_once('../config/DBHelper.php');

    //Data
    $Notification_ID = $_POST["Notification_ID"];
    $Publishers = $_POST["Publishers"];
    $C_Notification = $_POST["C_Notification"];
    $Title = $_POST["Title"];
    $Details = $_POST["Details"];
    $Time = $_POST["Time"];

    // Câu truy vấn
    $sql = "INSERT INTO room VALUES ('$Notification_ID', '$Publishers', '$C_Notification', '$Title', '$Details' ,'$Time')";

    //
    $result = $conn->query($sql);
    if ($result == true) {  
                echo header("Location: notification.php");
            } 
            $conn->close();



?>
