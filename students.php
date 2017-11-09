<?php
include('db_con.php');
include('user_session.php');
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
     <?php
     include ('addstudent.php');
     ?>
        
          <div class="col-md-10">
            
              <div class="panel panel-primary" id="bd">
                <div class="panel-body">
                  <div style="overflow-x:auto;">
              <table class="table  table-bordered" id="example">
                                <div class="alert alert-success" role="alert">
                                    <strong><center>Manage Students</center></strong>
                                </div>
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal4"><font color="black">Add Student</font></button>
                                <thead>
                                    <tr>
                                        <th>Student's CRN</th>
                                        <th>First Name</th>                                 
                                        <th>Last Name</th>                                 
                                        <th>Gender</th>                                
                                        <th>Address</th>
                                        <th>Contact Number</th>
                                        <th>Year of Join</th>
                                        <th>Status</th>
                                        <th>Verification_Code</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <?php
                  if(isset($_GET['page']))
                  {}
                  $page=$_GET["page"];
                 if($page==""|| $page=="1")
                 {
                  $page1=0;
                 }  
                 else{
                  $page1=($page*10)-10;
                 }
                 $que=mysql_query("select * from student");
                 $count=mysql_num_rows($que);
                 $a=$count/5;
                 $a=ceil($a);
                 ?>
                  


                  <?php
                                  $user_query=mysql_query("select * from student limit $page1,10")or die(mysql_error());
                  while($row=mysql_fetch_array($user_query)){
                    $id=$row['crn'];
                   ?>
                   <tr>
                                    <td><?php echo $row['crn']; ?></td> 
                                    <td><?php echo $row['first_name']; ?></td> 
                                    <td><?php echo $row['last_name']; ?></td> 
                                    <td><?php 
                                         if($row['gender']==1)
                                                { 
                                                 echo "male";
                                                 } 
                                                 else 
                                                  echo "female"; ?></td> 
                                    <td><?php echo $row['address']; ?></td>
                                    <td><?php echo $row['contact']; ?></td>
                                    <td><?php echo $row['year_of_join']; ?></td>
                                    <td><?php
                                    if($row['status']==1)
                                                { 
                                                 echo "active";
                                                 } 
                                                 else 
                                                  echo "inactive";
                                     ?></td> 
                                     <td><?php echo $row['verification_code']; ?></td> 
                             
                                    
                                    


                             <td>                  

                               
                             <a href="edit_student.php?id=<?PHP echo base64_encode($id);?>" title="edit"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>&nbsp;&nbsp;&nbsp;

                             <a href="delete_modal.php?id=<?PHP echo base64_encode($id);?>" onclick="return confirm('Are you sure you want to delete record of <?PHP echo $row['first_name'];?>')" title="delete"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>                               
                    </tr>
                  <?php } ?>              
                                </tbody>
                            </table>
                          </div>
                            <section class="s"><h3>Showing 10 of <?php echo $n=mysql_num_rows(mysql_query("select * from student"));?> items</h3></section>
                             <nav class="pag">
  <ul class="pagination pagination-lg">
    <li>
      <a href="students.php?page=<?php echo $page-1; ?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class=<?php echo ($page==1)?' active':'';?> ><a href="students.php?page=<?php echo "1"; ?>"><?php echo "1"." ";?></a></li>
    <li class=<?php echo ($page==2)?' active':'';?> ><a href="students.php?page=<?php echo "2"; ?>"><?php echo "2"." ";?></a></li>
    <li class=<?php echo ($page==3)?' active':'';?> ><a href="students.php?page=<?php echo "3"; ?>"><?php echo "3"." ";?></a></li>
    <li class=<?php echo ($page==4)?' active':'';?> ><a href="students.php?page=<?php echo "4"; ?>"><?php echo "4"." ";?></a></li>
    <li class=<?php echo ($page==5)?' active':'';?> ><a href="students.php?page=<?php echo "5"; ?>"><?php echo "5"." ";?></a></li>
    <li class=<?php echo ($page==6)?' active':'';?> ><a href="students.php?page=<?php echo "6"; ?>"><?php echo "6"." ";?></a></li>
    <li><a href="students.php?page=<?php echo "7"; ?>"><?php echo "7"." ";?></a></li>
    <li><a href="students.php?page=<?php echo "8"; ?>"><?php echo "8"." ";?></a></li>
    <li><a href="students.php?page=<?php echo "9"; ?>"><?php echo "9"." ";?></a></li>
    <li><a href="students.php?page=<?php echo "10"; ?>"><?php echo "10"." ";?></a></li>

    <li>
      <a href="students.php?page=<?php echo $page+1; ?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
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
