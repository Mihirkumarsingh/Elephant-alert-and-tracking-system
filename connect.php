<?php
$link = mysqli_connect('localhost', 'root', '@123','jagdalpur');
if(mysqli_connect_error()){
    die('ERROR: Unable to connect:' . mysqli_connect_error());
    echo "<script>window.alert('Hi!')</script>";
}
    ?>
