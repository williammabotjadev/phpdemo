<?php 
   
   // Database connection credentials
    $hostname = 'localhost';  
    $database = 'phpdemo'; 
    $db_user = 'admin'; 
    $db_pass = 'Asdf1234!';


    $connection = mysqli_connect("$hostname" , "$db_user" , "$db_pass", "$database");

    if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
    }    

    // print("<br />Successfully connected to database:<strong> ".$database."</strong><br />");

?>