<?php
include_once "vendor/autoload.php";
 
// use myapp\flower\jasmin;
// use myapp\flower\rose;
use myapp\flower\config;
// use myapp\fruit\mango;
use myapp\flower\insertdata;
use myapp\flower\update;
// $name =new jasmin();
// $fruit=new mango();
// $rose=new rose();
// $config=new config();
 $insert=new insertdata();
 
 $insert->sql($_POST);
 $insert->read();
 $table="user";
 $result=$insert->read();
 
 if(isset($_REQUEST['de']))
 {
  $table="user";
   $insert->delete($_REQUEST,$table);
   

 }
 
  
  
 
 
 

// if(isset($_POST['submit'])){
//     $email=$_POST['email'];
//     $password=$_POST['password'];
//     $sql="INSERT INTO `user`(`email`, `password`) VALUES ('$email','$password')";
//     $result=mysqli_query($conn,$sql);

//     if($result)
//     {
//         echo "Data inserted";
//     }
//     else
//     {
//         echo "data not inserted";
//     }

// }
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
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
    </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </form>
</div>
<div class="container mt-3">
  <h2>User List</h2>
           
  <table class="table table-bordered">
    <thead>
       
      <tr>
        <th>Email</th>
        <th>Password</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php 
       while($row=mysqli_fetch_assoc($result))
       {

       
      
      ?>
      <tr>
        <td><?php echo $row['email']?></td>
        <td><?php echo $row['password']?></td>
        
      
        <td class="">
     

        <a class="" href="update.php?id=<?php echo $row['id']?>"><button type="submit" name="update" class="fa-solid fa-pencil ml-3 text-primary"></button></a>

        <a class="" href="index.php?de=<?php echo $row['id']?>"><button type="submit" name="update" class="fa-solid fa-trash-can ml-3 text-danger" ></button></a>
        </td>
        
      </tr>
      <?php
       }
       ?>
    </tbody>
  </table>
</div>

 

</body>
</html>
