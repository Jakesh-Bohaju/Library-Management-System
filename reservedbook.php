
<html>
<head>
	<title>Reservation Section</title>
	<link rel="stylesheet" type="text/css" href="css/student.css">
  <style type="text/css">
   #example{
        width: 99%;
        margin-top:10px;
    }</style>

<!--<script type="text/javascript">
                 function Captcha(){
                     var alpha = new Array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
                     var i;
                     for (i=0;i<6;i++){
                       var a = alpha[Math.floor(Math.random() * alpha.length)];
                       var b = alpha[Math.floor(Math.random() * alpha.length)];
                       var c = alpha[Math.floor(Math.random() * alpha.length)];
                       var d = alpha[Math.floor(Math.random() * alpha.length)];
                       var e = alpha[Math.floor(Math.random() * alpha.length)];
                       var f = alpha[Math.floor(Math.random() * alpha.length)];
                       var g = alpha[Math.floor(Math.random() * alpha.length)];
                      }
                    var code = a + ' ' + b + ' ' + ' ' + c + ' ' + d + ' ' + e + ' '+ f + ' ' + g;
                    document.getElementById("mainCaptcha").value = code
                  }
                  function ValidCaptcha(){
                      var string1 = removeSpaces(document.getElementById('mainCaptcha').value);
                      var string2 = removeSpaces(document.getElementById('txtInput').value);
                      if (string1 == string2){
                        return true;
                      }
                      else{        
                        return false;
                      }
                  }
                  function removeSpaces(string){
                    return string.split(' ').join('');
                  }
             </script> --> 
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


                         <form method="post" action="">                                     
                                      <h3><u>Reservation Detail</u></h3><br>
                                                 <strong><font color="">
                                                  <div style="overflow-x:auto;">
                                                  <table>
                                                  <tr ><td>Students Roll No</td><td><input type="text" value="<?php echo $crn;?>" disabled="true"  ></input><br>
                                                  <strong><font color=""></td></tr>
                                                  <tr><td>Students name</td><td><input type="text" value="<?php echo $_SESSION['name1'];?>" disabled="true"  ></input></td></tr>
                                                  <tr><td>Reserved Book</td><td><input type="text" value="<?php echo $book_title['book_title'];?>" disabled="true" </input></td></tr>
                                                   <tr><td>Total Reserved Book</td><td><input type="text" value="<?php echo $num_row1;?>" disabled="true" </input></td></tr>
                                                  </table>
                                                </div>

                                              
                                                <br>






  <h3><u>Reserve Book</u></h3>
 
  <strong><font color="">
                                                  <div style="overflow-x:auto;">


<div class="form-group">
                                              <label class="col-sm-2 control-label">Book ID</label>
                                              <div class="col-sm-5">
                                                  <input type="text" name="bid"  class="form-control" value='' />
                                              </div>
                                            </div>
                                            <br>
<div class="form-group">
                                              <label class="col-sm-2 control-label">Reserved Date</label>
                                              <div class="col-sm-5">
                                                  <input type="text" name="revdate"  class="form-control" value='<?php echo  date("Y-m-d H:i:s");?>' />
                                              </div>
                                            </div><br>


<!--<div class="form-group">
                                              <label class="col-sm-2 control-label"></label>
                                              <div class="col-sm-5">
             <input type="text" id="mainCaptcha"/>
             <input type="text" id="txtInput"/>   
              <input type="button" id="refresh" value="Refresh" onclick="Captcha();" />
            </div>
                                            </div>

                                          --><br>
          
             
          
        

<input type="submit" id="Button1" value="Submit" name="su">

                                                  

</div>

</form>



<!--//show all books-->
 <?php
     include ('addbook.php');
     //include('captcha/reservesection.php');
     //include('capcha.php');
     ?>

     <div style="overflow-x:auto;">
 <table cellpadding="0" cellspacing="0" border="0" color="blue" class="table  table-bordered" id="example">

                              

                                <div class="alert alert-success" role="alert">
                                    <strong><center>Books for reservation</center></strong>
                                             
                                            
                                </div>
                                
                                <thead>
                                    <tr>
                                        <th>Book ID</th>
                                        <th>Book Name</th>                                 
                                        <th>Category</th>                                 
                                        <th>Author Name</th>                                
                                        <th>Book Publisher</th>
                                        <th>Added Date</th>
                                      
                                                                             

                                    </tr>
                                </thead>
                                <tbody>

                                  
                  




                                        <?php $user_query=mysql_query("select * from newbook natural join book_category ")or die(mysql_error());
                  while($row=mysql_fetch_array($user_query))
                  {
                    $bid=$row['book_id'];
                    $booktitle=$row['book_title'];
                   ?>
                   <tr>
                                    <td><?php echo $row['book_id']; ?></td> 
                                    <td><?php echo $row['book_title']; ?></td> 
                                    <td><?php echo $row['category']; ?></td> 
                                    <td><?php echo $row['author_name']; ?></td> 
                                    <td><?php echo $row['book_publisher']; ?></td>
                                    <td><?php echo $row['date_added']; ?></td>  
                                   
                                    
                                        
                                                       
                                                            
                    </tr>

                    <?php } ?>  




                              
                                </tbody>
                            </table>
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




  <?php
  
if(isset($_POST['su']))
{
    
    $bookid = $_POST['bid'];
  $crn=$_SESSION['id1'];
  $a="select book_title from book where book_id='$bookid'";
  $c=mysql_query($a)or die(mysql_error());
  $d=mysql_fetch_array($c);
  $e=$d['book_title'];
  $bd=$_POST['revdate'];
  $pd="select reserved_date from book_reserved where crn='$crn'";
  $pc=mysql_query($pd)or die(mysql_error());
  $dp=mysql_fetch_array($pc);
  $pe=$dp['reserved_date'];
 
      $qq="insert into book_reserved(book_id,crn,book_title,reserved_date) values('$bookid','$crn','$e','$bd')";
  mysql_query($qq)or die(mysql_error());
  $rss="DELETE FROM newbook WHERE book_id='$bookid'";
  mysql_query($rss)or die(mysql_error());

  header('location:http://localhost/lms/library_status.php');
   
  }
?>


	</body>
</html>




