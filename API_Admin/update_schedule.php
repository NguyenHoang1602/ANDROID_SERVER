<?php

    require_once('../config/DBHelper.php');

    $Schedule_ID = $_POST["schedule_ID"];
    $Date = $_POST["Date"];
    $Room = $_POST["Room_ID"];
    $Amphitheater = $_POST["Amphitheater_ID"];
    $Subject = $_POST["Subject_ID"];
    $Classroom = $_POST["Classroom_ID"];
    $Lecturers_ID = $_POST["Lecturers_ID"];
    $Slot_ID = $_POST["Slot_ID"];

    // Câu truy vấn
    $sql = " UPDATE schedule SET Date = '$Date', Room_ID = '$Room', Amphitheater_ID = '$Amphitheater', Subject_ID = '$Subject', Classroom_ID = '$Classroom', Lecturers_ID = '$Lecturers_ID', Slot_ID = '$Slot_ID'
             WHERE schedule_ID = '$Schedule_ID' ";

   // echo $sql;

    //
    $result = $conn->query($sql);
    if ($result == true) {  
                echo header("Location: schedule.php");
            } 
            $conn->close();



?>
