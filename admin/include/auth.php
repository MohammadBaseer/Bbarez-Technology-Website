<?php 
   if(isset($_SESSION['user'])){
    $user = $_SESSION['user'];
$sqli = "SELECT * FROM users WHERE user = '$user' ";
$result = mysqli_query($conn, $sqli);
$rows = mysqli_fetch_assoc($result);
$usr = $rows['name'];
// print_r($row);
   }
else {
      header("location:login.php");
}
 ?>