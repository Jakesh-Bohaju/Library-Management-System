<?PHP
include("db_con.php");
if(isset($_GET['id']))
{
  $id = base64_decode($_GET['id']);  
    $sql = "DELETE FROM `users` WHERE `user_id` = '$id'";
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
      header('location:http://localhost/lms/users.php');
 }

?>
