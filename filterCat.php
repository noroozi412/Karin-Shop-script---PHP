<?php
    include 'include/product.php';



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
   

</head>
<body class="sidebar-collapse"> <?php include 'section/header2.php'; ?> </body>

<body>

    <!-- header -->
    <header>
        <!-- navbar -->
          <script src="assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>

    </header>

    <!-- main -->
    <main class="search-page default">
            <div class="container">
                <div class="row">
                    <aside class="sidebar-page col-12 col-sm-12 col-md-4 col-lg-3 order-1">
                        <div class="box">
                            
                        </div>
                        <div class="box">
                            <div class="box-header">
                                <div class="box-toggle" data-toggle="collapse" href="#collapseExample1" role="button"
                                    aria-expanded="true" aria-controls="collapseExample1">
                                   فیلتر بر اساس دسته بندی
                                    <i class="now-ui-icons arrows-1_minimal-down"></i>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="collapse show" id="collapseExample1">
                                   
                                    <div class="filter-option">
                                        <?php foreach(showCategory() as $showCategory){ ?>
                                        <div class="checkbox">
                                            <input  type="hidden" id="checkbox1" >
                                            <label for="checkbox1">
                                                <a href="filterCat.php?id=0&catid=<?php echo $showCategory['id']?>" >
                                            <?php echo $showCategory['title']; ?>
                                            </a>
                                            </label>
                                        </div>
                                    <?php }?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="box-header">
                                <div class="box-toggle" data-toggle="collapse" href="#collapseExample2" role="button"
                                    aria-expanded="true" aria-controls="collapseExample2">
                                    آخرین محصولات
                                    <i class="now-ui-icons arrows-1_minimal-down"></i>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="collapse show" id="collapseExample2">
                                  
                                    <div class="filter-option">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                            
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach(randomProduct() as $randomProduct) {?>
                                            <a href="product.php?id=<?php echo $randomProduct['id']?>">
                                                <tr>
                                                <td><a href="product.php?id=<?php echo $randomProduct['id']?>"><img width="150" src="<?php echo $randomProduct['img']?>" alt="عکس محصول" class="img-fluid"></td>
                                                <td><br><a href="product.php?id=<?php echo $randomProduct['id']?>"><?php echo $randomProduct['title'].'<br>'. 'قیمت : '.$randomProduct['price']?><br></td>
                                            </tr>
                                            </a>
                                            <?php }?>
                                            <!-- ادامه ردیف‌ها -->
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                    </aside>
                    <div class="col-12 col-sm-12 col-md-8 col-lg-9 order-2">
                        <div class="breadcrumb-section default">
                            <ul class="breadcrumb-list">
                                <li>
                                    <a href="#">
                                        <span>فروشگاه اینترنتی کارین شاپ</span>
                                    </a>
                                </li>
                                <li><span>
                                    <?php
                                    $showCategory1=showCategory1($_GET['catid']);
                                    foreach($showCategory1 as $showCategory){echo $showCategory['title'];}
                                    ?>
                                </span></li>
                            </ul>
                        </div>
                        <div class="listing default">
                            <div class="listing-counter">۶,۱۸۸ کالا</div>
                            <div class="listing-header default">
                                <ul class="listing-sort nav nav-tabs justify-content-center" role="tablist"
                                    data-label="مرتب‌سازی بر اساس :">
                                    <li>
                                        <a class="active" data-toggle="tab" href="#related" role="tab"
                                            aria-expanded="false">آخرین محصولات</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#most-view" role="tab"
                                            aria-expanded="false">پربازدیدترین</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#down-price" role="tab"
                                            aria-expanded="false">ارزان‌ترین</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#top-price" role="tab"
                                            aria-expanded="false">گران‌ترین</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content default text-center">
                                <div class="tab-pane active" id="related" role="tabpanel" aria-expanded="true">
                                    <div class="container no-padding-right">
                                        <ul class="row listing-items">
                                            <?php
                                            if (isset($_GET['id'])  ) {
                                            
                                            if (isset($_GET['id']) && $_GET['id']==0) 
                                            {
                                              $pagenumber=0;
                                            }
                                            else if (isset($_GET['id']) && $_GET['id']<12 && $_GET['id']>=1)
                                            {
                                                $pagenumber= $_GET['id']*12;
                                            }
                                            else if (isset($_GET['id']) && $_GET['id']>=12 && $_GET['id']%12==0)
                                            {
                                                $pagenumber= $_GET['id']*12;
                                            }
                                        
                                            $showPage=CategoryFilterProduct($_GET['catid'],$pagenumber);
                                            $cunt=1;
                                            foreach($showPage as $shop)
                                            {$cunt+=1;
                                             ?>
                                             
                                        <li href="dsad.dsd" class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">

                                        <div class="product-box">
                                                    <div class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>کارین شاپ</span>
                                                        <span class="product-seller-details-badge-container"></span>
                                                    </div>
                                                    <a class="product-box-img" href="product.php?id=<?php echo $shop['id'] ?>">
                                                        <img src="<?php echo $shop['img'] ?>" alt="">
                                                    </a>
                                                    <div class="product-box-content">
                                                        <div class="product-box-content-row">
                                                            <div class="product-box-title">
                                                                <a href="product.php?id=<?php echo $shop['id'] ?>">
                                                                <h6><?php echo $shop['title'] ?></h6>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="product-box-row product-box-row-price">
                                                            <div class="price">
                                                                <div class="price-value">
                                                                    <div class="price-value-wrapper">
                                                                    <?php echo $shop['price'] ?> <span
                                                                            class="price-currency">تومان</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            
                                                </div>
                                                </a>
                                            </li>
                                            <?php }}?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane" id="most-view" role="tabpanel" aria-expanded="false">
                                    <div class="container no-padding-right">
                                        <ul class="row listing-items">
                                        <?php

                                            if (isset($_GET['id'])  ) {

                                            if (isset($_GET['id']) && $_GET['id']==0) 
                                            {
                                            $pagenumber=0;
                                            }
                                            else if (isset($_GET['id']) && $_GET['id']<12 && $_GET['id']>=1)
                                            {
                                                $pagenumber= $_GET['id']*12;
                                            }
                                            else if (isset($_GET['id']) && $_GET['id']>=12 && $_GET['id']%12==0)
                                            {
                                                $pagenumber= $_GET['id']*12;
                                            }
                                           
                                            $showPage=CategoryFilterProductView($_GET['catid'],$pagenumber);

                                            foreach($showPage as $shop)
                                            {
                                            ?>
                                            
                                            <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                                <div class="product-box">
                                                    <div
                                                        class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>کارین شاپ</span>
                                                        <span class="product-seller-details-badge-container"></span>
                                                    </div>
                                                    <a class="product-box-img" href="#">
                                                        <img src="<?php echo $shop['img'] ?>" alt="">
                                                    </a>
                                                    <div class="product-box-content">
                                                        <div class="product-box-content-row">
                                                            <div class="product-box-title">
                                                                <a href="product.php?id=<?php echo $shop['id'] ?>">
                                                                <?php echo $shop['title'] ?>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-box-row product-box-row-price">
                                                            <div class="price">
                                                                <div class="price-value">
                                                                    <div class="price-value-wrapper">
                                                                    <?php echo $shop['price'] ?> <span
                                                                            class="price-currency">تومان</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php }}?>
                                            
                                            
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane" id="new" role="tabpanel" aria-expanded="false">
                                    <div class="container no-padding-right">
                                        <ul class="row listing-items">
                                            <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                                <div class="product-box">
                                                    <div
                                                        class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>کارین شاپ</span>
                                                        <span class="product-seller-details-badge-container"></span>
                                                    </div>
                                                    <a class="product-box-img" href="#">
                                                        <img src="assets/img/product/3694075.jpg" alt="">
                                                    </a>
                                                    <div class="product-box-content">
                                                        <div class="product-box-content-row">
                                                            <div class="product-box-title">
                                                                <a href="#">
                                                                    گوشی موبایل هوآوی مدل Nova 3i INE-LX1M دو سیم کارت
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-box-row product-box-row-price">
                                                            <div class="price">
                                                                <div class="price-value">
                                                                    <div class="price-value-wrapper">
                                                                        ۴,۱۳۹,۰۰۰ <span
                                                                            class="price-currency">تومان</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                                <div class="product-box">
                                                    <div
                                                        class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>کارین شاپ</span>
                                                        <span class="product-seller-details-badge-container"></span>
                                                    </div>
                                                    <a class="product-box-img" href="#">
                                                        <img src="assets/img/product/2310961.jpg" alt="">
                                                    </a>
                                                    <div class="product-box-content">
                                                        <div class="product-box-content-row">
                                                            <div class="product-box-title">
                                                                <a href="#">
                                                                    گوشی موبایل هوآوی مدل Y7 Prime 2018 دو سیم کارت
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-box-row product-box-row-price">
                                                            <div class="price">
                                                                <div class="price-value">
                                                                    <div class="price-value-wrapper">
                                                                        ۲,۳۷۸,۰۰۰ <span
                                                                            class="price-currency">تومان</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                                <div class="product-box">
                                                    <div
                                                        class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>کارین شاپ</span>
                                                        <span class="product-seller-details-badge-container"></span>
                                                    </div>
                                                    <a class="product-box-img" href="#">
                                                        <img src="assets/img/product/4560651.jpg" alt="">
                                                    </a>
                                                    <div class="product-box-content">
                                                        <div class="product-box-content-row">
                                                            <div class="product-box-title">
                                                                <a href="#">
                                                                    گوشی موبایل اپل مدل Apple iPhone XS تک سیم کارت
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-box-row product-box-row-price">
                                                            <div class="price">
                                                                <div class="price-value">
                                                                    <div class="price-value-wrapper">
                                                                        ۱۷,۳۴۹,۰۰۰ <span
                                                                            class="price-currency">تومان</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                                <div class="product-box">
                                                    <div
                                                        class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>کارین شاپ</span>
                                                        <span class="product-seller-details-badge-container"></span>
                                                    </div>
                                                    <a class="product-box-img" href="#">
                                                        <img src="assets/img/product/5489258.jpg" alt="">
                                                    </a>
                                                    <div class="product-box-content">
                                                        <div class="product-box-content-row">
                                                            <div class="product-box-title">
                                                                <a href="#">
                                                                    گوشی موبایل سامسونگ مدل j4 Plus J415 دو سیم کارت
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-box-row product-box-row-price">
                                                            <div class="price">
                                                                <div class="price-value">
                                                                    <div class="price-value-wrapper">
                                                                        ۲,۳۹۰,۰۰۰ <span
                                                                            class="price-currency">تومان</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                                <div class="product-box">
                                                    <div
                                                        class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>کارین شاپ</span>
                                                        <span class="product-seller-details-badge-container"></span>
                                                    </div>
                                                    <a class="product-box-img" href="#">
                                                        <img src="assets/img/product/1335154.jpg" alt="">
                                                    </a>
                                                    <div class="product-box-content">
                                                        <div class="product-box-content-row">
                                                            <div class="product-box-title">
                                                                <a href="#">
                                                                    گوشی موبایل اپل مدل iPhone X ظرفیت 256 گیگابایت
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-box-row product-box-row-price">
                                                            <div class="price">
                                                                <div class="price-value">
                                                                    <div class="price-value-wrapper">
                                                                        ۱۵,۳۹۰,۰۰۰ <span
                                                                            class="price-currency">تومان</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                                <div class="product-box">
                                                    <div
                                                        class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>کارین شاپ</span>
                                                        <span class="product-seller-details-badge-container"></span>
                                                    </div>
                                                    <a class="product-box-img" href="#">
                                                        <img src="assets/img/product/2196691.jpg" alt="">
                                                    </a>
                                                    <div class="product-box-content">
                                                        <div class="product-box-content-row">
                                                            <div class="product-box-title">
                                                                <a href="#">
                                                                    گوشی موبایل سامسونگ مدل J7 Pro SM-J730F
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-box-row product-box-row-price">
                                                            <div class="price">
                                                                <div class="price-value">
                                                                    <div class="price-value-wrapper">
                                                                        ۳,۳۰۰,۰۰۰ <span
                                                                            class="price-currency">تومان</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                                <div class="product-box">
                                                    <div
                                                        class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>کارین شاپ</span>
                                                        <span class="product-seller-details-badge-container"></span>
                                                    </div>
                                                    <a class="product-box-img" href="#">
                                                        <img src="assets/img/product/2310961.jpg" alt="">
                                                    </a>
                                                    <div class="product-box-content">
                                                        <div class="product-box-content-row">
                                                            <div class="product-box-title">
                                                                <a href="#">
                                                                    گوشی موبایل هوآوی مدل Y7 Prime 2018 دو سیم کارت
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-box-row product-box-row-price">
                                                            <div class="price">
                                                                <div class="price-value">
                                                                    <div class="price-value-wrapper">
                                                                        ۲,۳۷۸,۰۰۰ <span
                                                                            class="price-currency">تومان</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                                <div class="product-box">
                                                    <div
                                                        class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>کارین شاپ</span>
                                                        <span class="product-seller-details-badge-container"></span>
                                                    </div>
                                                    <a class="product-box-img" href="#">
                                                        <img src="assets/img/product/3694075.jpg" alt="">
                                                    </a>
                                                    <div class="product-box-content">
                                                        <div class="product-box-content-row">
                                                            <div class="product-box-title">
                                                                <a href="#">
                                                                    گوشی موبایل هوآوی مدل Nova 3i INE-LX1M دو سیم کارت
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-box-row product-box-row-price">
                                                            <div class="price">
                                                                <div class="price-value">
                                                                    <div class="price-value-wrapper">
                                                                        ۴,۱۳۹,۰۰۰ <span
                                                                            class="price-currency">تومان</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                                <div class="product-box">
                                                    <div
                                                        class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>کارین شاپ</span>
                                                        <span class="product-seller-details-badge-container"></span>
                                                    </div>
                                                    <a class="product-box-img" href="#">
                                                        <img src="assets/img/product/1335154.jpg" alt="">
                                                    </a>
                                                    <div class="product-box-content">
                                                        <div class="product-box-content-row">
                                                            <div class="product-box-title">
                                                                <a href="#">
                                                                    گوشی موبایل اپل مدل iPhone X ظرفیت 256 گیگابایت
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-box-row product-box-row-price">
                                                            <div class="price">
                                                                <div class="price-value">
                                                                    <div class="price-value-wrapper">
                                                                        ۱۵,۳۹۰,۰۰۰ <span
                                                                            class="price-currency">تومان</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                                <div class="product-box">
                                                    <div
                                                        class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>کارین شاپ</span>
                                                        <span class="product-seller-details-badge-container"></span>
                                                    </div>
                                                    <a class="product-box-img" href="#">
                                                        <img src="assets/img/product/4560651.jpg" alt="">
                                                    </a>
                                                    <div class="product-box-content">
                                                        <div class="product-box-content-row">
                                                            <div class="product-box-title">
                                                                <a href="#">
                                                                    گوشی موبایل اپل مدل Apple iPhone XS تک سیم کارت
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-box-row product-box-row-price">
                                                            <div class="price">
                                                                <div class="price-value">
                                                                    <div class="price-value-wrapper">
                                                                        ۱۷,۳۴۹,۰۰۰ <span
                                                                            class="price-currency">تومان</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                                <div class="product-box">
                                                    <div
                                                        class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>کارین شاپ</span>
                                                        <span class="product-seller-details-badge-container"></span>
                                                    </div>
                                                    <a class="product-box-img" href="#">
                                                        <img src="assets/img/product/5489258.jpg" alt="">
                                                    </a>
                                                    <div class="product-box-content">
                                                        <div class="product-box-content-row">
                                                            <div class="product-box-title">
                                                                <a href="#">
                                                                    گوشی موبایل سامسونگ مدل j4 Plus J415 دو سیم کارت
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-box-row product-box-row-price">
                                                            <div class="price">
                                                                <div class="price-value">
                                                                    <div class="price-value-wrapper">
                                                                        ۲,۳۹۰,۰۰۰ <span
                                                                            class="price-currency">تومان</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                                <div class="product-box">
                                                    <div
                                                        class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>کارین شاپ</span>
                                                        <span class="product-seller-details-badge-container"></span>
                                                    </div>
                                                    <a class="product-box-img" href="#">
                                                        <img src="assets/img/product/2196691.jpg" alt="">
                                                    </a>
                                                    <div class="product-box-content">
                                                        <div class="product-box-content-row">
                                                            <div class="product-box-title">
                                                                <a href="#">
                                                                    گوشی موبایل سامسونگ مدل J7 Pro SM-J730F
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-box-row product-box-row-price">
                                                            <div class="price">
                                                                <div class="price-value">
                                                                    <div class="price-value-wrapper">
                                                                        ۳,۳۰۰,۰۰۰ <span
                                                                            class="price-currency">تومان</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane" id="most-seller" role="tabpanel" aria-expanded="false">
                                    <div class="container no-padding-right">
                                        <ul class="row listing-items">
                                            <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                                <div class="product-box">
                                                    <div
                                                        class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>کارین شاپ</span>
                                                        <span class="product-seller-details-badge-container"></span>
                                                    </div>
                                                    <a class="product-box-img" href="#">
                                                        <img src="assets/img/product/3694075.jpg" alt="">
                                                    </a>
                                                    <div class="product-box-content">
                                                        <div class="product-box-content-row">
                                                            <div class="product-box-title">
                                                                <a href="#">
                                                                    گوشی موبایل هوآوی مدل Nova 3i INE-LX1M دو سیم کارت
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-box-row product-box-row-price">
                                                            <div class="price">
                                                                <div class="price-value">
                                                                    <div class="price-value-wrapper">
                                                                        ۴,۱۳۹,۰۰۰ <span
                                                                            class="price-currency">تومان</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                                <div class="product-box">
                                                    <div
                                                        class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>کارین شاپ</span>
                                                        <span class="product-seller-details-badge-container"></span>
                                                    </div>
                                                    <a class="product-box-img" href="#">
                                                        <img src="assets/img/product/2196691.jpg" alt="">
                                                    </a>
                                                    <div class="product-box-content">
                                                        <div class="product-box-content-row">
                                                            <div class="product-box-title">
                                                                <a href="#">
                                                                    گوشی موبایل سامسونگ مدل J7 Pro SM-J730F
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-box-row product-box-row-price">
                                                            <div class="price">
                                                                <div class="price-value">
                                                                    <div class="price-value-wrapper">
                                                                        ۳,۳۰۰,۰۰۰ <span
                                                                            class="price-currency">تومان</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                                <div class="product-box">
                                                    <div
                                                        class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>کارین شاپ</span>
                                                        <span class="product-seller-details-badge-container"></span>
                                                    </div>
                                                    <a class="product-box-img" href="#">
                                                        <img src="assets/img/product/1335154.jpg" alt="">
                                                    </a>
                                                    <div class="product-box-content">
                                                        <div class="product-box-content-row">
                                                            <div class="product-box-title">
                                                                <a href="#">
                                                                    گوشی موبایل اپل مدل iPhone X ظرفیت 256 گیگابایت
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-box-row product-box-row-price">
                                                            <div class="price">
                                                                <div class="price-value">
                                                                    <div class="price-value-wrapper">
                                                                        ۱۵,۳۹۰,۰۰۰ <span
                                                                            class="price-currency">تومان</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                                <div class="product-box">
                                                    <div
                                                        class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>کارین شاپ</span>
                                                        <span class="product-seller-details-badge-container"></span>
                                                    </div>
                                                    <a class="product-box-img" href="#">
                                                        <img src="assets/img/product/4560651.jpg" alt="">
                                                    </a>
                                                    <div class="product-box-content">
                                                        <div class="product-box-content-row">
                                                            <div class="product-box-title">
                                                                <a href="#">
                                                                    گوشی موبایل اپل مدل Apple iPhone XS تک سیم کارت
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-box-row product-box-row-price">
                                                            <div class="price">
                                                                <div class="price-value">
                                                                    <div class="price-value-wrapper">
                                                                        ۱۷,۳۴۹,۰۰۰ <span
                                                                            class="price-currency">تومان</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                                <div class="product-box">
                                                    <div
                                                        class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>کارین شاپ</span>
                                                        <span class="product-seller-details-badge-container"></span>
                                                    </div>
                                                    <a class="product-box-img" href="#">
                                                        <img src="assets/img/product/2310961.jpg" alt="">
                                                    </a>
                                                    <div class="product-box-content">
                                                        <div class="product-box-content-row">
                                                            <div class="product-box-title">
                                                                <a href="#">
                                                                    گوشی موبایل هوآوی مدل Y7 Prime 2018 دو سیم کارت
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-box-row product-box-row-price">
                                                            <div class="price">
                                                                <div class="price-value">
                                                                    <div class="price-value-wrapper">
                                                                        ۲,۳۷۸,۰۰۰ <span
                                                                            class="price-currency">تومان</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                                <div class="product-box">
                                                    <div
                                                        class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>کارین شاپ</span>
                                                        <span class="product-seller-details-badge-container"></span>
                                                    </div>
                                                    <a class="product-box-img" href="#">
                                                        <img src="assets/img/product/5489258.jpg" alt="">
                                                    </a>
                                                    <div class="product-box-content">
                                                        <div class="product-box-content-row">
                                                            <div class="product-box-title">
                                                                <a href="#">
                                                                    گوشی موبایل سامسونگ مدل j4 Plus J415 دو سیم کارت
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-box-row product-box-row-price">
                                                            <div class="price">
                                                                <div class="price-value">
                                                                    <div class="price-value-wrapper">
                                                                        ۲,۳۹۰,۰۰۰ <span
                                                                            class="price-currency">تومان</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                                <div class="product-box">
                                                    <div
                                                        class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>کارین شاپ</span>
                                                        <span class="product-seller-details-badge-container"></span>
                                                    </div>
                                                    <a class="product-box-img" href="#">
                                                        <img src="assets/img/product/2310961.jpg" alt="">
                                                    </a>
                                                    <div class="product-box-content">
                                                        <div class="product-box-content-row">
                                                            <div class="product-box-title">
                                                                <a href="#">
                                                                    گوشی موبایل هوآوی مدل Y7 Prime 2018 دو سیم کارت
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-box-row product-box-row-price">
                                                            <div class="price">
                                                                <div class="price-value">
                                                                    <div class="price-value-wrapper">
                                                                        ۲,۳۷۸,۰۰۰ <span
                                                                            class="price-currency">تومان</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                                <div class="product-box">
                                                    <div
                                                        class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>کارین شاپ</span>
                                                        <span class="product-seller-details-badge-container"></span>
                                                    </div>
                                                    <a class="product-box-img" href="#">
                                                        <img src="assets/img/product/3694075.jpg" alt="">
                                                    </a>
                                                    <div class="product-box-content">
                                                        <div class="product-box-content-row">
                                                            <div class="product-box-title">
                                                                <a href="#">
                                                                    گوشی موبایل هوآوی مدل Nova 3i INE-LX1M دو سیم کارت
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-box-row product-box-row-price">
                                                            <div class="price">
                                                                <div class="price-value">
                                                                    <div class="price-value-wrapper">
                                                                        ۴,۱۳۹,۰۰۰ <span
                                                                            class="price-currency">تومان</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                                <div class="product-box">
                                                    <div
                                                        class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>کارین شاپ</span>
                                                        <span class="product-seller-details-badge-container"></span>
                                                    </div>
                                                    <a class="product-box-img" href="#">
                                                        <img src="assets/img/product/1335154.jpg" alt="">
                                                    </a>
                                                    <div class="product-box-content">
                                                        <div class="product-box-content-row">
                                                            <div class="product-box-title">
                                                                <a href="#">
                                                                    گوشی موبایل اپل مدل iPhone X ظرفیت 256 گیگابایت
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-box-row product-box-row-price">
                                                            <div class="price">
                                                                <div class="price-value">
                                                                    <div class="price-value-wrapper">
                                                                        ۱۵,۳۹۰,۰۰۰ <span
                                                                            class="price-currency">تومان</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                                <div class="product-box">
                                                    <div
                                                        class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>کارین شاپ</span>
                                                        <span class="product-seller-details-badge-container"></span>
                                                    </div>
                                                    <a class="product-box-img" href="#">
                                                        <img src="assets/img/product/4560651.jpg" alt="">
                                                    </a>
                                                    <div class="product-box-content">
                                                        <div class="product-box-content-row">
                                                            <div class="product-box-title">
                                                                <a href="#">
                                                                    گوشی موبایل اپل مدل Apple iPhone XS تک سیم کارت
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-box-row product-box-row-price">
                                                            <div class="price">
                                                                <div class="price-value">
                                                                    <div class="price-value-wrapper">
                                                                        ۱۷,۳۴۹,۰۰۰ <span
                                                                            class="price-currency">تومان</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                                <div class="product-box">
                                                    <div
                                                        class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>کارین شاپ</span>
                                                        <span class="product-seller-details-badge-container"></span>
                                                    </div>
                                                    <a class="product-box-img" href="#">
                                                        <img src="assets/img/product/5489258.jpg" alt="">
                                                    </a>
                                                    <div class="product-box-content">
                                                        <div class="product-box-content-row">
                                                            <div class="product-box-title">
                                                                <a href="#">
                                                                    گوشی موبایل سامسونگ مدل j4 Plus J415 دو سیم کارت
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-box-row product-box-row-price">
                                                            <div class="price">
                                                                <div class="price-value">
                                                                    <div class="price-value-wrapper">
                                                                        ۲,۳۹۰,۰۰۰ <span
                                                                            class="price-currency">تومان</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                                <div class="product-box">
                                                    <div
                                                        class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>کارین شاپ</span>
                                                        <span class="product-seller-details-badge-container"></span>
                                                    </div>
                                                    <a class="product-box-img" href="#">
                                                        <img src="assets/img/product/2196691.jpg" alt="">
                                                    </a>
                                                    <div class="product-box-content">
                                                        <div class="product-box-content-row">
                                                            <div class="product-box-title">
                                                                <a href="#">
                                                                    گوشی موبایل سامسونگ مدل J7 Pro SM-J730F
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-box-row product-box-row-price">
                                                            <div class="price">
                                                                <div class="price-value">
                                                                    <div class="price-value-wrapper">
                                                                        ۳,۳۰۰,۰۰۰ <span
                                                                            class="price-currency">تومان</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane" id="down-price" role="tabpanel" aria-expanded="false">
                                    <div class="container no-padding-right">
                                        <ul class="row listing-items">
                                        <?php

                                                if (isset($_GET['id'])  ) {

                                                if (isset($_GET['id']) && $_GET['id']==0) 
                                                {
                                                $pagenumber=0;
                                                }
                                                else if (isset($_GET['id']) && $_GET['id']<12 && $_GET['id']>=1)
                                                {
                                                    $pagenumber= $_GET['id']*12;
                                                }
                                                else if (isset($_GET['id']) && $_GET['id']>=12 && $_GET['id']%12==0)
                                                {
                                                    $pagenumber= $_GET['id']*12;
                                                }

                                                $CheapestProduct=CategoryFilterProductCheapest($_GET['catid'],$pagenumber);

                                                foreach($CheapestProduct as $shop)
                                                {
                                                ?>

                                                <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                                    <div class="product-box">
                                                        <div
                                                            class="product-seller-details product-seller-details-item-grid">
                                                            <span class="product-main-seller"><span
                                                                    class="product-seller-details-label">فروشنده:
                                                                </span>کارین شاپ</span>
                                                            <span class="product-seller-details-badge-container"></span>
                                                        </div>
                                                        <a class="product-box-img" href="#">
                                                            <img src="<?php echo $shop['img'] ?>" alt="">
                                                        </a>
                                                        <div class="product-box-content">
                                                            <div class="product-box-content-row">
                                                                <div class="product-box-title">
                                                                    <a href="product.php?id=<?php echo $shop['id'] ?>">
                                                                    <?php echo $shop['title'] ?>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-box-row product-box-row-price">
                                                                <div class="price">
                                                                    <div class="price-value">
                                                                        <div class="price-value-wrapper">
                                                                        <?php echo $shop['price'] ?> <span
                                                                                class="price-currency">تومان</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <?php }}?>
                                            
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane" id="top-price" role="tabpanel" aria-expanded="false">
                                    <div class="container no-padding-right">
                                        <ul class="row listing-items">
                                        <?php

                                            if (isset($_GET['id'])  ) {

                                            if (isset($_GET['id']) && $_GET['id']==0) 
                                            {
                                            $pagenumber=0;
                                            }
                                            else if (isset($_GET['id']) && $_GET['id']<12 && $_GET['id']>=1)
                                            {
                                                $pagenumber= $_GET['id']*12;
                                            }
                                            else if (isset($_GET['id']) && $_GET['id']>=12 && $_GET['id']%12==0)
                                            {
                                                $pagenumber= $_GET['id']*12;
                                            }

                                            $MostExpensive=CategoryFilterProductExpensive($_GET['catid'],$pagenumber);

                                            foreach($MostExpensive as $shop)
                                            {
                                            ?>
                                            
                                            <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                                <div class="product-box">
                                                    <div
                                                        class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>کارین شاپ</span>
                                                        <span class="product-seller-details-badge-container"></span>
                                                    </div>
                                                    <a class="product-box-img" href="#">
                                                        <img src="<?php echo $shop['img'] ?>" alt="">
                                                    </a>
                                                    <div class="product-box-content">
                                                        <div class="product-box-content-row">
                                                            <div class="product-box-title">
                                                                <a href="product.php?id=<?php echo $shop['id'] ?>">
                                                                <?php echo $shop['title'] ?>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-box-row product-box-row-price">
                                                            <div class="price">
                                                                <div class="price-value">
                                                                    <div class="price-value-wrapper">
                                                                    <?php echo $shop['price'] ?> <span
                                                                            class="price-currency">تومان</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php }}?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="pager default text-center">
                                <ul class="pager-items">
                                <li  style="font-size: 10px;">
                                    <?php
                                    if($_GET['id']!=0){
                                        $pagenum=$_GET['id']-1;
                                    ?>
                                    <a  href="filterCat.php?id=<?php echo $pagenum.'&catid='.$_GET['catid'];?>" class="pager-item <?php echo 'is-active';  ?>"  href="#"><?php echo "<--";?></a>
                                    <?php 
                                    }
                                    ?>
                                    </li>
                
                                    <li>
                                        <a href="filterCat.php?id=<?php echo $_GET['id'].'&catid='.$_GET['catid'];?>" class="pager-item <?php if($_GET['id']==3){echo 'is-active'; } ?>" href="#"><?php echo $_GET['id']+1?></a>
                                    </li>
                                    <li>
                                    <?php
                                    if($cunt>=12){
                                        $pagenum=$_GET['id']+1;
                                    ?>
                                    <a href="filterCat.php?id=<?php echo $pagenum.'&catid='.$_GET['catid'];?>" class="pager-item <?php echo 'is-active';  ?>" href="#"><?php echo "-->";?></a>
                                    <?php 
                                    }
                                    ?>
                                    </li>
                                    <line class="pager-items--partition"></line>
                                    <li>
                                        
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </main>

    <!-- footer -->
    <?php include 'section/footer2.php'; ?>
