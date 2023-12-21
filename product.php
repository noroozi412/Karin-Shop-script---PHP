<?php if(isset($_GET['id']))
    include 'include/product.php';
    $DetailProduct=getProduct($_GET['id']);
    foreach($DetailProduct as $DetailProduct){
        
        viewplus($DetailProduct['id']);

?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>دیجی کالا</title>
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
<body class="sidebar-collapse"> <?php include 'section/header2.php'; ?> </br></body>

<body>

    <!-- header -->
    <header>
        <!-- navbar -->
          <script src="assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>

    </header>

    <!-- main -->
    <main class="single-product default">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav>
                            <ul class="breadcrumb">
                                <li>
                                    <a href="index.php"><span>کارین شاپ </span></a>
                                </li>
                                <li>
                                    <a href="filterCat.php?id=0&catid=<?php echo $DetailProduct['idcategory']; ?>"><span><?php      $showCategory=showCategory1($DetailProduct['idcategory']);
                                                        foreach($showCategory as $showCategory1){echo $showCategory1['title'];}  ?></span></a>
                                </li>
                                <li>
                                    <a href="#"><span><?php echo $DetailProduct['title']; ?></span></a>
                                </li>
                             
                            
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <article class="product">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="product-gallery default">
                                        <img class="zoom-img" height="400"  id="img-product-zoom" src="<?php echo $DetailProduct['img'];?>" data-zoom-image="<?php echo $DetailProduct['img'];?>" width="411" />

                                        <div id="gallery_01f" style="width:500px;float:left;">
                                            <ul class="gallery-items">
                                                <li>
                                                    <a href="#" class="elevatezoom-gallery active" data-update="" data-image="<?php echo $DetailProduct['img'];?>" data-zoom-image="<?php echo $DetailProduct['img'];?>">
                                                        <img src="<?php echo $DetailProduct['img'];?>" width="100" /></a>
                                                </li>
                                                <li>
                                                    <a href="tester" class="elevatezoom-gallery" data-image="<?php echo $DetailProduct['img'];?>" data-zoom-image="<?php echo $DetailProduct['img'];?>">
                                                        <img src="assets/img/product/1335154.jpg" width="100" />
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="elevatezoom-gallery" data-image="assets/img/product/3694075.jpg" data-zoom-image="assets/img/product/3694075.jpg"><img src="assets/img/product/3694075.jpg" width="100" /></a>
                                                </li>
                                             
                                                <li>
                                                    <a href="tester" class="elevatezoom-gallery" data-image="<?php echo $DetailProduct['img'];?>" data-zoom-image="<?php echo $DetailProduct['img'];?>" class="slide-content"><img src="<?php echo $DetailProduct['img'];?>" height="68" /></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="gallery-options">
                                       <!-- <li>
                                            <button class="add-favorites"><i class="fa fa-heart"></i></button>
                                            <span class="tooltip-option">افزودن به علاقمندی</span>
                                        </li></li> -->
                                        <li>
                                            <button data-toggle="modal" data-target="#myModal"><i class="fa fa-share-alt"></i></button>
                                            <span class="tooltip-option">اشتراک گذاری</span>
                                        
                                    </ul>
                                    <!-- Modal Core -->
                                    <div class="modal-share modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title" id="myModalLabel">اشتراک گذاری</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="form-share">
                                                        <div class="form-share-title">اشتراک گذاری در شبکه های اجتماعی</div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <ul class="btn-group-share">
                                                                    <li><a href="https://www.facebook.com/sharer/sharer.php?u=https://karinshop.ir/product.php?id=<?php echo $DetailProduct['id'] ?>" class="btn-share btn-share-facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                                    <li><a href="http://www.linkedin.com/shareArticle?mini=true&url=https://karinshop.ir/product.php?id=<?php echo $DetailProduct['id'] ?>" class="btn-share btn-share-facebook" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                                                    <li><a href="https://telegram.me/share/url?url=https://karinshop.ir/product.php?id=<?php echo $DetailProduct['id'] ?>" class="btn-share btn-share-twitter" target="_blank"><i class="fa fa-telegram"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="form-share-title">ارسال به ایمیل</div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <label class="ui-input ui-input-send-to-email">
                                                                   <!-- <input class="ui-input-field" type="email" placeholder="آدرس ایمیل را وارد نمایید."> -->
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                              <!--  <button class="btn-primary">ارسال</button> -->
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <form class="form-share-url default">
                                                        <div class="form-share-url-title">آدرس صفحه</div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <label class="ui-url">
                                                                    <input class="ui-url-field" value="https://karinshop.ir/product.php?id=<?php echo $DetailProduct['id'] ?>">
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal Core -->
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="product-title default">
                                        <h1>
                                           <?php echo $DetailProduct['title']; ?>
                                            <span><?php //محل متن زیر محصول } ?></span></h1>
                                    </div>
                                    <div class="product-directory default">
                                        <ul>
                                            
                                            <li>
                                                <span>دسته‌بندی</span> :
                                                <a href="filterCat.php?id=0&catid=<?php echo $DetailProduct['idcategory']; ?>" class="btn-link-border">
                                                   <?php
                                                        $showCategory=showCategory1($DetailProduct['idcategory']);
                                                        foreach($showCategory as $showCategory1){echo $showCategory1['title'];}
                                                   ?>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-variants default">
                                        <span><?php //محل قرارگیری  رنگ ?> </span>
                                        <div class="radio">
                                            
                                            <?php //محل قرارگیری  رنگ ?>
                                            </label>
                                        </div>

                                        <div class="radio">
                                          
                                            <?php //محل قرارگیری  رنگ ?>
                                            </label>
                                        </div>

                                    </div>
                                    <div class="product-guarantee default">
                                        <i class="fa fa-check-circle"></i>
                                        <p class="product-guarantee-text">گارانتی اصالت و سلامت فیزیکی کالا</p>
                                    </div>
                                    <div class="product-delivery-seller default">
                                        <p>
                                            <i class="now-ui-icons shopping_shop"></i>
                                            <span>‌</span>
                                            <a href="#" class="btn-link-border"></a>
                                        </p>
                                    </div>
                                    <div class="price-product defualt">
                                        <div class="price-value">
                                            <span> <?php echo $DetailProduct['price']?> </span>
                                            <span class="price-currency">تومان</span>
                                        </div>
                                      <!-- محل درج تخفیف  <div class="price-discount" data-title="تخفیف">--> 
                                            <span>
                                                <!-- محل درج تخفیف -->
                                            </span>
                                            <span><!-- محل درج تخفیف --></span>
                                          <!--</div> -->
                                    </div>
                                    <div class="product-add default">
                                        <div class="parent-btn">
                                            <a href="cartController.php?add-to-cart=<?php echo $DetailProduct['id']?>" class="dk-btn dk-btn-info">
                                                افزودن به سبد خرید
                                                <i class="now-ui-icons shopping_cart-simple"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 center-breakpoint">
                                    <div class="product-guaranteed default fa fa-shopping-cart">
                                        بیش از <?php echo $DetailProduct['VIEW'] ?> نفر از کاربران از این محصول را بازید کرده اند
                                    </div>
                                    <div class="product-params default">
                                        <ul data-title="ویژگی‌های محصول">
                                            <li>
                                                <?php echo $DetailProduct['text'] ?>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="row">
                    <div class="container">
                        <div class="col-12 default no-padding">
                            <div class="product-tabs default">
                                <div class="box-tabs default">
                                    <ul class="nav" role="tablist">
                                        <li class="box-tabs-tab">
                                            <a class="active" data-toggle="tab" href="#desc" role="tab" aria-expanded="true">
                                                <i class="now-ui-icons objects_umbrella-13"></i> نقد و بررسی
                                            </a>
                                        </li>
                                        <li class="box-tabs-tab">
                                            <a data-toggle="tab" href="#params" role="tab" aria-expanded="false">
                                                <i class="now-ui-icons shopping_cart-simple"></i> مشخصات
                                            </a>
                                        </li>
                                        <li class="box-tabs-tab">
                                            <a data-toggle="tab" href="#comments" role="tab" aria-expanded="false">
                                                <i class="now-ui-icons shopping_shop"></i> نظرات کاربران
                                            </a>
                                        </li>
                                        <li class="box-tabs-tab">
                                            <a data-toggle="tab" href="#questions" role="tab" aria-expanded="false">
                                                <i class="now-ui-icons ui-2_settings-90"></i> پرسش و پاسخ
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="card-body default">
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="desc" role="tabpanel" aria-expanded="true">
                                                <article>
                                                    <h2 class="param-title">
                                                        نقد و بررسی تخصصی
                                                        <span><?php echo $DetailProduct['title'] ?></span>
                                                    </h2>
                                                    <div class="parent-expert default">
                                                        <div class="content-expert">
                                                            <p>
                                                                <?php echo $DetailProduct['text']; ?>
                                                            </p>
                                                        </div>
                                                        <div class="sum-more">
                                                            <span class="show-more btn-link-border">
                                                                نمایش بیشتر
                                                            </span>
                                                            <span class="show-less btn-link-border">
                                                                بستن
                                                            </span>
                                                        </div>
                                                        <div class="shadow-box"></div>
                                                    </div>

                                                    
                                                </article>
                                            </div>
                                            <div class="tab-pane params" id="params" role="tabpanel" aria-expanded="false">
                                                <article>
                                                    <h2 class="param-title">
                                                        مشخصات فنی
                                                        <span><?php echo $DetailProduct['title'] ?></span>
                                                    </h2>
                                                    <section>
                                                        <h3 class="params-title">مشخصات کلی</h3>
                                                        <ul class="params-list">
                                                            <li>
                                                                <div class="params-list-key">
                                                                    <span class="block">ابعاد</span>
                                                                </div>
                                                                <div class="params-list-value">
                                                                    <span class="block">
                                                                        7.7 × 70.9 × 143.6 میلی‌متر
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="params-list-key">
                                                                    <span class="block">توضیحات سیم کارت</span>
                                                                </div>
                                                                <div class="params-list-value">
                                                                    <span class="block">
                                                                        سایز نانو (8.8 × 12.3 میلی‌متر)
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="params-list-key">
                                                                    <span class="block">وزن</span>
                                                                </div>
                                                                <div class="params-list-value">
                                                                    <span class="block">
                                                                        174 گرم
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="params-list-key">
                                                                    <span class="block">ویژگی‌های خاص</span>
                                                                </div>
                                                                <div class="params-list-value">
                                                                    <span class="block">
                                                                        مقاوم در برابر آب , مناسب عکاسی , مناسب عکاسی
                                                                        سلفی , مناسب بازی , مجهز به حس‌گر تشخیص چهره
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="params-list-key">
                                                                    <span class="block">تعداد سیم کارت</span>
                                                                </div>
                                                                <div class="params-list-value">
                                                                    <span class="block">
                                                                        تک سیم کارت
                                                                    </span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </section>
                                                    <section>
                                                        <h3 class="params-title">پردازنده</h3>
                                                        <ul class="params-list">
                                                            <li>
                                                                <div class="params-list-key">
                                                                    <span class="block">تراشه</span>
                                                                </div>
                                                                <div class="params-list-value">
                                                                    <span class="block">
                                                                        Apple A11 Bionic Chipset
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="params-list-key">
                                                                    <span class="block">نوع پردازنده</span>
                                                                </div>
                                                                <div class="params-list-value">
                                                                    <span class="block">
                                                                        64 بیت
                                                                    </span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </section>
                                                </article>
                                            </div>
                                            <div class="tab-pane" id="comments" role="tabpanel" aria-expanded="false">
                                                <article>
                                                    <h2 class="param-title">
                                                        نظرات کاربران
                                                        <span>۱۲۳ نظر</span>
                                                    </h2>
                                                    <div class="comments-area default">
                                                        <ol class="comment-list">
                                                            <!-- #comment-## -->
                                                            <li>
                                                                <div class="comment-body">
                                                                    <div class="comment-author">
                                                                        <img alt="" src="assets/img/default-avatar.png" class="avatar"><cite class="fn">حسن</cite>
                                                                        <span class="says">گفت:</span> </div>

                                                                    <div class="commentmetadata"><a href="#">
                                                                            اسفند ۲۰, ۱۳۹۶ در ۹:۴۱ ب.ظ</a> </div>

                                                                    <p>لورم ایپسوم متن ساختگی</p>

                                                                    <div class="reply"><a class="comment-reply-link" href="#">پاسخ</a></div>
                                                                </div>
                                                            </li>
                                                            <!-- #comment-## -->
                                                            <li>
                                                                <div class="comment-body">
                                                                    <div class="comment-author">
                                                                        <img alt="" src="assets/img/default-avatar.png" class="avatar"><cite class="fn">رضا</cite>
                                                                        <span class="says">گفت:</span> </div>

                                                                    <div class="commentmetadata"><a href="#">
                                                                            اسفند ۲۰, ۱۳۹۶ در ۹:۴۲ ب.ظ</a> </div>

                                                                    <p>
                                                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                                                        صنعت چاپ و با استفاده از طراحان گرافیک است.
                                                                    </p>

                                                                    <div class="reply"><a class="comment-reply-link" href="#">پاسخ</a></div>
                                                                </div>
                                                                <ol class="children">
                                                                    <li>
                                                                        <div class="comment-body">
                                                                            <div class="comment-author">
                                                                                <img alt="" src="assets/img/default-avatar.png" class="avatar"><cite class="fn">بهرامی راد</cite> <span class="says">گفت:</span> </div>

                                                                            <div class="commentmetadata"><a href="#">
                                                                                    اسفند ۲۰, ۱۳۹۶ در ۹:۴۷ ب.ظ</a>
                                                                            </div>

                                                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی
                                                                                نامفهوم از صنعت چاپ و با استفاده از
                                                                                طراحان گرافیک است.
                                                                                چاپگرها و متون بلکه روزنامه و مجله در
                                                                                ستون و سطرآنچنان که لازم است و برای
                                                                                شرایط فعلی تکنولوژی
                                                                                مورد نیاز و کاربردهای متنوع با هدف بهبود
                                                                                ابزارهای کاربردی می باشد.</p>

                                                                            <div class="reply"><a class="comment-reply-link" href="#">پاسخ</a></div>
                                                                        </div>
                                                                        <ol class="children">
                                                                            <li>
                                                                                <div class="comment-body">
                                                                                    <div class="comment-author">
                                                                                        <img alt="" src="assets/img/default-avatar.png" class="avatar"> <cite class="fn">محمد</cite>
                                                                                        <span class="says">گفت:</span>
                                                                                    </div>

                                                                                    <div class="commentmetadata">
                                                                                        <a href="#">
                                                                                            خرداد ۳۰, ۱۳۹۷ در ۸:۵۳
                                                                                            ق.ظ</a> </div>

                                                                                    <p>عالیه</p>

                                                                                    <div class="reply"><a class="comment-reply-link" href="#">پاسخ</a></div>
                                                                                </div>
                                                                                <ol class="children">
                                                                                    <li>
                                                                                        <div class="comment-body">
                                                                                            <div class="comment-author">
                                                                                                <img alt="" src="assets/img/default-avatar.png" class="avatar">
                                                                                                <cite class="fn">اشکان</cite>
                                                                                                <span class="says">گفت:</span>
                                                                                            </div>

                                                                                            <div class="commentmetadata">
                                                                                                <a href="#">
                                                                                                    خرداد ۳۰, ۱۳۹۷ در
                                                                                                    ۸:۵۳ ق.ظ</a> </div>

                                                                                            <p>لورم ایپسوم متن ساختگی با
                                                                                                تولید سادگی نامفهوم از
                                                                                                صنعت چاپ و با استفاده از
                                                                                                طراحان
                                                                                                گرافیک است. چاپگرها و
                                                                                                متون بلکه روزنامه و مجله
                                                                                                در ستون و سطرآنچنان که
                                                                                                لازم است و
                                                                                                برای شرایط فعلی تکنولوژی
                                                                                                مورد نیاز و کاربردهای
                                                                                                متنوع با هدف بهبود
                                                                                                ابزارهای
                                                                                                کاربردی می باشد.</p>

                                                                                            <div class="reply"><a class="comment-reply-link" href="#">پاسخ</a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </li>
                                                                                    <!-- #comment-## -->
                                                                                </ol>
                                                                                <!-- .children -->
                                                                            </li>
                                                                            <!-- #comment-## -->
                                                                        </ol>
                                                                        <!-- .children -->
                                                                    </li>
                                                                    <!-- #comment-## -->
                                                                </ol>
                                                                <!-- .children -->
                                                            </li>
                                                            <!-- #comment-## -->
                                                            <li>
                                                                <div class="comment-body">
                                                                    <div class="comment-author">
                                                                        <img alt="" src="assets/img/default-avatar.png" class="avatar"> <cite class="fn">جلال</cite>
                                                                        <span class="says">گفت:</span> </div>

                                                                    <div class="commentmetadata"><a href="#">
                                                                            اسفند ۲۱, ۱۳۹۶ در ۱:۱۰ ب.ظ</a> </div>

                                                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                                                        صنعت چاپ و با استفاده از طراحان گرافیک است.
                                                                        چاپگرها و
                                                                        متون بلکه روزنامه و مجله در ستون و سطرآنچنان که
                                                                        لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                                                                        کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می
                                                                        باشد.</p>

                                                                    <div class="reply"><a class="comment-reply-link" href="">پاسخ</a></div>
                                                                </div>
                                                            </li>
                                                            <!-- #comment-## -->
                                                        </ol>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="tab-pane form-comment" id="questions" role="tabpanel" aria-expanded="false">
                                                <article>
                                                    <h2 class="param-title">
                                                        افزودن نظر
                                                        <span>نظر خود را در مورد محصول مطرح نمایید</span>
                                                    </h2>
                                                    <form action="" class="comment">
                                                        <textarea class="form-control" placeholder="نظر" rows="5"></textarea>
                                                        <button class="btn btn-default">ارسال نظر</button>
                                                    </form>
                                                </article>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                        <div class="col-12">
                            <div class="widget widget-product card">
                                <header class="card-header">
                                    <h3 class="card-title">
                                        <span>محصولات مرتبط</span>
                                    </h3>
                                </header>
                                <div class="product-carousel owl-carousel owl-theme">
                                    <?php foreach(Relatedproducts($DetailProduct['idcategory']) as $Relatedproducts){ ?>
                                    <div class="item">
                                        <a href="product.php?id=<?php echo $Relatedproducts['id'] ;?>">
                                            <img src="<?php echo $Relatedproducts['img'] ;?>" class="img-fluid" alt="" style="width: 250px; height: 300px;">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="product.php?id=<?php echo $Relatedproducts['id'] ;?>"><h5><?php echo $Relatedproducts['title'] ;?></h5> </a>
                                        </h2>
                                        <div class="price">
                                            <div class="text-center">
                                                <ins><span><?php echo $Relatedproducts['price'] ;?><span>تومان</span></span></ins>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
        </main>

    <!-- footer -->
    <?php } include 'section/footer2.php'; ?>