<?php

    require_once('../config/DBHelper.php');

    $MSSV = $_GET["MSSV"];

    // Câu truy vấn
    $sql = " DELETE FROM user WHERE MSSV = '$MSSV'";

    //
    $result = $conn->query($sql);
    if ($result == true) {  
                echo header("Location: student.php");
            } 
            $conn->close();



?>
