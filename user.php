<?php
  include 'connect.php';

  if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];

    
    $sql = "insert into `crud` (name, email, phone, password)
    values('$name', '$email', '$phone', '$password')";
    
    $result = mysqli_query($con, $sql);
  

    if($result){
      header('location:display.php');
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
    <button class="btn btn-warning mt-3 my-3 w-100">
      <a href="display.php" class="text-decoration-none text-light w-100">View Table</a>
    </button>

    <h2 class="text-center my-4">Add User</h2>
    
    <form method="post">
      <div class="mb-3">
        <label class="form-label">Name : </label>
        <input type="text" placeholder="Enter your name" class="form-control" name="name" autocomplete="off">
      </div>
      <div class="mb-3">
        <label class="form-label">Email : </label>
        <input type="email" placeholder="Enter your email" class="form-control" name="email" autocomplete="off">
      </div>
      <div class="mb-3">
        <label class="form-label">Phone Number : </label>
        <input type="text" placeholder="Enter your phone" class="form-control" name="phone" autocomplete="off">
      </div>
      <div class=" mb-3">
        <label class="form-label">Password : </label>
        <input type="password" placeholder="Enter your password" class="form-control" name="password" autocomplete="off">
      </div>
      <button name="submit" class="btn btn-primary w-100">Submit</button>
    </form>


  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
</body>
</html>