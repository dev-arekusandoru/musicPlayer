<?php
/* Smarty version 4.2.1, created on 2022-11-08 23:16:33
  from '/Users/Arekusandoru/Programming/PhpStormProjects/musicPlayer/public_html/templates/browseArtists.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_636b29a1b4dfa6_04865221',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44310d3d33387b0a08a2a0b9fad935195db9fc0a' => 
    array (
      0 => '/Users/Arekusandoru/Programming/PhpStormProjects/musicPlayer/public_html/templates/browseArtists.tpl',
      1 => 1667967380,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636b29a1b4dfa6_04865221 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1811355227636b29a1b2a1d4_02371133', "browse");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1681789548636b29a1b2da45_48493282', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template.tpl");
}
/* {block "browse"} */
class Block_1811355227636b29a1b2a1d4_02371133 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'browse' => 
  array (
    0 => 'Block_1811355227636b29a1b2a1d4_02371133',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

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
<?php
}
}
/* {/block "browse"} */
/* {block "content"} */
class Block_1681789548636b29a1b2da45_48493282 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1681789548636b29a1b2da45_48493282',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

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
<?php
}
}
/* {/block "content"} */
}
