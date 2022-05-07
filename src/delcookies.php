<?php
session_start();
if (isset($_GET['delete'])) {
    if (isset($_COOKIE['UName'])) {
        unset($_COOKIE['UName']);
        setcookie('UName', '', time() - 3600,'/');
    }
    if (isset($_COOKIE['Password'])) {
        unset($_COOKIE['Password']);
        setcookie('Password', '', time() - 3600,'/');
    }
    header("location:welcome.php");
}
else {
    header("location:../index.php");
}
?>