<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation Using Php</title>
</head>
<style>
    body{
        background-color: black;
    }
    form{
        padding:20px;
        box-shadow:20px 10px 2px;
        color:white;
        width: 40%;
        margin:auto;
        background-color:black;

    }
    h4,p{
        color:red;
    }
</style>
<body>
<?php
        $Nameerr=$Emailerr=$Phoneerr=$Passworderr=$CPassworderr="";
        if($_SERVER['REQUEST_METHOD'] =="POST")
        {
            if(empty($_POST['Name']))
            {
                $Nameerr = "Name can't be empty";
            }  
            else{
                $name = input_data($_POST["Name"]);
                if(!preg_match('/^[a-zA-Z]{5}$/',$name))
                {
                    $Nameerr = "Name format should be matched";
                }
            }
            if(empty($_POST['Email']))
            {
                $Emailerr = "Email can't be empty";
            }  
            else{
                $email = input_data($_POST["Email"]);
                if(!preg_match('/^[a-zA-Z0-9._-]{5}\@gmail\.com/',$email))
                {
                    $Emailerr = "Email format should be matched";
                }
            }  
            if(empty($_POST['Phone']))
            {
                $Phoneerr = "Number can't be empty";
            }  
            else{
                $phone = input_data($_POST["Phone"]);
                if(!preg_match('/^[0-9]{10}/',$phone))
                {
                    $Phoneerr = "Number format should be matched";
                }
            }   
                  
        }
        function input_data($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data  = htmlspecialchars($data);
            return $data;
        }
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
        <h4>Registration</h4>
        <p>*Required</p>
        Name:
        <input type="text" name="Name" id="" placeholder="bibek">
        <p><?php echo $Nameerr?></p>
        <br>
        Email:
        <input type="text" name="Email" id="" placeholder="bibek234@gmail.com">
        <p><?php echo $Emailerr?></p>
        <br>
        Phone:
        <input type="number" name="Phone" id="" placeholder="012-345-678">
        <p><?php echo $Phoneerr?></p>
        <br>
        Password:
        <input type="password" name="Pass"  placeholder="Password">
        <p><?php echo $Passworderr?></p>
        <br>
        Confirm Password:
        <input type="password" name="CPass"  placeholder="Confirm Password">
        <p><?php echo $CPassworderr?></p>
        <br>
        <input type="submit" name="submit" >
    </form>
    
</body>
</html>