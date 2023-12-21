
<?php session_start();  ?>
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

    <<!-- CSS Files -->
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
                        <div class="table-responsive checkout-content default">
                            <table class="table">
                                <tbody>
                                    <?php  foreach($cart as $item=>$value){ ?>
                                    <tr class="checkout-item">
                                        <td>
                                        <a href="product.php?id=<?php echo $value['id']; ?>">
                                            <img width="100" height="100" src="<?php echo $value['img'] ?>" alt="">
                                    </a>
                                            <a href="cartController.php?remove=<?php echo $value['id']; ?>" style="background-color: red; color: white; text-align: center;" class="checkout-btn-remove"></a>
                                        </td>
                                        <td>
                                        <a href="product.php?id=<?php echo $value['id']; ?>">                                           <h3 class="checkout-title">
                                                <?php echo $value['name']?>   </a>                                        </h3> 
                                        </td>
                                        <td> <a href="cartController.php?add-to-cart=<?php echo $value['id']; ?>" class="btn btn-danger btn-round">+</a>
                                                    <?php echo "تعداد:".$value['cont'] ?>
                                                    <a href="cartController.php?min=<?php echo $value['id']; ?>" class="btn btn-danger btn-round">-</a>
</td>
                                        <td><?php $avreage=$value['price']/$value['cont']; echo"قیمت هر واحد:".$avreage ?></td>
                                        <td><?php echo"مجموع قیمت:" .$value['price'] ?></td>
                                        

                                    </tr>
                                 <?php } ?>
                                </tbody>
                            </table>
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
                                            echo $price;
                                            $_SESSION['price']=$price;
                                            ?>
                                        </span></li>
                                        <li>
                                            <span>هزینه ارسال</span>
                                            <span>پس پرداخت<span class="wiki wiki-holder">
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
                                        <a href="cartcheckout.php" class="selenium-next-step-shipping">
                                            <div class="parent-btn">
                                                <button class="dk-btn dk-btn-info">
                                                    ادامه ثبت سفارش
                                                    <i class="now-ui-icons shopping_basket"></i>
                                                </button>
                                            </div>
                                        </a>
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
