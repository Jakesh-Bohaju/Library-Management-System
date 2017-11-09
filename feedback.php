<html>
<head>
<style type="text/css">
  #txt{
    resize: none;
  }
</style>
</head>
<!-- Trigger the modal with a button -->
<!-- Modal -->
<div id="myModal8" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <div class="alert alert-info"><strong><font color="black">Your most valuable suggestions and queries are always welcomed !!</font></strong>
        </div>
           <form class="form-horizontal" role="form" method="POST">
                  <div class="form-group">
                    <label  class="col-sm-3 control-label">Your Feedback</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" rows="9" id="txt" resizable="none" name="message" required/></textarea>
                    </div>
                  </div>
                  
                  <hr>
                  <div class=pull-right>
                    <input type="submit" class="btn btn-default"  value="Submit" name="sub">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                  
                  </div>
            </form>
      </div>        
    </div>



<?php
if(isset($_POST['sub']))
{
  $msg=$_POST['message'];
  $cr=$_SESSION['id1'];

                    $Today = date('y:m:d');
                    $new = date('l, F d, Y', strtotime($Today));
                    
$sql="insert into feedback(crn,message,date_uploaded) values('$cr','$msg','$new')";
$query=mysql_query($sql);
if($query)
{
  ?>
  <script>
    alert "Thank you for you feedback....Your feedback has successfully sent to the admin";
  </script>
  <?php
}
  
}
?>


  </div>
</div>
</body>
</html>


