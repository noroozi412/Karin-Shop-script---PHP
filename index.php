<?php
 include 'include/product.php';
 include 'include/theme.php'; 
  ?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>دیجی کالا</title>
    <!--font IRANSans-->
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/iranSans.css">
    <!--Owl Carousel-->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!--Bootstrap5-->
    <link rel="stylesheet" href="css/bootstrap.rtl.min.css">
    <!--Custom Styles-->
    <link rel="stylesheet" href="css/main.css">
        <!--Custom Styles-->

    <link rel="stylesheet" href="css/productDetail.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    
    <link href="assets/css/main.css" rel="stylesheet" /><!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/now-ui-kit.css" rel="stylesheet" />
    <link href="assets/css/plugins/owl.carousel.css" rel="stylesheet" />
    <link href="assets/css/plugins/owl.theme.default.min.css" rel="stylesheet" />
    <link href="assets/css/main.css" rel="stylesheet" />

</head>       <body class="sidebar-collapse"> <?php include 'section/header2.php'; ?> </body>

<body >

    <!-- header -->
        <!-- navbar -->
        <?php include 'section/test.php'; ?>

        <!--subheader-->
        <section class="subheader myContainer mb-5">
            <img src="images/subheader12.png" alt="subheader" class="border roundedless-md mb-3" style="border-radius: 20px; width: 100%; height: 100px; object-fit: cover;">
            <div class="d-flex flex-column flex-md-row gap-3">
                <div id="carouselExampleIndicators" class="carousel slide" style="flex: 1 1 65%;" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner border roundedless-md" style="border-radius: 20px;">
                      <div class="carousel-item active">
                      <?php foreach(showTheme(1) as $slider1){ ?>  
                      <a href="<?php echo $slider1['url']?>">
                            
                        <img src="<?php echo $slider1['img']?>" class="d-block w-100" alt="...">
                        </a>
                        <?php }?>
                      </div>
                      <div class="carousel-item">
                      <?php foreach(showTheme(2) as $slider2){ ?>  
                      <a href="<?php echo $slider2['url']?>">
                            
                        <img src="<?php echo $slider2['img']?>" class="d-block w-100" alt="...">
                        </a>
                        <?php }?>
                      </div>
                      
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <div style="flex: 1 1 35%">
                <?php foreach(showTheme(3) as $leftimg1){
                     ?><a href="<?php echo $leftimg1['url'] ?>">
                    <img src="<?php echo $leftimg1['img'] ?>" alt="" class="mb-3 border roundedless-md w-100" style="border-radius: 20px;">
                    <?php }?></a> 
                    <?php foreach(showTheme(4) as $leftimg2){
                     ?><a href="<?php echo $leftimg2['url'] ?>">
                    <img height="32%" src="<?php echo $leftimg2['img'] ?>"  alt="" class="border roundedless-md w-100" style="border-radius: 20px;">
                    <?php }?></a>
                </div>
            </div>
        </section>
    
    

    <!-- amazing-suggest -->
    <section class="amazing-suggest mb-5 py-4">
        <div class="myContainer d-flex flex-column flex-md-row gap-3 gap-md-5 align-items-center">
            <div class="amazing-suggest-right d-flex flex-column align-items-center gap-2">
                <img src="images/amazing-suggest.png" alt="amazing-supermarket" width="200">
                <a href="#" class="btn btn-outline-light">
                    <span>مشاهده همه</span>
                </a>
            </div>
            <div class="amazing-suggest-left w-100 overflow-hidden">
                <div class="amazing-suggest-container owl-carousel">
                   <?php foreach(listProduct3() as $listProduct ) {
                    $cat=showCategory1($listProduct['idcategory']);
                    ?>
    
                    <a href="<?php echo 'product.php?id='.$listProduct['id']; ?>" class="product-item">
                        <img width="300" height="300" src="<?php echo $listProduct['img']; ?>" alt="product">
                        <h5 class="title"><?php echo $listProduct['title']; ?></h5>
                        <small class="benefit">
                            <i class="far fa-gem"></i>
                            <span><h5><?php foreach($cat as $cat){echo $cat['title'];} ?></h5></span>
                        </small>
                     
                        <div class="price">
                            <span class="new-price"><?php echo $listProduct['price']; ?></span>
                            <span class="unit">تومان</span>
                        </div>
                    </a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

    <!-- banner -->
    <section class="banner myContainer mb-5 d-flex flex-wrap flex-lg-row align-items-center justify-content-between gap-3">
        <?php foreach(showTheme(5) as $img1){ ?>
        <a href="<?php echo $img1['url'] ?>" class="overflow-hidden shadow-sm">
            <img src="<?php echo $img1['img'] ?>" alt="banner1" class="rounded rounded-3 roundedless-md img-fluid">
        </a>
        <?php }?>
        <?php foreach(showTheme(6) as $img1){ ?>
        <a href="<?php echo $img1['url'] ?>" class="overflow-hidden shadow-sm">
            <img src="<?php echo $img1['img'] ?>" alt="banner1" class="rounded rounded-3 roundedless-md img-fluid">
        </a>
        <?php }?>

        <?php foreach(showTheme(7) as $img1){ ?>
        <a href="<?php echo $img1['url'] ?>" class="overflow-hidden shadow-sm">
            <img src="<?php echo $img1['img'] ?>" alt="banner1" class="rounded rounded-3 roundedless-md img-fluid">
        </a>
        <?php }?>

        <?php foreach(showTheme(8) as $img1){ ?>
        <a href="<?php echo $img1['url'] ?>" class="overflow-hidden shadow-sm">
            <img src="<?php echo $img1['img'] ?>" alt="banner1" class="rounded rounded-3 roundedless-md img-fluid">
        </a>
        <?php }?>
    </section>

    <!-- amazing-supermarket -->
    <section class="amazing-supermarket mb-5 py-4">
        <div class="myContainer d-flex flex-column flex-md-row gap-3 gap-md-5 align-items-center">
            <div class="amazing-suggest-right d-flex flex-column align-items-center gap-2">
                <img src="images/amazing-supermarket.png" alt="amazing-supermarket" width="200">
                <a href="#" class="btn btn-outline-light">
                    <span>مشاهده همه</span>
                </a>
            </div>
            <div class="amazing-suggest-left w-100 overflow-hidden">
                <div class="amazing-suggest-container owl-carousel">
                <?php foreach(lastlistProduct() as $listProduct ) {
                    $cat=showCategory1($listProduct['idcategory']);
                    ?>
    
                    <a href="<?php echo 'product.php?id='.$listProduct['id']; ?>" class="product-item">
                        <img width="300" height="300" src="<?php echo $listProduct['img']; ?>" alt="product">
                        <h5 class="title"><?php echo $listProduct['title']; ?></h5>
                        <small class="benefit">
                            <i class="far fa-gem"></i>
                            <span><h5><?php foreach($cat as $cat){echo $cat['title'];} ?></h5></span>
                        </small>
                       
                        <div class="price">
                            <span class="new-price"><?php echo $listProduct['price']; ?></span>
                            <span class="unit">تومان</span>
                        </div>
                    </a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

    <!-- banner -->
    <section class="banner myContainer mb-5 d-flex flex-column flex-lg-row align-items-center justify-content-between gap-3">
    <?php foreach(showTheme(9) as $img1){ ?>
    <a href="<?php echo $img1['url'] ?>" class="overflow-hidden shadow-sm">
            <img height="300" src="<?php echo $img1['img'] ?>" alt="banner1" class="rounded rounded-3 roundedless-md img-fluid">
        </a>
        <?php } ?>
        <?php foreach(showTheme(10) as $img1){ ?>
    <a href="<?php echo $img1['url'] ?>" class="overflow-hidden shadow-sm">
            <img height="300" src="<?php echo $img1['img'] ?>" alt="banner1" class="rounded rounded-3 roundedless-md img-fluid">
        </a>
        <?php } ?>
    </section>
    
    <!-- special-suggest -->
    <section class="special-suggest myContainer rounded roundedless-md rounded-3 border shadow bg-white mb-5 p-4">
        <div class="d-flex align-items-center justify-content-between pb-3 border-bottom">
            <div>
                <h5>پیشنهاد ویژه</h5>
                <span class="pt-3">براساس بازدیدهای شما</span>
            </div>
            <a href="#" class="text-reset text-decoration-none">مشاهده همه</a>
        </div>
        
        <div class="special-suggest-container owl-carousel">

        <?php foreach(randomProduct() as $listProduct ) {
                    $cat=showCategory1($listProduct['idcategory']);
                    ?>
    
                    <a href="<?php echo 'product.php?id='.$listProduct['id']; ?>" class="product-item">
                        <img width="300" height="300" src="<?php echo $listProduct['img']; ?>" alt="product">
                        <h5 class="title"><?php echo $listProduct['title']; ?></h5>
                        <small class="benefit">
                            <i class="far fa-gem"></i>
                            <span><h5><?php foreach($cat as $cat){echo $cat['title'];} ?></h5></span>
                        </small>
                            <!--
                            <span class="old-price">۲۷,۰۰۰,۰۰۰</span>
                            <span class="off-count">تخفیف دار</span>
                             -->
                        
                        <div class="price">
                            <span class="new-price"><?php echo $listProduct['price']; ?></span>
                            <span class="unit">تومان</span>
                        </div>
                    </a>
                    <?php } ?>

        </div>
    </section>
   
    <!-- footer -->
                  <?php include 'section/footer2.php'; ?>
