<?php

session_start();
include("db.php");
include("functions.php");


if($_SERVER['REQUEST_METHOD']="POST")
{
    $FIRSTNAME = $_POST['fname'];
    $LASTNAME = $_POST['lname'];
    $GENDER = $_POST['gender'];
    $EMAILADDRESS = $_POST['mail'];
    $ADDRESS = $_POST['add'];
    $PASSWORD = $_POST['password'];

    
    if((!empty($EMAILADDRESS) && !empty($PASSWORD) && !is_numeric($EMAILADDRESS)))
    {
        $user_id = random_num(20);
        $query ="insert into form (FIRSTNAME,LASTNAME,GENDER,EMAILADDRESS,ADDRESS,PASSWORD,user_id) values('$FIRSTNAME','$LASTNAME'
        ,'$GENDER','$EMAILADDRESS','$ADDRESS','$PASSWORD','$user_id')";

        
        mysqli_query($con,$query);
        echo "<script type='text/javascript'> alert('successfully register')</script>";
        header("location:login1.php");
        die;
       
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
            box-shadow:10px 10px 5px 20px lightblue;
            width:360px;
            height:800px;
            margin:auto;
            background:white;
            

        }
        h1{
            text-shadow: 2px 4px 4px yellow;
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
            font-size: 15px;

        }
        
       
       

</style>
<body>

<div class="signup" id="box">
    <h1> SIGN UP</h1>

    <form method="POST">

    <label>FIRST NAME</label>
        <input id="text" name="fname" placeholder="NAYY" required>
        <br></br>
    <label>LASTNAME</label>
        <input id="text" name="lname" placeholder="AYIM" required>
        <br></br>
    <label>GENDER</label>
        <input id="text" name="gender" placeholder="MALE" required>
        <br></br>
    <label>EMAIL ADDRESS</label>
        <input id="text" name="mail" placeholder="nicholas@gmail.com" required>
        <br></br>
    <label>ADDRESS</label>
        <input id="text" name="add" placeholder="TESHIE" required>
        <br></br>
    <label>PASSWORD</label>
        <input id="text" type="password" name="password"  required>
        <br></br>
        <input id="button" type="submit" value="SIGNUP" required>
        <br></br>

    <p>You already have an account?
        <a href="login1.php">click_HERE</a>
    </p>
     </form>
     
     <span>
       <p><input id="check_box" type="checkbox" name="agreed">By clicking the sign up button, you agree to our<br>
          <a href ="#">terms and conditions</a> &
            <a href="#">policy privacy</a>
              </p>
     </span>
     
     

</div>
</body>

</html>