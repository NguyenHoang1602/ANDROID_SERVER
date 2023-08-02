<?php 
    require_once('../config/DBHelper.php');
    //localhost/MYFPOLY_DATABASE/API/GetNofiticationaction.php 
    $sql = "SELECT * FROM `notification` WHERE C_NotificatonID = 2";
    $result = $conn->query($sql);
    $data = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
    $conn->close();
    echo json_encode($data);
?>
