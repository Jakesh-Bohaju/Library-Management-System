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
    .feed{
      margin-left: 5%;
    }
    #imag{
      float: left;
    }
    .para{
      float: left;
       width:280px;
       margin-left: 10px;
       margin-top: 10px;
    }
    .para1{
      float: left;
      width: 600px;
      margin-top: 10px;
      margin-left: 20px;
      background-color: #E2F3F2;
    }
    #action{
      float: left;
      margin-left: 25px;
      margin-top: 10px;
    }
  </style>
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
              include ('admin_leftsidebar.php');
         ?>
          <div class="col-md-10">
            <div class="panel panel-primary" id="bd">
              <div class="panel-body">
                    <div class="alert alert-success" role="alert">
                       <strong>User feedback and messages<strong>
                    </div>      
                   <?php 
                   $user_query=mysql_query("select sn,crn,first_name,last_name,message,date_uploaded from feedback natural join student")or die(mysql_error());
                  while($row=mysql_fetch_array($user_query)){
                  $id=$row['sn']; ?>
                  <table>
                  <tr><td>
                    <div class="feed">
                      <span id="imag"><img class="img-circle" style="width:100px; height:90px;" src="images/user.png"></span>
                      <p class="para">Posted by:&nbsp;&nbsp;<?php echo $row['first_name']."&nbsp;".$row['last_name'];?><br>CRN:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['crn']?><br>Posted on:&nbsp;&nbsp;<?php echo $row['date_uploaded']?></p> 
                      <p class="para1"><?php echo $row['message'];?></p>
                      <span id="action">
                          <form action="" method="POST">
                          <input type="text" hidden="true" value="<?php echo $id?>" name="id"></input>
                             <input type="submit" value="Delete" name="sub"></input>
                          </form>
                      </span>
                    </div> 
                    </td></tr> <hr>
                    <table>
                     <?php } ?>             
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
if(isset($_POST['id']))
{
  $id = $_POST['id'];
  $sql = "DELETE FROM feedback WHERE  sn= '$id'";
  mysql_query($sql);?>
<script>
  window.location="view-feedback.php";
  </script>
  <?php
  }
  ?>