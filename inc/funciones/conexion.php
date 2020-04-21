<?php

$conn = new mysqli('127.0.0.1', 'root', '1234', 'upstask');

if($conn->connect_error){
    echo $conn->connect_error;
}

$conn->set_charset('utf8');