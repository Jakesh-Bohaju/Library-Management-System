<html>
<head>
	<title>Student's Section</title>
	<link rel="stylesheet" type="text/css" href="css/student.css">
</head>
	<?php
	include('student_session.php');
	include('admin_header.php');
	
	?>
	<body class="body1">
		<div class="container-fluid">
			<?php
			include('admin_navbar.php');
			include('student_header.php');
			?>
             
        <!--//End of nav-bar-->

           <div class="row">
                <?php
						        include('std_right_bar.php');
						        //include('profile.php');
						        ?>
                <div class="cent">
                	                <div class="panel panel-primary" id="aa">
				                           <div class="panel-body">					                            
				                              <img src="images/ol.jpg" style="height:300px; width:500px;">
				                              <h1>From here you are able to:</h1>
				                              <ul>
				                              	<li>Query your current library status</li>
				                              	<li>Reserve a book online</li>
				                              	<li>Watch video tutorials</li>
				                              	<li>Search book online</li>
				                              	<li>Drop your feedback regarding college library</li>
				                              </ul>
				                              

					                        </div>
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
