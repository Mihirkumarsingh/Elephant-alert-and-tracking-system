<?php
error_reporting(E_ERROR | E_PARSE);
//Connect to the database
include("connect.php");
session_start();
$_SESSION['elephant'] =$_POST['elephant'];
?>
<header>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
 <script type="text/javascript">
 var userPosition = 
 {
  lat: '',
  lon: ''};
  if(navigator.geolocation)
  {
    navigator.geolocation.getCurrentPosition(function(position){
      userPosition.lat = position.coords.latitude;
      userPosition.lon = position.coords.longitude;
      console.log(userPosition.lat);
      console.log(userPosition.lon);
      $.ajax({
        type: "POST",
        url: 'elephantsubmit.php',
        data: {"latitude":userPosition.lat ,"longitude":userPosition.lon,"elephantid": <?php echo $_POST['elephant'];?>,"aadhar":<?php echo $_SESSION['aadhar'];?>},
        success: function(data){
          console.log(data);
        }
      });
    });
    
  }
  else
  {
    alert("Geolocation not supported by your browser");
  }  



  </script>

</header>
