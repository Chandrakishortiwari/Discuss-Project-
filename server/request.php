<?php 

include('../common/db.php');

if(isset($_POST['singup'])){
    echo "username is"." ".$_POST['username']."<br>";
    echo "user email id is"." ".$_POST['email']."<br>";
    echo "user password is"." ".$_POST['password']."<br>";
    echo "user addresh is"." ".$_POST['addresh']."<br>";
}

?>