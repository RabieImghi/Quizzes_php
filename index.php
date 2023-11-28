<?php
if(!isset($_SESSION['id_user'])){
    header('location: admin/login.php');
}else{
    if($_SESSION["id_user"]==0)
    header('location: user/index.php'); 
    if($_SESSION["id_user"]==1)
    header('location: admin/index.php');
}
?>