<?php
/* Smarty version 4.2.1, created on 2022-11-16 22:30:56
  from '/Users/Arekusandoru/Programming/PhpStormProjects/musicPlayer/public_html/templates/viewPlaylist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6375aaf02ab1d9_87657951',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ace1180a2f9681eab3f8fdfaccb4fdfe48e84e52' => 
    array (
      0 => '/Users/Arekusandoru/Programming/PhpStormProjects/musicPlayer/public_html/templates/viewPlaylist.tpl',
      1 => 1668135401,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6375aaf02ab1d9_87657951 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11610330306375aaf0293316_29997300', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18899318236375aaf02a7635_82199930', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template.tpl");
}
/* {block "title"} */
class Block_11610330306375aaf0293316_29997300 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_11610330306375aaf0293316_29997300',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
View Playlist<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_18899318236375aaf02a7635_82199930 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18899318236375aaf02a7635_82199930',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!--Delete button -->
        <div class="float-right relative-top">
            <a onclick="confirmAction()">
                <img src="img/trashcan.png" alt="white trash can image" height="30" width="30">
            </a>
        </div>

        <!-- Playlist Information -->
        <div class="row ml-md-2">
            <div class="album-metadata col-sm-12 p-0">
                <img src="img/empty-playlist.jpg" class="img-responsive artwork float-md-left" alt="">
                <h1>TESTING</h1>
                <h2>User</h2>
                <h6>Playlist description</h6>
                <div style="height: 5px;"></div>
                <a class="mb-7 add-music-button" href="addSong.php">Edit Album Details</a>
                <br>
                <a class="mb-7 add-music-button" href="addSong.php">Add Song</a>
            </div>
            <div class="col-sm-6"></div>
        </div>

        <!-- Playlist Tracklist -->
        <div class="album-tracklist row">
            <div class="col">
                <div class="row container playlist-song justify-content-between">
                    <div class="p-song-info">
                        <h1>Distorted Records</h1>
                        <p>A$AP Rocky • TESTING</p>
                    </div>
                    <div class="dropdown">
                        <ul class="navbar-nav ml-auto">
                            <!-- Nav Item - Song Information -->
                            <li class="nav-item dropdown no-arrow" style="border: none;">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-secondary " style="border: none;">• • •</span>
                                </a>
                                <!-- Dropdown - Song Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                     aria-labelledby="userDropdown0">
                                    <a class="dropdown-item" href="#">
                                        <i class="fa fa-comments-o fa-sm fa-fw mr-2 text-gray-400"></i>
                                        View Comments
                                    </a>
                                    <a class="dropdown-item" href="viewAlbum.php">
                                        <i class="fas fa-folder-open fa-sm fa-fw mr-2 text-gray-400"></i>
                                        View Album
                                    </a>
                                    <a class="dropdown-item" href="viewArtist.php">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        View Artist
                                    </a>
                                    <a class="dropdown-item" href="addSong.php">
                                        <i class="fa fa-plus fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Add to playlist
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item">
                                        <i class="fa fa-minus fa-sm fa-fw mr-2 text-gray-400" ></i>
                                        <p name="remove">Remove from playlist</p>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row container playlist-song justify-content-between">
                    <div class="p-song-info">
                        <h1>Distorted Records</h1>
                        <p>A$AP Rocky • TESTING</p>
                    </div>
                    <div class="dropdown">
                        <ul class="navbar-nav ml-auto">
                            <!-- Nav Item - Song Information -->
                            <li class="nav-item dropdown no-arrow" style="border: none;">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-secondary " style="border: none;">• • •</span>
                                </a>
                                <!-- Dropdown - Song Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                     aria-labelledby="userDropdown0">
                                    <a class="dropdown-item" href="#">
                                        <i class="fa fa-comments-o fa-sm fa-fw mr-2 text-gray-400"></i>
                                        View Comments
                                    </a>
                                    <a class="dropdown-item" href="viewAlbum.php">
                                        <i class="fas fa-folder-open fa-sm fa-fw mr-2 text-gray-400"></i>
                                        View Album
                                    </a>
                                    <a class="dropdown-item" href="viewArtist.php">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        View Artist
                                    </a>
                                    <a class="dropdown-item" href="addSong.php">
                                        <i class="fa fa-plus fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Add to playlist
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">
                                        <i class="fa fa-minus fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Remove from playlist
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row container playlist-song justify-content-between">
                    <div class="p-song-info">
                        <h1>Distorted Records</h1>
                        <p>A$AP Rocky • TESTING</p>
                    </div>
                    <div class="dropdown">
                        <ul class="navbar-nav ml-auto">
                            <!-- Nav Item - Song Information -->
                            <li class="nav-item dropdown no-arrow" style="border: none;">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-secondary " style="border: none;">• • •</span>
                                </a>
                                <!-- Dropdown - Song Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                     aria-labelledby="userDropdown0">
                                    <a class="dropdown-item" href="#">
                                        <i class="fa fa-comments-o fa-sm fa-fw mr-2 text-gray-400"></i>
                                        View Comments
                                    </a>
                                    <a class="dropdown-item" href="viewAlbum.php">
                                        <i class="fas fa-folder-open fa-sm fa-fw mr-2 text-gray-400"></i>

                                        <i class="fa fa-folder-o fa-sm fa-fw mr-2 text-gray-400"></i>
                                        View Album
                                    </a>
                                    <a class="dropdown-item" href="viewArtist.php">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        View Artist
                                    </a>
                                    <a class="dropdown-item" href="addSong.php">
                                        <i class="fa fa-plus fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Add to playlist
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">
                                        <i class="fa fa-minus fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Remove from playlist
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row container playlist-song justify-content-between">
                    <div class="p-song-info">
                        <h1>Distorted Records</h1>
                        <p>A$AP Rocky • TESTING</p>
                    </div>
                    <div class="dropdown">
                        <ul class="navbar-nav ml-auto">
                            <!-- Nav Item - Song Information -->
                            <li class="nav-item dropdown no-arrow" style="border: none;">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-secondary " style="border: none;">• • •</span>
                                </a>
                                <!-- Dropdown - Song Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                     aria-labelledby="userDropdown0">
                                    <a class="dropdown-item" href="#">
                                        <i class="fa fa-comments-o fa-sm fa-fw mr-2 text-gray-400"></i>
                                        View Comments
                                    </a>
                                    <a class="dropdown-item" href="viewAlbum.php">
                                        <i class="fas fa-folder-open fa-sm fa-fw mr-2 text-gray-400"></i>
                                        View Album
                                    </a>
                                    <a class="dropdown-item" href="viewArtist.php">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        View Artist
                                    </a>
                                    <a class="dropdown-item" href="addSong.php">
                                        <i class="fa fa-plus fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Add to playlist
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">
                                        <i class="fa fa-minus fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Remove from playlist
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row container playlist-song justify-content-between">
                    <div class="p-song-info">
                        <h1>Distorted Records</h1>
                        <p>A$AP Rocky • TESTING</p>
                    </div>
                    <div class="dropdown">
                        <ul class="navbar-nav ml-auto">
                            <!-- Nav Item - Song Information -->
                            <li class="nav-item dropdown no-arrow" style="border: none;">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-secondary " style="border: none;">• • •</span>
                                </a>
                                <!-- Dropdown - Song Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                     aria-labelledby="userDropdown0">
                                    <a class="dropdown-item" href="#">
                                        <i class="fa fa-comments-o fa-sm fa-fw mr-2 text-gray-400"></i>
                                        View Comments
                                    </a>
                                    <a class="dropdown-item" href="viewAlbum.php">
                                        <i class="fas fa-folder-open fa-sm fa-fw mr-2 text-gray-400"></i>
                                        View Album
                                    </a>
                                    <a class="dropdown-item" href="viewArtist.php">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        View Artist
                                    </a>
                                    <a class="dropdown-item" href="addSong.php">
                                        <i class="fa fa-plus fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Add to playlist
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">
                                        <i class="fa fa-minus fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Remove from playlist
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row container playlist-song justify-content-between">
                    <div class="p-song-info">
                        <h1>Distorted Records</h1>
                        <p>A$AP Rocky • TESTING</p>
                    </div>
                    <div class="dropdown">
                        <ul class="navbar-nav ml-auto">
                            <!-- Nav Item - Song Information -->
                            <li class="nav-item dropdown no-arrow" style="border: none;">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-secondary " style="border: none;">• • •</span>
                                </a>
                                <!-- Dropdown - Song Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                     aria-labelledby="userDropdown0">
                                    <a class="dropdown-item" href="#">
                                        <i class="fa fa-comments-o fa-sm fa-fw mr-2 text-gray-400"></i>
                                        View Comments
                                    </a>
                                    <a class="dropdown-item" href="viewAlbum.php">
                                        <i class="fas fa-folder-open fa-sm fa-fw mr-2 text-gray-400"></i>
                                        View Album
                                    </a>
                                    <a class="dropdown-item" href="viewArtist.php">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        View Artist
                                    </a>
                                    <a class="dropdown-item" href="addSong.php">
                                        <i class="fa fa-plus fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Add to playlist
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">
                                        <i class="fa fa-minus fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Remove from playlist
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row container playlist-song justify-content-between">
                    <div class="p-song-info">
                        <h1>Distorted Records</h1>
                        <p>A$AP Rocky • TESTING</p>
                    </div>
                    <div class="dropdown">
                        <ul class="navbar-nav ml-auto">
                            <!-- Nav Item - Song Information -->
                            <li class="nav-item dropdown no-arrow" style="border: none;">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-secondary " style="border: none;">• • •</span>
                                </a>
                                <!-- Dropdown - Song Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                     aria-labelledby="userDropdown0">
                                    <a class="dropdown-item" href="#">
                                        <i class="fa fa-comments-o fa-sm fa-fw mr-2 text-gray-400"></i>
                                        View Comments
                                    </a>
                                    <a class="dropdown-item" href="viewAlbum.php">
                                        <i class="fas fa-folder-open fa-sm fa-fw mr-2 text-gray-400"></i>

                                        <i class="fa fa-folder-o fa-sm fa-fw mr-2 text-gray-400"></i>
                                        View Album
                                    </a>
                                    <a class="dropdown-item" href="viewArtist.php">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        View Artist
                                    </a>
                                    <a class="dropdown-item" href="addSong.php">
                                        <i class="fa fa-plus fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Add to playlist
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">
                                        <i class="fa fa-minus fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Remove from playlist
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
<?php
}
}
/* {/block "content"} */
}
