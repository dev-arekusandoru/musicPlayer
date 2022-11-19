<?php
/* Smarty version 4.2.1, created on 2022-11-18 17:04:07
  from '/Users/Arekusandoru/Programming/PhpStormProjects/musicPlayer/public_html/templates/library.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63780157dcd950_19199486',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d8bb9f475e17f0a46c1788d0561b4a71fddebd5' => 
    array (
      0 => '/Users/Arekusandoru/Programming/PhpStormProjects/musicPlayer/public_html/templates/library.tpl',
      1 => 1668809047,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63780157dcd950_19199486 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_73514305663780157d5a757_23198678', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_38158276663780157d5e8d9_74815370', "library");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_134841939863780157d62675_00371450', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template.tpl");
}
/* {block "title"} */
class Block_73514305663780157d5a757_23198678 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_73514305663780157d5a757_23198678',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
My Library<?php
}
}
/* {/block "title"} */
/* {block "library"} */
class Block_38158276663780157d5e8d9_74815370 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'library' => 
  array (
    0 => 'Block_38158276663780157d5e8d9_74815370',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <li class="nav-item active">
        <a class="nav-link" href="library.php">
            <i class="fas fa-folder-open    "></i>
            <span>My Library</span></a>
    </li>
<?php
}
}
/* {/block "library"} */
/* {block "content"} */
class Block_134841939863780157d62675_00371450 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_134841939863780157d62675_00371450',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!-- Begin Page Content -->
    <div class="container-fluid">


        <!-- Playlists Heading -->
        <h1 class="h3 content-title">My Playlists:</h1>
        <a class="mb-4" href="addPlaylist.php">Create new</a>
        <!--Playlist Content-->
        <div class="row pl-3 pr-3 justify-content-around">
            <!-- playlist content divs-->
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['userPlaylists']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
                <a class="content" href="viewPlaylist.php?id=<?php echo $_smarty_tpl->tpl_vars['p']->value['Playlist_ID'];?>
">
                    <div class="content-img">
                        <img class="img-fluid" src="img/playlist-imgs/<?php echo $_smarty_tpl->tpl_vars['p']->value['Image_URL'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['p']->value['Playlist_Name'];?>
">
                    </div>
                    <h1><?php echo $_smarty_tpl->tpl_vars['p']->value['Playlist_Name'];?>
</h1>
                    <?php if ($_smarty_tpl->tpl_vars['p']->value['Song_Count'] == 1) {?>
                        <h2><?php echo $_smarty_tpl->tpl_vars['p']->value['Song_Count'];?>
 Song</h2>
                    <?php } else { ?>
                        <h2><?php echo $_smarty_tpl->tpl_vars['p']->value['Song_Count'];?>
 Songs</h2>
                    <?php }?>
                </a>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>

        <!--Content Splitter-->
        <div class="content-splitter ml-1"></div>

        <!-- Page Heading -->
        <!-- Artists Heading -->
        <h1 class="h3 mb-4 content-title">My Artist Uploads:</h1>
        <!--Artists Content-->
        <div class="row pl-3 pr-3 justify-content-around">
            <!-- artist content divs-->

            <?php if (!empty($_smarty_tpl->tpl_vars['userArtists']->value)) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['userArtists']->value, 'a');
$_smarty_tpl->tpl_vars['a']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->do_else = false;
?>
                    <a class="content" href="viewArtist.php?id=<?php echo $_smarty_tpl->tpl_vars['a']->value['Artist_ID'];?>
">
                        <div class="content-img">
                            <img class="img-fluid" src="img/artist-imgs/<?php echo $_smarty_tpl->tpl_vars['a']->value['Image_URL'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['a']->value['Artist_Name'];?>
">
                        </div>
                        <h1><?php echo $_smarty_tpl->tpl_vars['a']->value['Artist_Name'];?>
</h1>
                    </a>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
                <div class="content">
                    <div class="content-img">
                        <img class="img-fluid" src="img/empty-playlist.jpg" alt="Empty Album">
                    </div>
                    <h1>No Artists</h1>
                </div>
            <?php }?>
        </div>

        <!--Content Splitter-->
        <div class="content-splitter ml-1"></div>

        <!-- Albums Heading -->
        <h1 class="h3 mb-4 content-title">My Album Uploads:</h1>
        <!--Albums Content-->
        <div class="row pl-3 pr-3 justify-content-around">
            <!-- album content divs-->
            <?php if (!empty($_smarty_tpl->tpl_vars['userAlbums']->value)) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['userAlbums']->value, 'a');
$_smarty_tpl->tpl_vars['a']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->do_else = false;
?>
                    <a class="content" href="viewAlbum.php?id=<?php echo $_smarty_tpl->tpl_vars['a']->value['Album_ID'];?>
">
                        <div class="content-img">
                            <img class="img-fluid" src="img/album-imgs/<?php echo $_smarty_tpl->tpl_vars['a']->value['Image_URL'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['a']->value['Album_Name'];?>
">
                        </div>
                        <h1><?php echo $_smarty_tpl->tpl_vars['a']->value['Album_Name'];?>
</h1>
                        <h2><?php echo $_smarty_tpl->tpl_vars['a']->value['Artist_Name'];?>
 • <?php echo $_smarty_tpl->tpl_vars['a']->value['Release_Year'];?>
</h2>
                    </a>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
                <div class="content">
                    <div class="content-img">
                        <img class="img-fluid" src="img/empty-playlist.jpg" alt="No Albums">
                    </div>
                    <h1>No Albums</h1>
                </div>
            <?php }?>
        </div>

        <!--Content Splitter-->
        <div class="content-splitter ml-1"></div>

        <h1 class="h3 mb-4 content-title">My Song Uploads:</h1>
        <!--Songs Content-->
        <div class="row pl-3 pr-3 justify-content-around">
            <!-- song content divs-->
            <?php if (!empty($_smarty_tpl->tpl_vars['userSongs']->value)) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['userSongs']->value, 'song');
$_smarty_tpl->tpl_vars['song']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['song']->value) {
$_smarty_tpl->tpl_vars['song']->do_else = false;
?>
                    <a class="content" href="viewAlbum.php?id=<?php echo $_smarty_tpl->tpl_vars['song']->value['Album_ID'];?>
">
                        <div class="content-img">
                            <img class="img-fluid" src="img/album-imgs/<?php echo $_smarty_tpl->tpl_vars['song']->value['Image_URL'];?>
"
                                 alt="<?php echo $_smarty_tpl->tpl_vars['song']->value['Album_Name'];?>
">
                        </div>
                        <h1><?php echo $_smarty_tpl->tpl_vars['song']->value['Title'];?>
</h1>
                        <h2><?php echo $_smarty_tpl->tpl_vars['song']->value['Artist_Name'];?>
 • <?php echo $_smarty_tpl->tpl_vars['song']->value['Album_Name'];?>
</h2>
                    </a>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
                <div class="content">
                    <div class="content-img">
                        <img class="img-fluid" src="img/empty-playlist.jpg" alt="No Albums">
                    </div>
                    <h1>No Songs</h1>
                </div>
            <?php }?>
        </div>


    </div>
    <!-- /.container-fluid -->
<?php
}
}
/* {/block "content"} */
}
