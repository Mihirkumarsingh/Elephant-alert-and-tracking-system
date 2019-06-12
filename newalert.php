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
                 <li><a href="userdashboard.php">Dashboard</a></li>
                 
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
             <li><a href="userdashboard.php"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
             <li class="active">Alert</li>
           </ul>
         </div>
       </div>
     </div>
   </section>

   <section id="content">
     <div class="container">
      <div class="row">
       <div class="col-lg-12">
        <select name="allbooks" id="allbooks" style="color:black;">
         <option value="dummy">Choose Your Location To alert</option>
         <option value="Bagiya">Bagiya</option>
         <option value="Barjor">Barjor</option>
         <option value="Bene">Bene</option>
         <option value="Bhandri">Bhandri</option>
         <option value="Bimda">Bimda</option>
         <option value="Boki">Boki</option>
         <option value="Butanga">Butanga</option>
         <option value="Dharen">Dharen</option>
         <option value="Dhourasand">Dhourasand</option>
         <option value="Fuljhar">Fuljhar</option>
         <option value="Ghoghar">Ghoghar</option>
         <option value="Girla">Girla</option>
         <option value="Kansabel">Kansabel</option>
         <option value="Kersai">Kersai</option>
         <option value="Kilkila">Kilkila</option>
         <option value="Koleng">Koleng</option>
         <option value="Korna">Korna</option>
         <option value="Kotba">Kotba</option>
         <option value="Ludeg">Ludeg</option>
         <option value="Manora">Manora</option>
         <option value="Nakbar">Nakbar</option>
         <option value="Pharsabahar">Pharsabahar</option>
         <option value="Rebda">Rebda</option>
         <option value="Sahilata">Sahilata</option>
         <option value="Tumla ">Tumla</option>
         <script type="text/javascript">
         $(document).ready(function(){ /* PREPARE THE SCRIPT */
          $("#allbooks").change(function(){ /* WHEN YOU CHANGE AND SELECT FROM THE SELECT FIELD */
            var allbooks = $(this).val(); /* GET THE VALUE OF THE SELECTED DATA */
            var dataString = "allbooks="+allbooks; /* STORE THAT TO A DATA STRING */
            $.ajax({ /* THEN THE AJAX CALL */
              type: "POST", /* TYPE OF METHOD TO USE TO PASS THE DATA */
              url: "newalertsubmit.php", /* PAGE WHERE WE WILL PASS THE DATA */
              data: dataString, /* THE DATA WE WILL BE PASSING */
              success: function(rac){ /* GET THE TO BE RETURNED DATA */
               console.log(rac); 
             }
           });

          });
        });
         </script>
       </select>


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
