<?php 
    require_once('../config/DBHelper.php');
    //localhost/MYFPOLY_DATABASE/API/GetUser.php 
    $sql = "SELECT user.*, sp.Specialized_Name, sex.Sex_Name, st.Status FROM `user` user, specialized sp, sex sex, status st WHERE user.Specialized_ID = sp.Specialized_ID AND user.Sex_ID = sex.Sex_ID AND user.Status_ID = st.Status_ID";
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
 