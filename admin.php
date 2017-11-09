<?php
include('db_con.php');
include('user_session.php');
include 'delete_modal.php';
?>
<!DOCTYPE html>
<html lang="en">
  <style type="text/css">
  .panel-body{
    background-color:;
    height: 545px;
  }
  .middle h1{
    background-color: blue;
    padding: 5px;
    margin-top: -5px;
    border-radius: 5px;
    color: white;
  }
   #bd{
      width: 99.75%;
      margin-left: 0.25%;
    }
  </style>
   <?php
      include('admin_header.php');
   ?>
   <head>
     <link rel="stylesheet" type="text/css" href="css/AdminLTE.min.css">
   </head>
<body>
    <div class="container-fluid">
      <?php
             include('admin_navbar.php');
         ?>

         <?php

                   if($_SESSION['id']==1)
                   {
                   ?>
        <div class="row" id="mid">
          <?php
              include ('admin_leftsidebar.php');
         ?>

        
          <div class="col-md-10">
             <div class="panel panel-primary" id="bd">
                <div class="panel-body">
                  <div class="middle">
                   
                    <center><h1>Welcome To Admin Panel</h1></center>
                    <center><p>Welcome Admin...<br>You can operate various function of library management system<br>Manage Librarians<br>Manage Books<br>Manage Students<br>View Feedback</p></center>


                  </div>
                </div>
          </div>    
        </div>
    </div>
                    <?php
                  }
                  else
                  {
                    ?>
                    <div class="row" id="mid">
          <?php
              include ('librarian_leftsidebar.php');
         ?>

        
          <div class="col-md-10">
             <div class="panel panel-primary" id="bd">
                <div class="panel-body">
                  <div class="middle">
              
                    <center><h1>Welcome To Librarian Panel</h1></center>
                    <center><p>Welcome Librarian...<br>You can operate various function of library management system<br>Issue Book<br>Return Books</p></center>

 </div>
                </div>
          </div>    
        </div>
    </div>
                    <?php
                  }
                  ?>

                     


                 



    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.js"></script>

</body>
</html>
