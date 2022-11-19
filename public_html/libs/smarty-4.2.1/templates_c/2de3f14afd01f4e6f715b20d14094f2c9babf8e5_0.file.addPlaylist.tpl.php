<?php
/* Smarty version 4.2.1, created on 2022-11-17 22:39:22
  from '/Users/Arekusandoru/Programming/PhpStormProjects/musicPlayer/public_html/templates/addPlaylist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6376fe6a7b78a5_47331825',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2de3f14afd01f4e6f715b20d14094f2c9babf8e5' => 
    array (
      0 => '/Users/Arekusandoru/Programming/PhpStormProjects/musicPlayer/public_html/templates/addPlaylist.tpl',
      1 => 1668742748,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6376fe6a7b78a5_47331825 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_753964076376fe6a7b0ad4_01766779', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15329828556376fe6a7b4c64_08694761', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template.tpl");
}
/* {block "title"} */
class Block_753964076376fe6a7b0ad4_01766779 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_753964076376fe6a7b0ad4_01766779',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Add Playlist<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_15329828556376fe6a7b4c64_08694761 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15329828556376fe6a7b4c64_08694761',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row ml-1">
            <h1 class="content-title">Create Playlist</h1>
        </div>
        <!-- Add Playlist form content -->
        <div class="row">
            <form class="row" action="addPlaylist.php" method="post" enctype="multipart/form-data">
                <div class="add-img-div">
                    <img class="add-img" id="add-img" src="img/empty-playlist.jpg" alt="">
                    <input type="file" id="addPlaylistFile" name="img" accept=".jpg,.jpeg,.png" onchange=file_changed()>
                    <?php echo '<script'; ?>
>
                        function file_changed(){
                            var selectedFile = document.getElementById('addPlaylistFile').files[0];
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
                    <label class="add-label" for="playlist-name">Playlist Name:</label>
                    <br>
                    <input class="add-input" name="playlist" id="playlist-name" type="text" required>
                    <br>
                    <label class="add-label" for="playlist-description">Description:</label>
                    <br>
                    <textarea class="add-input" style="height: 100px; resize: none;" name="description" id="playlist-description"></textarea>
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
