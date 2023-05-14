<?php 

include "config.php";

  if (isset($_POST['submit'])) {

    $temperatura = $_POST['temperatura'];

    $sql = "INSERT INTO `eblan`(`temperatura`) 

           VALUES ('$temperatura')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo "New record created successfully.";

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    }

    $conn->close();

  } 

?>
 
