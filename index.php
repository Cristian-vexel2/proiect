<?php

include_once("config.php");

    $sql = "SELECT * FROM eblan";
    //$result = mysqli_query($conn, $sql);
    $result = $conn->query($sql);

    echo "Connected successfully";

    $date = array();
    while ($row = $result->fetch_assoc()) {
        $date[] = $row;
        //printf("|%s | %s | %s|\n", $row["temperatura"], $row["umiditate"], $row["timp"]);

    }
    echo json_encode($date);

    mysqli_close($conn);
?>
