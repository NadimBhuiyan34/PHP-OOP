<?php
include_once "vendor/autoload.php";
use myapp\flower\config;
// use myapp\flower\insertdata;
use myapp\flower\update;
// $insert=new insertdata();
 $table="user";
 $update=new update();
 $row=$update->updatedata($_REQUEST,$table,'index');

 
 
//  $filename="nadim";
//  $row=$insert->update($_REQUEST,$table,'index');
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/496c26838e.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="container mt-3 card w-50">
 <div class="card-header"><h1 class="text-center">Login from</h1></div>

  <form action="" method="post">
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" value="<?php echo $row['email']?>"name="email" required>
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="text " class="form-control" id="pwd" value="<?php echo $row['password']?>" name="password" required>
    </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary" name="update">UPDATE</button>
  </form>
</div>
 
 



     



 

</body>
</html>
