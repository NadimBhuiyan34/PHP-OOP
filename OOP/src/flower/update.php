<?php
namespace myapp\flower;
class update extends config{

    public function updatedata($post,$tablename,$filename){
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


?>