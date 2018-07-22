<?php  
$host = 'localhost:3306';  
$user = 'root';  
$pass = '';  
$dbname = 'forum';  
  
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
echo 'Connected successfully<br/>';  
  
$sql = "create table register(id INT AUTO_INCREMENT,Name VARCHAR(30) NOT NULL,user VARCHAR(20),password TEXT(20),primary key (id))";  
if(mysqli_query($conn, $sql)){  
 echo "Table register created successfully";  
}else{  
echo "Could not create table: ". mysqli_error($conn);  
}  
  
mysqli_close($conn);  
?>  
