<?php 
include_once('include/conn.php');
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
  <!-- site css -->
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

      <?php include_once('header.php') ?>

      <div class="col-xs-12 col-sm-9 content">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span
                  class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a>Admin Panel
            </h3>
          </div>
          <div class="panel-body">

            <div class="content-row">
              <h2 class="content-row-title">Welcome <?php echo $usr; ?></h2>
              <div class="row">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>