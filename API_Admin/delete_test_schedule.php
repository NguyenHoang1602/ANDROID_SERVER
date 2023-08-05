<?php

    require_once('../config/DBHelper.php');

    $Test_Schedule_ID = $_GET["test_Shedule_ID"];

    // Câu truy vấn
    $sql = " DELETE FROM schedule WHERE test_shedule_ID = '$Test_Schedule_ID'";

   // echo $sql;

    //
    $result = $conn->query($sql);
    if ($result == true) {  
                echo header("Location: test_schedule.php");
            } 
            $conn->close();



?>
