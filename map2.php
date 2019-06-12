
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
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="map2.php">Map</a></li>
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
       <li class="active">Path Tracking</li>
     </ul>
   </div>
 </div>
</div>
</section>

<section id="content">
 <div class="container">
  <div class="row">
   <div class="col-lg-12">

    <h3>Elephant Path Tracking System</h3>

    <form id="loginform3" method="GET" action="maptest.php" >      

      <select name="elephant" class="form-control">
        <option value="pick">Pick The Elephant Id</option>
        <?php
        error_reporting(E_ERROR | E_PARSE);
//Connect to the database
        include("connect.php");
        $sql =  mysqli_query($link, "SELECT * From elephant WHERE flag=0");
        $row = mysqli_num_rows($sql);
        while ($row = mysqli_fetch_array($sql)){
          echo "<option value='". $row['sno'] ."'>" .$row['sno'] ."</option>" ;
        }
        ?>

      </select>
      <br>
      <input id="submit" type="submit" name="submit" value="Show Map"/>
    </form>

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
