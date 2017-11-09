<?php
include('editacc.php');?>
<div class="col-md-2">
          <div class="list-group" id="ls">
                <a class="list-group-item active"><center><b><font color="yellow">
                	     <img class="img-circle" style="width:90px; height:90px;" 
                         <?php echo '<img src="data:image/jpeg;base64,'.  base64_encode($row['photo']) .'"/>'; ?>
                         </br>WELCOME:</font><?php echo $row['username'];  ?>
                         <br><font color="yellow">User-ID:</font><?php echo $row['user_id'];  ?>
                         <br><font color="yellow">Username:</font><?php echo $row['username'];  ?>
                         <br><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><font color="black">Edit your Account</font></button>
                         </b></center>
                </a>
                <a href="admin.php" class="list-group-item" title="Home"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                        <span class="sr-only">Error:</span>Home</a>
                            <?php
                                  if($_SESSION['id']!=1)
                                    {
                                                   
                                     }
                                  else
                                    { ?>
                                <a href="users.php" class="list-group-item" title="Manage Users"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                                        <span class="sr-only">Error:</span>Manage Users</a> 

                                <a href="view-feedback.php" class="list-group-item" title="Issue Book"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                        <span class="sr-only">Error:</span>View Message and feedbacks</a>                        
                                    <?php
                                     }                
                                    ?>
                <a href="issuebook.php" class="list-group-item" title="Issue Book"><span class="glyphicon glyphicon-book" aria-hidden="true"></span>
                        <span class="sr-only">Error:</span>Issue Book</a>
                <a href="return_book.php" class="list-group-item" title="Return Book"><span class="glyphicon glyphicon-book" aria-hidden="true"></span>
                        <span class="sr-only">Error:</span>Return Book</a>
              
                <a href="logout.php" class="list-group-item" title="logout"><span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        <span class="sr-only">Error:</span>Log out</a>
          </div>
        </div>  


