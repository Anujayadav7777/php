<?php
$host="localhost";
$username="root";
$password="";
$dbname="database_1";
// Connection Function
$connection=mysqli_connect($host,$username,$password,$dbname);

$q=mysqli_query($connection,"insert into tbl_user(user_name,user_gender,user_mobile)
  values('Nidhi','Female','123')")
  or die("Error".mysqli_error($connection));

  if($q)
  {
      echo"<script>('Record Added')</script>";
  }


?>