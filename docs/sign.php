<?php
//require_once "config.php";
error_reporting(0);
$server="localhost";
$username="root";
$password="";
$con=mysqli_connect($server,$username,$password);

if($con)
{
  //echo "Successfull";
  $username=$_POST['username'];
  $password=$_POST['password'];
  $address=$_POST['address'];
  $city=$_POST['city'];
  $state=$_POST['state'];

 
  
  
  $sql="INSERT INTO `crazy`.`reg`(`username`,`password`,`address`,`city`,`state`) VALUES ('$username','$password','$address','$city','$state');";

  if($con->query($sql) == true)
  {
    //echo "data sucessful";
     echo '
  <html>
  <img src="images/thank1.jpg"style="margin-left:150px;margin-top:20px;margin-right:30px;width:80%;height:90vh;">




  </html
  ';

  }
  else{
    echo "no data ";
  }
  }
else{
  echo"error";
}



?>





