

<html>
<head>
</head>
<!-- Trigger the modal with a button -->
<!-- Modal -->
<div id="myModal4" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <div class="alert alert-info"><strong><font color="black">Add Student</font></strong>
        </div>
           <form class="form-horizontal" role="form" method="POST">
                  <div class="form-group">
                    <label  class="col-sm-3 control-label">Student's CRN</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" placeholder="crn" name="crn" required/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">First Name</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" placeholder="first name" name="fn" required/>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Last_Name</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" placeholder="last name" name="ln" required/>
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
                        <input type="text" class="form-control" placeholder="address" name="ad" required/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Contact</label>
                    <div class="col-sm-5">
                        <input type="number" class="form-control" placeholder="contact number" name="co" required/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Year Of Join</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" placeholder="year of join" name="yr" required/>
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
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Verification Code</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" value="<?php echo rand(1,9999999);?>" name="vc" required/>
                    </div>
                  </div>
                  <hr>
                  <div class=pull-right>
                    <input type="submit" class="btn btn-primary"  value="Add" name="subm">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                  
                  </div>
            </form>
      </div>        
    </div>

  </div>
</div>
</body>
</html>


<?php
if(isset($_POST['subm']))
{
  $crn=$_POST['crn'];
  $firstname=$_POST['fn'];
  $lastname=$_POST['ln'];
  $gender=$_POST['gn'];
  $address=$_POST['ad'];
  $contact=$_POST['co'];
  $year=$_POST['yr'];
  $status=$_POST['st'];
  $verify=$_POST['vc'];
mysql_query("insert into student (crn,first_name,last_name,gender,address,contact,year_of_join,status,verification_code) values('$crn','$firstname','$lastname','$gender','$address','$contact','$year','$status',$verify)")or die(mysql_error());
  
}
?>