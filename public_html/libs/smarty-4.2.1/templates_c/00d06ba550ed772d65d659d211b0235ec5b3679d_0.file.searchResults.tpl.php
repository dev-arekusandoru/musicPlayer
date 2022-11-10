<?php
/* Smarty version 4.2.1, created on 2022-11-09 23:09:33
  from '/Users/Arekusandoru/Programming/PhpStormProjects/musicPlayer/public_html/templates/searchResults.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_636c797dc8f0a7_01133452',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00d06ba550ed772d65d659d211b0235ec5b3679d' => 
    array (
      0 => '/Users/Arekusandoru/Programming/PhpStormProjects/musicPlayer/public_html/templates/searchResults.tpl',
      1 => 1668053373,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636c797dc8f0a7_01133452 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_703878946636c797dc33f69_31693386', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1502142357636c797dc3a2a3_65498432', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template.tpl");
}
/* {block "title"} */
class Block_703878946636c797dc33f69_31693386 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_703878946636c797dc33f69_31693386',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    Search Results
<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_1502142357636c797dc3a2a3_65498432 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1502142357636c797dc3a2a3_65498432',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <h1 class="h3 mb-4 content-title">Search results for: <?php echo $_smarty_tpl->tpl_vars['searchterm']->value;?>
</h1>
        <!-- Recently Artists Heading -->
        <h1 class="h3 mb-4 content-title">Artists:</h1>
        <!-- Recently Artists Content-->
        <div class="row pl-3 pr-3 justify-content-around">
            <!-- artist content divs-->
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['searchArtists']->value, 'artist');
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

        <!-- Recently Albums Heading -->
        <h1 class="h3 mb-4 content-title">Albums:</h1>
        <!-- Recently Albums Content-->
        <div class="row pl-3 pr-3 justify-content-around">
            <!-- album content divs-->
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['searchAlbums']->value, 'album');
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
 • <?php echo $_smarty_tpl->tpl_vars['album']->value['Release_Year'];?>
</h2>
                </a>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>

        <!--Content Splitter-->
        <div class="content-splitter ml-1"></div>

        <!-- Recently Albums Heading -->
        <h1 class="h3 mb-4 content-title">Songs:</h1>
        <!-- Recently Albums Content-->
        <div class="row pl-3 pr-3 justify-content-around">
            <!-- album content divs-->
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['searchSongs']->value, 'song');
$_smarty_tpl->tpl_vars['song']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['song']->value) {
$_smarty_tpl->tpl_vars['song']->do_else = false;
?>
                <a class="content" href="viewAlbum.php?id=<?php echo $_smarty_tpl->tpl_vars['song']->value['Album_ID'];?>
">
                    <div class="content-img">
                        <img class="img-fluid" src="img/album-imgs/<?php echo $_smarty_tpl->tpl_vars['song']->value['Image_URL'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['song']->value['Album_Name'];?>
">
                    </div>
                    <h1><?php echo $_smarty_tpl->tpl_vars['song']->value['Title'];?>
</h1>
                    <h2><?php echo $_smarty_tpl->tpl_vars['song']->value['Artist_Name'];?>
 • <?php echo $_smarty_tpl->tpl_vars['album']->value['Album_Name'];?>
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
