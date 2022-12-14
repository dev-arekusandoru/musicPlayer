<?php
/* Smarty version 4.2.1, created on 2022-12-13 22:16:16
  from '/Users/Arekusandoru/Programming/PhpStormProjects/musicPlayer/public_html/templates/edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63994000148606_96086970',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a2d4171d0dc20a305bef6d01e5ca9c3f54af434' => 
    array (
      0 => '/Users/Arekusandoru/Programming/PhpStormProjects/musicPlayer/public_html/templates/edit.tpl',
      1 => 1670987755,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63994000148606_96086970 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_405904364639940001313b4_92367702', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_120388978463994000136250_36990960', "add");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_33999152063994000139496_18446469', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template.tpl");
}
/* {block "title"} */
class Block_405904364639940001313b4_92367702 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_405904364639940001313b4_92367702',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Add Artist<?php
}
}
/* {/block "title"} */
/* {block "add"} */
class Block_120388978463994000136250_36990960 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'add' => 
  array (
    0 => 'Block_120388978463994000136250_36990960',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!-- Nav Item - Add Music Menu -->
    <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
           aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-music"></i>
            <span>Add Music</span>
        </a>
        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Add Music:</h6>
                <a class="collapse-item active" href="addArtist.php">Artist</a>
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
class Block_33999152063994000139496_18446469 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_33999152063994000139496_18446469',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row ml-1">
            <h1 class="content-title">Edit Song</h1>
        </div>
        <!-- Add Artist forms and stuff-->
        <div class="row">
            <form class="row" action="editSong.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="post" enctype="multipart/form-data">
                <div class="add-img-div">
                    <img class="add-img" id="add-img" src="img/album-imgs/<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" alt="">
                </div>
                <div class="add-content-div">
                    <label class="add-label" for="name">Song Name:</label>
                    <br>
                    <input type="hidden" name="album-id" value=<?php echo $_smarty_tpl->tpl_vars['album']->value;?>
>
                    <input class="add-input" name="name" id="name" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['oldName']->value;?>
">
                    <br>
                    <input type="submit" value="Submit" class="add-submit">
                </div>
            </form>
        </div>


    </div>
    <!-- /.container-fluid -->
<?php
}
}
/* {/block "content"} */
}
