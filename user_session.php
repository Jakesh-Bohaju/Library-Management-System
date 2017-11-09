     <?php
      session_start();
      if(isset($_SESSION['id']))
      {
                include 'db_con.php';
                $query = "SELECT * FROM users WHERE user_id='$_SESSION[id]'";
                $result = mysql_query($query)or die(mysql_error());
                $row=mysql_fetch_array($result);
      }
	else
		{
			header("Location:index.php");
		}

     ?>
         