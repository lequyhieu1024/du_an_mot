<?php 
session_start();
if(isset($_SESSION['role'])){
    if($_SESSION['role']==3){
        include("../config.php");
        include("layout/header.php");
        include("../app/controllers/AdminController.php");
        include("layout/footer.php");
    }else{
    echo '<img style="width:100%;height:100%" src="../public/images/404.jpg" alt="">';
    }
}else{
    echo '<img style="width:100%;height:100%" src="../public/images/404.jpg" alt="">';
}

?>
