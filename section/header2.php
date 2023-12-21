<?Php include_once 'include/function.php';
session_start(); ?>
<style>
    .dropdown-menu {
        text-align: right;
        position: absolute;
        top: auto;
        left: auto;
        display: none;
    }
    
    .list-item:hover .dropdown-menu {
        display: block;
    }
    .dropdown-arrow {
        position: absolute;
        top: 50%;
        right: -10px;
        transform: translateY(-50%);
    }
</style>


<nav class="navbar direction-ltr fixed-top header-responsive">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="#pablo">
                    <img src="assets/img/logo.png" height="24px" alt="">
                </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    data-target="#navigation" aria-controls="navigation-index" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
                <div class="search-nav default">
                    <form action="">
                        <input type="text" placeholder="جستجو ...">
                        <button type="submit"><img src="assets/img/search.png" alt=""></button>
                    </form>
                    <ul>
                        <li><a href="login.php"><i class="now-ui-icons users_single-02"></i></a></li>
                        <li><a href="cart.php"><i class="now-ui-icons shopping_basket"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="collapse navbar-collapse justify-content-end" id="navigation">
                <div class="logo-nav-res default text-center">
                    <a href="#">
                        <img src="assets/img/logo.png" height="36px" alt="">
                    </a>
                </div>
                <ul class="navbar-nav default">
               <?php foreach(headermenu() as $headermenu){
                         ?>
                <li class="<?php  $submenu =headerSubmenu($headermenu['id']); if($submenu){echo "sub-menu";} ?>">
                        <a href="<?php echo $headermenu['url'] ?>"><?php echo $headermenu['title'] ?></a>
                        <?php
           
            if($submenu){
           foreach($submenu as $submenu){  ?>
                        <ul>
                            
                            </li>
                            <li>
                                <a href="<?php echo $submenu['url'] ;?>"><?php echo $submenu['title'] ;?></a>
                            </li>
                            
                            
                        </ul>
                        <?php }} ?>
                    </li>

                    <?php } ?>
                    
                </ul>
            </div>
        </div>
    </nav>
    <!-- responsive-header -->
    <div class="container-fluid d-flex flex-column flex-lg-row align-items-baseline justify-content-between" id="navbar-bottom">
                    
                    </div>
    <div class="wrapper default ">

        <!-- header -->
        <header class="main-header default">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-3 col-sm-4 col-5">
                        <div class="logo-area default">
                            <a href="#">
                                <img src="assets/img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5 col-sm-8 col-7">
                        <div class="search-area default">
                            <form action="searchstore.php?id=0" class="search">
                                <input name="serch"  type="text" placeholder="نام کالا یا برند کالا مورد نظر خود را جستجو کنید…">
                                <button value="0" name="id" type="submit"><img src="assets/img/search.png" alt=""></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="user-login dropdown">
                        <?php if(!isset($_SESSION['login'])){
?>
                            <a href="login.php" class="btn btn-neutral dropdown-toggle" data-toggle="dropdown"
                                id="navbarDropdownMenuLink1">
                                ورود / ثبت نام
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
                                <div class="dropdown-item">
                                    <a href="login.php" class="btn btn-info">ورود به کارین شاپ</a>
                                </div>
                                <div class="dropdown-item font-weight-bold">
                                    <span>کاربر جدید هستید؟</span> <a class="register" href="#">ثبت‌نام</a>
                                </div>
                            </ul>
                            <?php }  elseif(isset($_SESSION['login'])){
                                ?> <a href="profile.php" class="btn btn-neutral dropdown-toggle" data-toggle="dropdown"
                                id="navbarDropdownMenuLink1">
                                پنل کاربری
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
                                <div class="dropdown-item">
                                    <a href="login.php" class="btn btn-info">پنل کاربری</a>
                                </div>
                            </ul>
                            
                          
                            <?php } ?>
                        </div>
                        <div class="cart dropdown">
                            <a href="login.php" class="btn dropdown-toggle" data-toggle="dropdown" id="navbarDropdownMenuLink1">
                                <i class="now-ui-icons shopping_cart-simple"></i>
                                سبد خرید
                            </a>
                            
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
                                
                                <ul class="basket-list">
                                    <li>
                                    <?php
                
                $session=$_SESSION;
                $cart=[];
                foreach ($session as $key => $value) {
                    if(substr($key,0,5) == 'cart_') {
                        $cart[$key] = $value;
                    }
                }

             
               
            ?>                                    <?php  foreach($cart as $item=>$value){ ?>

                                        <div href="product.php?id=<?php echo $value['id']; ?>" class="basket-item">
                                            <a href="cartController.php?remove=<?php echo $value['id']; ?>" class="basket-item-remove"></a>
                                            <a href="product.php?id=<?php echo $value['id']; ?>" >
                                            <div class="basket-item-content">
                                                <div class="basket-item-image">
                                                    <img alt="" src="<?php echo $value['img'] ?>">
                                                </div>
                                                <div class="basket-item-details">
                                                    <div class="basket-item-title"><?php echo $value['name']?> 
                                                    </div>
                                                    <div class="basket-item-params">
                                                        <div class="basket-item-props">
                                                            <span> <?php echo"مجموع قیمت:" .$value['price']." تومان " ?></span>
                                                            <span>
                                                                <?php echo "تعداد:".$value['cont'] ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            </a>
                                        </div>
                                       <?php } ?>
                                       
                                    </li>
                                    
                                </ul>
                                <a href="cart.php" class="basket-submit">سبد خرید</a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="main-menu">
    <div class="container">
        <ul class="list justify-content-center">
            <?php foreach(headermenu() as $headermenu): ?>
                <li class="list-item">
                    <a class="nav-link" href="<?php echo $headermenu['url'] ?>"><?php echo $headermenu['title'] ?></a>
                    <?php $submenu = headerSubmenu($headermenu['id']);
                    if ($submenu): ?>
                        <div class="dropdown-menu">
                            <ul>
                                <?php foreach ($submenu as $submenuItem): ?>
                                    <li><a class="dropdown-item" href="<?php echo $submenuItem['url'] ?>"><?php echo $submenuItem['title'] ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                            <span class="dropdown-arrow">&#9658;</span>
                        </div>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</nav>

<style>
    
    .list-item:hover .dropdown-menu {
        display: block;
    }
    
    
    

</style>
        </header>
        