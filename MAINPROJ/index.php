<?php
session_start();
//connect to database
$db=mysqli_connect("localhost","root","","music");
if(isset($_POST['register_btn']))
{
    $username=mysql_real_escape_string($_POST['username']);
    $email=mysql_real_escape_string($_POST['email']);
      $album_name=mysql_real_escape_string($_POST['album_name']);
    $password=mysql_real_escape_string($_POST['password']);
    $password2=mysql_real_escape_string($_POST['password2']);  
  
     if($password==$password2)
     {           //Create User
            $password=md5($password); //hash password before storing for security purposes
            $sql="INSERT INTO artist(id,username,email,password) VALUES('','$username','$email','$password')";
            mysqli_query($db,$sql);  
            $_SESSION['message']="You are now logged in"; 
        
            $_SESSION['username']=$username;
            $_SESSION['album_name']=$album_name;
           
            header("location:adddet.php");  //redirect home page
    }
    else
    {
      $_SESSION['message']="The two password do not match";   
     }
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CrAzY TuNeS- Home</title>
        <link rel="stylesheet" type="text/css" href="stylesheet.css"/>
    </head>
    <body background= "bg.jpg">
        
    </body>
    <nav id="navigation">
                <ul id="nav">
                    <li><a href="artist.php">Artist</a></li>
                    <li><a class="p">CrAzY TuNeS</a></li>
                    <li><a href="user.php">Music</a></li>                  
                </ul>
        </nav>
    <div id="content_area">
        <h1><a class="v"> CrAzY TuNeS</a> </h1>
        <h1><a class="u">What is Music? Music is the ‘art of combining tones in a manner to please the ear’. </a></h1>
    </div>
     
             
                       
                                    <img src="images/mn.jpg" class="imgdown" />
                                     <img src="images/m1.jpg" class="imgdown2" />
                                      <img src="images/m2.jpg" class="imgdown" />
                                     <img src="images/m3.jpg" class="imgdown2" />
                                                                           
                                    
                                       
            
</html>
