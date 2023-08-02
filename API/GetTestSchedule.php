<?php 
    require_once('../config/DBHelper.php');
    //localhost/MYFPOLY_DATABASE/API/GetTestSchedule.php
    $sql = "SELECT sh.*, sl.Time, r.room_Name, apt.amphitheater_Name, sb.Name, clr.classroom_Name FROM `test_schedule` sh, slot sl, room r, amphitheater apt, subject sb, classroom clr WHERE sh.Slot_ID = sl.Slot_ID AND sh.Room_ID = r.Room_ID AND sh.Amphitheater_ID = apt.Amphitheater_ID AND sh.Subject_ID = sb.Subject_ID AND sh.Classroom_ID = clr.Classroom_ID";
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
