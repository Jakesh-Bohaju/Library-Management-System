<?php
include('db_con.php');
include('user_session.php');
$bid=base64_decode($_GET['bid']);
$book=mysql_query("select * from book where book_id='$bid'");
$row1=mysql_fetch_array($book);
?>
<!DOCTYPE html>
<html lang="en">
   <?php
      include('admin_header.php');
   ?>
   <style type="text/css">
   
    #example{
        width: 99%;
        margin-left: 5px;
        margin-top: 8px;
    }
     #bd{
      width: 99.75%;
      margin-left: 0.25%;
    }
    .pag{
      float: left;
    margin-left:10%;
    }
    .s{
      float: left;
    }
    #down{
        margin-left: 58%;
    }
    #frm{
      margin-left: 15%;
    }
    </style>
<body bgcolor="white">
    <div class="container-fluid">
          <?php
              include('admin_navbar.php');
          ?>
        <div class="row" id="mid">
            <?php
                include ('admin_leftsidebar.php');     
            ?>
       
        
          <div class="col-md-10">
              <div class="panel panel-primary" id="bd">
                <div class="panel-body">
                    <div class="alert alert-success" role="alert">
                        <strong><center>Edit Book records</center></strong>
                    </div>
                       
                          <form class="form-horizontal" role="form" method="POST" id="frm">
                        <div class="form-group">
                          <label  class="col-sm-3 control-label">Book Id</label>
                          <div class="col-sm-5">
                              <input type="text" class="form-control" value="<?php echo $row1['book_id'];?>" name="bid" required/>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Book Title</label>
                          <div class="col-sm-5">
                              <input type="text" class="form-control" value="<?php echo $row1['book_title'];?>" name="bt" required/>
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Author Name</label>
                          <div class="col-sm-5">
                              <input type="text" class="form-control" value="<?php echo $row1['author_name'];?>" name="an" required/>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-sm-3 control-label">Category</label>
                          <div class="col-sm-5">
                        <select name="ct">
                          <option value="1">1.Engineering</option>
                          <option value="2">2.Science and Humanities</option>
                          <option value="3">3.Encyclopedia</option>
                          <option value="4">4.Reference</option>
                          <option value="5">5.Literature</option>
                          <option value="6">6.Others</option>
                        </select>
                    </div>
                  </div>
                        
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Book Publisher</label>
                          <div class="col-sm-5">
                              <input type="text" class="form-control" value="<?php echo $row1['book_publisher'];?>" name="bp" required/>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Added Date</label>
                          <div class="col-sm-5">
                              <input type="text" class="form-control" value="<?php echo $row1['date_added'];?>" name="ad" required/>
                          </div>
                        </div>
                        
                        <hr>
                        <div id="down">
                          <input type="submit" class="btn btn-primary"  value="Update" name="update">
                        </div>
                  </form>
                </div>
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

<?php
if(isset($_POST['update']))
{
   $bookid=$_POST['bid'];
  $booktitle=$_POST['bt'];
  $author=$_POST['an'];
  $cate=$_POST['ct'];
  $publisher=$_POST['bp'];
  $added=$_POST['ad'];

  $result= mysql_query("update book set book_id = '$bookid', book_title='$booktitle' , author_name = '$author', category_id='$cate', book_publisher = '$publisher', date_added = '$added' where book_id='$bookid'")or die(mysql_error());
  $result= mysql_query("update newbook set book_id = '$bookid', book_title='$booktitle' , author_name = '$author', category_id='$cate', book_publisher = '$publisher', date_added = '$added' where book_id='$bookid'")or die(mysql_error());
  if($result)
  {
     ?>
     
     <script>alert ("Update Successful !!!");
      window.location="http://localhost/lms/books.php?page=1";
     </script>
     <?php
}
     else
     {
     ?>
     <script>alert ("Sorry Update failed");
    
     </script>
     <?php
  } 
}
?>