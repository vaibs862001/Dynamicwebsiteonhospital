<!-- insert and update code-->
<?php
include_once('modules/application_top.php');
if(empty($_SESSION['admin_id'])){
    header('Location:admin_login.php');
  }
//error_reporting(E_ALL);
//error_reporting(0);
include_once("classname/filemanager.php");
$aboutclass = new aboutclass();
$aboutmanager = new aboutmanager();

if($_POST['submit']=="Submit"){
  //echo "submit";
  $aboutclass->settitle($_POST['title']);
  $aboutclass->setdescription($_POST['description']);
  $aboutclass->setabout_img($_POST['about_img']);
  $aboutmanager->add_about($aboutclass);
  $msg="";
 
}
if(isset($_GET['edit_id'])!=""){
  $id = $_GET['edit_id'];
     $aboutclass->setedit_id($id);
    $data=$aboutmanager->view_about($aboutclass);
    $btn="Update";
    $title="Update";
    $img=$data[0]['about_img'];
}else{
    $btn="Submit";  
    $title="Add";
}

if($_POST['submit'] =="Update"){
    //echo "update";
   $aboutclass->setedit_id($id);
    $aboutclass->settitle($_POST['title']);
    $aboutclass->setdescription($_POST['description']);
    $aboutclass->setabout_img($_POST['about_img']);
    $aboutclass->setoldimg($_POST['old_img']);
    $aboutmanager->about_update($aboutclass);
    header("location:page.php?edit_id=".$_GET['edit_id']);
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home Management | Admin Panel</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  
  
 <?php include('include/header.php');?>

 <?php include('include/leftbar.php');?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
      <h3 class="card-title"><a href="banner_list.php" class="btn btn-block btn-primary"><i class="fa fa-arrow-left"></i> Banner List</a></h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Banner Master</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Banner Master</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label>Banner Name</label>
                    <input type="text" class="form-control" id="name" value="<?php echo $data[0]['data']; ?>" placeholder="Enter Your Name" required>
                  </div>
                   <div class="form-group">
                        <label>Banner Content</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..." required></textarea>
                      </div>
                  <div class="form-group">
                    <label >Banner File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
  
          </div>
          <!--/.col (left) -->
      <div class="col-md-3"></div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
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
<!-- bs-custom-file-input -->
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
