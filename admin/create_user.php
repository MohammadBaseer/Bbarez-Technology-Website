<?php 
include_once('include/conn.php');
 session_start();
include_once('include/auth.php');
if (isset($_POST['submit'])) {
$data = $_POST;

$name   = mysqli_real_escape_string($conn, $data['name']);
$user   = mysqli_real_escape_string($conn, $data['user']);
$password = mysqli_real_escape_string($conn, $data['pass']);
$role = mysqli_real_escape_string($conn, $data['role']);
$date = date("y-m-d");

$sql1 = " SELECT * FROM users WHERE user='$user'";
$result1 = mysqli_query($conn, $sql1);
$count = mysqli_num_rows($result1);
if ($count > 0) {
$error = '<div class="alert alert-success" style="padding-left: 4%;"><p>User Taken*</p></div>'; 
}else
{
$sql ="INSERT INTO users (`name`, `user`,`password`,`role`,`date`) VALUES ('$name', '$user','" . SHA1($password) . "','$role','$date') ";
if (mysqli_query($conn, $sql)) {
$error = '<div class="alert alert-success" style="padding-left: 4%;"><p>Success*</p></div>';
echo "<script>window.location='users-table.php'</script>";
} 
else
{
$error = '<div class="alert alert-success" style="padding-left: 4%;"><p>Faild*</p></div>';
}
}
}
 ?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>BBarez Technology</title>
  <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="shortcut icon" href="favicon_16.ico" />
  <link rel="bookmark" href="favicon_16.ico" />
  <link rel="stylesheet" href="dist/css/site.min.css">
  <link
    href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700,400italic,600italic,700italic,800italic,300italic"
    rel="stylesheet" type="text/css">
  <script type="text/javascript" src="dist/js/site.min.js"></script>
</head>

<body>
  <nav role="navigation" class="navbar navbar-custom">
    <div class="container-fluid">

    </div>
  </nav>
  <div class="container-fluid">
    <div class="row row-offcanvas row-offcanvas-left">
      <?php include_once('header.php');


?>
      <div class="col-xs-12 col-sm-9 content">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span
                  class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a>Admin Panel
            </h3>
          </div>
          <div class="panel-body">

            <div class="content-row">
              <h2 class="content-row-title">Create User</h2>
              <div class="row">
                <div class="col-xs-12.col-sm-9" style="padding: 25px;">
                  <form method="POST">
                    <?php echo @$error; ?>
                    <div class="form-group">
                      <div class="row">
                        <label class="col-md-1 control-label">Name</label>
                        <div class="col-md-5">
                          <input type="text" required="" placeholder="Nmae" class="form-control" name="name">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <label class="col-md-1 control-label">User</label>
                        <div class="col-md-5">
                          <input type="text" required="" placeholder="User" class="form-control" name="user">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <label class="col-md-1 control-label">Password</label>
                        <div class="col-md-5">
                          <input type="password" required="" placeholder="Password" class="form-control" name="pass">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <label class="col-md-1 control-label">Role</label>
                        <div class="col-md-5">
                          <select class="form-control" name="role">
                            <option value="Access">Access</option>
                            <option value="Super Access">Super Access</option>
                            <option value="Full Access">Full Access</option>
                          </select>
                        </div>
                      </div>
                    </div>

                    <button name="submit" class="btn btn-info">Create</button>

                    <br><br>

                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>