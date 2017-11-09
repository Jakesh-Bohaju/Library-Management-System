<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Library Management System</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.min.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css"> 
    <link rel="stylesheet" type="text/css" href="css/adminlogin.css"> 
</head>

  <body>
    <div class="wrapper">
    <form class="form-signin" method="POST">       
      <h2 class="form-signin-heading"><center>Library Management System<br>Admin and Librarian<br> Log in<br></center></h2>
      <input type="text" class="form-control" name="username" placeholder="User Name" required autofocus />
      <input type="password" class="form-control" name="password" placeholder="Password" required/>      
      <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Login</button>
      
    <?php
          include 'db_con.php';
                if (isset($_POST['submit'])){
                session_start();
                $username = $_POST['username'];
                $password = $_POST['password'];
                $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
                $result = mysql_query($query)or die(mysql_error());
                $num_row = mysql_num_rows($result);
                  $row=mysql_fetch_array($result);
                  if( $num_row > 0 ) {
                    header('location:admin.php');
                $_SESSION['id']=$row['user_id'];
                $_SESSION['name']=$row['username'];

                  }
                  else{ ?>
                <div class="alert alert-danger">Access Denied</div>   
                <?php
                }}
                ?>
    </form>
  </div>

   <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.js"></script>

  </body>
</html>