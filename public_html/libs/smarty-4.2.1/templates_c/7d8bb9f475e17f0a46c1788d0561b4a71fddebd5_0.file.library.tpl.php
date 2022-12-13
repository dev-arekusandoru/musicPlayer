<?php
/* Smarty version 4.2.1, created on 2022-11-22 11:05:02
  from '/Users/Arekusandoru/Programming/PhpStormProjects/musicPlayer/public_html/templates/library.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_637cf32ee55997_83010945',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d8bb9f475e17f0a46c1788d0561b4a71fddebd5' => 
    array (
      0 => '/Users/Arekusandoru/Programming/PhpStormProjects/musicPlayer/public_html/templates/library.tpl',
      1 => 1669133094,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_637cf32ee55997_83010945 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136113992637cf32edd8100_81948362', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1318139362637cf32eddc253_23303200', "library");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1875920720637cf32ede00c9_27263800', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template.tpl");
}
/* {block "title"} */
class Block_136113992637cf32edd8100_81948362 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_136113992637cf32edd8100_81948362',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
My Library<?php
}
}
/* {/block "title"} */
/* {block "library"} */
class Block_1318139362637cf32eddc253_23303200 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'library' => 
  array (
    0 => 'Block_1318139362637cf32eddc253_23303200',
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
class Block_1875920720637cf32ede00c9_27263800 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1875920720637cf32ede00c9_27263800',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!-- Begin Page Content -->
    <div class="container-fluid">


        <!-- Playlists Heading -->
        <h1 class="h3 mb-4 content-title">My Playlists:</h1>
        <!--Playlist Content-->
        <div class="row pl-3 pr-3 justify-content-around">
            <!-- playlist content divs-->
            <?php if (!empty($_smarty_tpl->tpl_vars['userPlaylists']->value)) {?>
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
"
                                 alt="<?php echo $_smarty_tpl->tpl_vars['p']->value['Playlist_Name'];?>
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
            <?php } else { ?>
                <h4 style="margin: 40px 0 70px 0;">No Playlists</h4>
            <?php }?>
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
                <h4 style="margin: 40px 0 70px 0;">No Artists</h4>
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
                <h4 style="margin: 40px 0 70px 0;">No Albums</h4>
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
                <h4 style="margin: 40px 0 70px 0;">No Songs</h4>
            <?php }?>
        </div>


    </div>
    <!-- /.container-fluid -->
<?php
}
}
/* {/block "content"} */
}
