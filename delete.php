<?php   
    include('connection.php');
    $rollno = $_GET['rn'];
    $QUERY = "DELETE FROM db WHERE ROLLNO='$rollno' ";
    $result = mysqli_query($conn,$QUERY);
    if(!$result){
        die('Deletion failed'.mysqli_error($conn));
    }
    else{
        echo "Deleted Successfully
        <a href='view.php'>View List Again</a>
        "
        ;
    }
?>