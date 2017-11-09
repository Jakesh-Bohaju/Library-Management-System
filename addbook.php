

<html>
<head>
</head>
<!-- Trigger the modal with a button -->
<!-- Modal -->
<div id="myModal3" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <div class="alert alert-info"><strong><font color="black">Add Book</font></strong>
        </div>
           <form class="form-horizontal" role="form" method="POST">
                  <div class="form-group">
                    <label  class="col-sm-2 control-label">Book_Id</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" placeholder="book id" name="bi" required/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Book_Title</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" placeholder="book title" name="bt" required/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Category</label>
                    <div class="col-sm-5">
                        <select name="ct">
                          <option value="1">1.Engineering</option>
                          <option value="2">2.Science and Humanities</option>
                          <option value="3">3.Encyclopedia</option>
                          <option value="4">4.Reference</option>
                          <option value="5">5.Literature</option>
                          <option value="6">6.Others</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Author_Name</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" placeholder="author name" name="an" required/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Publisher_Name</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" placeholder="publisher name" name="pn" required/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Date_Added</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" value="<?php echo date("Y-m-d");?>" name="da" required/>
                    </div>
                  </div>
                  
                  <hr>
                  <div class=pull-right>
                    <input type="submit" class="btn btn-primary"  value="Add" name="s">
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
if(isset($_POST['s']))
{
  $bookid=$_POST['bi'];
  $booktitle=$_POST['bt'];
  $caategory=$_POST['ct'];
  $author=$_POST['an'];
  $pub=$_POST['pn'];
  $date_added=$_POST['da'];

mysql_query("insert into book (book_id,book_title,category_id,author_name,book_publisher,date_added) values('$bookid','$booktitle','$caategory','$author','$pub','$date_added')")or die(mysql_error());
 mysql_query("insert into newbook (book_id,book_title,category_id,author_name,book_publisher,date_added) values('$bookid','$booktitle','$caategory','$author','$pub','$date_added')")or die(mysql_error()); 
}
?>