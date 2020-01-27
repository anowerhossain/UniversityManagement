 <?php
  

    
    $db=mysqli_connect("localhost","root","");
     mysqli_select_db($db,"university");    
    $dis=mysqli_query($db,"select * from newsfeed order by srl desc");

      date_default_timezone_set('Asia/Dhaka');
     
   
    if(isset($_POST['post'])){
        
         $imagepost=$_POST['imagepost'];;
    
       session_start();
        
        $inpostername=$_SESSION["name"];
        $inposterimg= $_SESSION["imgpath"];
        $inimage=$imagepost;
        $indescription=$_POST['textpost'];
        $indate= date("l jS \of F Y h:i A");
        $folder='';

    
        
        
        
    $target = $_FILES['imagepost']['name'];
    $targettmp = $_FILES['imagepost']['tmp_name'];
    $folder="img/newsfeed/".$target;
    move_uploaded_file($targettmp,$folder);
        
       //inserting post 
         $host='localhost';
         $user='root';
         $pass='';
         $db='university';

        
        $con=mysqli_connect($host,$user,$pass,$db);
if($con)
{
    
    
}
        
        $sql="insert into newsfeed (poster,posterimg,description,date,image) 
        values ('$inpostername','$inposterimg','$indescription','$indate', '$folder')";
        // delete unwanted rows
        
       //  $delete= "delete from newsfeed where poster='' or (image='img/newsfeed/' and description='')";
    //   $del= mysqli_query($con,$delete);
$query=mysqli_query($con,$sql);

if($query)
{
    header("location: newsfeed.php");
}   
    
    }

?>


<!DOCTYPE html>
<html>
<head>
    
<link rel="stylesheet" type="text/css" href="css/newsfeedcss.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
<meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="css/animate.css">
    
     <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
    
    

</head>
<body onload="startTime()">
        <!-- header logo -->
 <div class="header">
      
     <img src="images/static1.squarespace.png" class="wow slideInDown">

</div>
   

   

<center><div class="sidenav">
    
    
    
    
    <!--clock-->

    
    
    
    
    
    
    <script>
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('clock').innerHTML =
     h  + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}
</script>
    
    <div id="clock"></div>

    
    
    
    
    <!--main part-->
    <h3 >Hello!</h3>
    <img  class="wow bounceInLeft" src="images/me.jpg" class="img-circle" alt="Cinque Terre" width="100" height="100" >
  <a class="wow bounceInRight" href="#about">Home</a>
  <a class="wow bounceInRight" href="appliedstudent.php">Applied Students</a>
  <a class="wow bounceInRight" href="appliedteacher.php">Applied Teachers</a>
  <a class="wow bounceInRight" href="search.php">Search Students</a>
  <a class="wow bounceInRight" href="newsfeed.php">News feed</a>
  <a class="wow bounceInRight" href="login.php">Logout</a>
</div></center>

    <!-- new post -->
   
       
    <div class="newpost">
     
    <form action="newsfeed.php" method="post" enctype="multipart/form-data">

        <input type="text" name="textpost" placeholder="Whats on Your Mind..."> <input type="file" name="imagepost" value="add">
         <input  class="btn btn-success" type="submit" value="Post" name="post" >
         
</form>

    </div>
      

<center><div class="main">

    <?php 
    
    
    while($row=mysqli_fetch_array($dis))
    {
        $poster=$row["poster"];
        $posterimg=$row["posterimg"];
        $image=$row["image"];
        $description=$row["description"];
        $date=$row["date"];
        
      ?><h4><?php echo $poster; ?>
       <img  <?php echo"src='$posterimg'" ?>class="img-circle"  height='50px' width='50px'>      <?php  echo "                         $date"; ?></h4>
      <?php
    if(strlen($image)>13){    
        echo "<img src='$image' height='350px' width='380px'><br>";
    }
      
         echo "<p>$description</p><br>"; 
        ?>
     <hr><?php
    
    }
    
    ?>

    
</div></center>
   
    
          <!--footer-->
    <div class="footer">
      <div class="socialicon">
     <center>

      
      <i class="fa fa-twitter" style="font-size:18px;color:#1D1F21"></i>
      <i class="fa fa-facebook" style="font-size:18px;color:#1D1F21"></i>
      <i class="fa fa-google" style="font-size:18px;color:#1D1F21"></i>
      <i class="fa fa-youtube" style="font-size:18px;color:#1D1F21"></i>
      <i class="fa fa-instagram" style="font-size:20px;color:#1D1F21"></i>
      
    </center>

      </div>

<center> 
  <div class="footertext"><br>
    
        UNIVERSITY OF TORONTO - SINCE 1827<br>
      <hr>
      
     <a href="https://www.facebook.com/hmd.akash.7">
        Mohammad Anower Hossain
      </a> 
    </div>
    </center>     
</div>
    
</body>
</html> 
