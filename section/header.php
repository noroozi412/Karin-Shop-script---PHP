<?Php include_once 'include/function.php';
session_start(); ?>
<section class="navContainer shadow mb-5 bg-white">
            <nav class="navbar myContainer flex-column navbar-expand-lg navbar-light bg-white pb-0" id="navbar">
                <div class="container-fluid d-flex align-items-center py-4">
                    <a href="#" class="brand">
                        <img src="images/Digikala.svg.png" width="100" alt="digikala">
                    </a>
    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="search-container position-relative ms-0 ms-lg-3 my-3 my-lg-0 me-auto">
                            <input type="search" class="w-100" id="search1" placeholder="جستجو">
                            <i class="fa-solid fa-magnifying-glass position-absolute start-0 top-50 translate-middle ms-4 opacity-75"></i>
                        </div>
        <?php if(!isset($_SESSION['login'])){
?>
                        <a href="login.php" class="d-inline-flex align-items-baseline gap-2 text-reset border rounded p-3 me-3 mb-2 mb-lg-0">
                            <i class="fa-solid fa-user"></i>
                            <span>ورود به حساب کاربری</span>
                        </a>                
        <?php }
        elseif(isset($_SESSION['login'])){
        ?>
        <a href="profile.php" class="d-inline-flex align-items-baseline gap-2 text-reset border rounded p-3 me-3 mb-2 mb-lg-0">
                            <i class="fa-solid fa-user"></i>
                            <span>پنل کاربری</span>
                        </a>
        <?php } ?>
                        <a href="cart.php" class="ps-3 border-start text-reset">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </a>
                    </div>
                </div>
                <div class="container-fluid d-flex flex-column flex-lg-row align-items-baseline justify-content-between" id="navbar-bottom">
                    <ul class="navbar-nav w-100">
                      
                        <?php
                        foreach(headermenu() as $headermenu){
                         ?>
                        <li class="nav-item pb-1 me-1">
            <a href="<?php echo $headermenu['url'] ?>" class="nav-link text-reset" onmouseover="openSubMenu('category-submenu')">
                <i class="fas fa-bars me-1"></i>

                <span><?PHP echo $headermenu['title'];?></span>
            </a>
           <?php $submenu =headerSubmenu($headermenu['id']); if($submenu){
           foreach($submenu as $submenu){
            ?>
            <ul class="submenu" id="category-submenu">
                <li><a href="<?php echo $submenu['url'] ;?>"><?php echo $submenu['title'] ;?> </a></li>

            </ul>
            <?php }}?> 
        </li>
        <?PHP } ?>
      

                        <li class="nav-item pb-1">
                            <a href="#" class="nav-link text-reset">
                                <i class="fa-solid fa-location-dot me-1"></i>
                                <span>شهر خود را انتخاب نمائید</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="container-fluid d-flex flex-column flex-lg-row align-items-baseline justify-content-between" id="navbar-bottom">
    <ul class="navbar-nav w-100">
       
        <!-- سایر آیتم‌ها -->
    </ul>
</div>

<style>
.submenu {
    display: none;
    position: absolute;
    background-color: #fff;
    padding: 10px;
    border-radius: 5px;
}

.nav-item:hover .submenu {
    display: block;
}
</style>
            </nav>
        </section>