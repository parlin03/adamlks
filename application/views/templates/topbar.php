 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-light navbar-white">
     <div class="container">
         <a href="<?= base_url('home'); ?>" class="navbar-brand">
             <!-- <img src="<?= base_url('assets/img/icon.png') ?>" class="brand-image " style="opacity: .8"> -->
             <span class="brand-text font-weight-light">Lembar Kerja SoA</span>
         </a>

         <!-- Left navbar links -->
         <ul class="navbar-nav">
             <li class="nav-item d-none d-sm-inline-block">
                 <a href="<?= base_url('verifikasi'); ?>" class="nav-link">Verifikasi</a>
             </li>
             <li class="nav-item d-none d-sm-inline-block">
                 <a href="<?= base_url('dtdc'); ?>" class="nav-link">DTDC</a>
             </li>
             <li class="nav-item dropdown">
                 <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Dropdown</a>
                 <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                     <li><a href="#" class="dropdown-item">Some action </a></li>
                     <li><a href="#" class="dropdown-item">Some other action</a></li>

                     <li class="dropdown-divider"></li>

                     <!-- Level two dropdown-->
                     <li class="dropdown-submenu dropdown-hover">
                         <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Hover for action</a>
                         <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                             <li>
                                 <a tabindex="-1" href="#" class="dropdown-item">level 2</a>
                             </li>

                             <!-- Level three dropdown-->
                             <li class="dropdown-submenu">
                                 <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
                                 <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                                     <li><a href="#" class="dropdown-item">3rd level</a></li>
                                     <li><a href="#" class="dropdown-item">3rd level</a></li>
                                 </ul>
                             </li>
                             <!-- End Level three -->

                             <li><a href="#" class="dropdown-item">level 2</a></li>
                             <li><a href="#" class="dropdown-item">level 2</a></li>
                         </ul>
                     </li>
                     <!-- End Level two -->
                 </ul>
             </li>
         </ul>

         <!-- SEARCH FORM -->
         <!-- <form class="form-inline ml-3">
             <div class="input-group input-group-sm">
                 <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                 <div class="input-group-append">
                     <button class="btn btn-navbar" type="submit">
                         <i class="fas fa-search"></i>
                     </button>
                 </div>
             </div>
         </form> -->


     </div>
 </nav>
 <!-- /.navbar -->