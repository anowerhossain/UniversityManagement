 <?php
  
    
    $db=mysqli_connect("localhost","root","");
     mysqli_select_db($db,"university");
    


     echo $_GET['ph'];

    // $_GET['add'];



   
    
      //  $dis=mysqli_query($db,"delete from studentreg where name='$name'");
     //  header("Location: search.php");

    ?> 




<?php



   if(isset($_FILES['image'])){
        
$name=$_POST['name'];
$address=$_POST['address'];
$dob=$_POST['dob'];
$department=$_POST['department'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$semester=$_POST['semester'];
$password=$_POST['password'];
$folder='';

    
        
        
        
    $target = $_FILES['image']['name'];
    $targettmp = $_FILES['image']['tmp_name'];
    $folder="img/student/".$target;
    move_uploaded_file($targettmp,$folder);
        
    }

    

$con=mysqli_connect($host,$user,$pass,$db);
if($con)
{
    echo "connected";
    
}

$sql="insert into studentreg (name,address,dob,email,phone,department,semester,password,imgpath) values ('$name','$address','$dob','$email','$phone','$department','$semester','$password','$folder')";

$query=mysqli_query($con,$sql);

if($query)
{

}

// delete unwanted rows

$del="Delete from studentreg where name =''";
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
<link rel="stylesheet" href="css/animate.css">
    
    
</head>
<body>
    <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
    
    
       <!-- header logo -->
 <div class="header">
      
     <img class="wow bounceInRight" src="images/static1.squarespace.png">

</div>
    
   
    
    
       
    <!--content-->
    <div class="maincontent">
   <div class="cardgroup">
    
    <div class="cardone">
       <h1>Registration</h1>
    </div>
       
        <div class="regcontent">
          
      <form action="reg.php" method="post" enctype="multipart/form-data">

         
          <span>Address</span><center><input type="text" name="address" value="<?php echo"$address" ?>" required> </center>
          
          
<br>

     
          <span>Email</span><center><input type="text" name="email" value="<?php echo"$email" ?>"  required></center>
  <br>      
          <span>Phone</span><center><input type="text" name="phone" value="<?php echo"$phone" ?>" required></center>
  <br>
   
          <span>Avatar</span> 
          
          <input type="file" name="image" value="<?php echo"$path" ?>" required>
     
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
  

</body>
</html>

