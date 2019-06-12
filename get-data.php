      <?php

      error_reporting(E_ERROR | E_PARSE);
      session_start();
      if (isset( $_SESSION['username']) == FALSE){
      	header("Location:admin.php");
      } ?>

      <!DOCTYPE html>
      <html lang="en">

      <head>
      	<meta charset="utf-8">
      	<title>Nitrr</title>
      	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
      	<meta name="description" content="" />
      	<!-- css -->
      	<link href="css/bootstrap.min.css" rel="stylesheet" />

      	<link href="css/style.css" rel="stylesheet" />
      	<!-- Theme skin -->
      	<link href="skins/default.css" rel="stylesheet" />
      	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
        <style>
        #show{
          white-space: pre-wrap;
        }
        </style>
      </head>

      <body>
      	<div id="wrapper">
      		<!-- start header -->
      		<header>
      			<div class="navbar navbar-default navbar-static-top">
      				<div class="container">
      					<div class="navbar-header">
      						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      							<span class="icon-bar"></span>
      							<span class="icon-bar"></span>
      							<span class="icon-bar"></span>
      						</button>
      						<a class="navbar-brand" href="index.html"><span>NIT </span>Raipur</a>
      					</div>
      					<div class="navbar-collapse collapse ">
      						<ul class="nav navbar-nav">
      							<li class="active"><a href="dashboard.php">Dashboard</a></li>
      							<li><a href="map.php">Map</a></li>
      							<li><a href="logout.php">Logout</a></li>
      						</ul>
      					</div>
      				</div>
      			</div>
      		</header>
      		<!-- end header -->
      		<section id="inner-headline">
      			<div class="container">
      				<div class="row">
      					<div class="col-lg-12">
      						<ul class="breadcrumb">
      							<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
      							<li class="active">Admin-Dashboard</li>
      						</ul>
      					</div>
      				</div>
      			</div>
      		</section>

      		<section id="content">
      			<div class="container">
      				<div class="row">
      					<div class="col-lg-12">
      						<h2>Detail of a Person</h2>
      						<?php
      						include 'connect.php';
      						error_reporting(E_ALL);
      						ini_set('display_errors', '1');
      						if(!empty($_POST["phone"])){
      							$phone = filter_var($_POST["phone"], FILTER_SANITIZE_NUMBER_INT);
      							$type=2;
      							$sql = "SELECT * FROM people where mobile='$phone'";


      							$result = mysqli_query($link, $sql);
      							if(!$result){
      								echo 'Error running the query!';

      							}else{

      								$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                     
                      echo "<br/>";
                      echo " <b>Name:-</b> " . $row["name"].   " <b> Address:- </b>" . $row["address"].   " <b> Phone:- </b>" . $row["mobile"].   " <b> User Type:- </b>" . $row["type"];
                                                       ob_start(); //Start output buffer
                                                       echo $row['latitude']; 
                                                       $output1 = ob_get_contents(); //Grab output
                                                       ob_end_clean();


                                                       echo "<br>";
                                                       ob_start(); //Start output buffer
                                                       echo $row['longitude']; 
                                                       $output2 = ob_get_contents(); //Grab output
                                                       ob_end_clean();
                                                       ?>
                                                       <br>
                                                       <br>
                                                       <div class="panel panel-default">
                                                        <div class="panel-heading"><center><h4>Your Regsitered Users Near Him In 10 km Circumference</h4></center></div>
                                                        <div class="panel-body">   <div id="show">

                                                        </div></div>
                                                      </div>
                                                      
                                                      <?php
                                                      error_reporting(E_ALL);
                                                      ini_set('display_errors', '1'); ?>
                                                      <script type="text/javascript">
                                                      var φ1=(((<?php echo $output1; ?>)*3.14159)/180);
                                                      var λ1= (((<?php echo $output2; ?>)*3.14159)/180);
                                                      var d=10;
                                                      var R=6400;
                                                      var north=0;
                                                      var east=((90*3.14159)/180);
                                                      var south=((180*3.14159)/180);
                                                      var west=((270*3.14159)/180);
                                                      var φ2 = Math.asin( Math.sin(φ1)*Math.cos(d/R) +
                                                        Math.cos(φ1)*Math.sin(d/R)*Math.cos(north) );
                                                      var λ2 = λ1 + Math.atan2(Math.sin(north)*Math.sin(d/R)*Math.cos(φ1),
                                                        Math.cos(d/R)-Math.sin(φ1)*Math.sin(φ2));
                                                      console.log((φ2*180)/3.14159);
                                                      console.log((λ2*180)/3.14159);

                                                      var φ3 = Math.asin( Math.sin(φ1)*Math.cos(d/R) +
                                                        Math.cos(φ1)*Math.sin(d/R)*Math.cos(east) );
                                                      var λ3 = λ1 + Math.atan2(Math.sin(east)*Math.sin(d/R)*Math.cos(φ1),
                                                        Math.cos(d/R)-Math.sin(φ1)*Math.sin(φ3));
                                                      console.log((φ3*180)/3.14159);
                                                      console.log((λ3*180)/3.14159);

                                                      var φ4 = Math.asin( Math.sin(φ1)*Math.cos(d/R) +
                                                        Math.cos(φ1)*Math.sin(d/R)*Math.cos(south) );
                                                      var λ4 = λ1 + Math.atan2(Math.sin(south)*Math.sin(d/R)*Math.cos(φ1),
                                                        Math.cos(d/R)-Math.sin(φ1)*Math.sin(φ4));
                                                      console.log((φ4*180)/3.14159);
                                                      console.log((λ4*180)/3.14159);

                                                      var φ5 = Math.asin( Math.sin(φ1)*Math.cos(d/R) +
                                                        Math.cos(φ1)*Math.sin(d/R)*Math.cos(west) );
                                                      var λ5 = λ1 + Math.atan2(Math.sin(west)*Math.sin(d/R)*Math.cos(φ1),
                                                        Math.cos(d/R)-Math.sin(φ1)*Math.sin(φ5));
                                                      console.log((φ5*180)/3.14159);
                                                      console.log((λ5*180)/3.14159);
                                                      $.ajax({
                                                        type: "POST",
                                                        url: 'test.php',
                                                        data: {"val1": (φ2*180)/3.14159,"val2":(λ2*180)/3.14159,"val3": (φ3*180)/3.14159,"val4":(λ3*180)/3.14159,"val5": (φ4*180)/3.14159,"val6":(λ4*180)/3.14159,"val7": (φ5*180)/3.14159,"val8":(λ5*180)/3.14159},
                                                        success: function(data){
                                                          var xyz=data.replace(/#/g,"\n");
                                                          console.log(xyz);
                                                          xyz=xyz.replace(/name/gi, '<strong>$&</strong>');
                                                          xyz=xyz.replace(/Address/gi, '<strong>$&</strong>');
                                                          xyz=xyz.replace(/Phone/gi, '<strong>$&</strong>');
                                                          document.getElementById('show').innerHTML=xyz;    
                                                        }
                                                      });
      </script>

      <?php 
    }}?>
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
