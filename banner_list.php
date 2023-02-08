<?php 
include_once('modules/application_top.php');
if(empty($_SESSION['admin_id'])){
    header('Location:admin_login.php');
  }
   //error_reporting(E_ALL);
(file_exists(include_once('classess/aboutmanager.php'))) ? 'Y':'N';
$aboutclass = new aboutclass();
$aboutmanager = new aboutmanager();

$count_list = $aboutmanager->about_list();

 if(isset($_GET['webdelid'])!=''){
  $del_id=($_GET['webdelid']);
  $aboutclass->setdelete_id($del_id);
   $msg=$aboutmanager->delete_about($aboutclass);
   header("Location:about_list.php");
 }
 //////// Active Deactive start////////
if(isset($_GET['websid']) && $_GET['webinaction']!=''){
    $id=($_GET['websid']);
  $aboutclass->setedit_id($id);
  $aboutclass->setstatus($_GET['webinaction']);
  $msg=$aboutmanager->ChangeStatus($aboutclass);
  header("Location:about_list.php");
 }
 //////// Active Deactive end////////
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home Management| DataTables</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
 <?php include('include/header.php');?>
  <!-- /.navbar -->

   <?php include('include/leftbar.php');?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Home Master</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Home Master</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><a href="add_banner.php" class="btn btn-block btn-primary"><i class="fa fa-arrow-left"></i> Add Banner</a></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID No</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                 <tbody>
                 <?php if(count($count_list)>0){
                    $count=0;
                    for($i=0;$i<count($count_list);$i++){
                    $count++; ?>
                  <tr>
                    <td><?php echo $count; ?></td>
                    <td class="center"><?php echo $count_list[$i]['title']; ?>  </td>
                    <td class="center"><?php echo $count_list[$i]['description']; ?>  </td>
                    <td class="center">
            <img src="uploads/about/<?php echo $count_list[$i]['about_img'];?>" class="img-responsive" style="float:left; padding:0px  3px; " height="50" width="50" alt="image">
                      </td>

            <td style="width: 100px;">
                       <a href="add_about.php?edit_id=<?php echo $count_list[$i]["about_id"]; ?>" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
                       <? if($count_list[$i]['status']=='N') {  ?>

          <a href='about_list.php?websid=<?php echo $count_list[$i]["about_id"]; ?>&webinaction=Y' onClick="return active_single();" data-toggle="tooltip" data-placement="top" title="Active Status" style="text-decoration:none"><i class="fa fa-fw fa-circle" style="color:#F00;"></i></a>
            <? }else{ ?>
             <a href='about_list.php?websid=<?php echo $count_list[$i]["about_id"]; ?>&webinaction=N'  onClick="return deactive_single();" data-toggle="tooltip" data-placement="top" title="Deactive Status" style="text-decoration:none"><i class="fa fa-fw fa-circle" style="color:#090;"></i></a>
            <? } ?> 
 
                    <a href="about_list.php?webdelid=<?php echo $count_list[$i]['about_id']; ?>" onClick="return confirm('Do you really want to delete File?')" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-fw fa-trash"></i></a>  
                  </td> 

                  </tr> 
                  <?php  } } else{ ?>
                  <tr>
                    <td colspan="5" style="text-align:center">Data not found</td>
                  </tr>
                  <?php } ?>
                </tbody> 
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
 <?php include('include/footer.php');?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
