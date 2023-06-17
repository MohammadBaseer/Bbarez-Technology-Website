<?php
$error = "";
include_once('include/conn.php');
 session_start();
include_once('include/auth.php');

if ($rows['role'] == "Access" || $rows['role'] == "Super Access") {
  echo "<h1>404</h1>";
  exit();
 }

if (isset($_GET['edit_users']))
{
$ed_id = $_GET['edit_users']; 

$sql =  "SELECT * FROM users WHERE id='$ed_id' ";
$result = mysqli_query($conn, $sql);
$row =  mysqli_fetch_assoc($result);

 if (isset($_POST['submit']))  
{
$data = $_POST;
 $password = $data['pass'];
$role = $data['role'];


  if(empty($_POST["pass"]) || empty($_POST["role"]))  
{
    $sql = "UPDATE users SET role = '$role' WHERE id= $ed_id";
    if($result2 = mysqli_query($conn, $sql)){
$error = '<div class="alert alert-success" style="padding-left: 4%;"><p>Role Changed*</p></div>';
echo "<script>window.location='users-table.php'</script>";
}
}else {
    $sql = "UPDATE users SET  password = '".SHA1($password)."', role = '$role' WHERE id= $ed_id";
      
   if($result2 = mysqli_query($conn, $sql)){   
        $error = '<div class="alert alert-success" style="padding-left: 4%;"><p>Password Changed*</p></div>';
echo "<script>window.location='users-table.php'</script>";
       }
      else{ $error =  "Error: " . $sql . "<br>" . mysqli_error($conn);} 
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
              <h2 class="content-row-title">Edit User</h2>
              <div class="row">

                <div class="col-xs-12.col-sm-9" style="padding: 25px;">
                  <?php echo $error; ?>

                  <form method="POST">

                    <div class="form-group">
                      <div class="row">
                        <label class="col-md-1 control-label">User</label>
                        <div class="col-md-5">
                          <input type="text" class="form-control" disabled value="<?php echo $row['user']; ?>">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <label class="col-md-1 control-label">Password</label>
                        <div class="col-md-5">
                          <input type="password" placeholder="Password" class="form-control" name="pass">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <label class="col-md-1 control-label">Role</label>
                        <div class="col-md-5">

                          <?php 
if ($row['role'] == "Full Access") {
?>
                          <select class="form-control" name="role">
                            <option <?php if($row['role'] == "Full Access"){ echo "selected";}?> value="Full Access">
                              Full Access</option>
                          </select>
                          <?php 
}
else
{
 ?>
                          <select class="form-control" name="role">
                            <option <?php if($row['role'] == "Access"){ echo "selected";}?> value="Access">Access
                            </option>
                            <option <?php if($row['role'] == "Super Access"){ echo "selected";}?> value="Super Access">
                              Super Access</option>
                            <option <?php if($row['role'] == "Full Access"){ echo "selected";}?> value="Full Access">
                              Full Access</option>

                          </select>
                          <?php } ?>

                        </div>
                      </div>
                    </div>

                    <button name="submit" class="btn btn-info">Update</button>

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