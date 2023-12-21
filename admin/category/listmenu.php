<?php
include_once '../../include/function.php'; 
if(isset($_POST['delect']))
{
  deleteCategory($_POST['delect']);
}
?>

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
<!-- Add the Bootstrap CSS stylesheet -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<style>

  tbody tr:nth-child(even) {
    background-color: #f8f9fa; /* Gray background color */
  }

  tbody tr:nth-child(odd) {
    background-color: #ffffff; /* White background color */
  }
</style>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>جدول ریسپانسیو</title>

  <!-- اضافه کردن فایل استایل‌شیت CSS بوت استرپ -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    
    .ck-editor__editable {
  min-height: 300px;
}
    body {
      background-image: url('itachi-uchiha-naruto-black-background-minimal-art-amoled-3840x2160-4942.jpg');
      background-size: cover;
    }
    .container {
      margin-top: 100px;
    }
    #ckeditor {
      text-align: center;
    }
    .buttons {
      text-align: center;
      margin-top: 30px;
    }
        .container {
            margin-top: 50px;
        }
        .form-group label {
            text-align: right;
            float: right;
        }
        .form-group textarea {
            height: 200px;
        }
        .rounded {
            border-radius: 15px;
        }
        .ckeditor-container {
            margin-top: 20px;
        }
        body {
            direction: rtl;
            text-align: right;
        }
    .btn-edit {
      background-color: green;
      color: white;
    }

    .btn-delete {
      background-color: red;
      color: white;
    }
  </style>
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
    <div class="container">
    <h1>مثال جدول ریسپانسیو</h1>
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th>عنوان</th>
            <th>جایگاه قرارگیری</th>
            <th>وضعیت</th>
            <th>اقدامات</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach(listCategory() as $listMenu) 
          {?>
          <tr>
            <td><?php echo $listMenu['title']; ?></td>
            <td><?php echo $listMenu['sort']; ?></td>
          
            <?php 
              if($listMenu['status'] == 0)
              {
                  echo '<td class="bg-danger text-white" >غیرفعال</td>';
              }
              else
              {
                echo '<td class="bg-success text-white" >غیرفعال</td>';
              }
              
            ?>
            <td>
              <form method="GET" action="update.php">
              <button name="submit" type="submit" value="<?php echo $listMenu['id'];?>" class="btn btn-edit">ویرایش</button>
              </form>
              <form  method="POST" action="">
              <button type="submit" value="<?php echo $listMenu['id'];?>" name="delect" class="btn btn-delete">حذف</button>
            </form>
            </td>
          </tr>
          <?php } ?>
         
          <!-- اضافه کردن ردیف‌های بیشتر در صورت نیاز -->
        </tbody>
      </table>
    </div>
  </div>

  <!-- اضافه کردن کتابخانه jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- اضافه کردن کتابخانه JavaScript بوت استرپ -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </table>
  </div>

  <!-- Add the jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Add the Bootstrap JavaScript library -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
