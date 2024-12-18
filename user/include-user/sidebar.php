    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="theme-loader">    
        <div class="loader-p"></div>
      </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-main-header">
        <div class="main-header-right row m-0">
          <div class="main-header-left">
            <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="../assets/images/logo/logo.png" alt=""></a></div>
            <div class="dark-logo-wrapper"><a href="index.html"><img class="img-fluid" src="../assets/images/logo/dark-logo.png" alt=""></a></div>
            <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle"></i></div>
          </div>
          
          <div class="nav-right col pull-right right-menu p-0">
            <ul class="nav-menus">
              <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
              
              <li>
                <div class="mode"><i class="fa fa-moon-o"></i></div>
              </li>

              <li class="onhover-dropdown p-0">
                <button class="btn btn-primary-light" type="button"><a href="logout.php"><i data-feather="log-out"></i>Déconnexion</a></button>
              </li>
            </ul>
          </div>
          <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
        </div>
      </div>
      <!-- Page Header Ends  -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper horizontal-menu">
        <!-- Page Sidebar Start-->
        <header class="main-nav">
          <div class="sidebar-user text-center"><a class="setting-primary" href=""><i data-feather="settings"></i></a><img class="img-90 rounded-circle" src="../assets/images/dashboard/1.png" alt="">
            <div class="badge-bottom"><span class="badge badge-primary">New</span></div><a href="">
              <h6 class="mt-3 f-14 f-w-600"><?php echo $_SESSION['auth_user']['user_name']; ?></h6>
            </a>
            <p class="mb-0 font-roboto"><?php echo $_SESSION['auth_user']['job']; ?></p>
          </div>

          <nav>
            <div class="main-navbar">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="mainnav">           
                <ul class="nav-menu custom-scrollbar">
                  <li class="back-btn">
                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="index.php"><i data-feather="home"></i><span>Tableau de Bord</span></a></li>
                  
                  <li class="sidebar-main-title">
                    <div>
                      <h6> Gérer les données </h6>
                    </div>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="data-participant.php"><i data-feather="user-plus"></i><span>Data Participants</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="data-formation.php"><i data-feather="user-check"></i><span>Data Formation</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="data-accompagnement.php"><i data-feather="file-text"></i><span>Data Accompagnement</span></a></li>
                </ul>
              </div>
              <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </div>
          </nav>
        </header>
        