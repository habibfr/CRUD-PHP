<?php 
  include 'connect.php';

  if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $sql = "delete from `crud` where id=$id";

    $result = mysqli_query($con, $sql);
    

    if($result){
      echo '<div class="alert alert-primary" role="alert">
      Successfully delete!!
    </div>';
    }else{
      die(mysqli_error($con));
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <div class="w-full text-center">
    <button class="btn btn-warning mt-3 my-3 ">
      <a href="display.php" class="text-decoration-none text-light w-100">View Table</a>
    </button>
  </div>

</body>
</html>