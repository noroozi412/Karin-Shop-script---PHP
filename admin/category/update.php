
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>پنل مدیریت | داشبورد سوم</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plugins/font-awesome/css/font-awesome.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <!-- bootstrap rtl -->
  <link rel="stylesheet" href="../dist/css/bootstrap-rtl.min.css">
  <!-- template rtl version -->
  <link rel="stylesheet" href="../dist/css/custom-style.css">

</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to to the body tag
to get the desired effect
|---------------------------------------------------------|
|LAYOUT OPTIONS | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
 <?php
 include '../part/header.php'
  ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">پنل مدیریت</span>
    </a>

    <!-- Sidebar -->
  ?<?php
    include '../part/sidebar.php';
  ?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php
      include '../part/addres.php'
    ?>

    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <form role="form" method="post">
          <div class="card card-warning">
            <div class="card-header">
              <h3 class="card-title">اجزای کلی</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <?php include_once '../../include/function.php';
              if(isset($_POST['submit']))
              {
                updateCategory($_GET['submit'],$_POST['data']);

              }
              if(isset($_GET['submit']))
              {
                
              
              foreach (getCategory($_GET['submit']) as $getmenu ) {
             
              ?>
              <form method="post" role="form">
                <!-- text input -->
                <div class="form-group">
                  <label>عنوان</label>
                  <input type="text" value="<?php echo $getmenu['title']; ?>"  class="form-control" name="data[title]" placeholder="وارد کردن اطلاعات ..."></input>
                </div>
                
                <div class="form-group">
                  <label>جایگاه قرارگیری</label>
                  <input type="text" value="<?php echo $getmenu['sort']; ?>" name="data[sort]" class="form-control" placeholder="وارد کردن اطلاعات ...">
                </div>
                
                <div class="form-group">
                  <div class="form-group">
                    <label>
                      <input type="radio" name="data[status]" value="1" class="minimal" <?php if($getmenu['status']==1) {echo 'checked';}?>>
                      فعال
                    </label>
                    <label>
                      <input type="radio" name="data[status]" value="0" class="minimal" <?php if($getmenu['status']==0) {echo 'checked';}?>  >
                      غیرفعال
                    </label>

                  </div>
                  <input class="btn btn-primary"type="submit" name="submit" ></input>
                </div>

              </form>
              <?php }}?>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.col-md-6 -->
        </form>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-block-down">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>CopyLeft &copy; 2018 <a href="http://github.com/hesammousavi/">حسام موسوی</a>.</strong>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="../dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<script src="../dist/js/demo.js"></script>
<script src="../dist/js/pages/dashboard3.js"></script>
</body>
</html>
