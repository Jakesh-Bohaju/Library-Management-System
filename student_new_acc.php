<?php
  include('db_con.php');
?>

<html>
<!-- Trigger the modal with a button -->
<!-- Modal -->
<div id="myModal6" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <div class="alert alert-info"><strong><font color="black">New Student Registration Form</font></strong>
        </div>
           <form class="form-horizontal" role="form" method="POST">
                  <div class="form-group">
                    <label  class="col-sm-3 control-label">Username</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" placeholder="username" name="usr" required/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-5">
                        <input type="password" class="form-control" placeholder="password" name="pwd" required/>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-3 control-label">College Roll Number</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" placeholder="college roll number" name="crn" required/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Verification Code</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" placeholder="verification code" name="vcod" required/>
                    </div>
                  </div>
                  
                  <hr>
                  <div class=pull-right>
                    <input type="submit" class="btn btn-default"  value="Submit" name="submi">
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
if(isset($_POST['submi']))
{
  $uname=$_POST['usr'];
  $pass=$_POST['pwd'];
  $roll=$_POST['crn'];
  $verif=$_POST['vcod'];
  $Q="select * from student where crn='$roll' AND verification_code='$verif'";
  $result=mysql_query($Q) or die(mysql_error());
  $res=mysql_fetch_array($result);
  if($res['crn']==$roll&&$res['verification_code']==$verif)
  {
    mysql_query("insert into student_account(username,password,crn,verification_code)values('$uname','$pass','$roll','$verif')") or die(mysql_error());
    ?>
    <script>
      alert("Congratulation you have become our new member....You are welcome!!!! ");
    </script>
    <?php
  }
  else
  {
 ?>
 <script>
   alert("Sorry the verification code you have entered is wrong..Please contact college library");
 </script>
 <?php
  }
}
?>


