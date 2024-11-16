<?php
    $conn = mysqli_connect('localhost','root','','php_crud');
    if(!$conn){
        die(mysqli_error($conn));
    }
?>