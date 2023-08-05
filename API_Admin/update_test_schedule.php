<?php

    require_once('../config/DBHelper.php');

    $Test_Schedule_ID = $_POST["test_schedule_ID"];
    $Date = $_POST["Date"];
    $Room = $_POST["Room_ID"];
    $Amphitheater = $_POST["Amphitheater_ID"];
    $Subject = $_POST["Subject_ID"];
    $Classroom = $_POST["Classroom_ID"];
    $Lecturers = $_POST["Lecturers"];
    $Slot = $_POST["Slot"];

    // Câu truy vấn
    $sql = " UPDATE test_schedule SET Date = '$Date', Room_ID = '$Room', Amphitheater_ID = '$Amphitheater', Subject_ID = '$Subject', Classroom_ID = '$Classroom', Lecturers = '$Lecturers', Slot = '$Slot'
             WHERE test_schedule_ID = '$Test_Schedule_ID' ";
    //
    $result = $conn->query($sql);
    if ($result == true) {  
                echo header("Location: test_schedule.php");
            } 
            $conn->close();
?>
