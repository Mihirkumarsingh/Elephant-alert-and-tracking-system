      <?php

      error_reporting(E_ERROR | E_PARSE);
      session_start();
      if (isset( $_SESSION['aadhar']) == FALSE){
        header("Location:user.php");
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
      <header>
        <div class="navbar navbar-default navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php"><span>NIT </span>Raipur</a>
            </div>
            <div class="navbar-collapse collapse ">
              <ul class="nav navbar-nav">
                <li class="active"><a href="userdashboard.php">Dashboard</a></li>
                <li><a href="logout2.php">Logout</a></li>
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
           <li class="active">End Process</li>
         </ul>
       </div>
     </div>
   </div>
 </section>

 <section id="content">
   <div class="container">
    <div class="row">
      <center>
       <?php 
       echo $_SESSION['aadhar'];

       ?>
       <h3>End Process</h3>

       <form id="loginform3" method="POST" action="endsubmit.php" >      

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
        <input id="submit" type="submit" name="submit" value="End"/>
      </form>
    </center>
  </div>
</div>
</div>
</section>
<?php include "footer.php";?>
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
