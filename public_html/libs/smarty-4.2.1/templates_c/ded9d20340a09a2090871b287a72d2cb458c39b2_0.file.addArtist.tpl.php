<?php
/* Smarty version 4.2.1, created on 2022-11-15 11:36:11
  from '/Users/Arekusandoru/Programming/PhpStormProjects/musicPlayer/public_html/templates/addArtist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6373bffb9ff6c2_68916128',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ded9d20340a09a2090871b287a72d2cb458c39b2' => 
    array (
      0 => '/Users/Arekusandoru/Programming/PhpStormProjects/musicPlayer/public_html/templates/addArtist.tpl',
      1 => 1668529627,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6373bffb9ff6c2_68916128 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2810219396373bffb9f2814_69343848', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17428712606373bffb9f8b72_93903557', "add");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18112648646373bffb9fc329_34601520', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template.tpl");
}
/* {block "title"} */
class Block_2810219396373bffb9f2814_69343848 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_2810219396373bffb9f2814_69343848',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Add Artist<?php
}
}
/* {/block "title"} */
/* {block "add"} */
class Block_17428712606373bffb9f8b72_93903557 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'add' => 
  array (
    0 => 'Block_17428712606373bffb9f8b72_93903557',
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
class Block_18112648646373bffb9fc329_34601520 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18112648646373bffb9fc329_34601520',
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
                    <img class="add-img" id="add-img" src="img/empty-playlist.jpg" alt="">
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
