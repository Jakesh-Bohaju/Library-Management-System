<div class="container-fluid" id="top">
    <img id="brand-image" src="images/logo.png">
    <h1>Library Management System<br><small><font color="yellow">Everything Online</font></small></h1>
    <div class="pull-right">
      <?php
         $Today = date('y:m:d');
         $new = date('l, F d, Y', strtotime($Today));
         echo $new;
      ?>
    </div>
                
</div>
