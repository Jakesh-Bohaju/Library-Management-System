<?PHP
include("db_con.php");
if(isset($_GET['bid']))
{
  $id = base64_decode($_GET['id']);  
  $sql = "DELETE FROM `book` WHERE `book_id` = '$id'";
  $query = mysql_query($sql);
  if($query)
  {
    ?>
    <script>
      alert("Record Deleted Successfully");  
    </script>
    <?php
  }
  else
  {
    ?>
    <script>
      alert("Sorry");  
    </script>
    <?php
     }
      header('location:http://localhost/lms/books.php?page=1');
 }

?>
