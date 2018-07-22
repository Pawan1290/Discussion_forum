<?php  
$host = 'localhost';  
$user = 'root';  
$pass = '';  
$dbname = 'forum';  
  
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
echo 'Connected successfully<br/>';  


 $first=$_POST['f1'];
 $user=$_POST['f3'];
 $pass=$_POST['p1'];
$pass1=$_POST['p2'];
if($pass==$pass1)
{
$sql = "INSERT INTO register(Name,user,password) VALUES('$first','$user','$pass')";  
if(mysqli_query($conn, $sql)){  
 Header('Location: Login.html'); 
}else{  
echo "Could not insert record: ". mysqli_error($conn);  
}  
}  
mysqli_close($conn);  
?>  
