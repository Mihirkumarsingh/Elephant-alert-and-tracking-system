<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Nitrr</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <!-- css -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
  <link href="css/jcarousel.css" rel="stylesheet" />
  <link href="css/flexslider.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <!-- Theme skin -->
  <link href="skins/default.css" rel="stylesheet" />
  
  <!-- CSS styling of admin login portal-->
  <style>
  .button {
   width: 110px;
   padding-top: 5px;
   padding-bottom: 5px;
   text-align: center;
   color: #000;
   text-transform: uppercase;
   font-weight: 60;
   margin-top:8px;
   margin-left: 30px;
   margin-bottom: 30px;
   cursor: pointer;
   display: inline-block;
 }
 .button-1 {
   background-color: transparent;
   border: 3px solid #00d7c3;
   border-radius: 50px;
   -webkit-transition: all .15s ease-in-out;
   transition: all .15s ease-in-out;
   color: #00d7c3;
 }
 .button-1:hover {
   box-shadow: 0 0 10px 0 #00d7c3 inset, 0 0 20px 2px #00d7c3;
   border: 3px solid #00d7c3;
 }
 form { max-width:420px; margin:50px auto; }

 .feedback-input {
  color:black;
  font-family: Helvetica, Arial, sans-serif;
  font-weight:500;
  font-size: 18px;
  border-radius: 5px;
  line-height: 22px;
  background-color: transparent;
  border:2px solid #CC6666;
  transition: all 0.3s;
  padding: 13px;
  margin-bottom: 15px;
  width:90%;
  box-sizing: border-box;
  outline:0;
}

.feedback-input:focus { border:2px solid #CC4949; }

textarea {
  height: 150px;
  line-height: 150%;
  resize:vertical;
}

[type="submit"] {
  font-family: 'Montserrat', Arial, Helvetica, sans-serif;
  width: 90%;
  background:#CC6666;
  border-radius:5px;
  border:0;
  cursor:pointer;
  color:white;
  font-size:24px;
  padding-top:10px;
  padding-bottom:10px;
  transition: all 0.3s;
  margin-top:-4px;
  font-weight:700;
}
[type="submit"]:hover { background:#CC4949; }
</style>

</head>

<body>
  <div id="wrapper">
   <!-- start header -->
   <?php include 'header.php' ?>
   <!-- end header -->
   <section id="inner-headline">
    <div class="container">
     <div class="row">
      <div class="col-lg-12">
       <ul class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
        <li class="active">Admin-Login</li>
      </ul>
    </div>
  </div>
</div>
</section>

<section id="content">
  <div class="container">
   <div class="row">
    <div class="col-lg-12">
      <center>
        <h1>Admin Login Portal</h1>
        <form id="loginform" method="POST" action="adminsubmit.php" >      

          <input name="email" id="email" type="text" class="feedback-input" placeholder="Email" required />
          <input name="password" id="password" type="password" class="feedback-input" placeholder="Password" required />
          <a  href="forgotpassword.php" style="float: right;padding-bottom:4%;margin-right:40px;color:white;">Forgot Password</a>
          <br>
          <input type="submit" value="SUBMIT"/>
          <br>

        </form>
      </center>
    </div>
  </div>
</div>
</section>
<!--footer-->
<?php include 'footer.php' ?>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/google-code-prettify/prettify.js"></script>
<script src="js/portfolio/jquery.quicksand.js"></script>
<script src="js/portfolio/setting.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>

</body>

</html>
