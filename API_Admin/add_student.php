<?php
    require_once('../config/DBHelper.php');

    //Data
    $MSSV = $_POST["MSSV"];
    $Name = $_POST["Name"];
    $Email = $_POST["Email"];
    $Contact_Phone = $_POST["Contact_Phone"];
    $Pass = $_POST["Pass"];
    $Sex_ID = $_POST["Sex_ID"];
    $Date_of_birth = $_POST["Date_of_birth"];
    $Specialized_ID = $_POST["Specialized_ID"];
    $Classroom_ID = $_POST["Classroom_ID"];
    $Status_ID = $_POST["Status_ID"];

    // Câu truy vấn
    $sql = "INSERT INTO user VALUES ('$MSSV', '$Name', '$Email', '$Contact_Phone', '$Pass', '$Sex_ID', '$Date_of_birth', '$Specialized_ID', '$Classroom_ID', '$Status_ID')";

    //
    $result = $conn->query($sql);
    if ($result == true) {  
                echo header("Location: student.php");
            } 
            $conn->close();



?>
