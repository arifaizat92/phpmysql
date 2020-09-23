<?php
$conn = mysqli_connect("localhost:40001","aizato","n6emduFrKHTYvMCb");
if (mysqli_connect_errno())
 {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
 } 
 // Print host information
echo "Connect Successfully. Host info: " . mysqli_get_host_info($conn);
 ?>