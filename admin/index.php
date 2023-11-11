<?php 
include("layout/header.php");
if(isset($_GET["act"])){
    $act = $_GET['act'];
    switch ($act) {
        case 'alldanhmuc':
           include('layout/alldanhmuc.php');
           break;
    }
}else{
    include("layout/home.php");
}


include("layout/footer.php");
