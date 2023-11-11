<!--Main Navigation-->
<header>
  <!-- Sidebar -->
  <nav
       id="sidebarMenu"
       class="collapse d-lg-block sidebar collapse bg-white"
       >
    <div class="position-sticky">
      <div class="list-group list-group-flush mx-3 mt-4">
        <a
           href="index.php"
           class="list-group-item list-group-item-action py-2 ripple  active"
           aria-current="true"
           >
          <i class="fas fa-tachometer-alt fa-fw me-3"></i
            ><span>Main dashboard</span>
        </a>
        <a
           href="upload.php"
           class="list-group-item list-group-item-action py-2 ripple"
           >
          <i class="fas fa-chart-area fa-fw me-3"></i
            ><span>Upload Books</span>
        </a>
        <a
           href="uploadpdf.php"
           class="list-group-item list-group-item-action py-2 ripple"
           >
          <i class="fas fa-chart-area fa-fw me-3"></i
            ><span>Upload PDF</span>
        </a> <a
           href="uploadvideo.php"
           class="list-group-item list-group-item-action py-2 ripple"
           >
          <i class="fas fa-chart-area fa-fw me-3"></i
            ><span>Upload Video </span>
        </a>
        <a
           href="uploadqp.php"
           class="list-group-item list-group-item-action py-2 ripple"
           >
          <i class="fas fa-chart-area fa-fw me-3"></i
            ><span style="font-size: 17px;">Upload Paper </span>
        </a>
        <a
           href="viewproducts.php"
           class="list-group-item list-group-item-action py-2 ripple"
           ><i class="fas fa-eye fa-fw me-3"></i><span>View Books</span></a
          >
          <a
           href="viewpdf.php"
           class="list-group-item list-group-item-action py-2 ripple"
           ><i class="fas fa-eye fa-fw me-3"></i><span>View pdf</span></a
          >
          <a
           href="viewvideo.php"
           class="list-group-item list-group-item-action py-2 ripple"
           ><i class="fas fa-eye fa-fw me-3"></i><span>View video</span></a
          >        <a
           href="viewqp.php"
           class="list-group-item list-group-item-action py-2 ripple"
           ><i class="fas fa-eye fa-fw me-3"></i><span style="font-size: 17px;" >View Paper</span></a
          >
        <!--<a
           href="#"
           class="list-group-item list-group-item-action py-2 ripple"
           ><i class="fas fa-lock fa-fw me-3"></i
          ><span>Password</span></a
          >
       <a
           href="#"
           class="list-group-item list-group-item-action py-2 ripple"
           >
          <i class="fas fa-chart-pie fa-fw me-3"></i><span>SEO</span>
        </a>-->
        <!--<a
           href="order.php"
           class="list-group-item list-group-item-action py-2 ripple"
           ><i class="fas fa-chart-bar fa-fw me-3"></i><span></span></a
          >-->
       <!--<a
           href="settings.php"
           class="list-group-item list-group-item-action py-2 ripple"
           ><i class="fas fa-cog me-3"></i
          ><span>Settings</span></a
          >-->
        <!--<a
           href="#"
           class="list-group-item list-group-item-action py-2 ripple"
           ><i class="fas fa-building fa-fw me-3"></i
          ><span>Partners</span></a
          >
        <a
           href="#"
           class="list-group-item list-group-item-action py-2 ripple"
           ><i class="fas fa-calendar fa-fw me-3"></i
          ><span>Calendar</span></a
          >-->
        <!--<a
           href="users.php"
           class="list-group-item list-group-item-action py-2 ripple"
           ><i class="fas fa-users fa-fw me-3"></i><span>Users</span></a
          >-->
          <!--<a
           href="viewusers.php"
           class="list-group-item list-group-item-action py-2 ripple"
           >
          <i class="fas fa-chart-area fa-fw me-3"></i
            ><span>View Users</span>
        </a>-->
       <!-- <a
           href="#"
           class="list-group-item list-group-item-action py-2 ripple"
           ><i class="fas fa-money-bill fa-fw me-3"></i><span>Sales</span></a
          >-->
      </div>
    </div>
  </nav>
  <!-- Sidebar -->

  <!-- Navbar -->
  <nav
       id="main-navbar"
       class="navbar navbar-expand-lg navbar-light bg-white fixed-top"
       >
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Toggle button -->
      <button
              class="navbar-toggler"
              type="button"
              data-mdb-toggle="collapse"
              data-mdb-target="#sidebarMenu"
              aria-controls="sidebarMenu"
              aria-expanded="false"
              aria-label="Toggle navigation"
              >
        <i class="fas fa-bars"></i>
      </button>

      <!-- Brand -->
      <a class="navbar-brand" href="#">
        <img
             src="logo1.png"
             height="40"
             alt=""
             loading="lazy"
             />
      </a>
      <!-- Search form -->
      <form class="d-none d-md-flex input-group w-auto my-auto">
        <input
               autocomplete="off"
               type="search"
               class="form-control rounded"
               placeholder='Search (ctrl + "/" to focus)'
               style="min-width: 225px"
               />
        <span class="input-group-text border-0"
              ><i class="fas fa-search"></i
          ></span>
      </form>

      <!-- Right links -->
     <ul class="navbar-nav ms-auto d-flex flex-row">
        <!-- Notification dropdown -->
      <li class="nav-item dropdown">
          <a
             class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow"
             href="#"
             id="navbarDropdownMenuLink"
             role="button"
             data-mdb-toggle="dropdown"
             aria-expanded="false"
             >
            <i class="fas fa-bell"></i>
            <span class="badge rounded-pill badge-notification bg-danger"
                  >1</span
              >
          </a>
         
        </li>

        <!-- Icon -->
      
       

        <!-- Avatar -->
        <li class="nav-item dropdown">
          <a
             class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center"
             href="#"
             id="navbarDropdownMenuLink"
             role="button"
             data-mdb-toggle="dropdown"
             aria-expanded="false"
             >
            <img
                 src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg"
                 class="rounded-circle"
                 height="22"
                 alt=""
                 loading="lazy"
                 />
          </a>
          <ul
              class="dropdown-menu dropdown-menu-end"
              aria-labelledby="navbarDropdownMenuLink"
              >
            <li><a class="dropdown-item" href="#">My profile</a></li>
            <li><a class="dropdown-item" href="settings.php">Settings</a></li>
            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->
</header>
<!--Main Navigation-->