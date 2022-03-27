<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>ESS</title>
<link rel="stylesheet" href="csss/bootstrap.min.css">
<link href="fontawesome-free-5.15.4-web/css/all.css" rel="stylesheet">
<script src="javascript/jquery-3.5.1.min.map.js"></script>
<link rel="stylesheet" href="csss/style.css">
<link rel="shortcut icon" href="img/esss.png">
</head>
<body>
 <?php require_once "header.php"?>

<div class="container mt-5 ">
<?php
require_once "dbconect.php";
$data=$database->prepare("SELECT * FROM articles WHERE id=:cle");
$data->bindParam("cle",$_GET["id"]);
$data->execute();
// echo $data->rowCount();
$posts=$data->fetch(PDO::FETCH_ASSOC);


//   echo $pst["title"]."<br>";

//  echo $pst["content"]."<br>";
//  echo'<img src="files/'.$pst['img'].'"  height="80px" width="80px" alt="">
// ';



echo'
<img src="files/'.$posts['img'].'"  style="width:80%;border-radius:10px;" class="mb-5">
  
    <h2 class="mb-5 " style="font-family:Arial">'.$posts["title"].'</h2>
    <p class="mb-5 mt-3">'.$posts["content"].'.</p>
  </div>
</div>';



   
?>
</div>
</body>
</html>