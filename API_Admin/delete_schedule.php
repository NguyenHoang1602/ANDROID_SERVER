<?php

    require_once('../config/DBHelper.php');

    $Schedule_ID = $_GET["schedule_ID"];

    // Câu truy vấn
    $sql = " DELETE FROM schedule WHERE schedule_ID = '$Schedule_ID'";

   // echo $sql;

    //
    $result = $conn->query($sql);
    if ($result == true) {  
                echo header("Location: schedule.php");
            } 
            $conn->close();



?>
