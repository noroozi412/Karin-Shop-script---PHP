
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>فرم درج محصول</title>
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
      include '../../include/product.php';
      include '../../include/function.php';

      if(isset($_POST['submit']))
      {
        $serverName ='http://'.$_SERVER['SERVER_NAME'].'/'.'shop1/images/products';
        $img=uploader($_FILES['img'],'../../images/products');
        addProduct($_POST['data'], $img);
      }
    ?>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card rounded">
                    <div class="card-body">
                        <form method="post" role="form" enctype="multipart/form-data">
                            <div class="form-group text-right">
                                <label for="productName">نام محصول</label>
                                <input name="data[title]" type="text" class="form-control" id="data[title]" placeholder="نام محصول را وارد کنید">
                            </div>
                            <div class="form-group text-right">
                                <label for="productNamee">قیمت محصول</label>
                                <input name="data[price]" type="text" class="form-control" id="productNamee" placeholder="قیمت محصول را به تومان وارد کنید">
                            </div>
                            <div class="form-group text-right">
                                <label for="productImage">عکس محصول</label>
                                <input type="file" name="img" class="form-control-file" id="productImage" accept=".png, .jpg">
                            </div>
                            <div class="form-group text-right">
                                <label for="productDescription">توضیحات محصول</label></br>
                                <div class="ckeditor-container">
                                    <textarea name="data[text]" class="form-control" id="productDescription" placeholder="توضیحات محصول را وارد کنید"></textarea>
                                </div>
                            </div>
                            <div class="form-group text-right">
                                <label for="category">دسته بندی</label>
                                <select name="data[catid]" class="form-control" id="category">
                                <?php foreach(showCategory() as $getCategory) {?>    
                                <option value="<?php echo $getCategory['id'];?>"><?php echo $getCategory['title']; ?></option>

                                   <?php } ?>
                                </select>
                            </div>
                            <button name="submit" type="submit" class="btn btn-primary float-right">ثبت محصول</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
  <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/translations/fa.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#productDescription'), {
                language: 'fa',
                toolbar: {
                    items: [
                        'heading',
                        '|',
                        'bold',
                        'italic',
                        'underline',
                        'link',
                        'bulletedList',
                        'numberedList',
                        '|',
                        'alignment',
                        'outdent',
                        'indent',
                        '|',
                        'imageUpload',
                        'blockQuote',
                        'insertTable',
                        'undo',
                        'redo',
                        'fontColor',
                        'fontBackgroundColor',
                        'highlight',
                        'horizontalLine'
                    ]
                },
                image: {
                    toolbar: [
                        'imageTextAlternative',
                        'imageStyle:full',
                        'imageStyle:side'
                    ]
                },
                table: {
                    contentToolbar: [
                        'tableColumn',
                        'tableRow',
                        'mergeTableCells'
                    ]
                },
                language: 'fa',
                direction: 'rtl'
            })
            .catch(error => {
                console.error(error);
            });
    </script>
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
    <strong>CopyLeft &copy; 2024 <a href="http://PendarFan.ir">پندارفن | PendarFan.ir</a>.</strong>
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
