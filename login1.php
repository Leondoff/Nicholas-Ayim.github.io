<?php

session_start();
include("db.php");
include("functions.php");


if($_SERVER['REQUEST_METHOD']="POST")
{
    //$FIRSTNAME = $_POST['fname'];
    //$LASTNAME = $_POST['lname'];
    //$GENDER = $_POST['gender'];
    $EMAILADDRESS = $_POST['mail'];
    //$ADDRESS = $_POST['add'];
    $PASSWORD = $_POST['password'];

    
    if((!empty($EMAILADDRESS) && !empty($PASSWORD) && !is_numeric($EMAILADDRESS)))
    {
        //read from database
        $query = "select * from form where EMAILDDRESS = '$EMAILADDRESS' limit 1";

        $result = mysqli_query($con,$query);

        if($result)
        {
              if(($result) && mysqli_num_rows($result) > 0)
           {

            $user_data = mysqli_fetch_assoc($result);
            
            if($user_data['password'] === $PASSWORD)
            {
                $_SESSION['user_id'] = $user_data['user_id'];
                

                
            }
           }

        }
       

        echo "WRONG PASSWORD OR USERNAME";

       
        //echo "<script type='text/javascript'> alert('successfully register')</script>";  
    }
    else{
        echo"PLEASE ENTER SOME VALID INFORMATION";
    }
}

?>


<!DOCTYPE html>
<html>
    <head>
        <title> FORMS_FILLING</title>
        
        <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

        </head>
    <style>
        body{
            background-color:cyan;
            width:100%;
            height:100vh;
            font-family:sans-serif;
            
        }
        #box{
            box-shadow:10px 10px 5px 10px lightblue;
            width:360px;
            height:800px;
            margin:auto;
            background:white;
            

        }
        h1{
            text-shadow: 2px 2px 4px black;
            text-align:center;
            color:blue;
        }
        form{
            width:300px;
            margin-left: 20px;
        }

        form label{
            display:flex;
            font_size:18px;
            padding:10px;
        }

        #text{
            width:100%;
            padding: 7px;
            border:solid thin black;
            border-radius:10px;
            outline: none;
            
        }
        #button
        {
            width:320px;
            padding:10px;
            margin:2px;
            border:none;
            font-size:20px;
            cursor:pointer;
        }
        #button:hover
        {
            background:blue;
            opacity:7px;
        }
        p{
            text-align:center;
            font-size:18px;
        }
       div a{
        text-decoration:none;
       }
</style>
<body>

<div  id=box>
    <h1> LOG IN</h1>


    <form method="POST">

    <label>EMAIL ADDRESS</label>
    <input id="text" name="mail" placeholder="NAYY" required>
    <br>
    </br>

    <label>PASSWORD</label>
        <input id="text" type="password" name="password"  required>  
        <br></br>
        <span>
        <a href="HOMEPAGE.php"><input id="button" type="submit" value="LOGIN" required></a>

        <br>
        </br>

        <p>Don't have an account yet? Worry less!!
            <a href="signup1.php">Click_Here</a> to sign UP
        </p>
     </form>
     

</div>
</body>

</html>





