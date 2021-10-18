<?php
   
    $con = mysqli_connect("localhost","root","","foodsystem");
    if (mysqli_connect_errno()){
        echo "Failed to connect to Food System Server: " . mysqli_connect_error();
    }
?>
