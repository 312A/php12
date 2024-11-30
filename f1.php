<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    h1,p{
        color: blue;
    }
    body{
        background-color:black;
    }
    form{
        background-color:grey;
        /* border:1px solid blue; */
        border-radius:20px;
        color:white;
        width: 40%;
        margin:auto auto;
        box-shadow:2px 2px 6px;
        padding:15px;
    }
    input{
        display:block;
        width: 50%;
        margin:auto;
    }
</style>
<body>
    <?php
        $Nameerr=$Emailerr=$Phoneerr=$Passworderr=$CPassworderr="";
        if($_SERVER['REQUEST_METHOD']=="POST")
        {
            //Name Validation
            if(empty($_POST['Name']))
            {
                $Nameerr="Name cannot be empty";
            }
            else{
                $name=input_data($_POST["Name"]);
                {
                    if(!preg_match('/^[a-zA-Z0-9._-]{6}$/',$name))
                    {
                        $Nameerr ="name format should be matched";
                    }
                }
            }
            if(empty($_POST["Email"]))
            {
                $Emailerr="Email cannot be empty";
            }   
            else{
                $email=input_data($_POST["Email"]);

                if(!preg_match('/^[a-zA-Z0-9._-]{9}\@gmail]\.com/',$email))
                {
                        $Emailerr = "Email format should be matched";
                }
            }
            // if(empty($_POST["Phone"]))
            // {
            //     $Phoneerr = "Phone can't be empty";
            // }
            // else{
            //     $phone=input_data($_POST["Phone"]);
            //     if(!preg_match('/^[0-9]{8}/',$phone))
            //     {
            //         $Phoneerr = "Phone format should be matched";
            //     }
            // }
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
            if(empty($_POST['Pass']))
            {
                $Passworderr = "Password can't be empty";
            }  
            else{
                $password = input_data($_POST["Pass"]);
                if(!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$
                /',$password))
                {
                    $Passworderr = "Password format should be matched";

                }
            }
        }
        
        function input_data($data)
        {
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
        <h1>Registration</h1>
        <p>*Required</p>
        Name: 
        <input type="text" name="Name" id="" placeholder="Bibek">
        <p>*<?php echo $Nameerr?></p>
        Email:
        <input type="text" name="Email" id="" placeholder="bibek123@gmail.com">
        <p>*<?php echo $Emailerr?></p>
        PhoneNumber:
        <input type="number" name="Phone" id="" placeholder="012-345-678">
        <p>*<?php echo $Phoneerr?></p>
        Password:
        <input type="Password" name="Pass" placeholder="Enter your Password">
        <p>*<?php echo $Passworderr?></p>
        Confirm Password:
        <input type="Password" name="CPass" placeholder="Confirm your Password">
        <p><?php echo $CPassworderr?></p>
        <input type="submit" name="Submit" value="Submit">
    </form>
</body>
</html>
