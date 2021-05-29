<?php
$mysqli = false;
function connectDB (){

    global $mysqli;
    $mysqli = new mysql("localhost", "root", "", "kyrswebbase");
    $mysqli->query("SET NAMES 'utf-8'");
}

function close(){
    global $mysqli;
    $mysqli->close();
}


?>