
<html>
<head>
	<title>Reservation Section</title>
	<link rel="stylesheet" type="text/css" href="css/student.css">
  <style type="text/css">
   #example{
        width: 99%;
        margin-top:10px;
    }</style>


</head>
	<?php
	include('student_session.php');
	include('admin_header.php');
	
	?>
 
	<body class="body1" onload="Captcha();">
    
		<div class="container-fluid">
			<?php
			include('admin_navbar.php');
			include('student_header.php');
			include('db_con.php');
			$crn=$_SESSION['id1'];
			$query1="select * from book_reserved where crn='$crn'";
            $result1 = mysql_query($query1)or die(mysql_error());
            $num_row1 = mysql_num_rows($result1);
            $query2= "select book_title from book_reserved where crn='$crn'";
            $result2=mysql_query($query2) or die (mysql_error());
            $book_title=mysql_fetch_assoc($result2);




      ?>
             
        <!--//End of nav-bar-->

           <div class="row" >

                  <?php
                    include('std_right_bar.php');

                    ?>
               
                <div class="cent" >
                      <div class="panel panel-primary" id="aa" >


                         

                          

                           
                            <img src="images/notice1.jpg" alt="" width='700px' height='700px'>






                    </div>    
						        
                </div>
                <!--//End of cent-->
            </div>
            <!--//End of row-->
    </div>
    <!--//End of container-fluid-->


 <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.js"></script>




 


	</body>
</html>




