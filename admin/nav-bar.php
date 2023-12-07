<div class="slide-nav  sticky-top" style="z-index: 1;position:absolute; display:none" id="navbaradmin">
<i class=" fa-solid-xmark" onclick="hidenavbar()">X</i>
<div style="height: 50px;"></div>
<a href="../index.php" class="logo">
    <img src="../img/lententess.png" class="logo-img">
    <img src="../img/lententess.png" class="icon" >

    
</a>
<ul class="nav-links">
    <li><a href="index.php"><i  class="fas fa-house-user"></i><p>Home</p></a></li>
    <li><a href="create-post.php"><i  class="fas fa-plus-circle"></i><p>Add post</p></a></li>
    <li><a href="index.php"><i  class="fas fa-edit"></i><p>Edit post</p></a></li>
<?php 
if (isset($_GET["logout"])){
    session_start();
    echo '<h1> raid'. $_SESSION["cle"].'</h1>';
    unset($_SESSION["cle"]);
    unset($_SESSION["role"]);
    header("location:../index.php");  }  ?>

    <div class="active"></div>

</ul>

<form method="$_GET" class="text-center">
<button class="btn btn-outline-danger logoutbtn" style="display: inline-block!important;"  name="logout"  ><i class="fas fa-sign-out-alt"></i><p>Log-out</p></button>
</form>



</div>





    </div>