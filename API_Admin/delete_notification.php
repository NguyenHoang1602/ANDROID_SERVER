<?php

    require_once('../config/DBHelper.php');

    $Notification_ID = $_GET["Notification_ID"];

    // Câu truy vấn
    $sql = " DELETE FROM room WHERE Notification_ID = '$Notification_ID'";

   // echo $sql;

    //
    $result = $conn->query($sql);
    if ($result == true) {  
                echo header("Location: notification.php");
            } 
            $conn->close();



?>
