<?php
namespace myapp\flower;
class insertdata extends config{
 
public function sql($post)
{
    if(isset($_POST['submit'])){
        $email=$_POST['email'];
        $password=$_POST['password'];
        $sql="INSERT INTO `user`(`email`, `password`) VALUES ('$email','$password')";
        $result=mysqli_query($this->conn,$sql);
    
        if($result)
        {
           
            // echo "<script> alert('Data Successfully inserted')</script>";
            header("locationL:index.php");
         
        }
        else
        {
            echo "<script> alert('Data not inserted')</script>";
        }
    
    }

 
}
public function read()
{
    $sql="SELECT * FROM user";
    $result=mysqli_query($this->conn,$sql) or die("Query faild");
    return $result;
   
  
}
public function delete($post,$tablename)
{
    $this->table=$tablename;
  $id=$_REQUEST['de'];
  
  $sql="DELETE FROM $this->table WHERE id=$id";
$delete=mysqli_query($this->conn,$sql) or die("Query faild");
if($delete)
{
    header("location:index.php");
}
else{
    echo "Data not deleted";
}
}
public function update($post,$tablename,$filename)
{
    $id=$_REQUEST['id'];
    $this->table=$tablename;
    $this->filename=$filename;
    $sql="SELECT * FROM $this->table WHERE id=$id";
    $update=mysqli_query($this->conn,$sql) or die("Query faild");
     $row=mysqli_fetch_assoc($update);
     if(isset($_REQUEST['update']))
     {
         $email=$_REQUEST['email'];
         $password=$_REQUEST['password'];
        $sql="UPDATE $this->table SET `email`='$email',`password`='$password' WHERE id=$id";
        $result=mysqli_query($this->conn,$sql);
        if ($result) {
      
            // echo "<script>alert('Successfully updated!');</script>";
            header("location:$this->filename.php");
        
          }
          else {
            echo "Not inserted";
          }
     }
     return $row;
}

}