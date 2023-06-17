<?php include_once('include/conn.php');
 session_start();
include_once('include/auth.php');
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
  $view = $_GET['view']; 
  $sql = "SELECT * FROM rfq WHERE id = '$view' ";
   $result = mysqli_query($conn, $sql);
   $row =  mysqli_fetch_assoc($result);

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
              <h2 class="content-row-title">Details - Page SEC -: <?php echo $row['page_section']; ?></h2>
              <div class="row">

                <!-- text -->
                <div class="container">
                  <div class="col-xs-12.col-sm-9">
                    <p><strong style="display: inline-block; width: 105px;">Full Name: </strong>
                      <?php echo $row['name']; ?> </p>
                    <p><strong style="display: inline-block; width: 105px;">Phone: </strong>&nbsp;
                      <?php echo $row['phone']; ?> </p>
                    <p><strong style="display: inline-block; width: 105px;">Email: </strong>&nbsp; <a
                        href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a> </p>
                    <p><strong style="display: inline-block; width: 105px;">Organization: </strong>&nbsp;
                      <?php echo $row['org']; ?> </p>
                    <p><strong style="display: inline-block; width: 105px;">Project Type: </strong>&nbsp;
                      <?php echo $row['project']; ?> </p>
                    <?php 
if( $row['attachment'] == ''){
 ?>
                    <p><strong style="display: inline-block; width: 105px;">Attachment: </strong>&nbsp; N/A </p>
                    <?php } else{ ?>
                    <p><strong style="display: inline-block; width: 105px;">Attachment: </strong>&nbsp; <a
                        href="..\documents\<?php echo $row['attachment']; ?>"
                        target="..\documents\<?php echo $row['attachment'];?>">Download File</a> </p>
                    <?php } ?>
                    <p><strong style="display: inline-block; width: 105px;">Attachment: </strong>&nbsp;
                      <?php echo $row['date']; ?> </p>
                    <p><strong style="display: inline-block; width: 105px;">Description: </strong>&nbsp;
                      <?php echo $row['detail']; ?> </p>

                    <br><br>
                    <a href="rfq-table.php" class="btn btn-info">Back</a>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</html>