<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Discuss website</title>
    <?php include('./client/commonFile.php'); ?>

</head>
<body>
<?php
 include('./client/header.php'); 
  
 if(isset($_GET['singup']))
 {
     include('./client/singup.php') ;
 }
else{

 };
 ?>
</body>
</html>