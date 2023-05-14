<?php

    $servername = "localhost";

    $username = "root";

    $password = "1234567890";

    $dbname = "test";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error) {

        die("Connection Failed" . $conn->connect_error);

    }

    //echo "Connected successfully\n";


?>
