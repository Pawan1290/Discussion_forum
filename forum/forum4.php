<?php
session_start();
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><head><title>Forum page</title>

<link href="css/user_styles.css" rel="stylesheet" type="text/css">
<script language="JavaScript" src="js/user.js">
</script>
</head>
<body style="background-color: rgb(255, 102, 0); color: rgb(0, 0, 0);" alink="#ee0000" link="#0000ee" vlink="#551a8b">
<div style="text-align: center;"><big><big><big><big><big><big><big><big><big>Discussion Forum</big></big></big></big></big></big></big></big></big> </div><br/><br/><br/><br/>
<form name="form3" method="post" action="https://localhost/Forum/entry.php"
<br>
<br>
<table align="center" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" width="300">
<tbody>
<tr>
<td>
<div style="text-align: center;"><?php $host = 'localhost'; $user = 'root'; $pass = ''; $dbname = 'forum'; $conn = mysqli_connect($host, $user, $pass,$dbname); if(!$conn){ die('Could not connect: '.mysqli_connect_error()); } 
else{

$_SESSION["cate"]="4";
$result=mysqli_query($conn,"SELECT * FROM comment WHERE category=4 ");  
}
?>
<table style="margin-left: 0px; width: 825px;" border="0">
<tbody>
<tr>
<th style="width: 76px; text-align: center; background-color: rgb(255, 204, 0);">Comment by</th>
<th style="width: 182px; text-align: center; background-color: rgb(255, 204, 0);">Comments</th>

</tr>
<?php while($row=mysqli_fetch_array($result) ):?>
<tr ">
<td style="width: 76px; background-color: rgb(255, 255, 102); text-align: left;"><?php echo $row['username']; ?>
</td>
<td style="width: 182px; background-color: rgb(255, 255, 102); text-align: left;"><?php echo $row['message'] ?>
</td>
</tr>
<?php endwhile ?>
</tbody>
</table>
<?php mysqli_close($conn); ?>
</div>
<br>
</td>
</form>
</tr>
</tbody>
</table>
<br>
<br>

<big><big><big>Write comment here:</big></big></big><br>
<textarea cols="55" rows="3" name="comment" placeholder="Comment Here"></textarea><br>
<input name="Submit" value="Send" type="submit">
</form>
</body></html>
