<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Profile Page</title>

   

<body>
   
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/Navcss.css"

</head>
    <body>
    <header>
    
    
    
    </header>
   
        <center><img id="logo-main" src ="https://scontent-lga1-1.xx.fbcdn.net/hphotos-xfp1/v/t1.0-9/11752629_393133044210940_5735073096513004077_n.jpg?oh=95e5e29f408a73c7cecd26e10bb67d80&oe=56459C38"></img></center>
    
<body>
<div id="container">
        <?php
if(!isset($_SESSION['username']))
    { 
         ?>

        <form action="
                      authenticate.php" method="POST">
            Usernmae: <input type="text" name="username" placeholder="Enter Your Username"><br />
            password: <input type="password" name="password" placeholder="Enter Your Password"> <br />
            <input type="submit" value="Login">
        </form>
        <?php 
        if(isset($_GET["feedback"]))
            echo $_GET["feedback"];
    
}
?>
   
    <?php if(isset($_SESSION['username'])){ ?>
    {first Name} {Last Name's} Profile
<div id="wrapper">
   
<div id="profilePicture">
     Profile picture Here  
 </div>
<div id="aboutMe">
   
    About me Here
    
    </div>
    </div>
<div id="next">
    
    Age, etc....
    </div>
    <?php } ?>
 </div>
       
       
       
</body>
</html>