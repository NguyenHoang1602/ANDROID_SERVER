<?php

    require_once('../config/DBHelper.php');

    $Room_ID = $_POST["Roon_ID"];
    $Roon_Name = $_POST["Roon_Name"];

    // Câu truy vấn
    $sql = " UPDATE room SET Room_Name = '$Room_Name'
             WHERE Room_ID = '$Room_ID' ";

   // echo $sql;

    //
    $result = $conn->query($sql);
    if ($result == true) {  
                echo header("Location: room.php");
            } 
            $conn->close();



?>
