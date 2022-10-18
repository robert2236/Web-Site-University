<?php

session_start();

$conn =mysqli_connect(
    'localhost',
    'root',
    '',
    'app_university'
);

if(isset($conn)){
    echo 'is connected';
}
?>
