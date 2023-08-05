<?php

    require_once('../config/DBHelper.php');

    $Student_ID = $_POST["Student_ID"];
    $Name_ID = $_POST["Name_ID"];
    $Email = $_POST["Email"];
    $Contact_Number = $_POST["Contact_Number"];
    $Pass = $_POST["Pass"];
    $Sex_ID = $_POST["Sex_ID"];
    $Date_of_birth = $_POST["Date_of_birth"];
    $Specialized_ID = $_POST["Specialized_ID"];
    $Classroom_ID = $_POST["Classroom_ID"];
    $Status_ID = $_POST["Status_ID"];

    // Câu truy vấn
    $sql = " UPDATE schedule SET Name_ID = '$Name_ID', Email = '$Email', Contact_Number = '$Contact_Number', Pass = '$Pass', Sex_ID = '$Sex_ID', Date_of_birth = '$Date_of_birth', Specialized_ID = '$Specialized_ID', Classroom_ID = '$Classroom_ID', Status_ID = '$Status_ID'
             WHERE Student_ID = '$Student_ID' ";

   // echo $sql;

    //
    $result = $conn->query($sql);
    if ($result == true) {  
                echo header("Location: student.php");
            } 
            $conn->close();



?>
