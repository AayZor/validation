<!DOCTYPE html>
<html>
<head></head>
<body>
<?php
$con=mysqli_connect("localhost","root","AayusH@2612","USER");
if(!$con)
    die("C1" . mysqli_connect_error());
$uname=$_POST['username'];
$pass=$_POST['password'];
$sql="select user_id from profile where user_name='".$uname."' and password='".$pass."'";
$q=mysqli_query($con, $sql);
if(!$q)
    die("C3" . mysqli_error($con));
    $var=mysqli_fetch_array($q,MYSQLI_ASSOC);
        echo "User id selected is:" . $var["user_id"];
mysqli_free_result($q);
mysqli_close($con);
?>
</body>
</html>
