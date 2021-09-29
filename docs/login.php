<?php
error_reporting(0);
$server="localhost";
$username="root";
$password="";
$db="crazy";
$con=mysqli_connect($server,$username,$password,$db);

if($con)
{
  //echo "Successfull";
  $username=$_POST['username'];
  $password=$_POST['password'];
  $sql="SELECT * FROM `reg` WHERE( username='$username') or (password='$password')";

  $result=mysqli_query($con,$sql);
  $num=mysqli_num_rows($result);
  //echo $num;


  $row=mysqli_fetch_assoc($result);
 // echo var_dump($row);

 // echo $row;
if($username==$row['username'])
{
  //echo $username;
  if($password==$row['password'])
  {
    // echo "login successful";
    ?>
     <script>
      window.location="index.html";
      alert("login Successful!!");
     </script>


    <?php

  }
  else
  {
    echo "wrong password";
    ?>
    <script>
      window.location="login1.html";
      alert("incorrect password!!");
    </script>


    <?php
  }

}
else
{
  echo "wrong username";
  ?>
    <script>
      window.location="login1.html";
      alert("incorrect username!!");
    </script>


    <?php
}


}
else{
  echo "not";
}

?>







 