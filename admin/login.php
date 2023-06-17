<?php 
session_start(); 
include_once('include/conn.php');
if(isset($_SESSION['user'])){
  header("location:index.php");

 }
 else
 { 
if (isset($_POST['login'])) {

$user =$_POST['user'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE user = '$user' AND password = '". SHA1($password) ."' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$rowcount = mysqli_num_rows($result);


if ($rowcount == true) {
$_SESSION['user'] = $user;
echo "<script>window.location='index.php'</script>";

}
else
{
  $err = "User or Password Invalid";
}


}
}
// echo $auth['user'];



 ?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Login - BBarez Technology</title>
  <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="shortcut icon" href="favicon_16.ico" />
  <link rel="bookmark" href="favicon_16.ico" />

  <link rel="stylesheet" href="dist/css/site.min.css">
  <link
    href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700,400italic,600italic,700italic,800italic,300italic"
    rel="stylesheet" type="text/css">

  <script type="text/javascript" src="dist/js/site.min.js"></script>
  <style>
    body {
      padding-top: 40px;
      padding-bottom: 40px;
      background-color: #303641;
      color: #C1C3C6
    }
  </style>
</head>

<body>
  <div class="container">
    <form class="form-signin" method="POST">
      <h3 class="form-signin-heading">Please sign in</h3>
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon">
            <i class="glyphicon glyphicon-user"></i>
          </div>
          <input type="text" class="form-control" name="user" placeholder="Username"
            value="<?php if(isset($_POST['user'])){ echo $_POST['user']; } ?>" />
        </div>
      </div>

      <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon">
            <i class=" glyphicon glyphicon-lock "></i>
          </div>
          <input type="password" class="form-control" name="password" placeholder="Password" />
        </div>
      </div>

      <label class="checkbox">
        <?php echo @$err; ?>
      </label>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Sign in</button>
    </form>

  </div>
  <div class="clearfix"></div>
  <br><br>
  <div class="site-footer login-footer">
    <div class="container">
      <div class="copyright clearfix text-center">
      </div>
    </div>
  </div>
</body>

</html>