<?php include_once('include/conn.php');
 session_start();
include_once('include/auth.php');

   if ($rows['role'] == "Access" || $rows['role'] == "Super Access") {
    echo "<h1>404</h1>";
    exit();
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
  <link rel="stylesheet" href="data-tables/css/datatables.min.css">
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
              <h2 class="content-row-title">Visitor</h2>
              <div class="row">

                <div class="table-responsive" id="tbl">
                  <table id="zero-configuration" class="display table nowrap table-striped table-hover"
                    style="width:100%">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Pages</th>
                        <th>IP Address</th>
                        <th>MAC Address</th>
                        <th>Date</th>
                        <th>Action</th>

                      </tr>
                    </thead>
                    <tbody style="font-size: 0.8em;">

                      <?php 
$sql = "SELECT * FROM visitor";
   $result = mysqli_query($conn, $sql);
   while($row =  mysqli_fetch_assoc($result))
{
 ?>
                      <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['page_section']; ?></td>
                        <td><?php echo $row['ip']; ?></td>
                        <td><?php echo $row['mac']; ?></td>
                        <td><?php echo $row['date']; ?></td>

                        <td>

                          &nbsp; N/A

                        </td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="data-tables/js/datatables.min.js"></script>
  <script>
    'use strict';
    $(document).ready(function() {
      $('#zero-configuration').DataTable();
      $('#key-act-button').DataTable({
        dom: 'Bfrtip',
        buttons: ['copyHtml5', 'excelHtml5', 'csvHtml5', 'pdfHtml5']
      });
      $('#col-reorder').DataTable({
        colReorder: true
      });
      $('#fixed-columns-left').DataTable({
        scrollY: "300px",
        scrollX: true,
        scrollCollapse: true,
        paging: false,
        fixedColumns: true,
      });
      $('#fixed-columns-left-right').DataTable({
        scrollY: "300px",
        scrollX: true,
        scrollCollapse: true,
        paging: false,
        fixedColumns: true,
        fixedColumns: {
          leftColumns: 1,
          rightColumns: 1
        }
      });
      $('#fixed-header').DataTable({
        fixedHeader: true
      });
      $('#scrolling-table').DataTable({
        scrollY: 300,
        paging: false,
        keys: true
      });
      $('#responsive-table').DataTable({});
      $('#responsive-table-model').DataTable({
        responsive: {
          details: {
            display: $.fn.dataTable.Responsive.display.modal({
              header: function(row) {
                var data = row.data();
                return 'Details for ' + data[0] + ' ' + data[1];
              }
            }),
            renderer: $.fn.dataTable.Responsive.renderer.tableAll({
              tableClass: 'table'
            })
          }
        }
      });
    });
  </script>

</body>

</html>