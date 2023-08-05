<?php
    require_once('../config/DBHelper.php');

    //Data
    $Room_ID = $_POST["Room_ID"];
    $Room_Name = $_POST["Room_Name"];

    // Câu truy vấn
    $sql = "INSERT INTO room VALUES ('$Room_ID', '$Room_Name')";

    //
    $result = $conn->query($sql);
    if ($result == true) {  
                echo header("Location: room.php");
            } 
            $conn->close();



?>
