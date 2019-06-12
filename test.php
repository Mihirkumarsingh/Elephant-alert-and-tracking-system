
<?php 
include 'connect.php';
$var1= $_POST['val1'];
$var1=(double)$var1;
$var2= $_POST['val2'];
$var2=(double)$var2;
$var3= $_POST['val3'];
$var3=(double)$var3;
$var4= $_POST['val4'];
$var4=(double)$var4;
$var5= $_POST['val5'];
$var5=(double)$var5;
$var6= $_POST['val6'];
$var6=(double)$var6;
$var7= $_POST['val7'];
$var7=(double)$var7;
$var8= $_POST['val8'];
$var8=(double)$var8;
$max1;
$min1;
$max2;
$min2;
if($var1>$var5){
	$max1=$var1;
	$min1=$var5;
}
else{
	$max1=$var5;
	$min1=$var1;
}
if($var4>$var8){
	$max2=$var4;
	$min2=$var8;
}
else{
	$max2=$var8;
	$min2=$var4;
}

$sql1 = "SELECT * FROM people where latitude BETWEEN $min1 AND $max1 AND longitude BETWEEN $min2 AND $max2 AND 	type=2";
$result1 = mysqli_query($link, $sql1);
if($result1){
	$noofrows=mysqli_num_rows($result1);

	while($row1 = mysqli_fetch_assoc($result1)) {
		echo " Name:- " . $row1["name"]. "  Address:- " . $row1["address"]. "  Phone:- " . $row1["mobile"]. "  User Type:- " . $row1["type"];
		echo "#";
	}
}   
else{
	echo "nahi chaala";
}  
?>