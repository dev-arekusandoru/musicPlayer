<?php
/* Smarty version 4.2.1, created on 2022-11-02 23:15:44
  from '/Users/Arekusandoru/Programming/PhpStormProjects/musicPlayer/public_html/templates/browseArtists.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63633260a8f1e6_04780896',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44310d3d33387b0a08a2a0b9fad935195db9fc0a' => 
    array (
      0 => '/Users/Arekusandoru/Programming/PhpStormProjects/musicPlayer/public_html/templates/browseArtists.tpl',
      1 => 1667445342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63633260a8f1e6_04780896 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Browse Artists</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/browseDivStyles.css">
    <!--<?php echo '<script'; ?>
 src="https://kit.fontawesome.com/125fe29883.js" crossorigin="anonymous"><?php echo '</script'; ?>
>-->


</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="explore.php">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-music"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Tau Tunes</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="library.php">
                <i class="fas fa-folder-open    "></i>
                <span>My Library</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="profile.php">
                <i class="fas fa-user fa-tachometer-alt"></i>
                <span>My Profile</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">
        <!-- Find Music Heading -->
        <div class="sidebar-heading">
            Find Music
        </div>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link" href="explore.php">
                <i class="fas fa-compass"></i>
                <span>Explore</span></a>
        </li>

        <!-- Nav Item - Browse Music Menu -->
        <li class="nav-item active">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
               aria-expanded="true" aria-controls="collapseOne">
                <i class="fas fa-th-large"></i>
                <span>Browse All</span>
            </a>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Browse All:</h6>
                    <a class="collapse-item active" href="browseArtists.php">Artists</a>
                    <a class="collapse-item" href="browseAlbums.php">Albums</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Add Music Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
               aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-music"></i>
                <span>Add Music</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Add Music:</h6>
                    <a class="collapse-item" href="addArtist.php">Artist</a>
                    <a class="collapse-item" href="addAlbum.php">Album</a>
                    <a class="collapse-item" href="addSong.php">Song</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column bg-dark">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-darker topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search -->
                <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-dark border-1 small" placeholder="Search for..."
                               aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary"
                                    style="border: 1px solid rgb(235, 235, 235); border-left: none;" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                             aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small"
                                           placeholder="Search music..." aria-label="Search"
                                           aria-describedby="basic-addon2">
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

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">User</span>
                            <img class="img-profile rounded-circle"
                                 src="img/pfp/blank.png">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-folder-open fa-sm fa-fw mr-2 text-gray-400"></i>
                                My Library
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-4 content-title">Browse All Artists:</h1>
                <!--Page Content-->
                <div class="row pl-3 pr-3 justify-content-around">
                    <!-- artist content divs-->

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['artists']->value, 'artist');
$_smarty_tpl->tpl_vars['artist']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['artist']->value) {
$_smarty_tpl->tpl_vars['artist']->do_else = false;
?>
                        <a class="content" href="viewArtist.php?id=<?php echo $_smarty_tpl->tpl_vars['artist']->value['Artist_ID'];?>
">
                            <div class="content-img">
                                <img class="img-fluid" src="img/artist-imgs/<?php echo $_smarty_tpl->tpl_vars['artist']->value['Image_URL'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['artist']->value['Artist_Name'];?>
">
                            </div>
                            <h1><?php echo $_smarty_tpl->tpl_vars['artist']->value['Artist_Name'];?>
</h1>
                        </a>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-darker">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Tau Tech 2022</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="userLogin.html">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<?php echo '<script'; ?>
 src="vendor/jquery/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="vendor/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>

<!-- Core plugin JavaScript-->
<?php echo '<script'; ?>
 src="vendor/jquery-easing/jquery.easing.min.js"><?php echo '</script'; ?>
>

<!-- Custom scripts for all pages-->
<?php echo '<script'; ?>
 src="js/sb-admin-2.min.js"><?php echo '</script'; ?>
>

</body>

</html><?php }
}
