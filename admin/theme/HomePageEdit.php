
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>فرم درج محصول</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

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
    }.form-container {
      max-width: 500px;
      margin: 0 auto;
      text-align: right;
      padding: 20px;
      background-color: #f9f9f9;
      border-radius: 4px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    .form-container .form-group {
      margin-bottom: 20px;
    }
    .form-container .form-group label {
      font-weight: bold;
    }
    .form-container .form-group input[type="file"] {
      display: none;
    }
    .form-container .form-group .custom-file-upload {
      display: inline-block;
      padding: 8px 12px;
      cursor: pointer;
      background-color: #f3f3f3;
      border-radius: 4px;
    }
    .form-container .form-group .custom-file-upload:hover {
      background-color: #e9e9e9;
    }
    .form-container .form-group .preview-image {
      max-width: 100%;
      margin-top: 10px;
      border-radius: 4px;
    }
        body {
            direction: rtl;
            text-align: right;
        }
    </style>
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
      include '../part/addres.php';
      include '../../include/theme.php';
      

      if(isset($_POST['submit']))
      {
        upadtePhoto($_POST['data'],$_FILES['img'],$_POST['oldimg']);
      }
    ?>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
    <div class="container">

<h1 class="text-center">تنظیمات پوسته</h1>

<div class="row">

    <div class="col-sm-6">
      <?php 
        $slider1=showTheme('1');
        foreach($slider1 as $slider1){
      ?>
        <form enctype="multipart/form-data" action="" method="POST">
            <h2 class="text-center">اسلاید شماره 1</h2>
            <div class="mb-3">
                <label for="link_1" class="form-label">لینک اسلاید</label>
                <input name="data[url]" value="<?php echo $slider1['url'] ;?>" type="text" class="form-control" id="link_1" placeholder="لینک اسلاید">
            </div>
            <div class="mb-3">
                <label for="image_1" class="form-label">تصویر اسلاید</label>
                <input name="img" type="file" class="form-control" id="image_1" >
            </div>
            <div class="mb-3">
            <img width="100%" height="250" src="<?php echo $slider1['img'] ;?>" alt="پیش نمایش تصویر">
            </div>
            <input type="hidden" name="data[id]" value="1">
            <input type="hidden" name="oldimg" value="<?php echo $slider1['img']; ?>">
            <input name = "submit" type="submit" class="btn btn-primary" value="ذخیره">
        </form>
        <?php } ?>
    </div>

    <div class="col-sm-6">
    <?php 
        $slider1=showTheme('2');
        foreach($slider1 as $slider1){
      ?>
        <form enctype="multipart/form-data" action="" method="POST">
            <h2 class="text-center">اسلاید شماره 2</h2>
            <div class="mb-3">
                <label for="link_1" class="form-label">لینک اسلاید</label>
                <input name="data[url]" value="<?php echo $slider1['url'] ;?>" type="text" class="form-control" id="link_1" placeholder="لینک اسلاید">
            </div>
            <div class="mb-3">
                <label for="image_1" class="form-label">تصویر اسلاید</label>
                <input name="img" type="file" class="form-control" id="image_1" >
            </div>
            <div class="mb-3">
            <img width="100%" height="250" src="<?php echo $slider1['img'] ;?>" alt="پیش نمایش تصویر">
            </div>
            <input type="hidden" name="data[id]" value="2">
            <input type="hidden" name="oldimg" value="<?php echo $slider1['img']; ?>">
            <input name = "submit" type="submit" class="btn btn-primary" value="ذخیره">
        </form>
        <?php } ?>
    </div>
    
<div class="col-sm-6">
<?php 
        $slider1=showTheme('3');
        foreach($slider1 as $slider1){
      ?>
        <form enctype="multipart/form-data" action="" method="POST">
            <h2 class="text-center">تصویر شماره 1 کنار اسلایدر</h2>
            <div class="mb-3">
                <label for="link_1" class="form-label">لینک اسلاید</label>
                <input name="data[url]" value="<?php echo $slider1['url'] ;?>" type="text" class="form-control" id="link_1" placeholder="لینک اسلاید">
            </div>
            <div class="mb-3">
                <label for="image_1" class="form-label">تصویر اسلاید</label>
                <input name="img" type="file" class="form-control" id="image_1" >
            </div>
            <div class="mb-3">
            <img width="100%" height="250" src="<?php echo $slider1['img'] ;?>" alt="پیش نمایش تصویر">
            </div>
            <input type="hidden" name="data[id]" value="3">
            <input type="hidden" name="oldimg" value="<?php echo $slider1['img']; ?>">
            <input name = "submit" type="submit" class="btn btn-primary" value="ذخیره">
        </form>
        <?php } ?>
    </div>

    <div class="col-sm-6">
    <?php 
        $slider1=showTheme('4');
        foreach($slider1 as $slider1){
      ?>
        <form enctype="multipart/form-data" action="" method="POST">
            <h2 class="text-center">تصویر شماره 1 کنار اسلایدر</h2>
            <div class="mb-3">
                <label for="link_1" class="form-label">لینک اسلاید</label>
                <input name="data[url]" value="<?php echo $slider1['url'] ;?>" type="text" class="form-control" id="link_1" placeholder="لینک اسلاید">
            </div>
            <div class="mb-3">
                <label for="image_1" class="form-label">تصویر اسلاید</label>
                <input name="img" type="file" class="form-control" id="image_1" >
            </div>
            <div class="mb-3">
            <img width="100%" height="250" src="<?php echo $slider1['img'] ;?>" alt="پیش نمایش تصویر">
            </div>
            <input type="hidden" name="data[id]" value="4">
            <input type="hidden" name="oldimg" value="<?php echo $slider1['img']; ?>">
            <input name = "submit" type="submit" class="btn btn-primary" value="ذخیره">
        </form>
        <?php } ?>
    </div>
    
    <div class="col-sm-6">
    <?php 
        $slider1=showTheme('5');
        foreach($slider1 as $slider1){
      ?>
        <form enctype="multipart/form-data" action="" method="POST">
            <h2 class="text-center">تصویر شماره 1 کنار اسلایدر</h2>
            <div class="mb-3">
                <label for="link_1" class="form-label">لینک اسلاید</label>
                <input name="data[url]" value="<?php echo $slider1['url'] ;?>" type="text" class="form-control" id="link_1" placeholder="لینک اسلاید">
            </div>
            <div class="mb-3">
                <label for="image_1" class="form-label">تصویر اسلاید</label>
                <input name="img" type="file" class="form-control" id="image_1" >
            </div>
            <div class="mb-3">
            <img width="100%" height="250" src="<?php echo $slider1['img'] ;?>" alt="پیش نمایش تصویر">
            </div>
            <input type="hidden" name="data[id]" value="5">
            <input type="hidden" name="oldimg" value="<?php echo $slider1['img']; ?>">
            <input name = "submit" type="submit" class="btn btn-primary" value="ذخیره">
        </form>
        <?php } ?>
    </div>
    <div class="col-sm-6">
    <?php 
        $slider1=showTheme('6');
        foreach($slider1 as $slider1){
      ?>
        <form enctype="multipart/form-data" action="" method="POST">
            <h2 class="text-center">تصویر شماره 1 کنار اسلایدر</h2>
            <div class="mb-3">
                <label for="link_1" class="form-label">لینک اسلاید</label>
                <input name="data[url]" value="<?php echo $slider1['url'] ;?>" type="text" class="form-control" id="link_1" placeholder="لینک اسلاید">
            </div>
            <div class="mb-3">
                <label for="image_1" class="form-label">تصویر اسلاید</label>
                <input name="img" type="file" class="form-control" id="image_1" >
            </div>
            <div class="mb-3">
            <img width="100%" height="250" src="<?php echo $slider1['img'] ;?>" alt="پیش نمایش تصویر">
            </div>
            <input type="hidden" name="data[id]" value="6">
            <input type="hidden" name="oldimg" value="<?php echo $slider1['img']; ?>">
            <input name = "submit" type="submit" class="btn btn-primary" value="ذخیره">
        </form>
        <?php } ?>
    </div>
    <div class="col-sm-6">
    <?php 
        $slider1=showTheme('7');
        foreach($slider1 as $slider1){
      ?>
        <form enctype="multipart/form-data" action="" method="POST">
            <h2 class="text-center">تصویر شماره 1 کنار اسلایدر</h2>
            <div class="mb-3">
                <label for="link_1" class="form-label">لینک اسلاید</label>
                <input name="data[url]" value="<?php echo $slider1['url'] ;?>" type="text" class="form-control" id="link_1" placeholder="لینک اسلاید">
            </div>
            <div class="mb-3">
                <label for="image_1" class="form-label">تصویر اسلاید</label>
                <input name="img" type="file" class="form-control" id="image_1" >
            </div>
            <div class="mb-3">
            <img width="100%" height="250" src="<?php echo $slider1['img'] ;?>" alt="پیش نمایش تصویر">
            </div>
            <input type="hidden" name="data[id]" value="7">
            <input type="hidden" name="oldimg" value="<?php echo $slider1['img']; ?>">
            <input name = "submit" type="submit" class="btn btn-primary" value="ذخیره">
        </form>
        <?php } ?>
    </div>
    <div class="col-sm-6">
    <?php 
        $slider1=showTheme('8');
        foreach($slider1 as $slider1){
      ?>
        <form enctype="multipart/form-data" action="" method="POST">
            <h2 class="text-center">تصویر شماره 1 کنار اسلایدر</h2>
            <div class="mb-3">
                <label for="link_1" class="form-label">لینک اسلاید</label>
                <input name="data[url]" value="<?php echo $slider1['url'] ;?>" type="text" class="form-control" id="link_1" placeholder="لینک اسلاید">
            </div>
            <div class="mb-3">
                <label for="image_1" class="form-label">تصویر اسلاید</label>
                <input name="img" type="file" class="form-control" id="image_1" >
            </div>
            <div class="mb-3">
            <img width="100%" height="250" src="<?php echo $slider1['img'] ;?>" alt="پیش نمایش تصویر">
            </div>
            <input type="hidden" name="data[id]" value="8">
            <input type="hidden" name="oldimg" value="<?php echo $slider1['img']; ?>">
            <input name = "submit" type="submit" class="btn btn-primary" value="ذخیره">
        </form>
        <?php } ?>
    </div>
    <div class="col-sm-6">
    <?php 
        $slider1=showTheme('9');
        foreach($slider1 as $slider1){
      ?>
        <form enctype="multipart/form-data" action="" method="POST">
            <h2 class="text-center">تصویر شماره 1 کنار اسلایدر</h2>
            <div class="mb-3">
                <label for="link_1" class="form-label">لینک اسلاید</label>
                <input name="data[url]" value="<?php echo $slider1['url'] ;?>" type="text" class="form-control" id="link_1" placeholder="لینک اسلاید">
            </div>
            <div class="mb-3">
                <label for="image_1" class="form-label">تصویر اسلاید</label>
                <input name="img" type="file" class="form-control" id="image_1" >
            </div>
            <div class="mb-3">
            <img width="100%" height="250" src="<?php echo $slider1['img'] ;?>" alt="پیش نمایش تصویر">
            </div>
            <input type="hidden" name="data[id]" value="9">
            <input type="hidden" name="oldimg" value="<?php echo $slider1['img']; ?>">
            <input name = "submit" type="submit" class="btn btn-primary" value="ذخیره">
        </form>
        <?php } ?>
    </div>
    <div class="col-sm-6">
    <?php 
        $slider1=showTheme('10');
        foreach($slider1 as $slider1){
      ?>
        <form enctype="multipart/form-data" action="" method="POST">
            <h2 class="text-center">تصویر شماره 1 کنار اسلایدر</h2>
            <div class="mb-3">
                <label for="link_1" class="form-label">لینک اسلاید</label>
                <input name="data[url]" value="<?php echo $slider1['url'] ;?>" type="text" class="form-control" id="link_1" placeholder="لینک اسلاید">
            </div>
            <div class="mb-3">
                <label for="image_1" class="form-label">تصویر اسلاید</label>
                <input name="img" type="file" class="form-control" id="image_1" >
            </div>
            <div class="mb-3">
            <img width="100%" height="250" src="<?php echo $slider1['img'] ;?>" alt="پیش نمایش تصویر">
            </div>
            <input type="hidden" name="data[id]" value="10">
            <input type="hidden" name="oldimg" value="<?php echo $slider1['img']; ?>">
            <input name = "submit" type="submit" class="btn btn-primary" value="ذخیره">
        </form>
        <?php } ?>
    </div>

</div>

</div>

    </div>
   
  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-block-down">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>CopyLeft &copy; 2024 <a href="http://PendarFan.ir">پندارفن | PendarFan.ir</a>.</strong>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
 
<!-- jQuery -->
<!-- Bootstrap -->
<!-- AdminLTE -->
<script src="../dist/js/adminlte.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<script src="../dist/js/demo.js"></script>
<script src="../dist/js/pages/dashboard3.js"></script>
</body>
</html>
