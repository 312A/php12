<?php
    include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Into Database</title>
</head>
<body>
    <form action="" method="GET">
        Roll No<input type="text" name="rollno" value=""><br><br>
        Student Name <input type="text" name="studentname" id=""><br><br>
        Class <input type="text" name="class" id="" value=""><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        if(isset($_GET['submit']))
        {
            $rn = $_GET['rollno'];
            $sn = $_GET['studentname'];
            $cl = $_GET['class'];
            if($rn!="" && $sn!="" && $cl!="") 
            {
                $QUERY="INSERT INTO DB VALUES('$rn','$sn','$cl')";
                $result = mysqli_query($conn,$QUERY);
                if(!$result)
                {
                    die('Please fill all the fields'.mysqli_error($conn));
                }
            }
        }
    ?>
</body>
</html>