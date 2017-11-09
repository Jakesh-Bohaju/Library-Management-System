<html>
<head>
  <style type="text/css">
  .modal-header{
    color: green;
  }
  </style>
</head>
<!-- Trigger the modal with a button -->
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <div class="alert alert-info"><strong><font color="black">Edit Your Account</font></strong>
        </div>
           <form class="form-horizontal" role="form" method="post">
                  <div class="form-group">
                    <label  class="col-sm-2 control-label">Username</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" value="<?php echo  $row['username'];?>" name="un"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" value="<?php echo  $row['password'];?>" name="pw" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">First-Name</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" value="<?php echo  $row['first_name'];?>" name="fn"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Last-Name</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" value="<?php echo  $row['last_name'];?>" name="ln"/>
                    </div>
                  </div><hr>
                  <div class="pull-right">
                      <input type="submit" class="btn btn-default" value="Submit" name="su">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                  </div>
            </form>
      </div>        
    </div>

  </div>
</div>
</body>
</html>
<?php
  if (isset($_POST['su']))
  {
  $user_id=$_SESSION['id'];
  $username=$_POST['un'];
  $password=$_POST['pw'];
  $firstname=$_POST['fn'];
  $lastname=$_POST['ln'];
  
  mysql_query("update users set username='$username', password='$password' , first_name = '$firstname' , last_name = '$lastname'  where user_id='$user_id' ")or die(mysql_error()); ?>
  <script>
  window.location="admin.php";
  </script>
  <?php
  }
  ?>
