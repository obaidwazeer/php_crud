<?php
    include('connection.php');
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $password = $_POST['password'];

        $query = "INSERT INTO users (name, email, mobile, password)
                  VALUES('$name', '$email', '$number', '$password')";
        $result = mysqli_query($conn, $query);
        if(!$result){
            die(mysqli_error($result));
        }else{
            header('location:users.php');
        }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container my-5">
        <form method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" autocomplete="off">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" autocomplete="off">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="text" name="number" class="form-control" id="phone" autocomplete="off">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" autocomplete="off">
            </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
  </body>
</html>