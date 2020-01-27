
<!DOCTYPE html>
<html>
<head>
    
<link rel="stylesheet" type="text/css" href="css/appliedteachercss.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/animate.css">
    <script src='js/wow.min.js'></script>
              <script>
              new WOW().init();
              </script>
    
<meta name="viewport" content="width=device-width, initial-scale=1">
    

</head>
<body>
        <!-- header logo -->
 <div class="header">
      
     <img src="images/static1.squarespace.png" class="wow slideInDown">
</div>
   

<center><div class="sidenav">
    <h3 >Hello!</h3>
    <img  class="wow bounceInLeft" src="images/me.jpg" class="img-circle" alt="Cinque Terre" width="100" height="100" >
  <a class="wow bounceInRight" href="#about">Home</a>
  <a class="wow bounceInRight" href="appliedstudent.php">Applied Students</a>
  <a class="wow bounceInRight" href="appliedteacher.php">Applied Teachers</a>
  <a class="wow bounceInRight" href="search.php">Search Students</a>
  <a class="wow bounceInRight" href="newsfeed.php">News feed</a>
  <a class="wow bounceInRight" href="login.php">Logout</a>
</div></center>

<div class="main">

    
  <h2>List of Applied as a Student</h2>

    <?php
  
    
    $db=mysqli_connect("localhost","root","");
     mysqli_select_db($db,"university");
    
     
        $dis=mysqli_query($db,"select * from studentreg order by name");
    ?>  <table class="mytable table">
    
     <tr class="wow slideInDown">
     <th >Name</th>
         <th>Address</th>
       <th>DOB</th>
       <th>Email</th>
         <th >Phone</th>
         <th>Department</th>
          <th>Semester</th>
            <th>Image</th>
       </tr>    
     <?php   
    while($row=mysqli_fetch_array($dis))
    {
        
        ?>
   
     <tr class="wow slideInDown" >
        <td> <?php echo $row["name"];          ?> </td>
        <td><?php echo $row["address"];        ?></td>
        <td><?php  echo $row["dob"];          ?></td>
        <td><?php echo $row["email"];         ?></td>
        <td> <?php echo $row["phone"];          ?> </td>
        <td><?php echo $row["department"];        ?></td>
         <td><?php echo $row["semester"];        ?></td>
    <?php 
         echo "<td><img src='".$row["imgpath"]."' height='80' width='80' ></td>";  
    ?>       
    <?php echo "</tr>";
        
         
       
    }
      
     echo "</table>";
    
 echo "</div>";
    
    
    
    
    
    ?>
    
      
          <!--footer-->
      
    <?php
         
echo "</body>";
    
echo "</html>";
 ?>
  



    
    