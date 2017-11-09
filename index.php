<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Library Management System</title>
    <link rel="icon" href="images/lmslogo.png">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.min.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<?php
                    include('studentlogin.php');
                    include('student_new_acc.php');
                    ?>


  <body class="body">

    <div class="container-fluid" id="cont">
        <div class="container-fluid" id="top">
                <img id="brand-image" src="images/logo.png">
                <h1>Library Management System<br><small><font color="yellow">Everything Online</font></small></h1>
                <div class="pull-right">
                    <?php
                    $Today = date('y:m:d');
                    $new = date('l, F d, Y', strtotime($Today));
                    echo $new;
                    ?>
              </div>
              <br>
              <a href="aboutus.php" class="btn btn-primary btn-lg" title="click here to go to the admin login page">About Us</a>
                <a href="adminlogin.php" class="btn btn-primary btn-lg" title="click here to go to the admin login page">Admin Login</a>
                
        </div>

        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                   
<div class="motion">
  <br>
              <marquee direction="left">5th semester student must return books before August 25th 2016 &nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;&nbsp;6th semester student must return books before August 26th 2016&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;&nbsp;Books and Magazines&nbsp;&nbsp;&nbsp;&nbsp;</marquee>
             </div>
                          
                </div><!-- navbar collapse end -->
            </div><!-- container-fluid end -->
        </nav>

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
             <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
             </ol>

             <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src="banner/banner.jpg" alt="">
                      <div class="carousel-caption"><h1>Get Unlimited College Resources</h1></div>
                    </div>

                    <div class="item">
                      <img src="banner/banner2.jpg" alt="">
                    </div>

                    <div class="item">
                      <img src="banner/banner2.jpg" alt="">
                    </div>

                    <div class="item">
                      <img src="banner/banner2.jpg" alt="">
                    </div>
              </div>

              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
        </div>
    </div>


     <div class="container-fluid">
      <div class="row" id="mid">
         
          <div class="col-md-10">
            <div class="jumbotron" id="rs">
               <h1>You are warmly welcome!!!!</h1>
               <p>Get Unlimited digital resources right from here. You can view your library status. Now you can reserve book from here. Get every subject's notes, question papers, manuals, as well as other educational stuffs. You can also upload resources to share with your friends. </p> 
               <br>
               <div class="row">
                   <div class="col-lg-6">
                       <h3>Be a member to access full resources</h3>
                       <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal6">Get started now</button>
                    </div>
                    <div class="col-lg-4">
                        <h3>Already a member?</h3>
                        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal5">Sign in</button>
                                        </div>
                </div>
            </div>    
        </div><!--/span-->
      </div><!--/row-->

      <hr>
  

      <footer>
        <font color="white"><p><center>&copy;Library Management System<br>All Rights Reserved<br>Designed and developed by:lms group 5th semester 2070 batch</center></p></font>
      </footer>
    </div><!--/.container-->

 <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.js"></script>

     </body>
</html>


<?php
  $q=mysql_query("select * from book_reserved");
  while($row=mysql_fetch_array($q))
  {
    $biid=$row['book_id'];
    $redate=$row['reserved_date'];
    $pdate=date("Y-m-d H:i:s");
    $v=$pdate-$redate;
    $date = date("Y-m-d H:m:s", strtotime('-24 hours', time()));
       $ds = new DateTime($redate); 
   $de  = new DateTime($pdate); 
    $interval = $de->diff($ds);
    $a= $interval->format("%a");
    $b=mysql_query("SELECT (EXTRACT(epoch FROM (SELECT (NOW() - '$redate')))/86400)::int");
    echo $b;
   if($b>86400)
  {
      $istt="insert into newbook select * from book where book_id='$biid'";
mysql_query($istt)or die(mysql_error());

      $qq="delete from book_reserved where book_id='$biid'";
mysql_query($qq)or die(mysql_error());




}
else
{
  echo "no found";
}
}
?>
