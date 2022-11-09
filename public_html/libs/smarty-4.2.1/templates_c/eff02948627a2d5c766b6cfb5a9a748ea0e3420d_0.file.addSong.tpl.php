<?php
/* Smarty version 4.2.1, created on 2022-11-08 23:16:22
  from '/Users/Arekusandoru/Programming/PhpStormProjects/musicPlayer/public_html/templates/addSong.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_636b299686d494_02317665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eff02948627a2d5c766b6cfb5a9a748ea0e3420d' => 
    array (
      0 => '/Users/Arekusandoru/Programming/PhpStormProjects/musicPlayer/public_html/templates/addSong.tpl',
      1 => 1667967380,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636b299686d494_02317665 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_495106144636b2996862138_10131294', "add");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1539030510636b299686b2c1_73723456', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template.tpl");
}
/* {block "add"} */
class Block_495106144636b2996862138_10131294 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'add' => 
  array (
    0 => 'Block_495106144636b2996862138_10131294',
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
                <a class="collapse-item" href="addAlbum.php">Album</a>
                <a class="collapse-item active" href="addSong.php">Song</a>
            </div>
        </div>
    </li>
<?php
}
}
/* {/block "add"} */
/* {block "content"} */
class Block_1539030510636b299686b2c1_73723456 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1539030510636b299686b2c1_73723456',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row ml-1">
            <h1 class="content-title">Add Song</h1>
        </div>
        <!-- Add song form content-->
        <form class="row" method="post" action="addSongToDB.php">
            <div class="add-img-div">
                <img class="add-img" src="img/pfp/blank.png" alt="">
                <input type="file" id="myFile" name="filename">
            </div>
            <div class="add-content-div">
                <label class="add-label" for="select-artist">Artist Name:</label>
                <br>
                <select required name="select-artist" class="add-dropdown" id="select-artist">
                    <option>A$AP Rocky</option>
                    <option>Andy Mineo</option>
                    <option>Arctic Monkeys</option>
                    <option>Baby Keem</option>
                    <option>The Backseat Lovers</option>
                    <option>Bad Bunny</option>
                </select>
                <br>
                <label class="add-label" for="select-album">Album Name:</label>
                <br>
                <select required name="select-album" class="add-dropdown" id="select-album">
                    <option>Testing</option>
                </select>
                <br>
                <label class="add-label" for="song-name">Song Name:</label>
                <br>
                <input class="add-input" id="song-name" type="text">
                <br>
                <input type="submit" value="Submit" class="add-submit">
            </div>
        </form>

    </div>
    <!-- /.container-fluid -->
<?php
}
}
/* {/block "content"} */
}
