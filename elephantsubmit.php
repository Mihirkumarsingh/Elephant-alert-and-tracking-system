
<?php 
error_reporting(E_ERROR | E_PARSE);
//Connect to the database
include("connect.php");
session_start();
$var1= $_POST['latitude'];

$var2= $_POST['longitude'];

$var3= $_POST['elephantid'];

$var4= $_POST['aadhar'];

$var5= $_SESSION['username2'];

$sql = "INSERT INTO track(elephantid,userid,aadhar,latitude,longitude)VALUES('$var3','$var5','$var4','$var1','$var2')";
$result = mysqli_query($link, $sql);
if($result){
	echo $sql;
	echo "done";
}


?>