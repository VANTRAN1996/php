<?php 
//dang xuat"
    session_start();
    if(isset($_SESSION['mySession'])){
        unset($_SESSION['mySession']);
        echo "hay dang ky lai";
    }
    header('location:index.php ');



?>