<?php
session_start();
?>

<?php
$servername="localhost";
$username="root";
$password="";
$dbname="forum";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
 die("Connection failed:" .mysqli_connect_error());
}
$com=$_POST["comment"];
$us=$_SESSION["user"];
$cate=$_SESSION["cate"];
$sql = "INSERT INTO comment(message,username,category) VALUES('$com','$us',$cate)";  
if(mysqli_query($conn, $sql)){  
 Header('Location: Forum page.php'); 
}else{  
echo "Could not insert record: ". mysqli_error($conn);  
}  
mysqli_close($conn);  
?>  
