<?php
  include 'connect.php';

  $id = $_GET['updateid'];

  $sql = "select * from `crud` where id=$id";
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_assoc($result);
  $name = $row['name'];
  $email = $row['email'];
  $phone = $row['phone'];
  $password = $row['password'];


  if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];

    $sql = "update `crud` set id=$id, name='$name', email='$email', phone='$phone', password='$password' where id=$id";
    
    $result = mysqli_query($con, $sql);

    if($result){
      echo '<div class="alert alert-primary" role="alert">
      Successfully Update!!
    </div>
    <div class="w-full text-center">
      <button class="btn btn-warning mt-3 my-3 ">
        <a href="display.php" class="text-decoration-none text-light w-100">View Table</a>
      </button>
    </div>';
    }else{
      die(mysqli_error($con));
    }
  }
?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>CRUD USERS</title>
</head>


<body>
  <div class="container w-75">
    <h2 class="text-center my-4">Update User</h2>
    <form method="post">
      <div class="mb-3">
        <label class="form-label">Name : </label>
        <input type="text" placeholder="Enter your name" class="form-control" name="name" autocomplete="off" value=<?php echo $name; ?>>
      </div>
      <div class="mb-3">
        <label class="form-label">Email : </label>
        <input type="email" placeholder="Enter your email" class="form-control" name="email" autocomplete="off" value=<?php echo $email; ?>>
      </div>
      <div class="mb-3">
        <label class="form-label">Phone Number : </label>
        <input type="text" placeholder="Enter your phone" class="form-control" name="phone" autocomplete="off" value=<?php echo $phone; ?>>
      </div>
      <div class=" mb-3">
        <label class="form-label">Password : </label>
        <input type="text" placeholder="Enter your password" class="form-control" name="password" autocomplete="off" value=<?php echo $password; ?>>
      </div>
      <button name="submit" class="btn btn-primary w-100">Update</button>
    </form>
  </div>
</body>
</html>