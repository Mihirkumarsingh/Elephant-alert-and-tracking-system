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

       ul.tabs{
        margin: 0px;
        padding: 0px;
        list-style: none;
      }
      ul.tabs li{
        background: none;
        color: #222;
        display: inline-block;
        padding: 10px 15px;
        cursor: pointer;
      }

      ul.tabs li.current{
        background: #ededed;
        color: #222;
      }

      .tab-content{
        display: none;
        background: #ededed;
        padding: 15px;
      }

      .tab-content.current{
        display: inherit;
      }
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
     td{
      padding: 10px 10px 10px;
    }
    table{
     border-spacing: 1px;
     border-collapse: separate;
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
    border:2px solid black;
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
    background:white;
    border-radius:5px;
    border:0;
    cursor:pointer;
    color:black;
    font-size:24px;
    padding-top:10px;
    padding-bottom:10px;
    transition: all 0.3s;
    margin-top:-4px;
    font-weight:200;
  }
  [type="submit"]:hover { background:black;color:white; }
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
            <li class="active"><a href="dashboard.php">Dashboard</a></li>
            <!--   <li><a href="map.php">Map</a></li> -->
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

    <ul class="tabs">
      <li class="tab-link current" data-tab="tab-1">Search By Phone No</li>
      <li class="tab-link" data-tab="tab-2">Alert</li>
      <li class="tab-link" data-tab="tab-3">Create Users</li>
      <li class="tab-link" data-tab="tab-4">Details of Tracking</li>
      <li class="tab-link" data-tab="tab-5">Elephant Id</li>
    </ul>

    <div id="tab-1" class="tab-content current">
      <center>
        <h2>Search Your Nearest Employee</h2>
        <form id="loginform" method="POST" action="get-data.php" >      
         <input name="phone" id="phone" type="number" class="feedback-input" placeholder="Phone Number" required />
         <br>
         <input id="submit1" type="submit" name="submit1" value="SUBMIT"/>
         <br>
       </form>
     </center>
   </div>
   <div id="tab-5" class="tab-content">
    <?php
    error_reporting(E_ERROR | E_PARSE);
//Connect to the database
    include("connect.php");
    $sql =  mysqli_query($link, "SELECT * from elephant");
    $row = mysqli_num_rows($sql);
    echo "<table border='1' cellpadding='10'>

    <tr>

    <th>ELephant Id</th>

    <th>Place</th>

    <th>Time Of Creation</th>

    <th>Status</th>


    </tr>";
    $counter=0;
    while ($row = mysqli_fetch_array($sql)){
      $counter++;
      echo "<tr>";

      echo "<td>" .$row['sno']. "</td>";
      echo "<td>" .$row['place']. "</td>";


      echo "<td>" . $row['time'] . "</td>";

      echo "<td>" . $row['flag'] . "</td>";

      echo "</tr>";
      /*    echo " <b>Elephantid:- </b>" . $row["elephantid"]. " <t><b> Username:- </b>" . $row["userid"];*/
      echo "<br>"; 
    }
    echo "</table>";
    ?>
  </div>
  <div id="tab-2" class="tab-content">
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
          url: "alert.php", /* PAGE WHERE WE WILL PASS THE DATA */
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
 <div id="tab-3" class="tab-content">
   <center>
    <h2>Register User</h2>
    <form id="loginform2" method="POST" action="register.php" >      
     <input name="user" id="user" type="text" class="feedback-input" placeholder="User Id" required />
     <input name="aadhar" id="aadhar" type="number" class="feedback-input" placeholder="Aadhar No" required />  
     <input name="password" id="password" type="password" class="feedback-input" placeholder="Password" required />
     <br>
     <input id="submit2" type="submit" name="submit2" value="SUBMIT"/>
     <br>
   </form>
 </center>
</div>
<div id="tab-4" class="tab-content">
  <?php
  error_reporting(E_ERROR | E_PARSE);
//Connect to the database
  include("connect.php");
  $sql =  mysqli_query($link, "SELECT distinct t.elephantid, t.userid from track t,elephant e where  t.elephantid=e.sno AND e.flag=0");
  $row = mysqli_num_rows($sql);
  echo "<table border='1' cellpadding='10'>

  <tr>

  <th>Id</th>

  <th>Photo</th>

  <th>Username</th>

  <th>Elephantid</th>


  </tr>";
  $counter=0;
  while ($row = mysqli_fetch_array($sql)){
    $counter++;
    echo "<tr>";

    echo "<td>" . $counter. "</td>";

    echo "<td>";
    echo "<img src='img/avatar.png' alt='some text' >"; 
    echo "</td>";


    echo "<td>" . $row['userid'] . "</td>";

    echo "<td>" . $row['elephantid'] . "</td>";

    echo "</tr>";
    /*    echo " <b>Elephantid:- </b>" . $row["elephantid"]. " <t><b> Username:- </b>" . $row["userid"];*/
    echo "<br>"; 
  }
  echo "</table>";
  ?>
</div>
</div>
</div>
</div>
<br>

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
<script type="text/javascript">
$(document).ready(function(){

  $('ul.tabs li').click(function(){
    var tab_id = $(this).attr('data-tab');

    $('ul.tabs li').removeClass('current');
    $('.tab-content').removeClass('current');

    $(this).addClass('current');
    $("#"+tab_id).addClass('current');
  })

})</script>
</body>

</html>
