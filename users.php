<?php
include('db_con.php');
include('user_session.php');
include 'delete_modal.php';
?>
<!DOCTYPE html>
<html lang="en">
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
     <?php
     include ('adduser.php');
     ?>
        
          <div class="col-md-10">
            
              <div class="panel panel-primary" id="bd">
                <div class="panel-body">
                  <div style="overflow-x:auto;">
              <table cellpadding="0" cellspacing="0" border="0" color="blue" class="table  table-bordered" id="example">
                                <div class="alert alert-success" role="alert">
                                    <strong><center>Manage Librarian</center></strong>
                                </div>
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1"><font color="black">Add Librarian</font></button>
                                <thead>
                                    <tr>
                                        <th>Username</th>
                                        <th>Password</th>                                 
                                        <th>First Name</th>                                 
                                        <th>Last Name</th>
                                        <th>Post</th>
                                        <th>Gender</th>
                                        <th>Address</th>
                                        <th>Contact</th>
                                        <th>Status</th>
                                        <th>Profile Picture</th>                                 
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <?php $user_query=mysql_query("select * from users")or die(mysql_error());
                  while($row=mysql_fetch_array($user_query)){
                  $id=$row['user_id']; ?>
                   <tr class="del<?php echo $id ?>">
                                    <td><?php echo $row['username']; ?></td> 
                                    <td><?php echo $row['password']; ?></td> 
                                    <td><?php echo $row['first_name']; ?></td> 
                                    <td><?php echo $row['last_name']; ?></td> 
                                    <td><?php echo $row['post']; ?></td> 
                                   <td><?php
                                    if($row['gender']==1)
                                                { 
                                                 echo "male";
                                                 } 
                                                 else 
                                                  echo "female";
                                     ?></td> 
                                    <td><?php echo $row['address']; ?></td> 
                                    <td><?php echo $row['contact']; ?></td> 
                                    <td><?php
                                    if($row['status']==1)
                                                { 
                                                 echo "active";
                                                 } 
                                                 else 
                                                  echo "inactive";
                                     ?></td>  
                                    <td><center><img class="img-circle" style="width:50px; height:50px;" 
                         <?php echo '<img src="data:image/jpeg;base64,'.  base64_encode($row['photo']) .'"/>'; ?></center></td>  
                             <td>
                             
                              <a href="edit_user.php?id=<?PHP echo base64_encode($id);?>" title="edit"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>&nbsp;&nbsp;&nbsp;
                             <a href="delete_user.php?id=<?PHP echo base64_encode($id);?>" onclick="return confirm('Are you sure you want to delete record of <?PHP echo $row['first_name'];?>')" title="delete"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a> </td>                               
                    </tr>
                  <?php } ?>     
                          
                                </tbody>
                            </table>

                          </div>
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
