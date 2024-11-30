<?php
    include('connection.php');
    error_reporting(0);
    echo $_GET['rn'];
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
        Roll No<input type="text" name="rollno" value="<?php echo $_GET['rn'];?>"><br><br>
        Student Name <input type="text" name="studentname" value="<?php echo $_GET['sn'];?>"><br><br>
        Class <input type="text" name="class" id="" value="<?php echo $_GET['cl'];?>"><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        if(isset($_GET['submit']))
        {
            $rollno = $_GET['rollno'];
            $sname = $_GET['studentname'];
            $class = $_GET['class'];
            if($rollno!="" && $sname!="" && $class!="") 
            {
                $QUERY="UPDATE DB SET NAME='$sname', CLASS='$class' WHERE ROLLNO ='$rollno'";
                $result = mysqli_query($conn,$QUERY);
                if(!$result)
                {
                    die('Please fill all the fields'.mysqli_error($conn));
                }
                else{
                    echo "Data updated Successfully
                        <a href='view.php'>See Updated List</a>
                    ";
                }
            }
        }
    ?>
</body>
</html>