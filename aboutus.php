
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
            </div>



             <div class="panel panel-primary" id="bd">
                <div class="panel-body">
                  <div class="middle">
                   
                    <center><h1>About Us</h1></center>
                    <center><p>Welcome developer and everyone<br>We are library management system. This LMS can do following operations :</center> <left>System : Register Student, Admin Login, Librarian Login, Student Login, Fine Calculation, Book Reservation<br>Admin : Manage Librarians, Manage Books, Manage Students, View Feedback<br>Librarian : Issue Book, Return Book<br>Student : View Detail, Book Search, Reserve Book, Notice Board Service, Learn By Video Tutorial, Access Research Papers<br></p></left><br>
                    <left><h3>Who we are?</h3></left>
                    <p>We are the developer of this system. <br>Anil Tukanbanjar<br>Bimal Upadhaya<br>Jakesh Boahju<br>Shravan Kumar Mahato<br>5th semester Khwopa Engineering College, Library Management System Group<br>Special thanks to our colleague Kishor Giri</p>

   
              
                  </div>

                </div>

          </div>    
      

</div>


    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.js"></script>

</body>
</html>
