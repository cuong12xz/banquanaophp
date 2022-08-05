    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <h1 class="sidebar-brand d-flex align-items-center justify-content-center" >
        <div class="sidebar-brand-icon">
          
        </div>
       <div class="sidebar-brand-text mx-3"> <a href="index.php" style="color: purple">CNT shop</a></div>
      <h1>
      <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a class="nav-link" href="../view/index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span style="color: red"> Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading" style="color:  #006400">
        Quản lý
      </div>

      
      <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
          aria-controls="collapseTable">
          <i class="fas fa-fw fa-table"></i>
          <span style="color:  #FF1493">Tables</span>
        </a>
        <div id="collapseTable" class="collapse show" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
   
              <a class="collapse-item active" href="../controller/UserController.php" style="color: #9400D3 ">Quản lý user</a>
              <a class="collapse-item active" href="../controller/OrderrController.php" style="color:#ADFF2F ">Quản lý đơn hàng</a>
            <a class="collapse-item active" href="../controller/ProductController.php" style="color: #FF4500 ">Quản lý sản phẩm</a>
            <a class="collapse-item active" href="../controller/CategoryProductController.php" style="color: #7B68EE">Quản lý danh mục</a>
            <a class="collapse-item active" href="./adminBaiviet.php" style="color: #FFA500">Quản lý bài viết</a>
            <a class="collapse-item active" href="./adminDanhmucbaiviet.php" style="color: #00FFFF">Quản lý danh mục bài viết</a>


          </div>
        </div>
      </li>

      <div class="version" id="version-ruangadmin"></div>
    </ul>
    <!-- Sidebar -->
