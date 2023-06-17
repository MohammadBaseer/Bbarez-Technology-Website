<?php 
   if ($rows['role'] == "Full Access" ) {
?>

<div class="col-xs-6 col-sm-3 sidebar-offcanvas" role="navigation">
  <ul class="list-group panel">
    <li class="list-group-item"><i class="glyphicon glyphicon-align-justify"></i> <b>ADMIN PANEL</b></li>
    <li class="list-group-item"><a href="index.php"><i class="glyphicon glyphicon-home"></i>Dashboard </a></li>
    <li class="list-group-item"><a href="contact-table.php"><i class="glyphicon glyphicon-th-list"></i>Contact Table
      </a></li>
    <li class="list-group-item"><a href="rfq-table.php"><i class="glyphicon glyphicon-list-alt"></i>RFQ Table </a></li>

    <li class="list-group-item"><a href="visitor.php"><i class="glyphicon glyphicon-globe"></i>Visitor </a></li>
    <li class="list-group-item"><a href="users-table.php"><i class="glyphicon glyphicon-user"></i>Users </a></li>

    <li class="list-group-item"><a href="include\logout.php"><i class="glyphicon glyphicon-"></i>LogOut </a></li>
  </ul>
</div>

<?php
   }
   elseif ($rows['role'] == "Access" || $rows['role'] == "Super Access") {
?>

<div class="col-xs-6 col-sm-3 sidebar-offcanvas" role="navigation">
  <ul class="list-group panel">
    <li class="list-group-item"><i class="glyphicon glyphicon-align-justify"></i> <b>ADMIN PANEL</b></li>
    <li class="list-group-item"><a href="index.php"><i class="glyphicon glyphicon-home"></i>Dashboard </a></li>
    <li class="list-group-item"><a href="contact-table.php"><i class="glyphicon glyphicon-th-list"></i>Contact Table
      </a></li>
    <li class="list-group-item"><a href="rfq-table.php"><i class="glyphicon glyphicon-list-alt"></i>RFQ Table </a></li>
    <li class="list-group-item"><a href="include\logout.php"><i class="glyphicon glyphicon-"></i>LogOut </a></li>
  </ul>
</div>

<?php
   }
   else
   {

   }

 ?>