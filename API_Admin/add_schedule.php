<?php
    require_once('../config/DBHelper.php');

    //Data
    $Schedule_ID = $_POST["schedule_ID"];
    $Date = $_POST["Date"];
    $Room = $_POST["Room_ID"];
    $Amphitheater = $_POST["Amphitheater_ID"];
    $Subject = $_POST["Subject_ID"];
    $Classroom = $_POST["Classroom_ID"];
    $Lecturers = $_POST["Lecturers"];
    $Slot = $_POST["Slot"];

    // Câu truy vấn
    $sql = "INSERT INTO schedule VALUES ('$Schedule_ID', '$Date', '$Room', '$Amphitheater','$Subject','$Classroom','$Lecturers','$Slot')";

    //
    $result = $conn->query($sql);
    if ($result == true) {  
                echo header("Location: schedule.php");
            } 
            $conn->close();



?>
