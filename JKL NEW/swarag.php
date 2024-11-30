<?php
$c=mysqli_connect("localhost","root","admin","srinidhi");
$s=$_GET['user'];
$w=$_GET['pass'];
$a="select * from swarag where username='$s' and password='$w'";
$r=mysqli_query($c,$a);
$p=0;
while($t=mysqli_fetch_array($r))
{
echo "welcome $s to our website";
$p=1;
break;
}
if($p==0)
{echo "invalid username or password";
}
?>


