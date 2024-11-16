<?php
    include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Users</title>
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="addUser.php" class="text-light">Add User</a></button>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">sno</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $query = "SELECT * FROM users";
        $result = mysqli_query($conn, $query);
        if($result){
            $id = 0;
            while($row = mysqli_fetch_assoc($result)){
                $id += 1;
                $name = $row['name'];
                $email = $row['email'];
                $phone = $row['mobile'];
                $password = $row['password'];

                echo '<tr>
                        <th scope="row">'.$id.'</th>
                        <td>'.$name.'</td>
                        <td>'.$email.'</td>
                        <td>'.$phone.'</td>
                        <td>'.$password.'</td>
                        <td>
                            <button class="btn btn-primary"><a href="update.php?id='.$row['id'].'" class="text-light">Update</a></button>
                            <button class="btn btn-danger"><a href="delete.php?id='.$row['id'].'" class="text-light">Delete</a></button>
                        </td>
                      </tr>';
            }
        }
    ?>
    
  </tbody>
</table>
    </div>
</body>
</html>