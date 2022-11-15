<?php
/* Smarty version 4.2.1, created on 2022-11-14 21:10:26
  from '/Users/Arekusandoru/Programming/PhpStormProjects/musicPlayer/public_html/templates/addSong.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6372f512b01433_10130060',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eff02948627a2d5c766b6cfb5a9a748ea0e3420d' => 
    array (
      0 => '/Users/Arekusandoru/Programming/PhpStormProjects/musicPlayer/public_html/templates/addSong.tpl',
      1 => 1668477931,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6372f512b01433_10130060 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14746631556372f512ad33c2_82633206', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14084096396372f512ad7652_59670986', "add");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6376207296372f512adaad2_14583352', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template.tpl");
}
/* {block "title"} */
class Block_14746631556372f512ad33c2_82633206 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_14746631556372f512ad33c2_82633206',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Add Song<?php
}
}
/* {/block "title"} */
/* {block "add"} */
class Block_14084096396372f512ad7652_59670986 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'add' => 
  array (
    0 => 'Block_14084096396372f512ad7652_59670986',
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
class Block_6376207296372f512adaad2_14583352 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6376207296372f512adaad2_14583352',
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
                <img class="add-img" id="add-img" src="img/empty-playlist.jpg" alt="">
            </div>
            <div class="add-content-div">
                <label class="add-label" for="select-artist">Artist Name:</label>
                <br>
                <select required name="select-artist" class="add-dropdown" id="select-artist">
                    <option disabled>Select an Artist</option>
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
                <label class="add-label" for="select-album">Album Name:</label>
                <br>
                <select required name="select-album" class="add-dropdown form-select" id="select-album" disabled="true">
                </select>

                <a href="addAlbum.php" class="add-music-button" id="add-btn" hidden="true">Add Album</a>
                <?php echo '<script'; ?>
>
                    $(document).ready(
                        function () {
                            $('#select-artist').on('change', function () {
                                let artist = $("#select-artist option:selected")[0];
                                $.ajax({
                                    url: "ajaxArtistList.php",
                                    type: "post",
                                    data: {
                                        "artistID": $(artist).val()
                                    },
                                    dataType: "html",
                                    success: function (data) {
                                        $('#select-album').html(data);
                                        $('#select-album').prop('disabled', false);

                                        $('#add-img').attr('src', "img/empty-playlist.jpg");

                                        if(data === "<option disabled>No Albums</option>"){
                                            $('#add-btn').prop('hidden', false)
                                            $('#add-btn').attr("href", "addAlbum.php?id=" + $(artist).val());
                                        }

                                    }
                                })
                            });
                            $('#select-album').on('change', function () {
                                let album = $("#select-album option:selected")[0];
                                $.ajax({
                                    url: "ajaxArtistList.php",
                                    type: "post",
                                    data: {
                                        "albumID": $(album).val()
                                    },
                                    dataType: "html",
                                    success: function (data) {
                                        console.log(data);
                                        var newSrc = data;
                                        $('#add-img').attr('src', newSrc);
                                    }
                                })
                            });
                        }
                    );

                <?php echo '</script'; ?>
>
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
