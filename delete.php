 <?php
  
    
    $db=mysqli_connect("localhost","root","");
     mysqli_select_db($db,"university");
    
     $name=$_GET['nm'];
     echo "$name";
     
        $dis=mysqli_query($db,"delete from studentreg where name='$name'");
       header("Location: search.php");

    ?> 
