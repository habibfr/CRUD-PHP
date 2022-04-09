<?php
  include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD Operation</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
  <div class="container w-75">
    <button class="btn btn-primary mt-5 mb-2">
      <a href="user.php" class="text-light text-decoration-none">Add User</a>
    </button>

    <table class="table table-bordered text-center">
      <thead>
        <tr class="bg-warning">
          <th scope="col">No</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Phone</th>
          <th scope="col">Password</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>

      <?php
        $sql = "Select * from `crud`";
        $result = mysqli_query($con, $sql);
        $number = 1;
        
        if($result){
          while($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $name = $row['name'];
            $email = $row['email'];
            $phone = $row['phone'];
            $password = $row['password'];
            echo '<tr>
              <th scope="row">'.$number++.'</th>
              <td>'.$name.'</td>
              <td>'.$email.'</td>
              <td>'.$phone.'</td>
              <td>'.$password.'</td>
              <td>
                <div class="w-full">
                  <button class="btn btn-primary">
                    <a href="update.php?updateid='.$id.'" class="text-decoration-none text-light">Update</a>
                  </button>
                  <button class="btn btn-danger">
                  <a href="delete.php?deleteid='.$id.'" class="text-decoration-none text-light">Delete</a>
                  </button>
                </div>
              </td>
            </tr>';
          }
        }
      ?>
      </tbody>
    </table>
  </div>

  <footer class="w-100 text-center fixed-bottom bg-dark text-light py-3">
    Made by Habibfr.
  </footer>
</body>
</html>