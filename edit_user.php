<?php
include('db_con.php');
include('user_session.php');
$id=base64_decode($_GET['id']);
$q=mysql_query("select * from users where user_id='$id'");
$r=mysql_fetch_array($q);
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
                        <strong><center>Edit librarian records</center></strong>
                    </div>
                       
                          <form class="form-horizontal" role="form" method="POST" id="frm">
                        
                        
                       
                        <div class="form-group">
                          <label class="col-sm-3 control-label">First_Name</label>
                          <div class="col-sm-5">
                              <input type="text" class="form-control" value="<?php echo $r['first_name'];?>" name="fn" required/>
                          </div>
                        </div>
                         <div class="form-group">
                          <label class="col-sm-3 control-label">Last_Name</label>
                          <div class="col-sm-5">
                              <input type="text" class="form-control" value="<?php echo $r['last_name'];?>" name="ln" required/>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Gender</label>
                          <div class="col-sm-5">
                              <select name="gn">
                                <option value="1">Male</option>
                                <option value="0">Female</option>               
                              </select>
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Address</label>
                          <div class="col-sm-5">
                              <input type="text" class="form-control" value="<?php echo $r['address'];?>" name="ad" required/>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Contact</label>
                          <div class="col-sm-5">
                              <input type="number" class="form-control" value="<?php echo $r['contact'];?>" name="co" required/>
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Status</label>
                          <div class="col-sm-5">
                              <select name="st">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>               
                              </select>
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
  
  $firstname=$_POST['fn'];
  $lastname=$_POST['ln'];
 
  $gender=$_POST['gn'];
  $address=$_POST['ad'];
  $contact=$_POST['co'];


  $status=$_POST['st'];
  
 

  $result= mysql_query("update users set first_name='$firstname' , last_name = '$lastname',  gender='$gender', address = '$address', contact = '$contact', status='$status' where user_id='$id' ")or die(mysql_error());
  if($result)
  {
     ?>
     <script>alert ("Update Successful !!!");
      window.location="http://localhost/lms/users.php";
     </script>
     <?php
}
     else
     {
     ?>
     <script>alert ("Sorry Update");
    
     </script>
     <?php
  } 
}
?>