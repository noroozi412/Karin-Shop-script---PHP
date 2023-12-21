<?php session_start(); 
if(!isset($_SESSION['login'])){
    header('Location: login.php');
}
if(isset($_POST['submit'])){
$_SESSION['familyname']=$_POST['name'] ;
$_SESSION['addresss']=$_POST['address'] ;
$_SESSION['phone']=$_POST['phone'];
//echo $_POST['address'].$_SESSION['address'];
header('Location: payment/request.php');
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
      <body class="sidebar-collapse"> <?php include 'section/header2.php'; ?> </body>

<body>

    <!-- header -->
    <header>
        <!-- navbar -->
          <script src="assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>

    </header>
            <?php
                include 'include/product.php'; 
                
                $session=$_SESSION;
                $cart=[];
                foreach ($session as $key => $value) {
                    if(substr($key,0,5) == 'cart_') {
                        $cart[$key] = $value;
                    }
                }

             
               
            ?>
    <!-- main --> 
    
    <main class="cart-page default">
            <div class="container">
                <div class="row">
                    <div class="cart-page-content col-xl-9 col-lg-8 col-md-12 order-1">
                        <div class="cart-page-title">
                            <h1>سبد خرید</h1>
                        </div> 
                        <div class="account-box-content">
                            <form action="" method="POST" class="form-account">
                                <div class="row">
                                  
                                <div class="row">
                                    <div class="col-12">
                                    </div>
                                    
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-account-title">نام و نام خانوادگی تحویل گیرنده</div>
                                        <div class="form-account-row">
                                            <input title="نام و نام خانوادگی را درست وارد کنید" name="name" pattern="[آ-یA-Za-z]+\s[آ-یA-Za-z]+" required class="input-field text-right" type="text" placeholder="نام تحویل گیرنده را وارد نمایید">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-account-title">شماره موبایل</div>
                                        <div class="form-account-row">
                                            <input title="شماره موبایل درست وارد کنید" name="phone"  required class="input-field" type="text"
                                            pattern="09(0[1-2]|1[0-9]|3[0-9]|2[0-1])-?[0-9]{3}-?[0-9]{4}" placeholder=" شماره موبایل خود را وارد نمایید">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-account-title">آدرس پستی</div>
                                        <div class="form-account-row">
                                            <textarea  name="address" required class="input-field text-right" rows="5" placeholder=" آدرس تحویل گیرنده را وارد کنید..."></textarea>
                                        </div>
                                    </div>
                                    
                                    </div>
                                </div>
                                <div class="col-12">
                                        </div>
                                    </div>
                                <div class="col-sm-6 mx-auto">
                                    <div class="form-account-row form-account-submit">
                                        <div class="parent-btn">
                                            
                                      
                                        </div>
                                    </div>
                                </div>
                            
                        </div>
                    <aside class="cart-page-aside col-xl-3 col-lg-4 col-md-6 center-section order-2">
                        <div class="checkout-aside">
                            <div class="checkout-summary">
                                <div class="checkout-summary-main">
                                    <ul class="checkout-summary-summary">
                                        <li><span>مبلغ کل </span><span>
                                            <?php
                                            $price=array_column($cart,'price');
                                            $price=array_sum($price);
                                            echo "تومان : ".$price;
                                             ?>
                                        </span></li>
                                        <li>
                                            <span>هزینه ارسال</span>
                                            <span>پس پرداخت<span class="wiki wiki-holder"></span>
                                                    <div class="wiki-container js-dk-wiki is-right">
                                                        <div class="wiki-arrow"></div>
                                                        <p class="wiki-text">
                                                            هزینه ارسال مرسولات می‌تواند وابسته به شهر و آدرس گیرنده
                                                            متفاوت باشد. در
                                                            صورتی که هر
                                                            یک از مرسولات حداقل ارزشی برابر با ۱۰۰هزار تومان داشته باشد،
                                                            آن مرسوله
                                                            بصورت رایگان
                                                            ارسال می‌شود.<br>
                                                            "حداقل ارزش هر مرسوله برای ارسال رایگان، می تواند متغیر
                                                            باشد."
                                                        </p>
                                                    </div>
                                                </span></span>
                                        </li>
                                    </ul>
                                    <div class="checkout-summary-devider">
                                        <div></div>
                                    </div>
                                    <div class="checkout-summary-content">
                                        <div class="checkout-summary-price-title">مبلغ قابل پرداخت:</div>
                                        <div class="checkout-summary-price-value">
                                            <span class="checkout-summary-price-value-amount"><?php echo $price; ?></span>تومان
                                        </div>
                                        <a href="#" class="selenium-next-step-shipping">
                                            <div class="parent-btn">
                                                <button type="submit" name="submit" class="dk-btn dk-btn-info">
                                                    ادامه ثبت سفارش
                                                    <i class="now-ui-icons shopping_basket"></i>
                                        </button>
                                            </div>
                                        </a>
                                        </form>
                                        <div>
                                            <span>
                                                کالاهای موجود در سبد شما ثبت و رزرو نشده‌اند، برای ثبت سفارش مراحل بعدی
                                                را تکمیل
                                                کنید.
                                            </span>
                                            <span class="wiki wiki-holder">
                                                <div class="wiki-container is-right">
                                                    <div class="wiki-arrow"></div>
                                                    <p class="wiki-text">
                                                        محصولات موجود در سبد خرید شما تنها در صورت ثبت و پرداخت سفارش
                                                        برای شما رزرو
                                                        می‌شوند. در
                                                        صورت عدم ثبت سفارش، دیجی کالا هیچگونه مسئولیتی در قبال تغییر
                                                        قیمت یا موجودی
                                                        این کالاها
                                                        ندارد.
                                                    </p>
                                                </div>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout-feature-aside">
                                <ul>
                                    <li class="checkout-feature-aside-item checkout-feature-aside-item-guarantee">
                                        هفت روز
                                        ضمانت تعویض
                                    </li>
                                    <li class="checkout-feature-aside-item checkout-feature-aside-item-cash">
                                        پرداخت در محل با
                                        کارت بانکی
                                    </li>
                                    <li class="checkout-feature-aside-item checkout-feature-aside-item-express">
                                        تحویل اکسپرس
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </main>

    <!-- footer -->
              <?php include 'section/footer2.php'; ?>
