<?php
/* Smarty version 4.2.1, created on 2022-10-13 18:50:28
  from 'C:\Users\kara3\PhpstormProjects\musicPlayer\public_html\templates\viewArtist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63489634507679_00880353',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '480f3d5236c62fc5dd6556900635307a35f09925' => 
    array (
      0 => 'C:\\Users\\kara3\\PhpstormProjects\\musicPlayer\\public_html\\templates\\viewArtist.tpl',
      1 => 1665637897,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63489634507679_00880353 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Artist Name</title>

    <!-- Custom fonts for this template-->
    <link href="/public_html/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/public_html/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/public_html/css/browseDivStyles.css">
    <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/125fe29883.js" crossorigin="anonymous"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>
        // The function below will start the confirmation dialog
        function confirmAction() {
            let confirmAction = confirm("Are you sure to delete this?");
            if (confirmAction) {
                alert("Artist Deleted");
            } else {
                alert("Action canceled");
            }
        }
    <?php echo '</script'; ?>
>

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../public_html/templates/explore.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-music"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Tau Tunes</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="../public_html/templates/library.html">
                <i class="fas fa-folder-open    "></i>
                <span>My Library</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../public_html/templates/profile.html">
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
            <a class="nav-link" href="../public_html/templates/explore.html">
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
                    <a class="collapse-item" href="browseArtists.tpl">Artists</a>
                    <a class="collapse-item" href="browseAlbums.tpl">Albums</a>
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
                    <a class="collapse-item" href="../public_html/templates/addArtist.html">Artist</a>
                    <a class="collapse-item" href="../public_html/templates/addAlbum.html">Album</a>
                    <a class="collapse-item" href="../public_html/templates/addSong.html">Song</a>
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
                                 src="/public_html/img/pfp/blank.png">
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

                <!--Delete button -->
                <div class="float-right relative-top">
                    <a onclick="confirmAction()">
                        <img src="../public_html/img/trashcan.png" alt="white trash can image" height="30" width="30">
                    </a>
                </div>

                <!-- Page Heading -->
                <!-- Artist Information -->
                <h1 class="h3 mb-0 content-title">A$AP Rocky:</h1>
                <h2 class="mb-1 artist-rating">Average Album Rating: 5/5</h2>
                <a class="mb-7 add-music-button" href="../public_html/templates/addAlbum.html">Add Album</a>
                <!--Page Content-->
                <!-- Artist Discography  -->
                <div class="row pl-3 pr-3 justify-content-around">
                    <a class="content" href="../public_html/templates/viewAlbum.html">
                        <div class="content-img">
                            <img class="img-fluid" src="/public_html/img/album-imgs/A$AP-Rocky-Testing.jpeg" alt="The Beatles">
                        </div>
                        <h1>TESTING</h1>
                        <h2>A$AP Rocky ??? 2018</h2>
                    </a>
                </div>

                <div class="content-splitter"></div>

                <!--Artist Comments-->
                <h1 class="h3 content-title">Reviews:</h1>
                <div class="row comments justify-content-around">
                    <div class="comment">
                        <div class="comment-header">
                            <h1>User</h1>
                            <h2>Rating: 5/5</h2>
                        </div>
                        <div class="comment-body">
                            <p>This is where users will leave the details of their reviews,
                                explaining why they did or didn't like a particular song/album/playlist.
                                The user will also be able to edit their comments and delete them at any point</p>
                        </div>

                    </div>
                    <div class="comment">
                        <div class="comment-header">
                            <h1>User</h1>
                            <h2>Rating: 5/5</h2>
                        </div>
                        <div class="comment-body">
                            <p>This is where users will leave the details of their reviews,
                                explaining why they did or didn't like a particular song/album/playlist.
                                The user will also be able to edit their comments and delete them at any point</p>
                        </div>

                    </div>
                    <div class="comment">
                        <div class="comment-header">
                            <h1>User</h1>
                            <h2>Rating: 5/5</h2>
                        </div>
                        <div class="comment-body">
                            <p>This is where users will leave the details of their reviews,
                                explaining why they did or didn't like a particular song/album/playlist.
                                The user will also be able to edit their comments and delete them at any point</p>
                        </div>

                    </div>
                    <div class="comment">
                        <div class="comment-header">
                            <h1>User</h1>
                            <h2>Rating: 5/5</h2>
                        </div>
                        <div class="comment-body">
                            <p>This is where users will leave the details of their reviews,
                                explaining why they did or didn't like a particular song/album/playlist.
                                The user will also be able to edit their comments and delete them at any point</p>
                        </div>

                    </div>
                    <div class="comment">
                        <div class="comment-header">
                            <h1>User</h1>
                            <h2>Rating: 5/5</h2>
                        </div>
                        <div class="comment-body">
                            <p>This is where users will leave the details of their reviews,
                                explaining why they did or didn't like a particular song/album/playlist.
                                The user will also be able to edit their comments and delete them at any point</p>
                        </div>

                    </div>
                </div>
                <!-- Add Comment Button -->
                <div class="row add-comment justify-content-center mb-5">
                    <a href="../public_html/templates/addComment.html" class="add-comment-button">Add Review</a>
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
                    <span aria-hidden="true">??</span>
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
 src="/public_html/vendor/jquery/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/public_html/vendor/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>

<!-- Core plugin JavaScript-->
<?php echo '<script'; ?>
 src="/public_html/vendor/jquery-easing/jquery.easing.min.js"><?php echo '</script'; ?>
>

<!-- Custom scripts for all pages-->
<?php echo '<script'; ?>
 src="/public_html/js/sb-admin-2.min.js"><?php echo '</script'; ?>
>

</body>

</html><?php }
}
