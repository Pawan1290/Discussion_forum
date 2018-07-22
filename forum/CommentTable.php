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
  
$sql = "create table comment(ID INT AUTO_INCREMENT,message TEXT(1000) NOT NULL,username VARCHAR(20),category int(10),primary key (id))";  
if(mysqli_query($conn, $sql)){  
 echo "Table comment created successfully";  
}else{  
echo "Could not create table: ". mysqli_error($conn);  
}  
  
mysqli_close($conn);  
?>  
