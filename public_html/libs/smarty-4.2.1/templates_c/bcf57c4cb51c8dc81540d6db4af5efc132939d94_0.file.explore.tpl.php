<?php
/* Smarty version 4.2.1, created on 2022-11-17 15:59:16
  from '/Users/Arekusandoru/Programming/PhpStormProjects/musicPlayer/public_html/templates/explore.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6376a0a405ef23_10256334',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bcf57c4cb51c8dc81540d6db4af5efc132939d94' => 
    array (
      0 => '/Users/Arekusandoru/Programming/PhpStormProjects/musicPlayer/public_html/templates/explore.tpl',
      1 => 1668718746,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6376a0a405ef23_10256334 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8852995696376a0a4002017_93905870', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17259748306376a0a4005798_16299831', "explore");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15773286196376a0a4008818_17670762', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template.tpl");
}
/* {block "title"} */
class Block_8852995696376a0a4002017_93905870 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_8852995696376a0a4002017_93905870',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    Explore
<?php
}
}
/* {/block "title"} */
/* {block "explore"} */
class Block_17259748306376a0a4005798_16299831 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'explore' => 
  array (
    0 => 'Block_17259748306376a0a4005798_16299831',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <li class="nav-item active">
        <a class="nav-link" href="explore.php">
            <i class="fas fa-compass"></i>
            <span>Explore</span></a>
    </li>
<?php
}
}
/* {/block "explore"} */
/* {block "content"} */
class Block_15773286196376a0a4008818_17670762 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15773286196376a0a4008818_17670762',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Recently Artists Heading -->
        <h1 class="h3 mb-4 content-title">Recently Uploaded Artists:</h1>
        <!-- Recently Artists Content-->
        <div class="row pl-3 pr-3 justify-content-around">
            <!-- artist content divs-->
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recentArtists']->value, 'ra');
$_smarty_tpl->tpl_vars['ra']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ra']->value) {
$_smarty_tpl->tpl_vars['ra']->do_else = false;
?>
            <a class="content" href="viewArtist.php?id=<?php echo $_smarty_tpl->tpl_vars['ra']->value['Artist_ID'];?>
">
                <div class="content-img">
                    <img class="img-fluid" src="img/artist-imgs/<?php echo $_smarty_tpl->tpl_vars['ra']->value['Image_URL'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['ra']->value['Artist_Name'];?>
">
                </div>
                <h1><?php echo $_smarty_tpl->tpl_vars['ra']->value['Artist_Name'];?>
</h1>
            </a>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>

        <!--Content Splitter-->
        <div class="content-splitter ml-1"></div>

        <!-- Recently Albums Heading -->
        <h1 class="h3 mb-4 content-title">Recently Uploaded Albums:</h1>
        <!-- Recently Albums Content-->
        <div class="row pl-3 pr-3 justify-content-around">
            <!-- album content divs-->
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recentAlbums']->value, 'ras');
$_smarty_tpl->tpl_vars['ras']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ras']->value) {
$_smarty_tpl->tpl_vars['ras']->do_else = false;
?>
            <a class="content" href="viewAlbum.php?id=<?php echo $_smarty_tpl->tpl_vars['ras']->value['Album_ID'];?>
">
                <div class="content-img">
                    <img class="img-fluid" src="img/album-imgs/<?php echo $_smarty_tpl->tpl_vars['ras']->value['Image_URL'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['ras']->value['Album_Name'];?>
">
                </div>
                <h1><?php echo $_smarty_tpl->tpl_vars['ras']->value['Album_Name'];?>
</h1>
                <h2><?php echo $_smarty_tpl->tpl_vars['ras']->value['Artist_Name'];?>
 ??? <?php echo $_smarty_tpl->tpl_vars['ras']->value['Release_Year'];?>
</h2>
            </a>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>

        <!--Content Splitter-->
        <div class="content-splitter ml-1"></div>

        <!-- Alltime Artists Heading -->
        <h1 class="h3 mb-4 content-title">Top All-time Artists:</h1>
        <!--Artists Content-->
        <div class="row pl-3 pr-3 justify-content-around">
            <!-- artist content divs-->
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['topArtists']->value, 'artist');
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

        <!--Content Splitter-->
        <div class="content-splitter ml-1"></div>

        <!-- Albums Heading -->
        <h1 class="h3 mb-4 content-title">Top All-time Albums:</h1>
        <!--Albums Content-->
        <div class="row pl-3 pr-3 justify-content-around">
            <!-- album content divs-->
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['topAlbums']->value, 'album');
$_smarty_tpl->tpl_vars['album']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['album']->value) {
$_smarty_tpl->tpl_vars['album']->do_else = false;
?>
            <a class="content" href="viewAlbum.php?id=<?php echo $_smarty_tpl->tpl_vars['album']->value['Album_ID'];?>
">
                <div class="content-img">
                    <img class="img-fluid" src="img/album-imgs/<?php echo $_smarty_tpl->tpl_vars['album']->value['Image_URL'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['album']->value['Album_Name'];?>
">
                </div>
                <h1><?php echo $_smarty_tpl->tpl_vars['album']->value['Album_Name'];?>
</h1>
                <h2><?php echo $_smarty_tpl->tpl_vars['album']->value['Artist_Name'];?>
 ??? <?php echo $_smarty_tpl->tpl_vars['album']->value['Release_Year'];?>
</h2>
            </a>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>


    </div>
    <!-- /.container-fluid -->
<?php
}
}
/* {/block "content"} */
}
