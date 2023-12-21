
<?php 
session_start();
include 'include/theme.php';

  if(!isset($_SESSION['login'])){
    header('Location: login.php');
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
        .table-container {
            margin: 20px;
            border-radius: 10px;
            overflow: hidden;
        }
        
        .table {
            border-collapse: separate;
            border-spacing: 0;
            width: 100%;
            color: black;
            background-color: white;
        }
        
        .table th,
        .table td {
            padding: 10px;
            text-align: right;
            border-bottom: 1px solid #ddd;
        }
        
        .table th {
            background-color: #f8f9fa;
        }
        
        .table .details-button {
            background-color: red;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
        }
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
    <main class="profile-user-page default">
            <div class="container">
                <div class="row">
                    <div class="profile-page col-xl-9 col-lg-8 col-md-12 order-2">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="col-12">
                                    <h1 class="title-tab-content">اطلاعات شخصی</h1>
                                </div>
                                <div class="content-section default">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <p>
                                                <span class="title">نام و نام خانوادگی :</span>
                                                <span><?php echo $_SESSION['name'] ?></span>
                                            </p>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <p>
                                                <span class="title">پست الکترونیک :</span>
                                                <span><?php echo $_SESSION['email'] ?></span>
                                            </p>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <p>
                                                <span class="title">شماره تلفن همراه:</span>
                                                <span><?php echo $_SESSION['phone'] ?></span>
                                            </p>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <p>
                                                <span class="title">کد ملی :</span>
                                                <span>0052584521</span>
                                            </p>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <p>
                                                <span class="title">دریافت خبرنامه :</span>
                                                <span>بله</span>
                                            </p>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <p>
                                                <span class="title">شماره کارت :</span>
                                                <span>5022-2513-1525-1142</span>
                                            </p>
                                        </div>
                                        <div class="col-12 text-center">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="col-12">
                                    <h1 class="title-tab-content">محصولات پیشنهادی</h1>
                                </div>
                                <div class="content-section default">
                                    <div class="row">
                                        <div class="col-12">
                                            <?php foreach(userRandProduct() as $userRandProduct){?>
                                            <div class="profile-recent-fav-row">
                                                <a href="product.php?id=<?php echo $userRandProduct['id']; ?>" class="profile-recent-fav-col profile-recent-fav-col-thumb">
                                                    <img width="70" height="70" src="<?php echo $userRandProduct['img'] ?>"></a>
                                                <div class="profile-recent-fav-col profile-recent-fav-col-title">
                                                    <a href="product.php?id=<?php echo $userRandProduct['id']; ?>">
                                                        <h4 class="profile-recent-fav-name">
                                                        <?php echo $userRandProduct['title'] ?>                                                        </h4>
                                                    </a>
                                                    <div class="profile-recent-fav-price"><?php echo $userRandProduct['price'] ?></div>
                                                </div>
                                                <div class="profile-recent-fav-col profile-recent-fav-col-actions">
                                                    <a href="product.php?id=<?php echo $userRandProduct['id']; ?>">
                                                    <button class="btn-action btn-action-remove">
                                                        <i class="fa fa-cart-arrow-down"></i>
                                                    </button>
                                                    </a>
                                                </div>
                                                
                                            </div>
                                            <?php } ?>
                                        </div>
                                        <div class="col-12 text-center">
                                            <a href="store.php?id=1" class="btn-link-border form-account-link">
                                                مشاهده فروشگاه
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <h1 class="title-tab-content">آخرین سفارش ها</h1>
                            </div>
                            <div class="col-12 text-center">
                                <div class="content-section pt-5 pb-5">
                                <table class="table">
            <thead>
                <tr>
                    <th>مجموع قیمت</th>
                    <th>کد پیگیری</th>
                    <th>تاریخ سفارش</th>
                    <th>وضعیت</th>
                    <th>جزئیات</th>
                </tr>
            </thead>
            <tbody>
               <?php
                foreach(userLastOrders($_SESSION['userid']) as $userLastOrders){
                ?>                                     
                
                <tr>
                    <td><?php echo $userLastOrders['price']; ?> تومان</td>
                    <td><?php echo $userLastOrders['authority']; ?></td>
                    <td><?php echo $userLastOrders['date']; ?></td> 	
                    <td>
                    <?php    if($userLastOrders['status']=='101'|| $userLastOrders['status']=='100')
                    {
                        echo 'پرداخت شده';
                    }
                    else{
                        echo 'پرداخت نشده';
                    }
                    ?>
                    </td>
                    <td><a href="detailOrder.php?id=<?php echo $userLastOrders['id']; ?>"><button  class="details-button">جزئیات</button></a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="profile-page-aside col-xl-3 col-lg-4 col-md-6 center-section order-1">
                        <div class="profile-box">
                            <div class="profile-box-header">
                                <div class="profile-box-avatar">
                                    <img src="../assets/img/svg/user.svg" alt="">
                                </div>
                                <button data-toggle="modal" data-target="#myModal" class="profile-box-btn-edit">
                                    <i class="fa fa-pencil"></i>
                                </button>
                                <!-- Modal Core -->
                                <div class="modal-share modal-width-custom modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title" id="myModalLabel">تغییر نمایه کاربری شما</h4>
                                            </div>
                                            <div class="modal-body">
                                                <ul class="profile-avatars default text-center">
                                                    <li>
                                                        <img class="profile-avatars-item" src="../assets/img/svg/user.svg"></img>
                                                    </li>
                                                    <li>
                                                        <img class="profile-avatars-item" src="../assets/img/svg/avatar-1.svg"></img>
                                                    </li>
                                                    <li>
                                                        <img class="profile-avatars-item" src="../assets/img/svg/avatar-2.svg"></img>
                                                    </li>
                                                    <li>
                                                        <img class="profile-avatars-item" src="../assets/img/svg/avatar-3.svg"></img>
                                                    </li>
                                                    <li>
                                                        <img class="profile-avatars-item" src="../assets/img/svg/avatar-4.svg"></img>
                                                    </li>
                                                    <li>
                                                        <img class="profile-avatars-item" src="../assets/img/svg/avatar-5.svg"></img>
                                                    </li>
                                                    <li>
                                                        <img class="profile-avatars-item" src="../assets/img/svg/avatar-6.svg"></img>
                                                    </li>
                                                    <li>
                                                        <img class="profile-avatars-item" src="../assets/img/svg/avatar-7.svg"></img>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal Core -->
                            </div>
                            <div class="profile-box-username"><?php echo $_SESSION['name'] ?></div>
                            <div class="profile-box-tabs">
                                 <!-- <a href="password-change.html" class="profile-box-tab profile-box-tab-access">
                                  <i class="now-ui-icons ui-1_lock-circle-open"></i>
                                    تغییر رمز
                                </a> -->
                                <a href="logout.php" class="profile-box-tab profile-box-tab--sign-out">
                                    <i class="now-ui-icons media-1_button-power"></i>
                                    خروج از حساب
                                </a>
                            </div>
                        </div>
                        <div class="responsive-profile-menu show-md">
                            <div class="btn-group">
                                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-navicon"></i>
                                    سحساب کاربری شما
                                </button>
                                <div class="dropdown-menu dropdown-menu-right text-right">
                                    <a href="" class="dropdown-item active-menu">
                                    <i class="now-ui-icons users_single-02"></i>
                                    پروفایل
                                    </a>
                                    <a href="" class="dropdown-item">
                                    <i class="now-ui-icons shopping_basket"></i>
                                    همه سفارش ها
                                    </a>
                                   
                                    <a href="" class="dropdown-item">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="profile-menu hidden-md">
                            <div class="profile-menu-header">حساب کاربری شما</div>
                            <ul class="profile-menu-items">
                                <li>
                                    <a href="profile.php" class="active">
                                        <i class="now-ui-icons users_single-02"></i>
                                        پروفایل
                                    </a>
                                </li>
                                <li>
                                    <a href="profileorders.php" >
                                        <i class="now-ui-icons shopping_basket"></i>
                                        همه سفارش ها
                                    </a>
                                </li>
                                
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php include 'section/footer2.php'; ?>
