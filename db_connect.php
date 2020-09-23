<?php
   $dbhost = 'localhost:40001';
   $dbuser = 'aizato';
   $dbpass = 'n6emduFrKHTYvMCb';
   $dbname = 'classicmodels';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
   
   if (mysqli_connect_errno()) 
   {
       printf("MySQL connection failed with the error: %s", mysqli_connect_error());
       exit;
   }
   $sql = 'SELECT * FROM EMPLOYEES LIMIT 10';

   $result = mysqli_query( $conn, $sql);
   
   if(! $result ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysqlI_fetch_array($result)) {
      echo "Employee No :{$row['employeeNumber']}  <br> ".
         "First Name: {$row['firstName']} <br> ".
         "Last Name: {$row['lastName']} <br> ".
         "Email : {$row['email']} <br> ".
         "--------------------------------<br>";
   } 
   echo "Fetched data successfully\n";
   mysqli_close($conn);
?>