


<!DOCTYPE html>
<html>
<head>
    
<link rel="stylesheet" type="text/css" href="css/adminpanelcss.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/animate.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
    

</head>
<body>
        <!-- header logo -->

 <div class="header">
      
     <img src="images/static1.squarespace.png" class="wow slideInDown">
     
    
    </div>
   

<center><div class="sidenav">
    <h3 >Hello!</h3>
    
    <?php
    
     session_start();
    $name=$_SESSION["name"];
    $imgpath=$_SESSION["imgpath"];
    
  echo "<img src='".$imgpath."' height='80' width='80'; >"; ?>
  <a href="#about">Home</a>
  <a href="#services">Applied Students</a>
  <a href="appliedteacher.php">Applied Teachers</a>
  <a href="search.php">Search Students</a>
  <a href="newsfeed.php">Add Notice</a>
  <a href="login.php">Logout</a>
</div></center>

<div class="main">

    <?php
    
    echo "<h2>$name</h2>";
   
    ?>
    
    
  
</div>
    
    
    
    <!--footer-->
    <div class="footer">
      <div class="socialicon">
     <center>

      
      <i class="fa fa-twitter" style="font-size:18px;color:#ABB1BA"></i>
      <i class="fa fa-facebook" style="font-size:18px;color:#ABB1BA"></i>
      <i class="fa fa-google" style="font-size:18px;color:#ABB1BA"></i>
      <i class="fa fa-youtube" style="font-size:18px;color:#ABB1BA"></i>
      <i class="fa fa-instagram" style="font-size:20px;color:#ABB1BA"></i>
      
    </center>

      </div>

<center> 
  <div class="footertext">
      <p>
        UNIVERSITY OF TORONTO - SINCE 1827
      </p>
     <a href="https://www.facebook.com/hmd.akash.7"> <p>
        Mohammad Anower Hossain
      </p> </a> 
    </div>
    </center>     
</div>
    
    
    
   
    
    
    
    <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
   
</body>
</html> 
