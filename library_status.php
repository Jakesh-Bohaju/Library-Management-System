<html>
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
      $query2="select book_title from book_reserved where crn='$crn'";
            $result1 = mysql_query($query1)or die(mysql_error());
            $num_row1 = mysql_num_rows($result1);
            $result2 = mysql_query($query2) or die (mysql_error());
            $book_title=mysql_fetch_assoc($result2);    
            
      ?>
             
        <!--//End of nav-bar-->

           <div class="row" >

                  <?php
                    include('std_right_bar.php');
                    //nclude('profile.php');
                    ?>
               
                <div class="cent" >
                                  <div class="panel panel-primary" id="aa" >
                                   <div class="panel-body" >
                                   <form>                                     
                                      <h3><u>Your Status</u></h3><br>
                                                 <strong><font color="">
                                                  <div style="overflow-x:auto;">
                                                  <table>
                                                  <tr><td>Students Roll No</td><td><input type="text" value="<?php echo $crn;?>" disabled="true"  ></input><br>
                                                  <strong><font color=""></td></tr>
                                                  <tr><td>Students name</td><td><input type="text" value="<?php echo $_SESSION['name1'];?>" disabled="true"  ></input></td></tr>
                                                  <tr><td>Number of book left to submit&nbsp&nbsp&nbsp</td><td><input type="text" value="<?php echo $num_row1?>" disabled="true"  ></input></td></tr>
                                                  <tr><td>Reserved Book</td><td><input type="text" value="<?php echo $book_title['book_title'];?>" disabled="true" </input></td></tr>
                                                  </table> </div>
                                                  <h3><u>Book Issue Detail</u></h3>
                                                 </font></strong>


<div style="overflow-x:auto;">

 <table class="table  table-bordered" id="example">
                                              <div class="form-group">

                                
                                <thead>
                                    <tr>
                                        <th>Book ID</th>
                                        <th>Book Name</th>                                     
                                        <th>Issued Date</th>                                 
                                        <th>Due Date</th>
                                        <th>Fine</th>                            
                                    </tr>
                                </thead>

                                 <tbody>
                                        <?php $user_query=mysql_query("select * from book_issue natural join book where crn=$crn")or die(mysql_error());
                  while($row=mysql_fetch_array($user_query)){
                  ?>
                   <tr>
                                    <td><?php echo $row['book_id']; ?></td> 
                                    <td><?php echo $row['book_title']; ?></td> 
                                    <td><?php echo $row['issue_date']; ?></td> 
                                    <td><?php echo $row['due_date']; ?></td>
                                    <td><?php
                                       $duedate =$row['due_date'];
                                      // $duedate="2016-02-10";
                                        $dueday = strtotime($duedate);
                                        $today_date = date("Y-m-d");
                                        $today = strtotime($today_date);
                                        /*echo $today.' ';
                                        echo $dueday;*/
                                        //$diff = $date1-$day;
                                       if($dueday<$today)
                                        echo "Rs.".date('d',$today-$dueday);
                                       else
                                        echo '-';
                                        //echo $diff;
                                      /*  $diff = abs(strtotime($date2) - strtotime($date1));
                                        $years = floor($diff / (365*60*60*24));
                                        $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
                                        $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
                                        printf("%d years, %d months, %d days\n", $years, $months, $days);
                                        if($days>0&&$months>0&&$years>0)
                                        {
                                          echo "1";
                                        }
                                        else
                                        {
                                          echo "0";
                                        }*/

                                    ?>
                                    </td>  
                              </form></td>                              
                    </tr>
                  <?php } ?>              
                                </tbody>
                                
                            </table>  </div>  
                            <br>
                            Note:Please return book in time... 
                            <br>
                            <h3><u>Book Reservation Detail</u></h3><br>
<div style="overflow-x:auto;">
 <table class="table  table-bordered" id="example">
                                              <div class="form-group">

                                
                                <thead>
                                    <tr>
                                        <th>Book ID</th>
                                        <th>Book Name</th>                                     
                                        <th>Reserved Date</th>                                 
                                                                  
                                    </tr>
                                </thead>

                                 <tbody>
                                        <?php $user_query=mysql_query("select * from book_reserved where crn=$crn")or die(mysql_error());
                  while($row=mysql_fetch_array($user_query)){
                  ?>
                   <tr>
                                    <td><?php echo $row['book_id']; ?></td> 
                                    <td><?php echo $row['book_title']; ?></td> 
                                    <td><?php echo $row['reserved_date']; ?></td> 
                                   
                                    </td>  
                              </form></td>                              
                    </tr>
                  <?php } ?>              
                                </tbody>
                                
                            </table> </div> 
                            <br>
                            Note:Issue reserved book within a day from reserved date...  

                                           </form>      
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
