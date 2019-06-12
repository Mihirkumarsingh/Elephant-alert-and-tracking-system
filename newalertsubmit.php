<?php
include 'connect.php';

error_reporting(E_ALL);
ini_set('display_errors', '1');
if(!empty($_POST["allbooks"]) && $_POST["allbooks"]!="dummy"){

  $loc=$_POST["allbooks"];
  $sql = "SELECT * FROM people where address='$loc'";
  $result = mysqli_query($link, $sql);
  if($result){
    $noofrows=mysqli_num_rows($result);
    while($row1 = mysqli_fetch_assoc($result)) {
     $curl = curl_init();
     $authKey = "191191A941Ge9tPD5a4cded0";
     $mobileNumber =  $row1["mobile"];
     curl_setopt_array($curl, array(
      CURLOPT_URL => "",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_SSL_VERIFYHOST => 0,
      CURLOPT_SSL_VERIFYPEER => 0,
      ));

     $response = curl_exec($curl);
     $err = curl_error($curl);

     curl_close($curl);

     if ($err) {
      echo "cURL Error #:" . $err;
    } else {
      echo $response;
    }
  }
}
else{
  echo "no";
}  

}
?>