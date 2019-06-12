<header>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
</header>
<?php 
error_reporting(E_ERROR | E_PARSE);
//Connect to the database
include("connect.php");
session_start();
$var3= $_POST['elephant'];
$sql = "UPDATE elephant SET flag=1 where sno=$var3";
$result = mysqli_query($link, $sql);
if($result){
  ?>
  <script type="text/javascript">swal("Tracking Process For This Elephant ended Sucessfully!");</script>
  <?php
  echo "<meta http-equiv='refresh' content='1;url=end.php'>";
  die;
}


?>