<?php
require_once 'classes.php';

$publications = array();


$con = mysqli_connect("localhost","root","","mybase");
if (mysqli_connect_errno()){
    echo "Ошибка подключения к базе" .mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM publication");

while ($row = mysqli_fetch_array($result)){

    $publications[] = new $row['type']($row);
}

