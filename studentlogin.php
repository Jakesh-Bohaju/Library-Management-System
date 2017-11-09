<?php
session_start();
?>
<html>
<head>
  <style type="text/css">
  .centre{
    width: 80%;
    margin-left: 10%;
  }
  .modal-content{
    background-color: #477784;
    color: yellow;
  }
  </style>
</head>
<!-- Trigger the modal with a button -->
<!-- Modal -->
<div id="myModal5" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
           <div class="wrapper">
    <form class="form-signin" method="POST">       
      <h2 class="form-signin-heading"><center><font color="yellow">Library Management System<br>Student Login</font></center></h2>
      <div class="centre">
        <input type="text" class="form-control" name="username" placeholder="User Name" required autofocus /><br>
        <input type="password" class="form-control" name="password" placeholder="Password" required/>   <br><br>   
        <div class=pull-right>
                    <a href="student-section.php"><input type="submit" class="btn btn-primary"  value="Login" name="s"></a>
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                  
                  </div>
      </div>
    <?php
    
          include 'db_con.php';
                if (isset($_POST['s'])){
                $username = $_POST['username'];
                $password = $_POST['password'];
                $query = "SELECT * FROM student_account WHERE username='$username' AND password='$password'";
                $result = mysql_query($query)or die(mysql_error());
                $num_row = mysql_num_rows($result);
                  $row=mysql_fetch_array($result);
                  if( $num_row > 0 ) {
                    header('location:student-section.php');
                        $_SESSION['id1']=$row['crn'];
                        $_SESSION['name1']=$row['username'];

                  }
                else{ ?>
                <script>
                  alert("Sorry wrong username and password");
                </script> 
                <?php
                }}
                ?>
    </form>
  </div>
      </div>        
    </div>

  </div>
</div>
</body>
</html>
