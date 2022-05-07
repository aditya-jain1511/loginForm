<?php

require_once('connection.php');
session_start();
if (isset($_POST['Login'])) {
    if (empty($_POST['UName']) || empty($_POST['Password'])) {
            $con-> close();
            header("location:../index.php?Empty= Please Fill in the Blanks");
    }
    else {
        $query = "select * from employee where UName='" . $_POST['UName'] . "' and Password='" . $_POST['Password'] . "'";

        $result = $con->query($query);

        if ($result->fetch_assoc()) {
            if (isset($_POST['Remember'])) {
                setcookie('UName', $_POST['UName'], time() + 3600,'/');
                setcookie('Password', $_POST['Password'], time() + 3600,'/');
            }
            $_SESSION['User'] = $_POST['UName'];
            $con-> close();
            header("location:welcome.php");
        }
        else {
            $con-> close();
            header("location:../index.php?Invalid= Please Enter Correct User Name and Password ");
        }
    }
}
else {
    $con-> close();
    echo 'Not Working Now Guys';
}
?>