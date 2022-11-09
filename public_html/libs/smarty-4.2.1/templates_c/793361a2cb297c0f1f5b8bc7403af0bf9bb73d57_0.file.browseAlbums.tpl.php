<?php
/* Smarty version 4.2.1, created on 2022-11-08 23:05:08
  from '/Users/Arekusandoru/Programming/PhpStormProjects/musicPlayer/public_html/templates/browseAlbums.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_636b26f4b5a7b4_40871356',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '793361a2cb297c0f1f5b8bc7403af0bf9bb73d57' => 
    array (
      0 => '/Users/Arekusandoru/Programming/PhpStormProjects/musicPlayer/public_html/templates/browseAlbums.tpl',
      1 => 1667965803,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636b26f4b5a7b4_40871356 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_274108181636b26f4b27ec9_00232965', "browse");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1180937850636b26f4b2c516_94007966', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template.tpl");
}
/* {block "browse"} */
class Block_274108181636b26f4b27ec9_00232965 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'browse' => 
  array (
    0 => 'Block_274108181636b26f4b27ec9_00232965',
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
                <a class="collapse-item" href="browseArtists.php">Artists</a>
                <a class="collapse-item active" href="browseAlbums.php">Albums</a>
            </div>
        </div>
    </li>
<?php
}
}
/* {/block "browse"} */
/* {block "content"} */
class Block_1180937850636b26f4b2c516_94007966 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1180937850636b26f4b2c516_94007966',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 content-title">Browse All Albums:</h1>

        <!--Page Content-->
        <div class="row pl-3 pr-3 justify-content-around">
            <!-- album content divs-->
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['albums']->value, 'album');
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

    </div>
    <!-- /.container-fluid -->
<?php
}
}
/* {/block "content"} */
}
