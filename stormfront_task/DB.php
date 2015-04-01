<?php

$host_name = "localhost"; 
$db_name = "stormfront"; 
$username = "root"; 
$password = "";

try{
    $connection = new PDO("mysql:host={$host_name};dbname={$db_name}",$username, $password);
    echo "Connection successful";
}
//handling connection error
catch(PDOException $exception){
    echo "Error with your connection: " .$exception->getMessage();
}

?>