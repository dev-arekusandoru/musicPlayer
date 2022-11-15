<?php
/* Smarty version 4.2.1, created on 2022-11-14 22:58:41
  from '/Users/Arekusandoru/Programming/PhpStormProjects/musicPlayer/public_html/templates/addArtist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63730e712bc195_21942747',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ded9d20340a09a2090871b287a72d2cb458c39b2' => 
    array (
      0 => '/Users/Arekusandoru/Programming/PhpStormProjects/musicPlayer/public_html/templates/addArtist.tpl',
      1 => 1668477161,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63730e712bc195_21942747 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_66341797263730e712b1555_22648989', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_109957905863730e712b65d4_04892589', "add");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_99779201863730e712b9714_00152881', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template.tpl");
}
/* {block "title"} */
class Block_66341797263730e712b1555_22648989 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_66341797263730e712b1555_22648989',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Add Artist<?php
}
}
/* {/block "title"} */
/* {block "add"} */
class Block_109957905863730e712b65d4_04892589 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'add' => 
  array (
    0 => 'Block_109957905863730e712b65d4_04892589',
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
class Block_99779201863730e712b9714_00152881 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_99779201863730e712b9714_00152881',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row ml-1">
            <h1 class="content-title">Add Artist</h1>
        </div>
        <!-- Add Artist forms and stuff-->
        <div class="row">
            <form class="row" action="addArtist.php" method="post" enctype="multipart/form-data">
                <div class="add-img-div">
                    <img class="add-img" id="add-img" src="img/pfp/blank.png" alt="">
                    <input type="file" id="addArtistFile" name="img" accept=".jpg,.jpeg,.png" required onchange=file_changed()>
                    <?php echo '<script'; ?>
>
                        function file_changed(){
                            var selectedFile = document.getElementById('addArtistFile').files[0];
                            var img = document.getElementById('add-img')

                            var reader = new FileReader();
                            reader.onload = function(){
                                img.src = this.result
                            }
                            reader.readAsDataURL(selectedFile);
                        }
                    <?php echo '</script'; ?>
>
                </div>
                <div class="add-content-div">
                    <label class="add-label" for="artist-name">Artist Name:</label>
                    <br>
                    <input class="add-input" name="artist" id="artist-name" type="text" required>
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
