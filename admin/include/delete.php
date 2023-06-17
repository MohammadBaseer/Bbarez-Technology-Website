<?php 
include_once('conn.php');
@$delet = $_GET['del_rfq'];
@$del = $_GET['del_contact'];
@$del_users =$_GET['del_users'];

if($del) {
mysqli_query($conn,"DELETE FROM contact WHERE id ='$del' ");
             header ("Location: ../contact-table.php");
             exit();
}
  elseif($delet)

  {
  	$sql = "SELECT * FROM rfq WHERE id='$delet'";
   $result = mysqli_query($conn, $sql);
   $row =  mysqli_fetch_assoc($result);

mysqli_query($conn,"DELETE FROM rfq WHERE id ='$delet' ");
@unlink("../../documents/".$row['attachment']);
             header ("Location: ../rfq-table.php");
             exit();

  } 

  elseif($del_users)
{

    $sql = "SELECT * FROM users WHERE id='$del_users'";
   $result = mysqli_query($conn, $sql);
   $row =  mysqli_fetch_assoc($result);

if ($row['role'] == "Full Access") {
  header ("Location: ../users-table.php?access=<div class='alert alert-success' style='padding-left: 4%;'><p><strong>Warning! </strong>Access Denied For Admin*</p></div>");
             exit();
}
  mysqli_query($conn,"DELETE FROM users WHERE id ='$del_users' ");
             header ("Location: ../users-table.php");
             exit();
}



 ?>