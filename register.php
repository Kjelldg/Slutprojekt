<?php

 require "init.php";
 
 $name=$_POST["name"];
 $password=$_POST["password"];
 $contact=$_POST["contact"];
 $country=$_POST["country"];
 
 $sql= "insert into users values('$name','$password','$contact','$country');";
 
 
 if(mysqli_query($connection,$sql))
 {
     echo "Values have been registered.";
 }
 else{
     
      echo "Values have not been registered.";
 }
 

?>


