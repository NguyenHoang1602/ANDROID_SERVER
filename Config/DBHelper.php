<?php
        $conn = new mysqli ('localhost', 'root', '', 'mfpt_database');

        if($conn->connect_error) {
            echo("Connect fail : "+ $conn->connect_error);
        }

        // echo("Connect Succesfully !")
?>