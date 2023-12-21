
<?php 
session_start();
include 'include/theme.php';
if(!isset($_SESSION['login'])){
if (isset($_POST['submit']) && isset($_POST['username']) && isset($_POST['password']) ) {
    $data=$_POST['data'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $test=userLogin($username,$password);

    if($test[0]['username']==$username && $test[0]['password']==$password)
    {
        if($test[0]['role']==1)
        {
            
            echo'hello admin';
            $_SESSION['login']="1";
            $_SESSION['userid']=$test[0]['id'];
            $_SESSION['name']=$test[0]['username'];
            $_SESSION['email']=$test[0]['email'];
            $_SESSION['phone']=$test[0]['phone'];
            header('Location: /admin/menu/addmenu.php');            
        }
        elseif($test[0]['role']== 2){
            $_SESSION['login']="2";
            $_SESSION['userid']=$test[0]['id'];
            $_SESSION['name']=$test[0]['username'];
            $_SESSION['email']=$test[0]['email'];
            $_SESSION['phone']=$test[0]['phone'];
            header('Location: profile.php');            

        }
        
    }
    else{

        $erorr="نام کاربری یا رمز عبور اشتباه است";
    }
   
}}
elseif($_SESSION['login']=='1'){
    $_SESSION['login']='1';
    header('Location: /admin/');

}
elseif($_SESSION['login']== '2'){
    $_SESSION['login']='2';
    header('Location: profile.php');
}
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>کارین شاپ</title>
    <!--font IRANSans-->
    <link rel="stylesheet" href="css/iranSans.css">
    <!--Owl Carousel-->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!--Bootstrap5-->
    <link rel="stylesheet" href="css/bootstrap.rtl.min.css">
    <!--Custom Styles-->
    <link rel="stylesheet" href="css/productDetail.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/now-ui-kit.css" rel="stylesheet" />
    <link href="assets/css/plugins/owl.carousel.css" rel="stylesheet" />
    <link href="assets/css/plugins/owl.theme.default.min.css" rel="stylesheet" />
    <link href="assets/css/main.css" rel="stylesheet" />
    <style>
    .btn-round {
      border-radius: 50%;
    }
  </style>

</head>
<body class="sidebar-collapse"> <?php include 'section/header2.php'; ?> </br></body>

<body>

    <!-- header -->
    <header>
        <!-- navbar -->
          <script src="assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>

    </header>
    
    <!-- main --> 
    <div class="wrapper default">
        <div class="container">
        </br></br></br></br>
            <div class="row">
                <div class="main-content col-12 col-md-7 col-lg-5 mx-auto">
                    <div class="account-box">
                        <a href="#" class="logo">
                            <img src="assets/img/logo.png" alt="">
                        </a>
                        <div class="account-box-title text-right">ورود به کارین شاپ</div>
                        <div class="account-box-content">
                            <form method="POST" class="form-account">
                                <div class="form-account-title">ایمیل یا شماره موبایل</div>
                                <div class="form-account-row">
                                    <label class="input-label"><i class="now-ui-icons users_single-02"></i></label>
                                    <input name="username" class="input-field" type="text"
                                        placeholder="ایمیل یا شماره موبایل خود را وارد نمایید">
                                </div>
                                <div class="form-account-title">رمز عبور
                                 
                                </div>
                                <div class="form-account-row">
                                    <label class="input-label"><i
                                            class="now-ui-icons ui-1_lock-circle-open"></i></label>
                                    <input name="password" class="input-field" type="password"
                                        placeholder="رمز عبور خود را وارد نمایید">
                                </div>
                                <div class="form-account-row form-account-submit">
                                    <div class="parent-btn">
                                        <p style="color: red;">
                                        <?php
                                            echo $erorr;
                                        ?>
                                        </p>
                                        <button type="submit" name="submit" class="dk-btn dk-btn-info">
                                            ورود به کارین شاپ
                                            <i class="fa fa-sign-in"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="form-account-agree">
                                   
                                </div>
                            </form>
                        </div>
                        <div class="account-box-footer">
                            <span>کاربر جدید هستید؟</span>
                            <a href="#" class="btn-link-border">ثبت‌نام در
                                کارین شاپ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="mini-footer">
            <nav>
                <div class="container">
                    <ul class="menu">
                        <li>
                            <a href="#">درباره کارین شاپ</a>
                        </li>
                        <li>
                            <a href="#">فرصت‌های شغلی</a>
                        </li>
                        <li>
                            <a href="#">تماس با ما</a>
                        </li>
                        <li>
                            <a href="#">همکاری با سازمان‌ها</a>
                        </li>

                    </ul>
                </div>
            </nav>
            <div class="copyright-bar">
                <div class="container">
                    <p>
                        استفاده از مطالب فروشگاه اینترنتی کارین شاپ فقط برای مقاصد غیرتجاری و با ذکر منبع بلامانع است.
                        کلیه حقوق این سایت متعلق
                        به شرکت نوآوران فن آوازه (فروشگاه آنلاین کارین شاپ) می‌باشد.
                    </p>
                </div>
            </div>
        </footer>
    </div>
        <?php include 'section/footer2.php'; ?>
