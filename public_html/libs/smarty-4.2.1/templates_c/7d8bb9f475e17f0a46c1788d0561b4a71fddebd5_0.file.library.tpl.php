<?php
/* Smarty version 4.2.1, created on 2022-11-08 22:33:01
  from '/Users/Arekusandoru/Programming/PhpStormProjects/musicPlayer/public_html/templates/library.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_636b1f6d2faa02_17126773',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d8bb9f475e17f0a46c1788d0561b4a71fddebd5' => 
    array (
      0 => '/Users/Arekusandoru/Programming/PhpStormProjects/musicPlayer/public_html/templates/library.tpl',
      1 => 1667944654,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636b1f6d2faa02_17126773 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Explore</title>

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
        <li class="nav-item active">
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
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
               aria-expanded="true" aria-controls="collapseOne">
                <i class="fas fa-th-large"></i>
                <span>Browse All</span>
            </a>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Browse All:</h6>
                    <a class="collapse-item" href="browseArtists.php">Artists</a>
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
                            <a class="dropdown-item active" href="#">
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
                <!-- Artists Heading -->
                <h1 class="h3 mb-4 content-title">My Artists:</h1>
                <!--Artists Content-->
                <div class="row pl-3 pr-3 justify-content-around">
                    <!-- artist content divs-->
                    <div class="content">
                        <div class="content-img">
                            <img class="img-fluid" src="img/artist-imgs/Asap-Rocky.jpg" alt="A$AP Rocky">
                        </div>
                        <h1>A$AP Rocky</h1>
                    </div>
                    <div class="content">
                        <div class="content-img">
                            <img class="img-fluid" src="img/artist-imgs/Andy-Mineo.jpg" alt="The Beatles">
                        </div>
                        <h1>Andy Mineo</h1>
                    </div>
                    <div class="content">
                        <div class="content-img">
                            <img class="img-fluid" src="img/artist-imgs/Arctic-Monkeys.jpeg" alt="The Beatles">
                        </div>
                        <h1>Arctic Monkeys</h1>
                    </div>
                    <div class="content">
                        <div class="content-img">
                            <img class="img-fluid" src="img/artist-imgs/Baby-Keem.jpeg" alt="The Beatles">
                        </div>
                        <h1>Baby Keem</h1>
                    </div>
                    <div class="content">
                        <div class="content-img">
                            <img class="img-fluid" src="img/artist-imgs/Backseat-Lovers.PNG" alt="The Beatles">
                        </div>
                        <h1>The Backseat Lovers</h1>
                    </div>
                    <div class="content">
                        <div class="content-img">
                            <img class="img-fluid" src="img/artist-imgs/Bad-Bunny.jpeg" alt="The Beatles">
                        </div>
                        <h1>Bad Bunny</h1>
                    </div>
                    <div class="content">
                        <div class="content-img">
                            <img class="img-fluid" src="img/artist-imgs/the-beatles.jpg" alt="The Beatles">
                        </div>
                        <h1>The Beatles</h1>
                    </div>
                    <div class="content">
                        <a class="content-img" href="viewAlbum.tpl">
                            <img class="img-fluid" src="img/artist-imgs/Gorillaz.jpeg" alt="">
                        </a>
                        <h1>Gorillaz</h1>
                    </div>
                    <div class="content">
                        <a class="content-img" href="viewAlbum.tpl">
                            <img class="img-fluid" src="img/artist-imgs/LivingTombstoneIcon.jpg" alt="">
                        </a>
                        <h1>The Living Tombstone</h1>
                    </div>
                    <div class="content">
                        <a class="content-img" href="viewAlbum.tpl">
                            <img class="img-fluid" src="img/artist-imgs/TallyHall.jpg" alt="">
                        </a>
                        <h1>Tally Hall</h1>
                    </div>
                </div>

                <!--Content Splitter-->
                <div class="content-splitter ml-1"></div>

                <!-- Albums Heading -->
                <h1 class="h3 mb-4 content-title">My Albums:</h1>
                <!--Albums Content-->
                <div class="row pl-3 pr-3 justify-content-around">
                    <!-- album content divs-->
                    <div class="content">
                        <div class="content-img">
                            <img class="img-fluid" src="img/album-imgs/testing-asap-rocky.jpeg" alt="The Beatles">
                        </div>
                        <h1>TESTING</h1>
                        <h2>A$AP Rocky • 2018</h2>
                    </div>
                    <div class="content">
                        <div class="content-img">
                            <img class="img-fluid" src="img/artist-imgs/Gorillaz.jpeg" alt="">
                        </div>
                        <h1>Cracker Island</h1>
                        <h2>Gorillaz • 2023</h2>
                    </div>
                    <div class="content">
                        <div class="content-img">
                            <img class="img-fluid" src="img/album-imgs/MMMM.jpg" alt="The Beatles">
                        </div>
                        <h1>Marvin's Marvelous...</h1>
                        <h2>Tally Hall • 2005</h2>
                    </div>
                    <div class="content">
                        <div class="content-img">
                            <img class="img-fluid" src="img/album-imgs/ZeroOne.jpg" alt="The Beatles">
                        </div>
                        <h1>zero_one</h1>
                        <h2>The Living Tombstone • 2020</h2>
                    </div>
                    <div class="content">
                        <div class="content-img">
                            <img class="img-fluid" src="img/album-imgs/AbbeyRoad.jpg" alt="The Beatles">
                        </div>
                        <h1>Abbey Road</h1>
                        <h2>The Beatles • 1969</h2>
                    </div>
                    <div class="content">
                        <div class="content-img">
                            <img class="img-fluid" src="img/album-imgs/MMMM.jpg" alt="The Beatles">
                        </div>
                        <h1>Marvin's Marvelous...</h1>
                        <h2>Tally Hall • 2005</h2>
                    </div>
                    <div class="content">
                        <div class="content-img">
                            <img class="img-fluid" src="img/album-imgs/ZeroOne.jpg" alt="The Beatles">
                        </div>
                        <h1>zero_one</h1>
                        <h2>The Living Tombstone • 2020</h2>
                    </div>
                    <div class="content">
                        <div class="content-img">
                            <img class="img-fluid" src="img/album-imgs/AbbeyRoad.jpg" alt="The Beatles">
                        </div>
                        <h1>Abbey Road</h1>
                        <h2>The Beatles • 1969</h2>
                    </div>
                </div>

                <!--Content Splitter-->
                <div class="content-splitter ml-1"></div>

                <!-- Playlists Heading -->
                <h1 class="h3 content-title">My Playlists:</h1>
                <a class="mb-4" href="addPlaylist.php">Create new</a>
                <!--Playlist Content-->
                <div class="row pl-3 pr-3 justify-content-around">
                    <!-- playlist content divs-->
                    <a class="content" href="viewPlaylist.php">
                        <div class="content-img">
                            <img class="img-fluid" src="img/empty-playlist.jpg" alt="The Beatles">
                        </div>
                        <h1>User's Playlist</h1>
                        <h2>User • 3 Songs</h2>
                    </a>

                    <div class="content">
                        <div class="content-img">
                            <img class="img-fluid" src="img/empty-playlist.jpg" alt="">
                        </div>
                        <h1>User's Playlist</h1>
                        <h2>User • 43 Songs</h2>
                    </div>

                    <div class="content">
                        <div class="content-img">
                            <img class="img-fluid" src="img/empty-playlist.jpg" alt="The Beatles">
                        </div>
                        <h1>User's Playlist</h1>
                        <h2>User • 15 Songs</h2>
                    </div>
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
