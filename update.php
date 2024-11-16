<?php
    include('connection.php');
    $id = $_GET['id'];

    $query = "SELECT * FROM users WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $oldName = $row['name'];
    $oldEmail = $row['email'];
    $oldPhone = $row['mobile'];
    $oldPassword = $row['password'];
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $password = $_POST['password'];

        $query = "UPDATE users SET name = '$name',email = '$email', mobile = '$number', password = '$password'
                  WHERE id = '$id'";
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
                <input type="text" name="name" class="form-control" id="name" autocomplete="off" value=<?php echo $oldName?>>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" autocomplete="off" value=<?php echo $oldEmail?>>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="text" name="number" class="form-control" id="phone" autocomplete="off" value=<?php echo $oldPhone?>>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" autocomplete="off" value=<?php echo $oldPassword?>>
            </div>
                <button type="submit" name="submit" class="btn btn-primary">Update</button>
    </form>
    </div>
  </body>
</html>