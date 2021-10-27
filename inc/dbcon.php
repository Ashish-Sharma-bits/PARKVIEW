<?php
$connection = new mysqli("localhost", "root", "", "testsite");

if ($connection->connect_errno) {  
    die('Could not connect'); 
}  
?>