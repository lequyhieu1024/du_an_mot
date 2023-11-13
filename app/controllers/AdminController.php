<?php 
    if(isset($_GET["act"])){
        $act = $_GET['act'];
        switch ($act) {
            case 'alldanhmuc':
                include('model/danhmuc/alldanhmuc.php');
                break;
            case 'adddanhmuc':
                include('model/danhmuc/adddanhmuc.php');
                break;
            case 'delete':
                include('model/delete.php');
                break;
            case 'allkhoahoc':
                include('model/khoahoc/allkhoahoc.php');
                break;
            case 'khtheodm':
                include('model/khoahoc/khtheodm.php');
                break;
            case 'addkhoahoc':
                include('model/khoahoc/addkhoahoc.php');
                break;
            case 'allgiangvien':
                include('model/giangvien/allgiangvien.php');
                break;
            case 'addgiangvien':
                include('model/giangvien/addgiangvien.php');
                break;
            case 'allbinhluan':
                include('model/binhluan/allbinhluan.php');
                break;
            case 'addrole':
                include('model/quyennguoitruycap/addrole.php');
                break;
            case 'allrole':
                include('model/quyennguoitruycap/allrole.php');
                break;
            // case 'taikhoanqtv':
            //     include('layout/taikhoanqtv.php');
            //     break;
            // case 'taikhoanhv':
            //     include('layout/taikhoanhv.php');
            //     break;
           
        }
    }else{
        include("layout/home.php");
    }
?>