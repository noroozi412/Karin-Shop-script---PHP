<?php
if(!isset($_SESSION['login'])){
  header('Location: http://'.$_SERVER['SERVER_NAME'].'/login.php');
}
?>
<div class="sidebar">
      <div>
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="https://pendarfan.ir/wp-content/uploads/2021/04/logo-finaSl3.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">مدیرت کارین شاپ</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fa fa-dashboard"></i>
                <p>
                منوها
                  <i class="right fa fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/admin/menu/addmenu.php" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>افزودن منو</p>
                  </a>
                </li> 
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/admin/menu/listmenu.php" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>لیست منوها</p>
                  </a>
                </li> 
              </ul>
            </li>
            <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fa fa-dashboard"></i>
                <p>
                دسته بندی ها
                  <i class="right fa fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/admin/category/addmenu.php" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>افزودن دسته بندی</p>
                  </a>
                </li> 
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/admin/category/listmenu.php" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>لیست دسته بندی ها</p>
                  </a>
                </li> 
              </ul>
            </li>
            <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fa fa-dashboard"></i>
                <p>
                سفارشات
                  <i class="right fa fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/admin/orders/listOrders.php" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>لیست سفارشات</p>
                  </a>
                </li> 
              </ul>
              <ul class="nav nav-treeview">
                 
              </ul>
            </li>
            <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fa fa-dashboard"></i>
                <p>
                 محصولات
                  <i class="right fa fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/admin/product/AddProduct.php" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>افزودن محصول</p>
                  </a>
                </li> 
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/admin/product/listProduct.php" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>لیست محصولات</p>
                  </a>
                </li> 
                <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fa fa-dashboard"></i>
                <p>
                 تظیمات پوسته
                  <i class="right fa fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/admin/theme/HomePageEdit.php" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>تنظیمات صفحه خانه</p>
                  </a>
                </li> 
              </ul>
              
            </li>
            
        </nav>
        <!-- /.sidebar-menu -->
      </div>
    </div>
