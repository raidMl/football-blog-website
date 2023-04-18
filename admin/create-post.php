
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article</title>
    <link href="../fontawesome-free-5.15.4-web/css/all.css" rel="stylesheet">

    <link rel="stylesheet" href="../csss/bootstrap.min.css">
    <link  rel="stylesheet" href="nav-bar.css">

<link rel="shortcut icon" href="../img/esss.png">
</head>
<body>
<?php require_once"nav-bar.php";
if($_SESSION["role"]!="admin"){
       header("location:../", true);

}
?>


<div class='alert alert-success w-100 text-center' style="font-size:24px; font-weight:500;">
<i class="fa fa-bars" style="position: absolute;left:30px;font-size:30px; cursor:pointer;" onclick="show_nav_bar()"></i>

Create new post</div>

<section>
    <form method="POST" action="create-post.php" enctype="multipart/form-data">
    <div class="container mt-5 ">

    <span >Title</span>
    <input type="text" class="form-control" maxlength="99" name="title" style="height: 40px; width:100% ;border-radius:10px; margin-bottom:30px;margin-top:10px;
     ">
   
   image
   <input class="form-control mt-3 col-md-4 mb-3" type="file" name="fiche" required accept="image/*,video/*">

     Article
    <textarea class="form-control"  name="content" style="height: 300px; width:100%;border-radius:10px;margin-top:10px;box-shadow:4px 4px #0000001a"></textarea>
    
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
$insertion=$database->prepare("INSERT INTO articles(title,content,img) VALUE (:t,:c,:pos1)");
$insertion->bindParam("t", $_POST["title"]);
$insertion->bindParam("c", $_POST["content"]);
$insertion->bindParam("pos1",$fname1)	;

if($insertion->execute())
echo "<div class='alert alert-success text-center'>Articale added
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

