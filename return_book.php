<?php
include('db_con.php');
include('user_session.php');
include 'delete_modal.php';
?>
<!DOCTYPE html>
<html lang="en">
<style type="text/css">
#center
{
  width: 90%;
  margin-left: 5%;
  }
   #bd{
      width: 99.75%;
      margin-left: 0.25%;
    }
  </style>
   <title>Librarian Panel</title>
   <?php
      include('admin_header.php');
   ?>
<body bgcolor="white">
    <div class="container-fluid">
      <?php
             include('admin_navbar.php');
         ?>
        <div class="row" id="mid">
          <?php
              include ('librarian_leftsidebar.php');
         ?>
     
        
          <div class="col-md-10">
            <div class="panel panel-primary" id="bd">
              <div class="panel-body">
              <div class="alert alert-success" role="alert">
                                    <strong><center>Return Book</center></strong>
                 </div>
                                    <form class="form-inline" action="" method="POST">
                                          <div class="form-group">
                                            <label><strong>Enter College Roll Number</strong></label>
                                            <input type="text" class="form-control" placeholder="College Roll Number" name="crn">
                                            &nbsp;
                                            &nbsp;
                                            &nbsp;
                                          </div>
                                          <button type="submit" class="btn btn-primary">Show Result</button>
                                    </form>
              </div>
              <?php
                 if(isset($_POST['crn']))
                 {
               $crn=$_POST['crn'];
               $query="select * from student where crn='$crn'";
               $result = mysql_query($query)or die(mysql_error());
                $num_row = mysql_num_rows($result);
                  $row=mysql_fetch_array($result);
                  if( !$num_row > 0 ) {
                    ?>
                      <script>alert("Sorry no result found in database");</script>
                      <?php
                  }
                  else{ ?>
                <div class="panel panel-primary" id="center">
                  <div class="panel-heading">
                      <h3 class="panel-title"><center>Book Issue Information</center></h3>
                    </div>
                                <div class="panel-body">
                                 <form class="form-inline" role="form">
                                    <div class="form-group">
                                      <label>Student CRN</label>
                                      <input type="text" class="form-control" readonly="readonly" disabled="true" value="<?php echo $crn;?>" name="rn">
                                    </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <div class="form-group">
                                      <label>Student name</label>
                                      <input type="text" class="form-control" readonly="readonly" disabled="true" value="<?php echo $row['first_name']."-".$row['last_name'];?>">
                                    </div>
                                  </form>
                                  <hr>
                                  
                                  <form class="form-horizontal" role="form" method="POST" name=form1">
                                            
                                            <table cellpadding="0" cellspacing="0" border="0" color="blue" class="table  table-bordered" id="example">
                                              <div class="form-group">
                                              <label  class="col-sm-2 control-label">Issued Book</label>
                                              <div class="col-sm-2">
                                                  <input type="text" class="form-control" 
                                                  value="<?php
                                                     $query1="select * from book_issue where crn='$crn'";
                                                       $result1 = mysql_query($query1)or die(mysql_error());
                                                        $num_row1 = mysql_num_rows($result1);
                                                            echo $num_row1;
                                                  ?>" readonly="readonly" disabled="true"/>
                                              </div>
                                
                                <thead>
                                    <tr>
                                        <th>Book ID</th>
                                        <th>Book Name</th>                                     
                                        <th>Issued Date</th>                                 
                                        <th>Due Date</th>
                                        <th>Fine</th>                            
                                        <th>Return</th>
                                    </tr>
                                </thead>

                                 <tbody>
                                         <?php $user_query=mysql_query("select * from book_issue natural join book where crn=$crn")or die(mysql_error());
                  while($row=mysql_fetch_array($user_query)){
                  ?>
                  

                   <tr class="del<?php echo $id ?>">
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
                             <td width=90>
                              <form method="POST">
                                <input type="text" value="<?php echo $row['book_id']; ?>" hidden name="val"> 
                             <button type="submit" class="btn btn-info btn-sm" name="sub" title="return this book"><font color="black"><span class="glyphicon glyphicon-circle-arrow-down" aria-hidden="true"></font></button>
                              </form></td>                              
                    </tr>
                  <?php } ?>              
                                </tbody>
                                
                            </table>                            
                                         <div class="pull-right">
                                              <label>Total Fine:</label><input type="text" class="btn btn-default" value="0" disabled="true" readonly="readonly" />
                                             <input type="submit" class="btn btn-default" data-dismiss="modal" value="Return All Books" name="ret">
                                         </div>
                                         
                                  </form>
                                  </div> 
              </div>

                <?php
                }}
                ?>
                         
            </div>    
        </div>
    </div>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.js"></script>

</body>
</html>


<?php

global $c;
if(isset($_POST['sub']))
$c=$_POST['val'];

$Q="delete from book_issue where book_id='$c'";
mysql_query($Q)or die(mysql_error());

$is="insert into newbook select * from book where book_id='$c'";
mysql_query($is)or die(mysql_error());
?>