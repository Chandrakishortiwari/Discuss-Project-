<?php
 $host= "localhost";
 $username = "root";
 $password ="";
 $database= "discuss";

 $conn = new mysqli($host, $username, $password, $database);

 if($conn->connect_errno) {
    die('not conect with db'. $conn->connect_errno);
 }

 echo "database connection succesfully";

?>