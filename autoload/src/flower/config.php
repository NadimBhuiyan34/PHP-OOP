<?php
namespace myapp\flower;
class config{
    public $servername = "localhost";
    public $username = "root";
    public $password = "root";
    public $database_name="demo";
    public $conn='';
    public function __construct(){
        $conn=$this->conn = mysqli_connect($this->servername, $this->username, $this->password,$this->database_name);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
          }
          else{
            // echo "Connected successfully";
             
            
          }
          return $conn;
    }
}
 

?>