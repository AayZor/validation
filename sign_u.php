<!DOCTYPE html>
<html>
<head></head>
<body>
<?php
$con=mysqli_connect("localhost","root","AayusH@2612","USER");
if(!$con)
    die("C1" . mysqli_connect_error());
$name=$_POST['Name'];
$mob=(int)$_POST['Mob'];
$gender=$_POST['Gender'];
$uname=$_POST['username'];
$pass=$_POST['password'];
$sql="insert into profile(Name,Gender,mob_no,user_name,password) values('".$name."','".$gender."','".$mob."','".$uname."','".$pass."')";
$q=mysqli_query($con, $sql);
if(!$q)
    die("C3" . mysqli_error($con));echo "record added";
mysqli_close($con);
?>
</body>
</html>
