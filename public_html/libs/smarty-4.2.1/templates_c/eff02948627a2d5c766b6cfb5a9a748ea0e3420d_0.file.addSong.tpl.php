<?php
/* Smarty version 4.2.1, created on 2022-11-15 11:22:08
  from '/Users/Arekusandoru/Programming/PhpStormProjects/musicPlayer/public_html/templates/addSong.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6373bcb0ee5c43_11041793',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eff02948627a2d5c766b6cfb5a9a748ea0e3420d' => 
    array (
      0 => '/Users/Arekusandoru/Programming/PhpStormProjects/musicPlayer/public_html/templates/addSong.tpl',
      1 => 1668529327,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6373bcb0ee5c43_11041793 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3019077456373bcb0e98a61_06959960', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2176125176373bcb0e9d2a4_72842067', "add");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13610809566373bcb0eadfe9_21712195', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template.tpl");
}
/* {block "title"} */
class Block_3019077456373bcb0e98a61_06959960 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_3019077456373bcb0e98a61_06959960',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Add Song<?php
}
}
/* {/block "title"} */
/* {block "add"} */
class Block_2176125176373bcb0e9d2a4_72842067 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'add' => 
  array (
    0 => 'Block_2176125176373bcb0e9d2a4_72842067',
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
class Block_13610809566373bcb0eadfe9_21712195 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13610809566373bcb0eadfe9_21712195',
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
        <div class="row">
            <form class="row" method="post" action="addSong.php" enctype="multipart/form-data">
                <a class="add-img-div" href="#" id="add-img-div" style="cursor: pointer;">
                    <img class="add-img" id="add-img" src="img/empty-playlist.jpg" alt="">
                </a>
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
                    <?php echo '<script'; ?>
>
                        <?php if ((isset($_smarty_tpl->tpl_vars['setArtist']->value))) {?>
                        if (<?php echo $_smarty_tpl->tpl_vars['setArtist']->value;?>
 != null) {
                            let element = document.getElementById("select-artist");
                            element.value = <?php echo $_smarty_tpl->tpl_vars['setArtist']->value;?>
;
                        }
                        <?php }?>
                    <?php echo '</script'; ?>
>
                    <br>
                    <label class="add-label" for="select-album">Album Name:</label>
                    <br>
                    <select required name="select-album" class="add-dropdown form-select" id="select-album"
                            disabled="true">
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
                                            $('#add-btn').prop('hidden', false);
                                            $('#add-btn').attr("href", "addAlbum.php?id=" + $(artist).val());

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
                                            $('#add-img').attr('src', data);

                                        }
                                    })
                                    $('#add-img-div').attr("href", "viewAlbum.php?id=" + $(album).val());
                                    $('#add-btn').prop('hidden', true);
                                });
                                <?php if ((isset($_smarty_tpl->tpl_vars['setAlbum']->value))) {?>
                                if (<?php echo $_smarty_tpl->tpl_vars['setAlbum']->value;?>
 != null) {
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
                                            $('#select-album').val(<?php echo $_smarty_tpl->tpl_vars['setAlbum']->value;?>
);
                                        }
                                    });
                                    $.ajax({
                                        url: "ajaxArtistList.php",
                                        type: "post",
                                        data: {
                                            "albumID": <?php echo $_smarty_tpl->tpl_vars['setAlbum']->value;?>

                                        },
                                        dataType: "html",
                                        success: function (data) {
                                            $('#add-img').attr('src', data);
                                        }
                                    })
                                    $('#add-img-div').attr("href", "viewAlbum.php?id=" + <?php echo $_smarty_tpl->tpl_vars['setAlbum']->value;?>
);
                                }
                                <?php }?>
                            }
                        );

                    <?php echo '</script'; ?>
>
                    <br>
                    <label class="add-label" for="song-name">Song Name:</label>
                    <br>
                    <input class="add-input" name="song-name" id="song-name" type="text">
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
