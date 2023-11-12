<?php 
session_start();
if(isset($_SESSION['role'])){
    if($_SESSION['role']=='qtv'){
        include("../config.php");

        include("layout/header.php");
        if(isset($_GET["act"])){
            $act = $_GET['act'];
            switch ($act) {
                case 'alldanhmuc':
                    include('model/danhmuc/alldanhmuc.php');
                    break;
                case 'adddanhmuc':
                    include('model/danhmuc/adddanhmuc.php');
                    break;
                case 'allkhoahoc':
                    include('model/khoahoc/allkhoahoc.php');
                    break;
                case 'addkhoahoc':
                    include('model/khoahoc/addkhoahoc.php');
                    break;
                case 'taikhoanqtv':
                    include('layout/taikhoanqtv.php');
                    break;
                case 'taikhoanhv':
                    include('layout/taikhoanhv.php');
            }
        }else{
            include("layout/home.php");
        }


    include("layout/footer.php");
    }else{
    echo '<img style="width:100%;height:100%" src="../public/images/404.jpg" alt="">';
    }
}else{
    echo '<img style="width:100%;height:100%" src="../public/images/404.jpg" alt="">';
}
?>