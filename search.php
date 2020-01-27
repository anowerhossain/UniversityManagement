
<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" type="text/css" href="css/searchcss.css">
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
      
     <img class="wow bounceInLeft" src="images/static1.squarespace.png">

</div>
   

<center><div class="sidenav">
    <h3 >Hello!</h3>
    <img src="images/me.jpg" class="img-circle" alt="Cinque Terre" width="100" height="100">
  <a href="#about">Home</a>
  <a href="appliedstudent.php">Applied Students</a>
  <a href="appliedteacher.php">Applied Teachers</a>
  <a href="search.php">Search Students</a>
  <a href="newsfeed.php">News feed</a>
  <a href="login.php">Logout</a>
</div></center>

<div class="main">

    
  <h2 class="wow bounceInRight">Search a Student</h2> 
    
 <center><img src="css/Search-Icon-File.png" alt="search" width="2%" height="1.5%">   <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search By Names..." title="Type in a name"></center>
    
    
    <script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
    <!--woow js-->
    <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
    
    <!--search a student-->
    
  

    <?php
  
    
    $db=mysqli_connect("localhost","root","");
     mysqli_select_db($db,"university");
    
     
        $dis=mysqli_query($db,"select * from studentreg order by name");
    ?> 


<table id="myTable" class="wow bounceInUp">
  <tr class="header">
     <th >Name</th>
         <th>Address</th>
       <th>DOB</th>
       <th>Email</th>
         <th >Phone</th>
         <th>Department</th>
          <th>Semester</th>
            <th>Image</th>
            <th colspan="1">Operation</th>
       </tr>    
     <?php   
    while($row=mysqli_fetch_array($dis))
    {
        
        ?>
   
     <tr class="info" >
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
         <td><a href='delete.php?nm=<?php echo $row["name"] ?>'><img src="images/del.png" width="20px" height="20px"> </a>
             <a href='update.php?add=<?php echo $row["address"] ?> ph=<?php echo $row["phone"] ?>'><img src="images/up.png" width="20px" height="20px"> </a>
</td>
    <?php echo "</tr>";
        
    
        
         
       
    }
      
     echo "</table>";
    
    
    
    
    
 echo "</div>";
    
    
    
    
echo "</body>";
    
echo "</html>";
 
  ?>



    
    