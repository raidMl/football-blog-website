
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article</title>

    <link rel="stylesheet" href="../csss/bootstrap.min.css">
    <link href="../fontawesome-free-5.15.4-web/css/all.css" rel="stylesheet">

<link rel="shortcut icon" href="../img/esss.png">
<link  rel="stylesheet" href="nav-bar.css">
<style>
.box{margin :25px ;width: 30%;font-size: 25px;}
.box:hover{opacity: 0.85;
animation: .5s;}
</style>
</head>
<body>
    <?php require_once"nav-bar.php";?>

<div class='alert alert-success w-100 text-center '>
<i class="fa fa-bars" style="position: absolute;left:30px;font-size:30px; cursor:pointer;" onclick="show_nav_bar()"></i>
login with sucess</div>

<section>
   
    <div class="container text-center">
    <h3>welcome admin</h3>
<div class="row mt-5 text-center" style="display: inline">
<form method="$_GET" action="index.php">

<a class="box  btn btn-success" href="create-post.php"><i class="fas fa-plus-circle"></i> Add post</a>
<button type="submit"   name="edit" class="box  btn btn-primary"><i class="fas fa-edit"></i> Edit post</button>
</form>
</div>

    </div>

</section>
<?php
echo "<div class='container'>";
  require_once "../dbconect.php";

if (isset($_GET["edit"])) {


// endimg setting
$data=$database->prepare("SELECT * FROM articles");
$data->execute();
$posts=$data->fetch(PDO::FETCH_ASSOC);

echo "<div class='alert alert-success text-center'>All Articles
<button type='button' class='btn-close ' data-bs-dismiss='alert' aria-label='Close' style='position:absolute;right:20px'></button>
</div>";

echo'<table class="table">
<thead>
  <tr>
    <th scope="col">#id</th>
    <th scope="col">image</th>
    <th scope="col">Title</th>
    <th scope="col">edit</th>
    <th scope="col">delete</th>
  </tr>
</thead>
<tbody>';
foreach($data as $pst){




echo'
<form><tr>
    <th scope="row">'.$pst['id'].'</th>
    <th scope="row"><img src="../files/'.$pst['img'].'" style="width:50px;height:50px;"></th>
    <td>'.$pst['title'].'</td>
    <td><button type="submit" name="modify"  value="'.$pst['id'].'" class="btn btn-primary">edit</button></td>
    <td><button type="submit"  class=" btn btn-danger" name="remove" value="'.$pst['id'].'">remove</button></td>
  </tr></form>

';



}
echo'</tbody>
</table>';
}
?>

<?php
//delete
if (isset($_GET["remove"])) {
$data=$database->prepare("DELETE  FROM articles WHERE id=:cle");
$data->bindParam("cle",$_GET["remove"]);
$data->execute();

}

//edit
if (isset($_GET["modify"])) {
    session_start();
    $_SESSION["cle"]=$_GET["modify"];
header("location:edit-post.php");
    
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

