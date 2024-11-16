<?php
    include('connection.php');
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $query = "DELETE FROM users WHERE id = '$id'";
        $result = mysqli_query($conn, $query);
        if($result){
            header('location:users.php');
        }else{
            die(mysqli_error($result));
        }

    }
?>