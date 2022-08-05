        <!-- TopBar -->
        <?php
        session_start();
        ?>
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                aria-labelledby="searchDropdown">
                <form class="navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-1 small" placeholder="What do you want to look for?"
                      aria-label="Search" aria-describedby="basic-addon2" style="border-color: #3f51b5;">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>
   

            <div class="topbar-divider d-none d-sm-block"></div>
            <?php
            if(isset($_SESSION["email"])){
             echo' <li class="nav-item dropdown no-arrow"> ';
              echo' <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false"> ';
                echo' <img class="img-profile rounded-circle" src="../img/boy.png" style="max-width: 60px">';
               echo'  <span class="ml-2 d-none d-lg-inline text-white small">'.$_SESSION["email"].'</span>';
             echo'  </a>';
             echo'  <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">';
               echo'  <a class="dropdown-item" href="#">';
               echo'    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>';
               echo'    Profile';
              echo'  </a>';
               echo'  <a class="dropdown-item" href="#">';
                echo'   <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>';
                 echo'  Settings';
                echo' </a>';
              echo'   <a class="dropdown-item" href="#">';
                echo'   <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>';
                echo'   Activity Log';
               echo'  </a>';
                echo' <div class="dropdown-divider"></div>';
              echo'   <a class="dropdown-item" href="../view/logoutpage.php">';
             
               echo'    Logout';
               echo'  </a>';
              echo' </div>';
            echo '</li> ';
          }else{
           
             echo '  <a href="../view/login.php"><button type="button" class="btn btn-info mb-1" style= "margin-top:15px">Login</button></a> ';
          }
            ?>
          
          </ul>
        </nav>
        <!-- Topbar -->