<header>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
</header>
<?php
error_reporting(E_ERROR | E_PARSE);
//Connect to the database
include("connect.php");
session_start();
$email=$_POST['email'];
$password=$_POST['password'];
$email = mysqli_real_escape_string($link, $email);
$password = mysqli_real_escape_string($link, $password);
$password = hash('sha256', $password);
        //Run query: Check combinaton of email & password exists
$sql = "SELECT * FROM admin WHERE username='$email' AND password='$password'";
$result = mysqli_query($link, $sql);
if(!$result){
  echo '<div class="alert alert-danger">Error running the query!</div>';
  exit;
}
            //If email & password don't match print error
$count = mysqli_num_rows($result);
if($count !== 1){
  ?>
  <script type="text/javascript">swal("Wrong Username or Password");</script>
  <?php
  echo "<meta http-equiv='refresh' content='1;url=admin.php'>";
  die;
}
else {
        //log the user in: Set session variables
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

  $_SESSION['id']=$row['id'];
  $_SESSION['username']=$row['username'];
  echo "<meta http-equiv='refresh' content='0.1;url=dashboard.php'>";
}
?>