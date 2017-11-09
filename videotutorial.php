<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	

	<head>
		<title>Videos Tutorial</title>
	<link rel="stylesheet" type="text/css" href="css/student.css">
  <style type="text/css">
   #example{
        width: 99%;
        margin-top:10px;
    }</style>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<meta name="keywords" content="VideoLightBox, LightBox, Video Gallery, how to insert video in html, javascript video player" />
		<meta name="description" content="VideoLightBox Gallery created with VideoLightBox, a free wizard program that helps you easily generate beautiful Lightbox-style web video galleries" />
		<link rel="shortcut icon" href="favicon.ico" />
		
		<!-- Start VideoLightBox.com HEAD section -->
		<link rel="stylesheet" href="index_videolb/videolightbox.css" type="text/css" />
		
			<link rel="stylesheet" type="text/css" href="index_videolb/overlay-minimal.css"/>
			<script src="index_videolb/jquery.js" type="text/javascript"></script>
			<script src="index_videolb/swfobject.js" type="text/javascript"></script>
		<!-- End VideoLightBox.com HEAD section -->



	</head>
		<?php
	include('student_session.php');
	include('admin_header.php');
	
	?>
	<body bgcolor="#f0f0f0" class="body1">
		<div class="container-fluid">
			<?php
			include('admin_navbar.php');
			include('student_header.php');
			include('db_con.php');
			$crn=$_SESSION['id1'];
			$query1="select * from book_issue where crn='$crn'";
      $query2="select 'book_title' from book_reserved where crn='$crn'";
            $result1 = mysql_query($query1)or die(mysql_error());
            $num_row1 = mysql_num_rows($result1);
            $book_title = mysql_query($query2);    
            
      ?>
             
        <!--//End of nav-bar-->

           <div class="row" >

                  <?php
                    include('std_right_bar.php');
                    ?>
               
                <div class="cent" >
                                  <div class="panel panel-primary" id="aa" >
                                   <div class="panel-body" >

	<!-- Start VideoLightBox.com BODY section -->
	<div class="videogallery">
	<a class="voverlay" href="index_videolb/vdbplayer.swf?volume=100&url=video/beginner_php_tutorial_-_1_-_introduction_to_php_high.mp4" title="Beginner PHP Tutorial - 1 - Introduction to PHP_HIGH"><img src="index_videolb/thumbnails/beginner_php_tutorial_-_1_-_introduction_to_php_high.png" alt="Beginner PHP Tutorial - 1 - Introduction to PHP_HIGH" /><span></span></a>
<a class="voverlay" href="index_videolb/vdbplayer.swf?volume=100&url=video/beginner_php_tutorial_-_2_-_installing_xampp_part_1_high.mp4" title="Beginner PHP Tutorial - 2 - Installing XAMPP Part 1_HIGH"><img src="index_videolb/thumbnails/beginner_php_tutorial_-_2_-_installing_xampp_part_1_high.png" alt="Beginner PHP Tutorial - 2 - Installing XAMPP Part 1_HIGH" /><span></span></a>
<a class="voverlay" href="index_videolb/vdbplayer.swf?volume=100&url=video/beginner_php_tutorial_-_3_-_installing_xampp_part_2_high.mp4" title="Beginner PHP Tutorial - 3 - Installing XAMPP Part 2_HIGH"><img src="index_videolb/thumbnails/beginner_php_tutorial_-_3_-_installing_xampp_part_2_high.png" alt="Beginner PHP Tutorial - 3 - Installing XAMPP Part 2_HIGH" /><span></span></a>
<a class="voverlay" href="index_videolb/vdbplayer.swf?volume=100&url=video/beginner_php_tutorial_-_4_-_creating_your_first_php_file_high.mp4" title="Beginner PHP Tutorial - 4 - Creating Your First PHP File_HIGH"><img src="index_videolb/thumbnails/beginner_php_tutorial_-_4_-_creating_your_first_php_file_high.png" alt="Beginner PHP Tutorial - 4 - Creating Your First PHP File_HIGH" /><span></span></a>
<a class="voverlay" href="index_videolb/vdbplayer.swf?volume=100&url=video/beginner_php_tutorial_-_5_-_writing_your_first_php_file_high.mp4" title="Beginner PHP Tutorial - 5 - Writing Your First PHP File_HIGH"><img src="index_videolb/thumbnails/beginner_php_tutorial_-_5_-_writing_your_first_php_file_high.png" alt="Beginner PHP Tutorial - 5 - Writing Your First PHP File_HIGH" /><span></span></a>
<a class="voverlay" href="index_videolb/vdbplayer.swf?volume=100&url=video/beginner_php_tutorial_-_6_-_the_phpinfo_function_high.mp4" title="Beginner PHP Tutorial - 6 - The phpinfo Function_HIGH"><img src="index_videolb/thumbnails/beginner_php_tutorial_-_6_-_the_phpinfo_function_high.png" alt="Beginner PHP Tutorial - 6 - The phpinfo Function_HIGH" /><span></span></a>
<a class="voverlay" href="index_videolb/vdbplayer.swf?volume=100&url=video/beginner_php_tutorial_-_7_-_the_php.ini_file_high.mp4" title="Beginner PHP Tutorial - 7 - The php.ini File_HIGH"><img src="index_videolb/thumbnails/beginner_php_tutorial_-_7_-_the_php.ini_file_high.png" alt="Beginner PHP Tutorial - 7 - The php.ini File_HIGH" /><span></span></a>
<a class="voverlay" href="index_videolb/vdbplayer.swf?volume=100&url=video/beginner_php_tutorial_-_8_-_indentation_high.mp4" title="Beginner PHP Tutorial - 8 - Indentation_HIGH"><img src="index_videolb/thumbnails/beginner_php_tutorial_-_8_-_indentation_high.png" alt="Beginner PHP Tutorial - 8 - Indentation_HIGH" /><span></span></a><span class="videolb"><a href="http://videolightbox.com">video player for website</a> by VideoLightBox.com v3.1</span>
	</div>
	<script src="index_videolb/jquery.tools.min.js" type="text/javascript"></script>
	<script src="index_videolb/videolightbox.js" type="text/javascript"></script>
	<!-- End VideoLightBox.com BODY section -->


</div>
					                    </div>




				                						               
						        
                </div>
                <!--//End of cent-->
            </div>
            <!--//End of row-->
    </div>
    <!--//End of container-fluid-->
	</body>
</html>