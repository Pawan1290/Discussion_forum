<?php
session_start();
?>

<?php
$servername="localhost";
$username="root";
$password="";
$dbname="forum";

$uid=$_POST["myusername"];
$pass=$_POST["mypassword"];

$_SESSION["user"]="$uid";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
 die("Connection failed:" .mysqli_connect_error());
}
$sql="SELECT *FROM register where user='$uid' and password='$pass'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
 while($row=mysqli_fetch_array($result))
{

header('Location: Forum.html');
}
}
else
{
header('Location: Login.html');
}



mysqli_close($conn);
?>
