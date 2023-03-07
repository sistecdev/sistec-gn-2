<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">
   <link rel="shortcut icon" href="<?= base_url("assets/web/images/others/sistec-favicon.png") ?>" type="image/png" />
   <title>SISTec-GN</title>
   <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
   <link href="<?= base_url('assets/fontawesome/css/fontawesome.all.min.css') ?>" rel="stylesheet" type="text/css">
   <link href="<?= base_url('assets/admin/css/jquery.dataTables.min.css') ?>" rel="stylesheet">
   <link href="<?= base_url('assets/admin/css/admin-style.css') ?>" rel="stylesheet">
   <link href="<?= base_url('assets/admin/css/new-admin-style.css') ?>" rel="stylesheet">
   <style>
      .custom-switch {
         cursor: pointer;
      }

      .dt-button.buttons-csv {
         position: relative;
         float: left;
         content: "<span>Export to CSV</span>";
         background-color: #00a65a;
         color: #fff;
         border: none;
         padding: 3px 10px;
         border-radius: 5px;
      }

      .w-100 {
         width: 100%;
      }

      input[type=file].form-control {
         height: auto;
      }
   </style>
</head>

<body id="page-top">
   <!-- Page Wrapper -->
   <div id="wrapper">
      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">
         <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin/index') ?>">
            <div class="sidebar-brand-icon rotate-n-15">
               <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">SISTec-GN</div>
         </a>
         <hr class="sidebar-divider my-0">
         <?php
         $userRole = $this->session->userdata("role");
         $active_page = $this->session->userdata("active-page");
         ?>
         <!-- <li class="nav-item <?php if ($this->session->userdata("active-page") == "admin-index") {
                                       echo "active";
                                    } ?>">
            <a class="nav-link" href="<?= base_url('admin/index') ?>">
               <i class="fas fa-fw fa-home"></i>
               <span>Home</span></a>
         </li> -->
         <?php
         if ($userRole == 1 || $userRole == 2) {
         ?>
            <li class="nav-item <?= ($active_page == "admin-what-parents-say" || $active_page == "admin-news-notice" || $active_page == "home") ?
                                    "active" : ""; ?>">
               <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEvents" aria-expanded="false" aria-controls="collapseEvents">
                  <i class="fas fa-home"></i> <span>Home Page</span>
               </a>
               <div id="collapseEvents" class="collapse" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                     <a class="collapse-item" href="<?= base_url('Admin/slider'); ?>">Home Sliders</a>
                     <a class="collapse-item" href="<?= base_url('admin-news-notice'); ?>">News & Notices</a>
                     <a class="collapse-item" href="<?= base_url('Admin/meritorious_student'); ?>">Meritorious Student</a>
                     <a class="collapse-item" href="<?= base_url('Admin/placements'); ?>">Placements</a>
                  </div>
               </div>
            </li>
            <li class="nav-item">
               <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEvents2" aria-expanded="false" aria-controls="collapseEvents">
                  <i class="fas fa-home"></i> <span>Publications</span>
               </a>
               <div id="collapseEvents2" class="collapse" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                     <a class="collapse-item" href="<?= base_url('Admin/journals'); ?>">Journals</a>
                     <a class="collapse-item" href="<?= base_url('Admin/conferences'); ?>">Conferences</a>
                     <a class="collapse-item" href="<?= base_url('Admin/ugc'); ?>">UGC</a>
                  </div>
               </div>
            </li>
            <li class="nav-item <?= ($active_page == "admin-events-gallery" || $active_page == "admin-media-gallery") ?
                                    "active" : ""; ?>">
               <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEvents3" aria-expanded="false" aria-controls="collapseEvents">
                  <i class="fas fa-image"></i> <span>Events & Gallery</span>
               </a>
               <div id="collapseEvents3" class="collapse" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                     <a class="collapse-item" href="<?= base_url('admin-events-gallery') ?>">Recent Events</a>
                     <a class="collapse-item" href="<?= base_url('Admin/video_gallery') ?>">Video Gallery</a>
                  </div>
               </div>
            </li>
         <?php
         }
         ?>

         <!-- <li class="nav-item">
            <a class="nav-link" href="<?= base_url('SQLBackup/index') ?>">
               <i class="fas fa-fw fa-download"></i>
               <span>Export .SQL</span>
            </a>
         </li> -->
         <hr class="sidebar-divider d-none d-md-block">
         <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
         </div>
      </ul>

      <div id="content-wrapper" class="d-flex flex-column">
         <div id="content">
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
               <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                  <i class="fa fa-bars"></i>
               </button>
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item dropdown no-arrow">
                     <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small text-capitalize">
                           <?= $this->session->admin_username; ?>
                        </span>
                        <img class="img-profile rounded-circle" src="<?= base_url('assets/admin/img/user.svg') ?>">
                     </a>
                     <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                           <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                           Logout
                        </a>
                     </div>
                  </li>
               </ul>
            </nav>