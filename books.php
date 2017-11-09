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
    .pag{
      float: left;
    margin-left:10%;
    }
    .s{
      float: left;
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
     include ('addbook.php');
     ?>
        
          <div class="col-md-10">
            
              <div class="panel panel-primary" id="bd">
                <div class="panel-body">
                  <div style="overflow-x:auto;">
              <table cellpadding="0" cellspacing="0" border="0" color="blue" class="table  table-bordered" id="example">
                                <div class="alert alert-success" role="alert">
                                    <strong><center>Books with category</center></strong>
                                </div>
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3"><font color="black">Add Books</font></button>
                                <thead>
                                    <tr>
                                        <th>Book ID</th>
                                        <th>Book Name</th>                                 
                                        <th>Category</th>                                 
                                        <th>Author Name</th>                                
                                        <th>Book Publisher</th>
                                        <th>Added Date</th>
                                        
                                        <th>Action</th>
                                        

                                    </tr>
                                </thead>
                                <tbody>

                                   <?php

                                          $page=$_GET["page"];
                 if($page==""|| $page=="1")
                 {
                  $page1=0;
                 }  
                 else{
                  $page1=($page*10)-10;
                 }
                 $que=mysql_query("select * from book");
                 $count=mysql_num_rows($que);
                 $a=$count/5;
                 $a=ceil($a);
                 ?>
                  



                                        <?php $user_query=mysql_query("select * from book natural join book_category limit $page1,10")or die(mysql_error());
                  while($row=mysql_fetch_array($user_query))
                  {
                    $bid=$row['book_id'];
                   ?>
                   <tr>
                                    <td><?php echo $row['book_id']; ?></td> 
                                    <td><?php echo $row['book_title']; ?></td> 
                                    <td><?php echo $row['category']; ?></td> 
                                    <td><?php echo $row['author_name']; ?></td> 
                                    <td><?php echo $row['book_publisher']; ?></td>
                                    <td><?php echo $row['date_added']; ?></td>  
                                     
                             <td>
                             <a href="edit_book.php?bid=<?PHP echo base64_encode($bid);?>" title="edit"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>&nbsp;&nbsp;&nbsp;

                             <a href="delete_book.php?bid=<?PHP echo base64_encode($bid);?>" onclick="return confirm('Are you sure you want to delete record of this book???')" title="delete"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a> </td>                               
                    </tr>
                  <?php } ?>              
                                </tbody>
                            </table>
                          </div>

                            <section class="s"><h3>Showing 10 of <?php echo $n=mysql_num_rows(mysql_query("select * from book natural join book_category"));?> items</h3></section>
                             <nav class="pag">
  <ul class="pagination pagination-lg">
    <li>
      <a href="books.php?page=<?php echo $page-1; ?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class=<?php echo ($page==1)?' active':'';?>><a href="books.php?page=<?php echo "1"; ?>"><?php echo "1"." ";?></a></li>
    <li class=<?php echo ($page==2)?' active':'';?>><a href="books.php?page=<?php echo "2"; ?>"><?php echo "2"." ";?></a></li>
    <li class=<?php echo ($page==3)?' active':'';?>><a href="books.php?page=<?php echo "3"; ?>"><?php echo "3"." ";?></a></li>
    <li class=<?php echo ($page==4)?' active':'';?>><a href="books.php?page=<?php echo "4"; ?>"><?php echo "4"." ";?></a></li>
    <li class=<?php echo ($page==5)?' active':'';?>><a href="books.php?page=<?php echo "5"; ?>"><?php echo "5"." ";?></a></li>
    <li class=<?php echo ($page==6)?' active':'';?>><a href="books.php?page=<?php echo "6"; ?>"><?php echo "6"." ";?></a></li>
    <li class=<?php echo ($page==7)?' active':'';?>><a href="books.php?page=<?php echo "7"; ?>"><?php echo "7"." ";?></a></li>
     <li class=<?php echo ($page==8)?' active':'';?>><a href="books.php?page=<?php echo "8"; ?>"><?php echo "8"." ";?></a></li>
    <li class=<?php echo ($page==9)?' active':'';?>><a href="books.php?page=<?php echo "9"; ?>"><?php echo "9"." ";?></a></li>
    <li class=<?php echo ($page==10)?' active':'';?>><a href="books.php?page=<?php echo "10"; ?>"><?php echo "10"." ";?></a></li>
    

    <li>
      <a href="books.php?page=<?php echo $page+1; ?>" aria-label="Next">
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
