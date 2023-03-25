<?php

session_start();
//$_SESSION;
include("functions.php");
include("db.php");
$user_data = check_login($con);





  
?>

<!DOCTYPE html>
<html>

<head>
   <title>
    HOME
   </title>
   <link rel="stylesheet"  href="homepage.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">


   <div class="image_direction">
    <P>Hello Username.</P>
    <div class="user_icon">
    <p><img src="file:///C:/xampp/htdocs/form_making/userimage1.jpg" class="image_resizer"></p>
    </div>
</div>
  </head>
  <h1>
    WELCOME TO OPEN_BOOKKEY
  </h1>
  
  <br>
  
   <body>
    <div class="items">

      <a href="#ABOUT" class="active">ABOUT</a>
      <a href="#CONTACTS">CONTACTS</a>
      <a href="#CATEGORIES">CATEGORIES</a>
      <a href="homepage2.html"><i class="fa fa-forward">NEXT</i></a>
      
      

      <div class="drop-down">
        <span href="#more"><i class="fa fa-bars"></i></span>
           <div class="drop-contents">
             <a href="#">LINK1</a>
             <br></br>
              <a href="#">LINK2</a>
              <br></br>
                <a href="logout.php">LOGOUT</a>
            </div>
           
      </div>
      <p class="socials">follow us @:
      <a href="#" class="socials"><i class="fa fa-whatsapp"></i></a>
      <a href="#" class="socials"><i class="fa fa-twitter"></i></a>
      <a href="#" class="socials"><i class="fa fa-facebook"></i></a>
    </p>
       
      
      

       <form action="https://google.com" method="get" class="search_box">
             <input id="text" name="search" type="text" placeholder="search what you want...">
                   
             <a href="#"><i class="fa fa-search" ></i></a>
             <a hrf="#"><i class="fa fa-microphone"></i></a>
                </input>
              
       </form>
  
    </div>
    <br></br>
    <br></br>
    <br></br>
    <br></br>
    <div class="big_container">
    
    <div class="popular_events_container">
       <p id="text1">MOST POPULAR EVENTS</p>

       <div class="pop_contents">
        <img src="file:///C:/xampp/htdocs/form_making/fun.jpg" style="width:100%">
        <div class="pop_name">
          <p>FLIGHTS</p>
        </div>
       </div>
       
        <div class="pop_contents">
          <img src="file:///C:/xampp/htdocs/form_making/fun.jpg" style="width:100%">
        <div class="pop_name">
          <p>TOURIST</p>
        </div>

      </div>

         <div class="pop_contents">
          <img src="file:///C:/xampp/htdocs/form_making/fun.jpg" style="width:100%">
        <div class="pop_name">
          <p>C</p>
        </div>
         </div>

       </div>
    
    <div class="popular_events_container">

      <p id="text2">RECOMMENDATIONS</p>

      
      <div class="pop_contents">
        <img src="file:///C:/xampp/htdocs/form_making/flight.jpg" style="width:100%">
        <div class="pop_name">
          <p>D</p>
        </div>
      </div>
      
       <div class="pop_contents">
        <img src="file:///C:/xampp/htdocs/form_making/flight.jpg" style="width:100%">
        <div class="pop_name">
          <p>E</p>
        </div>
        </div>

        <div class="pop_contents">
          <img src="file:///C:/xampp/htdocs/form_making/flight.jpg" style="width:100%">
        <div class="pop_name">
          <p>F</p>
        </div>
        </div>


  </div>

    

   </body>


</html>