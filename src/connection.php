<?php

$con = new mysqli('mysql_db', 'root', 'root', 'testdb');

if (!$con) {
    echo ' Please Check Your Connection' . $con->connect_error;
    exit();
}

?>