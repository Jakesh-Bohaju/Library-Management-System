<head>
	<title>Student's Section</title>
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
	<body class="body1">
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
     <div class="row" >

                  <?php
                    include('std_right_bar.php');
                    ?> 

	 <div class="cent" >
                                  <div class="panel panel-primary" id="aa" >
                                   <div class="panel-body" >




<?php


$files = glob("question/1st_semester/*.*");
for ($i=1; $i<count($files); $i++)
{
	$num = $files[$i];
	echo '<img   style="width:250px; height:300px;" src="'.$num.'" alt="random image">'."&nbsp;&nbsp;";
	}
?>
</div>
</div>
</div>
</div>

</body>