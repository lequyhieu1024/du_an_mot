<?php 
include("layout/header.php");
if(isset($_GET["act"])){
    $act = $_GET['act'];
    switch ($act) {
        case 'alldanhmuc':
           echo "đ có gì";
    }
}else{
    include("layout/home.php");
}


include("layout/footer.php");
