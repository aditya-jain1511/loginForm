<?php
    require_once('connection.php');
    session_start();
    if (isset($_POST['Entry'])) {
        if (empty($_POST['ID']) || empty($_POST['Sname']) || empty($_POST['marks1']) || empty($_POST['marks2']) || empty($_POST['marks3']) || empty($_POST['marks4']) || empty($_POST['marks5'])) {
            $con-> close();
            header("location: ./welcome.php?Enter= Enter all values");
        }
        else {
            $marksobt= $_POST['marks1']+$_POST['marks2']+$_POST['marks3']+$_POST['marks4']+$_POST['marks5'];
            $tmarks=500;
            $percent=($marksobt/500)*100;
            $sql = "INSERT INTO Marks (ID, Sname, marks1, marks2, marks3, marks4, marks5,marksobt,tmarks,percent) VALUES (" 
            .$_POST['ID']. ", '"
            .$_POST['Sname']. "' ,"
            .$_POST['marks1']. ","
            .$_POST['marks2']. ","
            .$_POST['marks3']. ","
            .$_POST['marks4']. ","
            .$_POST['marks5']. ","
            .$marksobt. ","
            .$tmarks. ","
            .$percent.
            ")";
    
            if ($con->query($sql) === TRUE) {
                $con-> close();
                header('location:./welcome.php?Enter= Record Created Successfully');
            } 
            else {
                $con-> close();
                header('location:./welcome.php?Enter= Some Error Occured');
            }
        }
    }
    else {
        $con-> close();
        echo 'Not Working Now Guys';
    }
?>