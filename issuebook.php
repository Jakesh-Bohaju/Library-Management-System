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
  width: 60%;
  margin-left: 21%;
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
                                    <strong><center>Issue Books</center></strong>
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
                                    </div>
                                    <div class="form-group">
                                      <label>Student name</label>
                                      <input type="text" class="form-control" readonly="readonly" disabled="true" value="<?php echo $row['first_name']."-".$row['last_name'];?>">
                                    </div>
                                  </form>
                                  <hr>
                                  
                                  <form class="form-horizontal" role="form" method="POST" name=form1">
                                            <div class="form-group">
                                              <label  class="col-sm-2 control-label">Remaining<br>Issue</label>
                                              <div class="col-sm-2">
                                                  <input type="text" class="form-control" 
                                                  value="<?php
                                                     $query1="select * from book_issue where crn='$crn'";
                                                       $result1 = mysql_query($query1)or die(mysql_error());
                                                        $num_row1 = mysql_num_rows($result1);
                                                          if($num_row1>5)
                                                          {
                                                            echo "0";
                                                          
                                                          }
                                                          else
                                                          {
                                                            $c=5-$num_row1;
                                                            echo $c;


                                                          }
                                                  ?>" readonly="readonly" disabled="true"/>
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label class="col-sm-2 control-label">Issue Date</label>
                                              <div class="col-sm-5">
                                                  <input type="text" name="issdate"  class="form-control" value='<?php echo  date("Y-m-d");?>' />
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label class="col-sm-2 control-label">Due Date</label>
                                              <div class="col-sm-5">
                                                  <input type="text" name="duedate"  class="form-control" value='<?php $dt = date("Y-m-d");
                                                echo date( "Y-m-d", strtotime( "$dt +21 day" ) ); ?>'  />
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label class="col-sm-2 control-label">Book ID</label>
                                              <div class="col-sm-5">
                                                  <input type="text" class="form-control" name="bid" required />
                                              </div>
                                            </div>
                                             <div class="form-group" hidden>
                                              <label class="col-sm-2 control-label">CRN</label>
                                              <div class="col-sm-5">
                                                  <input type="text" class="form-control" name="cr" value="<?php echo $crn;?>"/>
                                              </div>
                                            </div>
                                            <hr>
                                            <div class="pull-right">
                                              <input type="submit" class="btn btn-default" data-dismiss="modal" value="Issue" name="sub">
                                               <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                
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

if(isset($_POST['sub']))
{
  $bookid = $_POST['bid'];
  $crn=$_POST['cr'];
  $id=$_POST['issdate'];
  $bd=$_POST['duedate'];
  $q=mysql_query("select * from newbook");
  $r=mysql_fetch_array($q);
   $e=$r['book_id'];
   $bookid3="select book_id from book_reserved where crn='$crn'";
  $cc=mysql_query($bookid3)or die(mysql_error());
  $dd=mysql_fetch_array($cc);
  $ee=$dd['book_id'];
  $query11="select * from book_issue where crn='$crn'";
                                                       $result11 = mysql_query($query11)or die(mysql_error());
                                                        $num_row11 = mysql_num_rows($result11);
  $query12="select * from book_reserved where crn='$crn'";
                                                       $result12 = mysql_query($query12)or die(mysql_error());
                                                        $num_row12 = mysql_num_rows($result12);
  
   if($num_row11<5 && $num_row12==0 || $num_row11<5 && $num_row12==1 )
   {                                                     
  while($row=mysql_fetch_array($q))
  {
    $biid=$row['book_id'];
  if($bookid==$biid)
  {
  $q="insert into book_issue (book_id,crn,issue_date,due_date) values('$biid','$crn','$id','$bd')";
  mysql_query($q)or die(mysql_error());
  $rs="DELETE FROM newbook WHERE book_id=$bookid";
  mysql_query($rs)or die(mysql_error());
    if($q)
  {
     ?>
     <script>alert ("issue Successful !!!");
      window.location="http://localhost/lms/issuebook.php";
     </script>
     <?php
}
     else
     {
     ?>
     <script>alert ("Sorry can not issue. Book is issued already");
    
     </script>
     <?php
   }
  } 

  }
  if($bookid==$ee)
  {
  $qq="insert into book_issue (book_id,crn,issue_date,due_date) values('$ee','$crn','$id','$bd')";
  mysql_query($qq)or die(mysql_error());
  $rst="DELETE FROM book_reserved WHERE book_id=$bookid";
  mysql_query($rst)or die(mysql_error());
  if($qq)
  {
     ?>
     <script>alert ("issue Successful !!!");
      window.location="http://localhost/lms/issuebook.php";
     </script>
     <?php
}
     else
     {
     ?>
     <script>alert ("Sorry can not issue. Book is issued already");
    
     </script>
     <?php
  } 
  }
  else
  { ?>
    <script>alert ("Book doesnot exist"); </script><?php
}
}
else
{
  ?>
  <script>alert ("You can only get 5 books!!!"); </script><?php
}
  }
?>

