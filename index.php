<?php 
session_start();
include("config.php");
include ("app/views/layout/header.php");
if(isset($_GET['redirect'])){
    $redirect = $_GET['redirect'];
    switch ($redirect) {
        case 'login':
            include("app/views/login.php");
            break;
        case "register":
            include("app/views/register.php");
            break;
        case "forgotpass":
            include("app/views/forgotpass.php");
            break;
        case "logout":
            include("app/views/logout.php");
            break;
        case "unsetcookie":
            include("app/views/fogotcookie.php");
            break;
        }
}else{
    include("app/views/layout/home.php");
}
include ("app/views/layout/footer.php");
