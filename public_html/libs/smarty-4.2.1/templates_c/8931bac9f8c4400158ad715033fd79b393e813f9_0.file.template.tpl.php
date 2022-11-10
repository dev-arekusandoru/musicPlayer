<?php
/* Smarty version 4.2.1, created on 2022-11-09 16:24:14
  from '/Users/Arekusandoru/Programming/PhpStormProjects/musicPlayer/public_html/templates/template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_636c1a7e8bb067_90955662',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8931bac9f8c4400158ad715033fd79b393e813f9' => 
    array (
      0 => '/Users/Arekusandoru/Programming/PhpStormProjects/musicPlayer/public_html/templates/template.tpl',
      1 => 1668028554,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636c1a7e8bb067_90955662 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_652607453636c1a7e898bc6_79097950', "title");
?>
</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/browseDivStyles.css" rel="stylesheet">
    <link href="css/addPageStyles.css" rel="stylesheet">
    <link href="css/profile.css" rel="stylesheet">
    <link href="css/viewStyles.css" rel="stylesheet">
    <link href="css/starRating.css" rel="stylesheet">
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
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2094445860636c1a7e89e460_58943426', "library");
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1783548624636c1a7e8a1643_05943478', "profile");
?>


        <!-- Divider -->
        <hr class="sidebar-divider">
        <!-- Find Music Heading -->
        <div class="sidebar-heading">
            Find Music
        </div>

        <!-- Nav Item - Utilities Collapse Menu -->
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1760103561636c1a7e8a4635_57413629', "explore");
?>



        <!-- Nav Item - Browse Music Menu -->
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1918653153636c1a7e8a7623_29163951', "browse");
?>

        <!-- Nav Item - Add Music Menu -->
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_748441132636c1a7e8aa6c9_24527901', "add");
?>


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
                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method="get" action="search.php">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control bg-dark border-1 small" placeholder="Search for..."
                               aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary"
                                    style="border: 1px solid rgb(235, 235, 235); border-left: none;" type="submit">
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
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['username'];?>
</span>
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

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125024817636c1a7e8b7b88_74692545', "content");
?>


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
                <a class="btn btn-primary" href="logout.php">Logout</a>
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
/* {block "title"} */
class Block_652607453636c1a7e898bc6_79097950 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_652607453636c1a7e898bc6_79097950',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Tau Tunes<?php
}
}
/* {/block "title"} */
/* {block "library"} */
class Block_2094445860636c1a7e89e460_58943426 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'library' => 
  array (
    0 => 'Block_2094445860636c1a7e89e460_58943426',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <li class="nav-item">
                <a class="nav-link" href="library.php">
                    <i class="fas fa-folder-open    "></i>
                    <span>My Library</span></a>
            </li>
        <?php
}
}
/* {/block "library"} */
/* {block "profile"} */
class Block_1783548624636c1a7e8a1643_05943478 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'profile' => 
  array (
    0 => 'Block_1783548624636c1a7e8a1643_05943478',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <li class="nav-item">
                <a class="nav-link" href="profile.php">
                    <i class="fas fa-user fa-tachometer-alt"></i>
                    <span>My Profile</span></a>
            </li>
        <?php
}
}
/* {/block "profile"} */
/* {block "explore"} */
class Block_1760103561636c1a7e8a4635_57413629 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'explore' => 
  array (
    0 => 'Block_1760103561636c1a7e8a4635_57413629',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <li class="nav-item">
            <a class="nav-link" href="explore.php">
                <i class="fas fa-compass"></i>
                <span>Explore</span></a>
        </li>
        <?php
}
}
/* {/block "explore"} */
/* {block "browse"} */
class Block_1918653153636c1a7e8a7623_29163951 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'browse' => 
  array (
    0 => 'Block_1918653153636c1a7e8a7623_29163951',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

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
        <?php
}
}
/* {/block "browse"} */
/* {block "add"} */
class Block_748441132636c1a7e8aa6c9_24527901 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'add' => 
  array (
    0 => 'Block_748441132636c1a7e8aa6c9_24527901',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

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
        <?php
}
}
/* {/block "add"} */
/* {block "content"} */
class Block_125024817636c1a7e8b7b88_74692545 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_125024817636c1a7e8b7b88_74692545',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <!-- Begin Page Content -->
                <div class="container-fluid"></div>
                <!-- /.container-fluid -->
            <?php
}
}
/* {/block "content"} */
}
