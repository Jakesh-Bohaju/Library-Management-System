<html>
<head>
</head>
<!-- Trigger the modal with a button -->
<!-- Modal -->
<div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <div class="alert alert-info"><strong><font color="black">Add Librarian</font></strong>
        </div>
           <form class="form-horizontal" role="form" method="POST">
                  <div class="form-group">
                    <label  class="col-sm-2 control-label">Username</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" placeholder="User name" name="un" required/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" placeholder="Password" name="pw" required/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">First-Name</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" placeholder="First-name" name="fn" required/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Last-Name</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" placeholder="Last name" name="ln" required/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Post</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" placeholder="post" value="Librarian" name="po" required/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Gender</label>
                    <div class="col-sm-5">
                        <select name="gn">
                          <option value="1">Male</option>
                          <option value="0">Female</option>               
                        </select>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Address</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" placeholder="address" name="ad" required/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Contact</label>
                    <div class="col-sm-5">
                        <input type="number" class="form-control" placeholder="contact number" name="co" required/>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Status</label>
                    <div class="col-sm-5">
                        <select name="st">
                          <option value="1">Active</option>
                          <option value="0">Inactive</option>               
                        </select>
                    </div>
                  </div>
                   <hr>
                  <div class=pull-right>
                    
                  <input type="submit" class="btn btn-default"  value="Confirm" name="sub">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                  </div>
            </form>
      </div>        
    </div>

  </div>
</div>
</body>

<?php
  if (isset($_POST['sub']))
  {
  $username=$_POST['un'];
  $password=$_POST['pw'];
  $firstname=$_POST['fn'];
  $lastname=$_POST['ln'];
  $post=$_POST['po'];
  $gender=$_POST['gn'];
  $address=$_POST['ad'];
  $contact=$_POST['co'];
   $status=$_POST['st'];
  
  $quer=mysql_query("insert into users (username,password,first_name,last_name,post,gender,address,contact,status) values('$username','$password','$firstname','$lastname','$post','$gender','$address','$contact','$status')")or die(mysql_error());
  if($quer== true)
  {
    echo "<script> alert('New user added successfully'); </script>";
  }
  }
  ?>
</html>
