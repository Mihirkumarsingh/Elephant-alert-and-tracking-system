<header>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
</header>
<?php
error_reporting(E_ERROR | E_PARSE);
//Connect to the database
include("connect.php");
session_start();
$email=$_POST['user'];
$password=$_POST['password'];
$aadhar=$_POST['aadhar'];
$email = mysqli_real_escape_string($link, $email);
$password = mysqli_real_escape_string($link, $password);
        //Run query: Check combinaton of email & password exists
$sql = "INSERT INTO registeruser(userid,password,aadhar)VALUES('$email','$password','$aadhar')";
$result = mysqli_query($link, $sql);
if($result){
  ?>
  <script type="text/javascript">swal("User Created Successfully !");</script>
  <?php
  echo "<meta http-equiv='refresh' content='1;url=dashboard.php'>";
  die;
}

?>