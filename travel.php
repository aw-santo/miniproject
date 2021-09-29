<?php
$dbservername="localhost";
$dbuser="root";
$dbpassword="";
$dbname="crazy";
$conn=mysqli_connect($dbservername,$dbuser,$dbpassword,$dbname);
if($conn)
{
  
    $name=$_POST['name'];
    $mail=$_POST['email'];
    $msg=$_POST['msg'];
    $sql=("insert into grss(name,email,msg) values('$name','$mail','$msg')");
    $res=mysqli_query($conn,$sql);
    if($res)
    {
      echo "data inserted Successfully!!";
    }
    else{
      echo "something Went Wrong";
    }
    
    
  
    
  
}


?>