<?php
    $servername = "localhost";
    $username = "root";
    $password= '' ;
    $database ="crud";
    $conn = mysqli_connect($servername,$username,$password,$database);
    if(!$conn){
        die('Connection failed'.mysqli_error($conn));
    }
    // else{
    //     echo "Connection OKk . THik ca hai";
    // }
?>