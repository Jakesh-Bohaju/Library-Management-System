     <?php
      session_start();
      if(isset($_SESSION['id1']))
      {
include 'db_con.php';
                $query = "SELECT * FROM student_account WHERE crn='$_SESSION[id1]'";
                $result = mysql_query($query)or die(mysql_error());
                $row=mysql_fetch_array($result);
      }
	else
		{
			header("Location:index.php");
		}

     ?>
         