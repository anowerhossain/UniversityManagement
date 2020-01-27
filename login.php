

<?php

$host='localhost';
$user='root';
$pass='';
$db='university';

if(isset($_POST['logIn'])){
    
    $useremail=$_POST['email'];
    $userpassword=$_POST['password'];
    $userrole=$_POST['role'];
  //  $con=mysqli_connect($host,$user,$pass,$db);
    if($userrole=="Admin")
    {
        
        
    $db=mysqli_connect("localhost","root","");
     mysqli_select_db($db,"university");
        
        
       $dis=mysqli_query($db,"select * from admin");
        
        while($row=mysqli_fetch_array($dis))
        {
            if($row["email"]==$useremail && $row["password"]==$userpassword){
                
                session_start();
                $_SESSION["useremail"] = $useremail;
                $_SESSION["name"] = $row["name"];
                $_SESSION["imgpath"] = $row["imgpath"];
                header("Location: adminpanel.php");
                exit();
            }
            
            
        }
        
        
    }
    else if($userrole=="Teacher")
    {
        
         $db=mysqli_connect("localhost","root","");
     mysqli_select_db($db,"university");
        
        
        
     $dis=mysqli_query($db,"select * from teacherreg");
        
        
         while($row=mysqli_fetch_array($dis))
        {
            
            if($row["email"]==$useremail && $row["password"]==$userpassword){
                
                session_start();
                $_SESSION["useremail"] = $useremail;
                $_SESSION["name"] = $row["name"];
                $_SESSION["imgpath"] = $row["imgpath"];
                header("Location: adminpanel.php");
                exit();
            }
            
        }
        
        
    }else if($userrole=="Student")
    {
       
         $db=mysqli_connect("localhost","root","");
         mysqli_select_db($db,"university");
        
        
        
        $dis=mysqli_query($db,"select * from studentreg");
        
        
         while($row=mysqli_fetch_array($dis))
        {
            
            if($row["email"]==$useremail && $row["password"]==$userpassword){
                
                session_start();
                $_SESSION["useremail"] = $useremail;
                $_SESSION["name"] = $row["name"];
                $_SESSION["imgpath"] = $row["imgpath"];
                header("Location: adminpanel.php");
                exit();
            }
            
        }
        
        
    }
     
    
    
}
?>



<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" type="text/css" href="css/logincss.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/animate.css">
    
<title>Sign-Up-Toronto</title>
</head>
<body>
    <!-- header logo -->
    

 <div class="header">
      
     <img src="images/static1.squarespace.png" class="wow slideInDown">
     
    
</div> 
    <!-- nav Bar  -->
    <div>
    <nav class="mynav navbar navbar-inverse">
  <div class="mynav container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="signup.php">UOF Toronto</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="reg.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
    </ul>
  </div>
</nav>
    
    </div>
    
    
    <!--content-->
    <div class="allcontent">
  <center><div class="cardgroup">
    
    <div class="cardone wow lightSpeedIn">
       <h1>Login</h1>
    </div>
    <div class="logincontent wow rotateInDownLeft">
      
        
        <form action="login.php" method="post">
          <center>  <i class="fa fa-user" style=" font-size:30px;"></i> 
      <input type="text" name="email" placeholder="User" required>
              
      <br>
              
            <i class="fa fa-key" style=" font-size:30px;"></i>
  <input type="password" name="password" placeholder="Password" required>
              
            
  <br>
           <i class="fa fa-user" style=" font-size:25px;"></i> <select name="role" required>
  <option value="Admin">Admin</option>
  <option value="Teacher">Teacher</option>
  <option value="Student">Student</option>
          </select><br><br>
              
 <input type="submit" value="Login" name="logIn">
            </center>
</form> 
          
       
    </div>
       
       <div class="copyright">
      <center> <p>
        University of Toronto || 2018
          </p></center>
       </div>
    
    </div> </center> </div>
   
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