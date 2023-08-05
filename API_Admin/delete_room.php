<?php

    require_once('../config/DBHelper.php');

    $Room_ID = $_GET["Room_ID"];

    // Câu truy vấn
    $sql = " DELETE FROM room WHERE room_ID = '$Room_ID'";

   // echo $sql;

    //
    $result = $conn->query($sql);
    if ($result == true) {  
                echo header("Location: room.php");
            } 
            $conn->close();



?>
