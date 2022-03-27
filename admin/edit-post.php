
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article</title>

    <link rel="stylesheet" href="../csss/bootstrap.min.css">
    <link  rel="stylesheet" href="nav-bar.css">
    <link href="../fontawesome-free-5.15.4-web/css/all.css" rel="stylesheet">

<link rel="shortcut icon" href="../img/esss.png">
</head>
<body>
<?php require_once"nav-bar.php";?>
 

<div class='alert alert-success w-100 text-center' style="font-size:24px; font-weight:500;">
<i class="fa fa-bars" style="position: absolute;left:30px;font-size:30px; cursor:pointer;" onclick="show_nav_bar()"></i>

Edit post</div>

<section>
    <form method="POST" action="edit-post.php" enctype="multipart/form-data">
    <div class="container mt-5 ">
<?php 
require_once "../dbconect.php";
session_start();
if (isset($_SESSION["cle"])) {
$cle=$_SESSION["cle"];
// var_dump($cle);
$data=$database->prepare("SELECT * FROM articles WHERE id=:clee");
$data->bindParam("clee",$cle);
$data->execute();
$posts=$data->fetch(PDO::FETCH_ASSOC);
// var_dump($posts);

echo'
    <span >Title</span>
    <input type="text" class="form-control" maxlength="99" name="title" value="'.$posts["title"].'" style="height: 40px; width:100% ;border-radius:10px; margin-bottom:30px;margin-top:10px;
     ">
   
   image
   <input class="form-control mt-3 col-md-4 mb-3" src="'.$posts["img"].'" type="file" name="fiche" required accept="image/*,video/*">

     Article
    <textarea class="form-control"   name="content" style="height: 300px; width:100%;border-radius:10px;margin-top:10px;box-shadow:4px 4px #0000001a">"'.$posts["content"].'"</textarea>
   ';} ?>
</div>
    <div class="container text-center">

    <button type="submit" class="btn btn-success mt-5 mb-5" name="savebtn" >save</button>
    <button type="reset" class="btn btn-danger  mt-5 mb-5" name="cuncel" >cancel</button>
    </div>

</form>
</section>
<?php
echo "<div class='container'>";
  require_once "../dbconect.php";

if (isset($_POST["savebtn"])) {
    /** image settings */

$fname1=$_FILES["fiche"]["name"];
$pos1="../files/".$fname1; 
$file1=$_FILES["fiche"]["tmp_name"]; //tmp_name of server
move_uploaded_file($file1,$pos1);

// endimg setting
$insertion=$database->prepare("UPDATE articles SET title=:t,content=:c,img=:pos1 WHERE id=:clee ");
$insertion->bindParam("t", $_POST["title"]);
$insertion->bindParam("c", $_POST["content"]);
$insertion->bindParam("clee",$cle);
$insertion->bindParam("pos1",$fname1);

if($insertion->execute())
echo "<div class='alert alert-success text-center'>Articale Modified
<button type='button' class='btn-close ' data-bs-dismiss='alert' aria-label='Close' style='position:absolute;right:20px'></button>
</div>";


else{    
    echo "<div class='alert alert-danger text-center' role='alert'    style='width: 60%;'>error
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>";}

echo "</div>";
}
?>

</body>
<script src="script.js"></script>

<script src="../javascript/jquery-3.5.1.min.map.js"></script>
<script src="../javascript/bootstrap.bundle.min.js"></script>
<script src="../javascript/popper.min.js"></script>
<script src="../javascript/style.js"></script>

<script src="../javascript/owl-carousel.js"></script>
<script src="../javascript/animation.js"></script>

<script src="../javascript/popup.js"></script></html>

