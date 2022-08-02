<?php
 
$con = mysqli_connect("localhost","root","","tickets_online");
  
if(mysqli_connect_errno())
{
    echo "Failed to connect to MYSQL:".mysqli_connect_error($con);
}

?>