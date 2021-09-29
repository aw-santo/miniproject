<?php
$dbservername="localhost";
$dbuser="root";
$dbpassword="";
$dbname="crazy";
$conn=mysqli_connect($dbservername,$dbuser,$dbpassword,$dbname);
if($conn)
{
  
    $name=$_POST['name'];
    $package=$_POST['pack'];
    $mobile_number=$_POST['mob'];
    $sql=("insert into payment(name,pack,mob) values('$name','$package','$mobile_number')");
    $res=mysqli_query($conn,$sql);
    if($res)
    {
      echo "data inserted Successfully!!";
      ?>
      <script>
       window.location="index.html";
       alert("Message Sent Successfully!! we will contact u in no time!!");
      </script>
 
 
     <?php
    }
    else{
      echo "something Went Wrong";
    }
    
    
  
    
  
}


?>