<?php
/* Smarty version 4.2.1, created on 2022-11-14 20:59:56
  from '/Users/Arekusandoru/Programming/PhpStormProjects/musicPlayer/public_html/templates/addAlbum.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6372f29c4ce9f1_29360467',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac058fcb0714b6fd144836c48806c66e7ca6ff14' => 
    array (
      0 => '/Users/Arekusandoru/Programming/PhpStormProjects/musicPlayer/public_html/templates/addAlbum.tpl',
      1 => 1668477151,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6372f29c4ce9f1_29360467 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20802396526372f29c4abcc6_72273308', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13582357316372f29c4af8e4_93996363', "add");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8574176596372f29c4b29d0_15355847', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template.tpl");
}
/* {block "title"} */
class Block_20802396526372f29c4abcc6_72273308 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_20802396526372f29c4abcc6_72273308',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Add Album<?php
}
}
/* {/block "title"} */
/* {block "add"} */
class Block_13582357316372f29c4af8e4_93996363 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'add' => 
  array (
    0 => 'Block_13582357316372f29c4af8e4_93996363',
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
                <a class="collapse-item" href="addArtist.php">Artist</a>
                <a class="collapse-item active" href="addAlbum.php">Album</a>
                <a class="collapse-item" href="addSong.php">Song</a>
            </div>
        </div>
    </li>
<?php
}
}
/* {/block "add"} */
/* {block "content"} */
class Block_8574176596372f29c4b29d0_15355847 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8574176596372f29c4b29d0_15355847',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row ml-1">
            <h1 class="content-title">Add Album</h1>
        </div>
        <!-- Add album content-->
        <div class="row">
            <form class="row" method="post" action="addAlbum.php" enctype="multipart/form-data">
                <div class="add-img-div">
                    <img class="add-img" id="add-img" src="img/pfp/blank.png" alt="album-cover" >
                    <input type="file" id="addAlbumFile" name="img" onchange=file_changed() accept=".png,.jpg,.jpeg" required>
                    <?php echo '<script'; ?>
>
                        function file_changed(){
                            var selectedFile = document.getElementById('addAlbumFile').files[0];
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
                    <label class="add-label" for="select-artist">Artist Name:</label>
                    <br>
                    <select required name="select-artist" class="add-dropdown" id="select-artist">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['artists']->value, 'artist');
$_smarty_tpl->tpl_vars['artist']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['artist']->value) {
$_smarty_tpl->tpl_vars['artist']->do_else = false;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['artist']->value['Artist_ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['artist']->value['Artist_Name'];?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                    <br>
                    <label class="add-label" for="album-name">Album Name:</label>
                    <br>
                    <input class="add-input" name="album" id="album-name" type="text" required>
                    <br>
                    <label class="add-label" for="release-year">Release Year:</label>
                    <br>
                    <input class="add-input" name="release-year" id="release-year" type="number" max="9999" min="1"
                           onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>
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
