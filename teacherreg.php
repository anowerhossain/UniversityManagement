

<?php

$host='localhost';
$user='root';
$pass='';
$db='university';

    if(isset($_FILES['image'])){
        
$name=$_POST['name'];
$address=$_POST['address'];
$dob=$_POST['dob'];
$department=$_POST['department'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$folder='';

    
        
        
        
    $target = $_FILES['image']['name'];
    $targettmp = $_FILES['image']['tmp_name'];
    $folder="img/teacher/".$target;
    move_uploaded_file($targettmp,$folder); 
        echo "$folder";
        
    }

    

$con=mysqli_connect($host,$user,$pass,$db);
if($con)
{
    echo "connected";
    
}

$sql="insert into teacherreg (name,address,dob,email,phone,department,password,imgpath) values ('$name','$address','$dob','$email','$phone','$department','$password','$folder')";
$query=mysqli_query($con,$sql);
if($query)
{

}

// delete unwanted rows

$del="Delete from teacherreg where name =''";
$delete=mysqli_query($con,$del);
    
?>



<!DOCTYPE html>


<html>
<head>
<title>Page Title</title>
   
    <link rel="stylesheet" type="text/css" href="css/regcss.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    
    
    
</head>
<body>
    
       <!-- header logo -->
 <div class="header">
      
     <img src="images/University_of_Toronto.png">

</div>
    
    <!-- nav Bar  -->
    <div>
    <nav class="mynav navbar navbar-inverse">
  <div class="mynav container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="signup.php">UOF Toronto</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="my-active active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href="#">Page 2</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
    
    </div>
    
    
       
    <!--content-->
    <div class="maincontent">
   <div class="cardgroup">
    
    <div class="cardone">
       <h1>Registration</h1>
    </div>
       
        <div class="regcontent">
          
      <form action="teacherreg.php" method="post" enctype="multipart/form-data">

          <span>Name</span><center><input type="text" name="name" placeholder="Put your name here" required></center>
  <br>
          <span>Address</span><center><input type="text" name="address" placeholder="Your address" required> </center>
          
           <br>
          <span>Date of Birth</span><center><input type="date" name="dob" required> </center>
<br>
  <span>Department</span><center><select name="department" required>
          
  <option value="CSE">CSE</option>
  <option value="EEE">EEE</option>
  <option value="Pharmacy">Pharmacy</option>
  <option value="Civil">Civil</option>
 <option value="English">English</option>
  <option value="Human Rights">Human Rights</option>
  <option value="Physics">Physics</option>
  <option value="Chemistry">Chemistry</option>
    
          </select></center>
  
  <br>       
          <span>Email</span><center><input type="text" name="email" placeholder="@example.com" required></center>
  <br>      
          <span>Phone</span><center><input type="number" name="phone" placeholder="+8801-XXX-XXX-XXX" required></center>
  <br>
          <span>Password</span><center><input type="password" name="password" required></center>
  <br>
          <span>Avatar</span> 
          
          <input type="file" name="image" value="add" required>
     
  <br>
    <input type="submit" value="Submit" >
    

</form>
       
          
       
    </div>
       
       <div class="copyright">
      <center> <p>
        University of Toronto || 2018
          </p></center>
       </div>
    
    
    </div>
        </div>
   
    
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
       

</body>
</html>