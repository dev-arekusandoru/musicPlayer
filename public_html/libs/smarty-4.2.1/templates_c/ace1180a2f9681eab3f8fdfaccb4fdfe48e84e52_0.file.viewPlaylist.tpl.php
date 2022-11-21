<?php
/* Smarty version 4.2.1, created on 2022-11-20 20:46:28
  from '/Users/Arekusandoru/Programming/PhpStormProjects/musicPlayer/public_html/templates/viewPlaylist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_637ad874966682_04953949',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ace1180a2f9681eab3f8fdfaccb4fdfe48e84e52' => 
    array (
      0 => '/Users/Arekusandoru/Programming/PhpStormProjects/musicPlayer/public_html/templates/viewPlaylist.tpl',
      1 => 1668993926,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_637ad874966682_04953949 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1484592083637ad87494b682_98378045', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_828759094637ad87494e006_35664462', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template.tpl");
}
/* {block "title"} */
class Block_1484592083637ad87494b682_98378045 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_1484592083637ad87494b682_98378045',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
View Playlist<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_828759094637ad87494e006_35664462 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_828759094637ad87494e006_35664462',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Playlist Information -->
        <div class="row ml-md-2">
            <div class="album-metadata col-sm-12 p-0">
                <img src="img/playlist-imgs/<?php echo $_smarty_tpl->tpl_vars['playlistInfo']->value['Image_URL'];?>
" class="img-responsive artwork float-md-left mr-2"
                     alt="">
                <h1><?php echo $_smarty_tpl->tpl_vars['playlistInfo']->value['Playlist_Name'];?>
</h1>
                <h2><?php echo $_smarty_tpl->tpl_vars['playlistInfo']->value['First_Name'];?>
 <?php echo $_smarty_tpl->tpl_vars['playlistInfo']->value['Last_Name'];?>
</h2>
                <h6><?php echo $_smarty_tpl->tpl_vars['playlistInfo']->value['Description'];?>
</h6>
                <a class="mb-7 add-music-button" href="#">Edit Details</a>
                <br>
                <a class="mb-7 add-music-button" href="">Add Song</a>
                <br>
            </div>
            <div class="col-sm-6"></div>
        </div>

        <!-- Playlist Tracklist -->
        <div class="album-tracklist row">
            <div class="col">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['songs']->value, 's');
$_smarty_tpl->tpl_vars['s']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->do_else = false;
?>
                <div class="row container playlist-song justify-content-between">
                    <div class="p-song-info">
                        <h1><?php echo $_smarty_tpl->tpl_vars['s']->value['Title'];?>
</h1>
                        <p><?php echo $_smarty_tpl->tpl_vars['s']->value['Artist_Name'];?>
 • <?php echo $_smarty_tpl->tpl_vars['s']->value['Album_Name'];?>
</p>
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
                                    <?php if ($_SESSION['isAdmin'] == 1) {?>
                                        <a class="dropdown-item"
                                           href="addSong.tpl?arid=<?php echo $_smarty_tpl->tpl_vars['playlistInfo']->value['Artist_ID'];?>
&abid=<?php echo $_smarty_tpl->tpl_vars['playlistInfo']->value['Album_ID'];?>
&sid=<?php echo $_smarty_tpl->tpl_vars['song']->value['Song_ID'];?>
">
                                            <i class="fa fa-comments-o fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Edit Song Details
                                        </a>
                                    <?php }?>
                                    <a class="dropdown-item" href="viewArtist.php?id=<?php echo $_smarty_tpl->tpl_vars['albumInfo']->value['Artist_ID'];?>
">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        View Artist
                                    </a>
                                    <a class="dropdown-item" href="addSong.php">
                                        <i class="fa fa-plus fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Add to playlist
                                    </a>
                                    <?php if ($_SESSION['isAdmin'] == 1) {?>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="deleteSong.php?id=<?php echo $_smarty_tpl->tpl_vars['playlistInfo']->value['Song_ID'];?>
">
                                            <i class="fa fa-minus fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Delete Song
                                        </a>
                                    <?php }?>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
<?php
}
}
/* {/block "content"} */
}
