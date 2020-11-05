<?php
$db=mysqli_connect("localhost","root","");
mysqli_select_db($db,"login");
$query= "select * from users";
$raw=mysqli_query($db,$query);
while($res=mysqli_fetch_array($raw))
{
	$data[]=$res;
}
print(json_encode($data));
?>
