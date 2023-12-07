<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

    <link rel="stylesheet" href="csss/bootstrap.min.css">

<link rel="shortcut icon" href="img/esss.png">
</head>
<body>
    


<?php

// if (isset($_POST["oke"])) {
    require_once "dbconect.php";
    $data = $database->prepare("SELECT * FROM user WHERE  mail=:m AND  password=:p");
    $data->bindParam("m", $_POST["email"]);
    $passuser = sha1($_POST["psw"]);
    $data->bindParam("p", $passuser);
     echo(sha1("ess1958"));
    // $data->bindParam("p", $_POST["psw"]);
    $data->execute();
    if ($data->rowCount() ==1) {
        header("location:admin/", true);
    session_start();
    $_SESSION["role"]="ADMIN";
    }
        
        else{
            echo "<div class='alert alert-danger  text-center'>wrong email or password</div>";}


  
?>

</body>

<script src="javascript/jquery-3.5.1.min.map.js"></script>
<script src="javascript/bootstrap.bundle.min.js"></script>
<script src="javascript/popper.min.js"></script>
<script src="javascript/style.js"></script>

<script src="javascript/owl-carousel.js"></script>
<script src="javascript/animation.js"></script>

<script src="javascript/popup.js"></script></html>