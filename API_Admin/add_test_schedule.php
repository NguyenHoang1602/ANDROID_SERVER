<?php
    require_once('../config/DBHelper.php');

    //Data
    $Test_Schedule_ID = $_POST["test_schedule_ID"];
    $Date = $_POST["Date"];
    $Room = $_POST["Room_ID"];
    $Amphitheater = $_POST["Amphitheater_ID"];
    $Subject = $_POST["Subject_ID"];
    $Classroom = $_POST["Classroom_ID"];
    $Lecturers = $_POST["Lecturers"];
    $Slot = $_POST["Slot"];

    // Câu truy vấn
    $sql = "INSERT INTO schedule VALUES ('$Test_Schedule_ID', '$Date', '$Room', '$Amphitheater','$Subject','$Classroom','$Lecturers','$Slot')";

    //
    $result = $conn->query($sql);
    if ($result == true) {  
                echo header("Location: test_schedule.php");
            } 
            $conn->close();



?>
